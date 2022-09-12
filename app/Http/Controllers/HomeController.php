<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
class HomeController extends Controller
{
    public function index(){
        $data = ["name"=>"Sajid", "data"=>"Hello Sajid"];
        
        Mail::send("practice",$data, function($message){
            $message->to("israfil123.sa@gmail.com");
            $message->subject("hello Dev");
        });
    }
}
