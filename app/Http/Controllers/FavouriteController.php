<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Favourite;
use App\Models\Vehicle;
use Auth;

class FavouriteController extends Controller
{
    public function index(){
        $data['title'] = "Favourite";
        $data['heading'] = "Favourite";
        $data ['favourites'] = Favourite::where('user_id' , auth()->user()->id)->orderBy('created_at' , 'DESC')->get();
        return view('pages.favourite' ,$data);
    }
    public function store(Request $request){
        if($request->ajax()) {

            $data = $request->all();
            $countfavourite = Favourite::countfavourite($data['vehicle_id']);


            $favourite = new Favourite;
           if($countfavourite == 0){
                $favourite->vehicle_id = $data['vehicle_id'];
                $favourite->user_id = $data['user_id'];
                $favourite->save();
                return response()->json(['action' => 'add' , 'message' => 'Vehicle added to favourite']);
            }
            else{
                favourite::where(['user_id' => auth()->user()->id , 'vehicle_id' => $data['vehicle_id']])->delete();
                return response()->json(['action' => 'remove' , 'message' => 'Vehicle remove form favourite']);
            }
        }
    }
}
