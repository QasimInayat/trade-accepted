<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Vehicle;
use Session;
use App\Models\Thread;
use App\Models\Transaction;
use App\Models\User;
use Cartalyst\Stripe\Stripe;
use Cartalyst\Stripe\Exception\CardErrorException;
use Exception;


class PaymentController extends Controller
{
    public function index(){
        if(!empty(Session::get('depositPercentage'))){
            $data['title'] = 'Add Deposit';
            $data['heading'] = 'Add Deposit';
            $thread = Thread::where('id',Session::get('thread_id'))->first();
            $data['vehicle'] = Vehicle::where('id' ,$thread->vehicle_id)->firstorfail();
            return view('pages.payment' , $data);
        }
        return redirect('/')->with('error','Please, click the deposit');
    }
    
    
    public function paymentDetails(Request $request)
    {
        $vehicle = vehicleById(Session::get('thread_id'));
        $price = Session::get('depositPercentage');
        $expArr = explode('/', $request->expiry);
        $cardExpiryMonth = isset($expArr[0]) ? $expArr[0] : 0;
        $cardExpiryYear = isset($expArr[1]) ? $expArr[1] : 0;
        $stripe = Stripe::make(env('STRIPE_SECRET'));
        $cardNumber = str_replace("-", "", $request->card_number);
        $first4 = substr($cardNumber, 0, 4);
        $last6 = substr($cardNumber, -6);
        $credit_card = [
            'number' => $cardNumber,
            'name' => $request->card_name,
            'exp_month' => $cardExpiryMonth,
            'exp_year' => $cardExpiryYear,
            'cvc' => $request->cvc,
            'address_country' => $request->country_id,
            'address_state' => null,
            'address_city' => $request->city,
            'address_zip' => $request->zip_code,
            'address_line1' => $request->address,
        ];

        try {
            $token = $stripe->tokens()->create([
                'card' => $credit_card,
            ]);
            $customer = $stripe->customers()->create(
                array(
                    "description" => "Trade Accepted",
                    "source" => $token['id'],
                )
            );
            $charge_data = [
                'amount' => $price,
                'currency' => 'USD',
                'description' => "Trade Accepted",
                'capture' => true,
                'statement_descriptor' => 'Trade Accepted',
                'customer' => $customer['id'],
                'metadata' => [
                    'receipt_email' => auth()->user()->email,
                    'customer_name' => $request->name,
                    'package' => '-',
                ],
            ];
            $charge_object = $stripe->charges()->create($charge_data);
            $obj = json_encode($charge_object);
        } catch (CardErrorException $e) {
            return ['success' => false,  'msg' => $e->getMessage()];
        }

        try {
           
            $transactionDetail = [
                'token' => $charge_object['id'],
                'customer_id' => $charge_object['customer'],
                'amount' => $charge_object['amount'] / 100,
                'currency' => $charge_object['currency'],
                'status' => $charge_object['status'],
                'first_4' => $first4,
                'last_6' => $last6,
                'object' => $obj,
                'name' => $request->name,
                'email' => auth()->user()->email,
                'country' => $request->country,
                'city' => $request->city,
                'zip' => $request->zip_code,
                'address' => $request->address,
                'user_id' => auth()->user()->id,
                'package' => '-',
                'merchant_id' => 1,
                'expiry_at' => date('Y-m-d'),
                'package_id' => $vehicle->id,
            ];
            $store = Transaction::create($transactionDetail);
            if (!empty($store->id)) {
                $user = User::where('id', auth()->user()->id)->first();
                if (!empty($user)) {
                }
            }
             Session::forget('depositPercentage');
             Session::forget('thread_id');
             
            return ['success' => true,  'msg' => 'Deposit Added'];
        } catch (Exception $e) {
            return ['success' => false,  'msg' => $e->getMessage()];
        }
    }
}
