<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Email;
use App\Http\Requests\EmailRequest;

class EmailController extends Controller {


    protected $email;


    public function __construct(Email $email)
    {
        $this->email = $email;
    }
	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(EmailRequest $request)
	{
        $input = $request->all();
        Email::create($input);
        flash()->success('Du har skrivit upp dig');
        return redirect('/');
	}
}
