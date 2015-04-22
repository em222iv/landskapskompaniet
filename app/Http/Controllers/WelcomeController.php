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
        $instaAccessToken = "1459532749.ab103e5.4e9c9b38a54145338fc7263289159c95";
        //facebook
        $groupId="landskapskompaniet";
        $fbAccesstoken = "1584087028510603|gclpUX63DDELjQbIRlVYQ2_Q4pw";

        //alternativ
        //https://graph.facebook.com/landskapskompaniet/promotable_posts?access_token=CAAWguACgr4sBAAjRb0mcbraDke0ZAISG2Q1jzlJLK4ac7o3JDVEND8yacVZASo5IyNj1mrE9s0rqZCCCwhnyXYYrM5wv96lj20il7oaeWZAe09YZBhfXwYdBRkD8M11TLbP4097cZCvIoR74XmSm7iUIo4NOGzws8Ympg1kOr6xHJ5zEgA3RAHLZCoXQS1OwU0GFFZBeOIZB7pzUkhZBm7UDZCi
        $instaresult = $this->fetchData("https://api.instagram.com/v1/users/{$userid}/media/recent/?access_token={$instaAccessToken}");

        $instaresult = json_decode($instaresult);

        foreach ($instaresult->data as $post) {
            $instaimg = $post->images->standard_resolution->url;
           // $instatags = $post->tags;
            $instatext = $post->caption->text;
            break;
        }


       $fbresult = $this->fetchData("https://graph.facebook.com/{$groupId}/feed?access_token={$fbAccesstoken}");

        $fbresult = json_decode($fbresult,true);

        foreach ($fbresult as $post) {
            $fbtext = $post[1]['message'];
            $fbimg =  $post[1]['picture'];
            break;
        }

        $carousels = Carousel::all();
        $data = array(
            'carousels'  => $carousels,
            'instaimg'   =>  $instaimg,
            'instatext' => $instatext,
            'fbtext' => $fbtext,
            'fbimg' => $fbimg
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
