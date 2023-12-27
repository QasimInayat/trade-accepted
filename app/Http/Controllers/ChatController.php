<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Thread;
use App\Models\Message;
use App\Models\Vehicle;
use Session;

class ChatController extends Controller
{
    public function index($id){
        $data ['title'] = 'Chat';
        $data ['heading'] = 'Chat';
        $data['threads'] = Thread::where('from_id' , auth()->user()->id)->get();
        $data['chat'] = Thread::where('id' , $id)->firstorfail();
        $data['replies'] = Message::where('thread_id' , $id)->get();
        $data['senders'] = Message::where(['from_id' => auth()->user()->id])->get();
        $data['thread'] = Thread::where('id' , $id)->first();
        $view = view('pages.chat',$data);
        return response(['success' => true, 'data' => $view->render()]);
    }
    public function chatStore(Request $request){
        $store = Message::create([
            'from_id' => auth()->user()->id,
            'to_id' => $request->to_id,
            'thread_id' => $request->thread_id,
            'message' => $request->message,
        ]);
        if(!empty($store->id)){
            return response()->json(['success' => true]);
        }else{
            return response()->json(['error' => true]);
        }
    }
    public function vehicleChat($id){
        $data ['title'] = 'Vehcile Chat';
        $data ['heading'] = 'Vehcile Chat';
        $data['threads'] = Thread::where('from_id' , auth()->user()->id)->get();
        $data['chat'] = Thread::where('id' , $id)->firstorfail();
        $data['thread'] = Thread::where('id' , $id)->first();
        $view = view('pages.vehicle-chat',$data);
        return response(['success' => true, 'data' => $view->render()]);
    }
    public function vehicle(Request $request){
        $thread_id = $request->thread_id;
        $thread = Thread::where('id',$thread_id)->first();
        if(!empty($thread)){
            $vehicleDetail = view('pages.messenger.vehicle-detail',compact('thread'));
            return response()->json(['success' => true, 'vehicleDetail' => $vehicleDetail->render()]);
        }
        return response()->json(['success' => false]);
    }
    
    public function threadMessages(Request $request){
        $thread_id = $request->thread_id;
        $messages = Message::where('thread_id',$thread_id)->get();
        if(!empty($messages)){
            $messages = view('pages.messenger.messages',compact('messages'));
            return response()->json(['success' => true, 'messages' => $messages->render()]);
        }
        return response()->json(['success' => false]);
    }
    
    public function sendCustomMessage(Request $request){
        $thread = Thread::where('id',$request->thread_id)->first();
        
        $sendMessage = Message::create([
            'thread_id' => $request->thread_id,
            'from_id' => $request->from,
            'to_id' => $thread->vehicle->user_id,
            'message' => $request->msg        
        ]);
        if(!empty($sendMessage)){
            return response()->json(['success' => true]);
        }
        return response()->json(['success' => false]);
    }
    
    public function sendDeposit(Request $request){
        $thread = Thread::where('id',$request->thread_id)->first();
        if(!empty($thread)){
            $price = $thread->vehicle->price;
            $divisible = ($request->deposit / 100);
            $percentage = ($price * $divisible);
            session(['depositPercentage' => $percentage,'thread_id' => $thread->id]);
            return response()->json(['success' => true]);
        }
        return response()->json(['sucess' => false]);
    }
    
    public function sendMessage(Request $request){
        $thread = Thread::where('id',$request->thread_id)->first();
        $sendMessage = Message::create([
            'thread_id' => $request->thread_id,
            'from_id' => $request->auth()->user()->id,
            'to_id' => $thread->vehicle->user_id,
            'message' => $request->msg        
        ]);
        if(!empty($sendMessage)){
            return response()->json(['success' => true]);
        }
        return response()->json(['success' => false]);
    }
}
