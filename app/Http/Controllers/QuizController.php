<?php

namespace App\Http\Controllers;

use App\Models\Quiz;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class QuizController extends Controller
{
    public function index()
    {
        $quizzes = Quiz::all();
        $quiz = DB::select('SELECT quizzes.id, quizzes.description, quizzes.sujet, quizzes.type FROM quizzes');
        $quiz = (array) $quiz;
        // dd($quizzes);
        return view('index', compact('quizzes','quiz'));
    }

    public function create()
    {
        return view('create');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'description' => 'required|max:255',
            'sujet' => 'nullable',
            'type' => 'nullable',
            // 'question_id' => 'nullable',
        ]);

        $q = Quiz::create($validatedData);

        return redirect()->route('index')
            ->with('success', 'Quiz created successfully.');
    }

        public function edit($id)
    {
        $quiz = Quiz::findOrFail($id);
        return view('edit', compact('quiz'));
    }

    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'description' => 'required|max:255',
            'sujet' => 'nullable',
            'type' => 'nullable',
            // 'duration' => 'nullable|integer',
        ]);

        $quiz = Quiz::findOrFail($id);
        $quiz->update($validatedData);

        return redirect()->route('index')->with('success', 'Quiz updated successfully!');
    }

    public function destroy($id)
    {
        $quiz = Quiz::findOrFail($id);
        $quiz->delete();

        return redirect()->route('index')->with('success', 'Quiz deleted successfully!');
    }
}

