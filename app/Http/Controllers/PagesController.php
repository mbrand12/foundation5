<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class PagesController extends Controller
{
  public function index() {
     $ppl = ['Volgar', 'Red', 'mbrand12'];

     return view('welcome', compact('ppl'));
     // return view('wellcome')->with($ppl);
     // return view('wellcome')->with('ppl', $ppl);
  }

  public function about() {
    return view('pages/about');
  }
}
