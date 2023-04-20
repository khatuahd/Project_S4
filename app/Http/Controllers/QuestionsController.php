<?php

namespace App\Http\Controllers;

use GrahamCampbell\ResultType\Success;
use Illuminate\Http\Request;
use App\Models\Questions;

class QuestionsController extends Controller
{
    public function index(){
        $list_questions = Questions::orderby('created_at')->get();
        return view('Questions.questions',compact("list_questions"));
    }

    public function create(){
        return view('Questions.qcreate');
    }

    public function edit($id)
    {
        $question = Questions::findOrFail($id); 
        return view('Questions.Edit', compact('question'));
    }
    
    public function store(request $request, Questions $question){
        $request->validate([
            "question" => "required|max:255",
            "type" => "required|max:255",
            "reponse" => "required|max:255",
        ]);

        Questions::create($request->all());
        return redirect()->route('Questions.questions')->with('Success', 'Question ajouté avec succé.');
    }
 
    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            "question" => "required",
            "indication" => "nullable",
            "type" => "required",
            "reponse" => "required",
        ]);
        $question = Questions::findOrFail($id);
        $question->update($validatedData);

        return redirect()->route('questions')->with("success", "Question mis à jour avec succé. ");
    }
    public function delete($id)
    {
        $question= Questions::findOrFail($id);
        $question->delete();

        return redirect()->route('questions')->with('success', 'Question deleted successfully!');
    }
}
