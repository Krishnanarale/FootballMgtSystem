<?php

namespace App\Http\Controllers\Admin;

use App\Activity;
use App\Evaluation;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\ScoreText;
use App\User;

class EvaluationController extends Controller
{
    //
    public function create(User $user)
    {
        $activities = Activity::all();
        $scoreTexts = ScoreText::all();
        return view('admin.evaluations.create', compact('user', 'activities', 'scoreTexts'));
    }

    public function store(Request $request, User $user)
    {
        $validatedData = $request->validate([
            'skills.*' => 'required',
        ]);

        foreach ($validatedData['skills'] as $key => $skill) {
            Evaluation::create(['user_id' => $user->id, 'skill_id' => $key, 'score_text_id' => $skill]);
        }

        return redirect('/admin/players');
    }

    public function edit(User $user)
    {
        $activities = Activity::all();
        $scoreTexts = ScoreText::all();
        return view('admin.evaluations.edit', compact('user', 'activities', 'scoreTexts'));
    }

    public function update(Request $request, User $user)
    {
        $validatedData = $request->validate([
            'skills.*' => 'required',
        ]);

        Evaluation::where('user_id', $user->id)->delete();

        foreach ($validatedData['skills'] as $key => $skill) {
            Evaluation::create(['user_id' => $user->id, 'skill_id' => $key, 'score_text_id' => $skill]);
        }

        return redirect('/admin/players');
    }
}
