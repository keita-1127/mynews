<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NewsController extends Controller
{
  public function index(Request $request)
  {
    $post = News::all()->sortByDesc('updated_at');
    if(count($posts) > 0) {
      $headline = $posts->shift();
    } else {
        $headline = null;
    }
    return view('news.index', ['headline' => $headline, 'post' => $posts]);
  }
}
