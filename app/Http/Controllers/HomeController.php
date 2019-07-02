<?php
// Name Space
namespace App\Http\Controllers;

// Core
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Response;
use Validator;
use Hash;

// Models
use App\Quest;
use App\Quiz;
use App\Result;

class HomeController extends Controller
{
  public function index() {
    return view('site.index');
  }
  public function sobre() {
    return view('site.sobre');
  }
  public function privacidade() {
    return view('site.privacidade');
  }
  public function termos() {
    return view('site.termos');
  }
}
