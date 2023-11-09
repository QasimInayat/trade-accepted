<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TransactionController extends Controller
{
    public function index(){
        $data ['title'] = 'Transaction List';
        return view('admin.pages.transaction.list',$data);
    }

    public function detail(){
        $data ['title'] = 'Transaction Detail';
        return view('admin.pages.transaction.detail',$data);
    }
}
