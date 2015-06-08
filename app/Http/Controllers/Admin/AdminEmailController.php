<?php namespace App\Http\Controllers\Admin;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Mail;
use App\Email;
use Request;
use App\Http\Requests\SendEmailRequest;

class AdminEmailController extends Controller {

    protected $email;
    protected $input;

    public function __construct(Email $email)
    {
        $this->middleware('auth');
        $this->email = $email;
    }

    public function create()
    {
        return view('admin.email.create');
    }

    public function send(SendEmailRequest $request)
    {
        $this->input = $request->all();
//        dd($this->email->lists('email'));
        Mail::raw($this->input['text'], function($message)
        {
            $message->from('landskapskompaniet@gmail.com','Landskapskompaniet');
            $message->to($this->email->lists('email'))->subject($this->input['title']);
        });
        return view('admin.home');
    }
}