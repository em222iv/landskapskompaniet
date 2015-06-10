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

    public function index()
    {
        $emails = $this->email->paginate(8);
        return view('admin.email.index',compact('emails'));
    }
    public function create()
    {
        return view('admin.email.create');
    }

    public function send(SendEmailRequest $request)
    {
        $this->input = $request->all();
        Mail::raw($this->input['text'], function($message)
        {
            $message->from('landskapskompaniet@gmail.com','Landskapskompaniet');
            $message->to($this->email->lists('email'))->subject($this->input['title']);
        });
        flash()->success('Mail skickat');
        return view('admin.home');
    }

    public function destroy(Email $email) {
        $email->delete();
        flash()->success('Email adress borttagen');
        $emails = $this->email->paginate(8);
        return view('admin.email.index',compact('emails'));

    }
}