<?php namespace App\Http\Controllers;

use App\Http\Requests;

class ContactController extends Controller
{

    public function index()
    {
        return view('pages.contact');
    }
}
