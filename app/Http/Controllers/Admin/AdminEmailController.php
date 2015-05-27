<?php namespace App\Http\Controllers;


use App\Http\Requests;
use Illuminate\Support\Facades\Mail;
use App\Email;
use Request;

class AdminEmailController extends Controller {

    protected $email;

        public function __construct(Email $email)
    {
        $this->middleware('auth');
        $this->email = $email;

    }

    public function create() {

       return view('admin.email.create');
    }
    public function send() {

        $input = Request::all();
//        dd($this->email->lists('email'));
        Mail::raw($input['text'], function($message)
        {
            $message->from('erikper.magnusson@gmail.com', 'Landskapskompaniet');

            $message->to($this->email->lists('email'))->subject('Welcome!');
        });
        return view('admin.home');
    }
}
