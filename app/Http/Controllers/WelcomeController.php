<?php namespace App\Http\Controllers;

use App\Carousel;
use Illuminate\Support\Facades\View;

class WelcomeController extends Controller
{

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

        // instagram flöde
        $userid = "1459532749";
        $instaAccessToken = "1459532749.ab103e5.4e9c9b38a54145338fc7263289159c95";

        $instaresult = $this->fetchData("https://api.instagram.com/v1/users/{$userid}/media/recent/?access_token={$instaAccessToken}");
        $instaresult = json_decode($instaresult);
        foreach ($instaresult->data as $post) {
            $instaimg = $post->images->standard_resolution->url;
            // $instatags = $post->tags;
            $instatext = $post->caption->text;
            break;
        }
        // facebook flöde


        $groupId = "landskapskompaniet";
        $fbAccesstoken = "CAACEdEose0cBAOM9hJE2h9sjbqWlOkGG7hgnZAGJKo5GrvjBuVtahpXdS5Gg76qJBHX6m386z5InRmXgMy2JZCZAeuONPPV2H4vC1KlNxTZAo650Gny32K4NkPJKcc5vFB2s6MddYoIe6bDWvv5y9Ab6ISPAODWwna2QOdKkAdW40whZAgO5Ad6qciZB6WnWsoxqyakvRHl6bYDGaeFcBUOMMO28EEbNwZD";
        /*    FacebookSession::setDefaultApplication('1584087028510603', '808de35efe8a112af1e6c5a94bd89854');

            $session = new FacebookSession($fbAccesstoken);
            return $session;
            $request = new FacebookRequest($session, 'GET', '/me');
            $response = $request->execute();
            $graphObject = $response->getGraphObject();
            return $graphObject;*/


        /*   $fbresult = $this->fetchData("https://graph.facebook.com/{$groupId}/feed?access_token={$fbAccesstoken}");
           $fbresult = json_decode($fbresult,true);
           foreach ($fbresult as $post) {
               $fbtext = $post[0]['message'];
               $fbimg =  $post[0]['picture'];
               break;
           }*/

        $carousels = Carousel::all();
        $data = array(
            'carousels' => $carousels,
            'instaimg' => $instaimg,
            'instatext' => $instatext
        );
        return view('pages.welcome')->with('data', $data);
    }

    function fetchData($url)
    {
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_TIMEOUT, 20);
        $result = curl_exec($ch);
        curl_close($ch);
        return $result;
    }
}
