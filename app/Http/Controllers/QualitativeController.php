<?php

namespace App\Http\Controllers;
use App\Qualitative;
use Illuminate\Http\Request;

class QualitativeController extends Controller
{
    public function index(){
        return view('qualitative');
    }

    public function edit($sid,$qid){
        $qual = Qualitative::find($qid,$sid);
        return view('editqual')->with('qual',$qual);
    }

    public function update(Request $request,$sid,$qid){
        $qual = Qualitative::find($qid,$sid);
        $qual->qid = $request->input('q_number');
        $qual->question = $request->input('q_content');
        $qual->marks = $request->input('q_mks');
        $qual->setid = $request->input('sid');
        $qual->correct = $request->input('correct');
        $qual->option1 = $request->input('o1_content');
        $qual->option2 = $request->input('o2_content');
        $qual->option3 = $request->input('o3_content');
        $qual->option4 = $request->input('o4_content');
        
        $qual->save();
        return redirect()->route('question');

    }

    public function test(){
        $qual = Qualitative::all()->unique('setid');
        return view('newtest')->with('qual',$qual);
    }

    public function store(Request $request){
        $qual = new Qualitative();
        $qual->qid = $request->input('q_number');
        $qual->question = $request->input('q_content');
        $qual->marks = $request->input('q_mks');
        $qual->setid = $request->input('sid');
        $qual->correct = $request->input('correct');
        if($request->hasfile('q_image')){
            $file = $request->file('q_image');
            $extension = $file->getClientOriginalExtension();
            $filename = time().'.'.$extension;
            $file->move('uploads/questions/', $filename);
            $qual->questionimg = $filename;
        }
        else
        {
            $qual->questionimg=' ';
        }
        
        $qual->option1 = $request->input('o1_content');
        if($request->hasfile('o1_image')){
            $file = $request->file('o1_image');
            $extension = $file->getClientOriginalExtension();
            $filename = time().'.'.$extension;
            $file->move('uploads/option1/', $filename);
            $qual->option1img = $filename;
        }
        else
        {
            $qual->option1img=' ';
        }

        
        $qual->option2 = $request->input('o2_content');
        if($request->hasfile('o2_image')){
            $file = $request->file('o2_image');
            $extension = $file->getClientOriginalExtension();
            $filename = time().'.'.$extension;
            $file->move('uploads/option2/', $filename);
            $qual->option2img = $filename;
        }
        else
        {
            $qual->option2img=' ';
        }

        $qual->option3 = $request->input('o3_content');
        if($request->hasfile('o3_image')){
            $file = $request->file('o3_image');
            $extension = $file->getClientOriginalExtension();
            $filename = time().'.'.$extension;
            $file->move('uploads/option3/', $filename);
            $qual->option3img = $filename;
        }
        else
        {
            $qual->option3img=' ';
        }

        $qual->option4 = $request->input('o4_content');
        if($request->hasfile('o4_image')){
            $file = $request->file('o4_image');
            $extension = $file->getClientOriginalExtension();
            $filename = time().'.'.$extension;
            $file->move('uploads/option4/', $filename);
            $qual->option4img = $filename;
        }
        else
        {
            $qual->option4img=' ';
        }

        $qual->save();
        return view('qualitative')->with('qual',$qual);
    } 

    public function display($sid){
        $qual = Qualitative::all()->where('setid',$sid);
        return view('question')->with('qual',$qual);
    }
}
