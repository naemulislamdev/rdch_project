<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function index(){
        return view('frontend.home');
    }
    public function msgChairman(){
        return view('frontend.msg_chairman');
    }
    public function msgPrinciple(){
        return view('frontend.msg_principle');
    }
    public function msgDirector(){
        return view('frontend.msg_director');
    }
    public function boardDirector(){
        return view('frontend.board_director');
    }
}
