<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Qualitative;
use App\Analytical;
use App\Creative;
use App\Comprehension;

class QuestController extends Controller
{
    public function display($sid){
        $qual = Qualitative::all()->where('setid',$sid);
        $comp = Comprehension::all()->where('setid',$sid);
        $analy = Analytical::all()->where('setid',$sid);
        $creat = Creative::all()->where('setid',$sid);
        //return view('question')->with(compact($qual,$analy,$creat,$comp));
        return view('question')->with('qual',$qual)->with('analy',$analy)->with('creat',$creat)->with('comp',$comp);
    }
}
