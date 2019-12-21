<?php

namespace App\Http\Controllers;
use App\Creative;
use Illuminate\Http\Request;

class CreativeController extends Controller
{
    public function index(){
        return view('creative');
    }

    public function store(Request $request){
        $creat = new Creative();
        $creat->qid = $request->input('q_number');
        $creat->question = $request->input('q_content');
        $creat->marks = $request->input('q_mks');
        $creat->setid = $request->input('sid');
        $creat->correct = $request->input('correct');
        if($request->hasfile('q_image')){
            $file = $request->file('q_image');
            $extension = $file->getClientOriginalExtension();
            $filename = time().'.'.$extension;
            $file->move('uploads/questions/', $filename);
            $creat->questionimg = $filename;
        }
        else
        {
            $creat->questionimg=' ';
        }
        
        $creat->option1 = $request->input('o1_content');
        if($request->hasfile('o1_image')){
            $file = $request->file('o1_image');
            $extension = $file->getClientOriginalExtension();
            $filename = time().'.'.$extension;
            $file->move('uploads/option1/', $filename);
            $creat->option1img = $filename;
        }
        else
        {
            $creat->option1img=' ';
        }

        
        $creat->option2 = $request->input('o2_content');
        if($request->hasfile('o2_image')){
            $file = $request->file('o2_image');
            $extension = $file->getClientOriginalExtension();
            $filename = time().'.'.$extension;
            $file->move('uploads/option2/', $filename);
            $creat->option2img = $filename;
        }
        else
        {
            $creat->option2img=' ';
        }

        $creat->option3 = $request->input('o3_content');
        if($request->hasfile('o3_image')){
            $file = $request->file('o3_image');
            $extension = $file->getClientOriginalExtension();
            $filename = time().'.'.$extension;
            $file->move('uploads/option3/', $filename);
            $creat->option3img = $filename;
        }
        else
        {
            $creat->option3img=' ';
        }

        $creat->option4 = $request->input('o4_content');
        if($request->hasfile('o4_image')){
            $file = $request->file('o4_image');
            $extension = $file->getClientOriginalExtension();
            $filename = time().'.'.$extension;
            $file->move('uploads/option4/', $filename);
            $creat->option4img = $filename;
        }
        else
        {
            $creat->option4img=' ';
        }
        
        $creat->option5 = $request->input('o5_content');
        if($request->hasfile('o5_image')){
            $file = $request->file('o5_image');
            $extension = $file->getClientOriginalExtension();
            $filename = time().'.'.$extension;
            $file->move('uploads/option5/', $filename);
            $creat->option5img = $filename;
        }
        else
        {
            $creat->option5img=' ';
        }

        $creat->save();
        return view('creative')->with('creat',$creat);
    } 

    public function display($sid){
        $creat = Creative::all()->where('setid',$sid);
        return view('question')->with('creat',$creat);
    }
}
