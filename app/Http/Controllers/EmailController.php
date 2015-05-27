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
        return redirect('/');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}
