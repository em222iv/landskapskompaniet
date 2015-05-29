<?php namespace App\Http\Controllers;

use App\Http\Requests;

class ContactController extends Controller
{
    /**
     * @return \Illuminate\View\View
     */
    public function index()
    {
        return view('pages.contact');
    }
}
