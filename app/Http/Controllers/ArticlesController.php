<?php

namespace App\Http\Controllers;

// use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Article;
use Carbon\Carbon;

use App\Http\Requests\ArticleRequest;

class ArticlesController extends Controller
{
  public function __construct() {
    $this->middleware('auth', ['only' => 'create']);
  }
  public function index() {
    $articles = Article::latest('published_at')->published()->get();

    return view('articles/index')->with('articles', $articles);
    //return view('articles/index', compact('articles'));
  }
  public function show(Article $article) {
    // $article = Article::findOrFail($id);

    return view('articles/show')->with('article', $article);
  }

  public function create() {
    return view('articles/create');
  }

  public function store(ArticleRequest $request) {
    Article::create($request->all());

    return redirect('articles');
  }

  public function edit(Article $article) {
    // $article = Article::findOrFail($id);

    return view('articles/edit')->with('article', $article);
  }

  public function update(Article $article, ArticleRequest $request) {
    // $article = Article::findOrFail($id);
    $article->update($request->all());

    return redirect('articles');
  }
}
