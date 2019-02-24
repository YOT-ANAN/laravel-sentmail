<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Mail\SendMailable;
use Illuminate\Support\Facades\Mail;
class MailController extends Controller {
    /*public function send(Request $request) {
       
            Mail::to($request->email)->send(new SendMailable($request));
            return back()->with('success','successfully');;
     }*/
     public function send(Request $request) {
        $email = $request->input('email');
        $name = $request->input('name');
        $subject = $request->input('subject');
        $content = $request->input('content');
        $data = array('name' => $name,'subject' => $subject,'content' => $content);
        Mail::send('mail', $data, function($message) use($request){
           $message->to($request->input('email'), $request->input('name'))->subject($request->input('subject'));
           $message->from('5910110270@psu.ac.th','Yot-anan Tiaosakun');
        });
        return back()->with('success','successfully');;
     }
     
}