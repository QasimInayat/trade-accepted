<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Thread;
use App\Models\Message;
use App\Models\Vehicle;

class ChatController extends Controller
{
    public function index($id){
        $data ['title'] = 'Chat';
        $data ['heading'] = 'Chat';
        $data['threads'] = Thread::where('from_id' , auth()->user()->id)->get();
        $data['chat'] = Thread::where('id' , $id)->firstorfail();
        $data['replies'] = Message::where('thread_id' , $id)->get();
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
}
