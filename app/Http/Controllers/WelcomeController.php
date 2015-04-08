<?php namespace App\Http\Controllers;

use App\Carousel;
use Illuminate\Support\Facades\View;

class WelcomeController extends Controller {

	/*
	|--------------------------------------------------------------------------
	| Welcome Controller
	|--------------------------------------------------------------------------
	|
	| This controller renders the "marketing page" for the application and
	| is configured to only allow guests. Like most of the other sample
	| controllers, you are free to modify or remove it as you desire.
	|
	*/

	/**
	 * Create a new controller instance.
	 *
	 * @return void
	 */
	public function __construct()
	{
		//$this->middleware('guest');
	}

    /**
	 * Show the application welcome screen to the user.
	 *
	 * @return Response
	 */
	public function index()
	{
        $userid = "1459532749";
        $accessToken = "1459532749.ab103e5.4e9c9b38a54145338fc7263289159c95";


        $result = $this->fetchData("https://api.instagram.com/v1/users/{$userid}/media/recent/?access_token={$accessToken}");
        $result = json_decode($result);

        foreach ($result->data as $post) {
            $instaimg = $post->images->standard_resolution->url;
           // $instatags = $post->tags;
            $text = $post->caption->text;
            break;
        }
        $carousels = Carousel::all();
        $data = array(
            'carousels'  => $carousels,
            'img'   =>  $instaimg,
         //   'tags' => $instatags,
            'text' => $text
        );
		return view('pages.welcome')->with('data',$data);
	}

    function fetchData($url){
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_TIMEOUT, 20);
        $result = curl_exec($ch);
        curl_close($ch);
        return $result;
    }
}
