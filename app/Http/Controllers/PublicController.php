<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class PublicController extends Controller
{
  public function homepage()
  {
    $articles= Article::where('is_accepted', true)->orderBy('created_at', 'desc')->take(6)->get();
    return view('welcome', compact('articles'));
  }

public function searchArticle(Request $request)
{
    $query = $request->input('query');
    
    $articles = Article::where('is_accepted', true)
        ->where(function($q) use ($query) {
            $q->where('title', 'LIKE', "%{$query}%")
              ->orWhere('description', 'LIKE', "%{$query}%");
        })
        ->paginate(10);

    return view('article.searched', compact('articles', 'query'));
}
}
