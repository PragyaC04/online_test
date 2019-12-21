<?php

namespace App\Http\Controllers;
use App\Comprehension;
use Illuminate\Http\Request;

class ComprehensionController extends Controller
{
    public function index(){
        return view('comprehension');
    }

    public function store(Request $request){
        $comp = new Comprehension();
        $comp->para = $request->input('para');
        $comp->qid = $request->input('q_number');
        $comp->question = $request->input('q_content');
        $comp->marks = $request->input('q_mks');
        $comp->setid = $request->input('sid');
        $comp->correct = $request->input('correct');
        if($request->hasfile('q_image')){
            $file = $request->file('q_image');
            $extension = $file->getClientOriginalExtension();
            $filename = time().'.'.$extension;
            $file->move('uploads/questions/', $filename);
            $comp->questionimg = $filename;
        }
        else
        {
            $comp->questionimg=' ';
        }
        
        $comp->option1 = $request->input('o1_content');
        if($request->hasfile('o1_image')){
            $file = $request->file('o1_image');
            $extension = $file->getClientOriginalExtension();
            $filename = time().'.'.$extension;
            $file->move('uploads/option1/', $filename);
            $comp->option1img = $filename;
        }
        else
        {
            $comp->option1img=' ';
        }

        
        $comp->option2 = $request->input('o2_content');
        if($request->hasfile('o2_image')){
            $file = $request->file('o2_image');
            $extension = $file->getClientOriginalExtension();
            $filename = time().'.'.$extension;
            $file->move('uploads/option2/', $filename);
            $comp->option2img = $filename;
        }
        else
        {
            $comp->option2img=' ';
        }

        $comp->option3 = $request->input('o3_content');
        if($request->hasfile('o3_image')){
            $file = $request->file('o3_image');
            $extension = $file->getClientOriginalExtension();
            $filename = time().'.'.$extension;
            $file->move('uploads/option3/', $filename);
            $comp->option3img = $filename;
        }
        else
        {
            $comp->option3img=' ';
        }

        $comp->option4 = $request->input('o4_content');
        if($request->hasfile('o4_image')){
            $file = $request->file('o4_image');
            $extension = $file->getClientOriginalExtension();
            $filename = time().'.'.$extension;
            $file->move('uploads/option4/', $filename);
            $comp->option4img = $filename;
        }
        else
        {
            $comp->option4img=' ';
        }

        $comp->save();
        return view('comprehension')->with('comp',$comp);
    } 

    public function display($sid){
        $comp = Comprehension::all()->where('setid',$sid);
        return view('question')->with('comp',$comp);
    }
}
