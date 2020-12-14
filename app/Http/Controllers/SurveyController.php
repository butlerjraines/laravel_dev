<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SurveyResultAlpha;
use App\Models\User;

class SurveyController extends Controller
{
    //
    public function index() 
  { 
    $user = User::find(1);
    //fetch 5 posts from database which are active and latest 
    $results = SurveyResultAlpha::where('active',1)->orderBy('created_at','desc')->paginate(5); 
    //page heading 
    $title = 'Latest Posts'; 
    //return home.blade.php template from resources/views folder 
   // return view('survey')->withPosts($posts)->withTitle($title); 
   return view('survey', compact('user','results'));
}

}