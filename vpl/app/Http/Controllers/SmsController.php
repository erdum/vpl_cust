<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SmsController extends Controller
{
    public function index(){
        return view('sms.index');
    }

    public function send_sms(){
        return view('sms.send-sms');
    }
}