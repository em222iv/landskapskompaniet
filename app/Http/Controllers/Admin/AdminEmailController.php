<?php namespace App\Http\Controllers;


use App\Http\Requests;
use Illuminate\Support\Facades\Mail;
use Request;
use App\Http\Requests\SendEmailRequest;

class AdminEmailController extends Controller {


    public function create() {

       return view('admin.email.create');
    }
    public function send(SendEmailRequest $request) {

        $input = $request->all();

//        dd($this->email->lists('email'));

        Mail::send($input['text'], function($message)
        {
            $message->from('erikper.magnusson@gmail.com', 'Landskapskompaniet');

            $message->to($this->email->lists('email'))->subject('Welcome!');
        });
        return view('admin.home');
    }
}
