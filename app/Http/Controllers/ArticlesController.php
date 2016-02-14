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

    $tags = \App\Tag::lists('name', 'id');
    return view('articles/create')->with('tags', $tags);
  }

  public function store(ArticleRequest $request) {
    $article = Article::create($request->all());
    $article->tags()->attach($request->input('tag_list'));

    flash()->success("Your article has been created");
    return redirect('articles');
  }

  public function edit(Article $article) {
    // $article = Article::findOrFail($id);
    $tags = \App\Tag::lists('name', 'id');

    // return view('articles/edit')->with('article', $article)
    //                             ->with('tags', $tags);
    // consider using an alternative:
    return view('articles/edit', compact('article', 'tags'));
  }

  public function update(Article $article, ArticleRequest $request) {
    // $article = Article::findOrFail($id);
    $article->update($request->all());
    $article->tags()->sync($request->input('tag_list'));

    return redirect('articles');
  }
}
