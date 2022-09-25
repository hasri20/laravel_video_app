<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Alaouy\Youtube\Facades\Youtube;

class VideoController extends Controller
{
    public function index()
    {
    	$videoList = Youtube::listChannelVideos('UCk1SpWNzOs4MYmr0uICEntg', 40);
    	return view('index', ['videoList' => $videoList]);
 
    }

    public function getVideoByID($videoId = null)
    {
        $video = Youtube::getVideoInfo($videoId);
        return view('player', ['videoId' => $videoId, 'video' => $video]);
    }

}
