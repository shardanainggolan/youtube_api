<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use alchemyguy\YoutubeLaravelApi\AuthenticateService;	
use alchemyguy\YoutubeLaravelApi\ChannelService;
use alchemyguy\YoutubeLaravelApi\VideoService;

class WelcomeController extends Controller
{
    public function index(Request $request)
    {
        // $authObject  = new AuthenticateService;
        
        // // # Replace the identifier with a unqiue identifier for account or channel
        // $authUrl = $authObject->getLoginUrl('sharda.nainggolan28@gmail.com','UCY47kwwJXNRYcen0zGORKsA'); 
        // // dd($authUrl);
        // $code = $request->get('code');
        // $identifier = $request->get('state');

        // // dd($code);

        // if($code != null) {
        //     $request->session()->forget('youtube_code');
        //     // $_SESSION['youtube_code'] = $code;
        //     session(['youtube_code' => $code]);

        //     $authObject  = new AuthenticateService;
        //     $authResponse = $authObject->authChannelWithCode(session('youtube_code'));

        //     // dd($_SESSION['youtube_code']);
        //     // dd($authResponse);
        // }

        

        // dd($authResponse);

        $partVideo ='snippet,id';
        $paramsVideo =array('channelId' => 'UCY47kwwJXNRYcen0zGORKsA');
        $videoServiceObject  = new VideoService;
        $response = $videoServiceObject->searchListByKeyword($partVideo, $paramsVideo);

        $videos = [];
        array_shift($response->items);
        // dd($response);
        foreach($response->items as $item) {
            $videos[] = array(
                'videoUrl'      => 'https://www.youtube.com/watch?v='.$item->id->videoId,
                'thumbnail'     => $item->snippet->thumbnails->high->url,
                'title'         => $item->snippet->title,
                'publishedAt'   => $item->snippet->publishedAt
            );
        }
        // dd($videos);

        $part = 'id,snippet,statistics,contentDetails';
        $params = array('id' => 'UCY47kwwJXNRYcen0zGORKsA');
        $channelServiceObject  = new ChannelService;
        $channelDetails = $channelServiceObject->channelsListById($part, $params);
        // dd($channelDetails);

        $channelName    = $channelDetails->items[0]->snippet->title;
        $thumbnail      = $channelDetails->items[0]->snippet->thumbnails->medium->url;
        $subscribers    = $channelDetails->items[0]->statistics->subscriberCount;
        $totalVideos    = $channelDetails->items[0]->statistics->videoCount;
        $totalViews     = $channelDetails->items[0]->statistics->viewCount;

        return view('welcome', compact(
            'thumbnail', 
            'channelName', 
            'subscribers', 
            'totalVideos', 
            'totalViews',
            'videos'
        ));
    }
}
