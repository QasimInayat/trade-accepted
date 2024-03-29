<?php

namespace App\Http\Controllers;

use App\Models\Favourite;
use App\Models\Gallery;
use App\Models\Make;
use App\Models\Message;
use App\Models\Notification;
use App\Models\Review;
use App\Models\Thread;
use App\Models\Transaction;
use App\Models\User;
use App\Models\Vehicle;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function index(){
        $data ['title'] = 'Index';
        $data ['heading'] = 'Home';
        $data ['vehicles'] = Vehicle::where('status' , 1)->orderBy('created_at' , 'DESC')->get();
        return view('index',$data);
    }
    public function detail($slug){
        $data ['title'] = 'Detail';
        $data ['heading'] = 'Detail';
        $data ['vehicle'] = Vehicle::where('slug',$slug)->firstorfail();
        $data['galleries'] = Gallery::where('vehicle_id' , $data['vehicle']->id)->get();
        $data['shareButton']=\Share::page(
            route('detail' , $data['vehicle']->slug),
            'here is the text',
            )
            ->whatsapp()
            ->facebook()
            ->twitter()
            ->linkedin()
            ->reddit()
            ->telegram()
            ->pinterest();
        return view('pages.detail',$data);
    }
    public function threadStore(Request $request)
{
    $request->validate([
        'vehicle_id' => 'required',
        'to_id' => 'required',
    ]);

    $thread = Thread::where(['to_id' => $request->to_id , 'from_id' => auth()->user()->id])->first();

    if (!empty($thread)) {
        $is_offer = 0;
    } else {
        $store = Thread::create([
            'vehicle_id' => $request->vehicle_id,
            'to_id' => $request->to_id,
            'from_id' => auth()->user()->id,
        ]);

        if (!empty($store->id)) {
            $is_offer = 1;
        } else {
            return redirect()->back();
        }
    }

    if ($request->input('is_vehicle_id')) {
        $this->message($request, $thread->id ?? $store->id, $request->to_id, auth()->user()->id, 'I want to exchnage this vehicle.', $is_offer, $request->input('is_vehicle_id'));
    } else {
        $this->message($request, $thread->id ?? $store->id, $request->to_id, auth()->user()->id, 'Hello!', $is_offer);
    }

    return redirect()->route('messenger', ['thread' => $thread->id ?? $store->id]);
}
public function message(Request $request, $thread_id, $to_id, $from_id, $msg = 'Hello!', $is_offer, $is_vehicle_id = null){
    $message = Message::create([
        'thread_id' => $thread_id,
        'to_id' => $to_id,
        'from_id' => $from_id,
        'message' => $msg,
        'is_offer' => $is_offer,
    ]);

    if (!$message->save()) {
        return false;
    }

    if ([$message->is_offer == 1 => $message->is_offer == 2]) {
        $message->update([
            'is_vehicle_id' => $is_vehicle_id,
        ]);
    }

    return true;
}
    public function search(Request $request){
        $data ['title'] = 'Search';
        $data ['heading'] = 'Search';
        $data = new Vehicle ();

        if(isset($request->title)){
            $data = $data->where('title','LIKE','%'.$request->title.'%');
        }
        if(isset($request->model_id)){
            $data = $data->where('model_id','LIKE','%'.$request->model_id.'%');
        }
        if(isset($request->make_id)){
            $data = $data->where('make_id','LIKE','%'.$request->make_id.'%');
        }
        if(isset($request->to) && isset($request->from)){
            $data = $data->whereBetween('year',[$request->from,$request->to]);
        }
        if (isset($request->min) && isset($request->max)) {
            $data = $data->whereBetween('price', [intVal($request->min), intVal($request->max)]);
        }
        if(isset($request->trim)){
            $data = $data->where('trim','LIKE','%'.$request->trim.'%');
        }
        if(isset($request->transmission)){
            $data = $data->where('transmission','LIKE','%'.$request->transmission.'%');
        }
        if(isset($request->fuel)){
            $data = $data->where('fuel','LIKE','%'.$request->fuel.'%');
        }
        if(isset($request->interior_color)){
            $data = $data->where('interior_color','LIKE','%'.$request->interior_color.'%');
        }
        if(isset($request->exterior_color)){
            $data = $data->where('exterior_color','LIKE','%'.$request->exterior_color.'%');
        }
        if(isset($request->country_id)){
            $data = $data->where('country_id','LIKE','%'.$request->country_id.'%');
        }
        if(isset($request->mileage)){
            $data = $data->where('mileage','LIKE','%'.$request->mileage.'%');
        }
        if(isset($request->city_id)){
            $data = $data->where('city_id','LIKE','%'.$request->city_id.'%');
        }

        $data = $data->where('status', 1)->get();
        $makes = Make::get();
        return view('pages.search',compact('data','makes'));
    }
    public function messenger(){
        $data ['title'] = 'Messenger';
        $data ['heading'] = 'Messenger';
        $data['threads'] = Thread::where('from_id' , auth()->user()->id)->orWhere('to_id', auth()->user()->id)->get();
        $data['threadd'] = Thread::where('from_id' , auth()->user()->id)->first();
        return view('pages.messenger',$data);
    }
    public function clientProfile(){
        $data ['title'] = 'Client Profile';
        $data ['heading'] = 'Client Profile';
        return view('pages.client-profile',$data);
    }
    public function notification(){
        $data ['title'] = 'Notification';
        $data ['heading'] = 'Notification';
        $data['notifications'] = Notification::where('user_id' , auth()->user()->id)->orderBy('created_at' , 'DESC')->get();
        return view('pages.notification',$data);
    }
    public function notificationcount(){
        $notificationCount = Notification::where(['user_id' => auth()->user()->id , 'is_seen' => '0'])->count();
        echo json_encode($notificationCount);
    }
    public function updateNotification(Request $request , $id){
        $notification = Notification::find($id);
        if($notification){
            $notification->is_seen = '1';
            $notification->update();
            return response()->json(['status' => 200 , 'message' => 'Notification seen']);
        }else{
            return response()->json(['status' => 404 , 'message' => 'Notification Not Found']);
        }
    }
    public function vehicleList(){
        $vehicles = Vehicle::where('status' , 1)->get();
        $data = [];
        foreach($vehicles as $item){
            $data[] = $item['title'];
        }
        return $data;
    }
    public function messagecount(){
        $messageCount = Message::where(['to_id' => auth()->user()->id , 'status' => '0'])->count();
        echo json_encode($messageCount);
    }
    public function updatemessage(Request $request , $id){
        $message = Message::find($id);
        if($message){
            $message->status = '1';
            $message->update();
            return response()->json(['status' => 200 , 'message' => 'Message seen']);
        }else{
            return response()->json(['status' => 404 , 'message' => 'Message Not Found']);
        }
    }
    public function booking(){
        $data ['title'] = 'Booking';
        $data ['heading'] = 'My Booking';
        $data['transactions'] = Transaction::where('user_id' , auth()->user()->id)->get();
        return view('pages.booking.index',$data);
    }
    public function bdetail($id){
        $data ['title'] = 'Booking Detail';
        $data['transaction'] = Transaction::where('id' , $id)->firstorfail();
        return view('pages.booking.detail',$data);
    }
    public function deposite(){
        $data ['title'] = 'Deposit';
        $data ['heading'] = 'My Deposit';
        $data['vehicle'] = Vehicle::where('user_id' , auth()->user()->id)->first();
        $data['transactions'] = Transaction::where('user_id' , '6')->get();
        return view('pages.deposite.index',$data);
    }
    public function ddetail($id){
        $data ['title'] = 'Deposit Detail';
        return view('pages.deposite.detail',$data);
    }
    public function thankYou(){
        $data['title'] = 'Thank You';
        $data['Heading'] = 'Thank You';
        return view('pages.thank',$data);
    }
    public function reviewStore(Request $request){
        $booking = Transaction::where('user_id' , auth()->user()->id)->first();
        $request->validate([
            'review' => 'required',
            'message' => 'required|max:255',
        ]);
        $store = Review::create([
            'user_id' => auth()->user()->id,
            'booking_id' => $booking->vehicle->user_id,
            'review' => $request->review,
            'message' => $request->message,
        ]);
        if(!empty($store->id)){
            return redirect()->back()->with('success' , 'Review created');
        }else{
            return redirect()->back()->with('error' , 'Something went wrong');
        }
    }
    public function userVehicle($full_name){
        $data['user'] = User::where('full_name' , $full_name)->firstorfail();
        $data['vehicles'] = Vehicle::where('user_id' , $data['user']->id)->get();
        $data['title'] =  'Trades of'.' '.$data['user']->first_name.' '.$data['user']->last_name;
        $data['heading'] =  'Trades of'.' '.$data['user']->first_name.' '.$data['user']->last_name;
        return view('pages.user-vehicle' ,$data);
    }
}
