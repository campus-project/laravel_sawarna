<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Response;

class EmailController extends Controller
{
    public function sendEmail(Request $request) {
        try{
            Mail::send('contact', [
                'name' => $request->name,
                'email' => $request->email
            ], function ($message) use ($request) {
                $message->from('no-reply@' . str_replace('http://:', '', config('url', 'Laravel')));
                $message->subject('Subscription');
                $message->to('y.hertanto17@gmail.com');
            });

            return Response::json([
                'success' => true,
                'message' => 'Sent success'
            ]);
        }
        catch (\Exception $e){
            return Response::json([
                'success' => false,
                'errors' => $e->getMessage()
            ]);
        }
    }
}
