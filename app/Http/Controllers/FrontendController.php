<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Vehicle;
use App\Models\Gallery;
use App\Models\User;
use App\Models\Notification;
use App\Models\Thread;
use App\Models\Message;

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
    public function threadStore(Request $request){
        $request->validate([
            'vehicle_id' => 'required',
            'to_id' => 'required',
        ]);
        $thread = Thread::where(['to_id' => $request->to_id , 'from_id' => auth()->user()->id])->first();
        if(!empty($thread)){
            $this->message($thread->id,$request->to_id,auth()->user()->id,'Hi');
            return redirect()->route('messenger');
        }
        else{
            $store = Thread::create([
                'vehicle_id' => $request->vehicle_id,
                'to_id' => $request->to_id,
                'from_id' => auth()->user()->id,
            ]);
            if(!empty($store->id)){
                $this->message($store->id,$request->to_id,auth()->user()->id,'Hi');
                return redirect()->route('messenger');
            }else{
                return redirect()->back();
            }
        }
    }
    public function message($thread_id,$to_id,$from_id,$msg){
        $message = Message::create([
            'thread_id' => $thread_id,
            'to_id' => $to_id,
            'from_id' => $from_id,
            'message' => $msg,
        ]);
        if(!empty($message)){
            return true;
        }
        return false;
    }
    public function search(Request $request){
        $data ['title'] = 'Search';
        $data ['heading'] = 'Search';
        if($request->title){
            $data['searchVehicles'] = Vehicle::where('title','LIKE','%'.$request->title.'%')->get();
            return view('pages.search',$data);
        }
        else{
            return redirect()->back()->with('error','Empty Search');
        }
    }
    public function messenger(){
        $data ['title'] = 'Messenger';
        $data ['heading'] = 'Messenger';
        $data['threads'] = Thread::where('from_id' , auth()->user()->id)->get();
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

}
