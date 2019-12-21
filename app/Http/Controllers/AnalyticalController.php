<?php

namespace App\Http\Controllers;
use App\Analytical;
use Illuminate\Http\Request;

class AnalyticalController extends Controller
{
    public function index(){
        return view('analytical');
    }

    public function store(Request $request){
        $analy = new Analytical();
        $analy->qid = $request->input('q_number');
        $analy->question = $request->input('q_content');
        $analy->marks = $request->input('q_mks');
        $analy->setid = $request->input('sid');
        $analy->correct = $request->input('correct');
        if($request->hasfile('q_image')){
            $file = $request->file('q_image');
            $extension = $file->getClientOriginalExtension();
            $filename = time().'.'.$extension;
            $file->move('uploads/questions/', $filename);
            $analy->questionimg = $filename;
        }
        else
        {
            $analy->questionimg=' ';
        }
        
        $analy->option1 = $request->input('o1_content');
        if($request->hasfile('o1_image')){
            $file = $request->file('o1_image');
            $extension = $file->getClientOriginalExtension();
            $filename = time().'.'.$extension;
            $file->move('uploads/option1/', $filename);
            $analy->option1img = $filename;
        }
        else
        {
            $analy->option1img=' ';
        }

        
        $analy->option2 = $request->input('o2_content');
        if($request->hasfile('o2_image')){
            $file = $request->file('o2_image');
            $extension = $file->getClientOriginalExtension();
            $filename = time().'.'.$extension;
            $file->move('uploads/option2/', $filename);
            $analy->option2img = $filename;
        }
        else
        {
            $analy->option2img=' ';
        }

        $analy->option3 = $request->input('o3_content');
        if($request->hasfile('o3_image')){
            $file = $request->file('o3_image');
            $extension = $file->getClientOriginalExtension();
            $filename = time().'.'.$extension;
            $file->move('uploads/option3/', $filename);
            $analy->option3img = $filename;
        }
        else
        {
            $analy->option3img=' ';
        }

        $analy->option4 = $request->input('o4_content');
        if($request->hasfile('o4_image')){
            $file = $request->file('o4_image');
            $extension = $file->getClientOriginalExtension();
            $filename = time().'.'.$extension;
            $file->move('uploads/option4/', $filename);
            $analy->option4img = $filename;
        }
        else
        {
            $analy->option4img=' ';
        }

        $analy->save();
        return view('analytical')->with('analy',$analy);
    } 

    public function display($sid){
        $analy = Analytical::all()->where('setid',$sid);
        return view('question')->with('analy',$analy);
    }
}
