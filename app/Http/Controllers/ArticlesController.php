<?php

namespace App\Http\Controllers;

// use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Article;
use Carbon\Carbon;

use Request;

class ArticlesController extends Controller
{
  public function index() {
    $articles = Article::latest('published_at')->published()->get();

    return view('articles/index')->with('articles', $articles);
    //return view('articles/index', compact('articles'));
  }
  public function show($id) {
    $article = Article::findOrFail($id);

    return view('articles/show')->with('article', $article);
  }

  public function create() {
    return view('articles/create');
  }

  public function store() {
    Article::create(Request::all());
    // $article = new Article();
    // $article->title = $input['title'];
    // $article->body = $input['body'];

    return redirect('articles');
  }
}
