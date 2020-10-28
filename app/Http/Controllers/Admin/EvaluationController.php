<?php

namespace App\Http\Controllers\Admin;

use App\Activity;
use App\Evaluation;
use App\Player;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\ScoreText;
use App\User;

class EvaluationController extends Controller
{
    //
    public function create(Player $player)
    {
        $activities = Activity::all();
        $scoreTexts = ScoreText::all();
        return view('admin.evaluations.create', compact('player', 'activities', 'scoreTexts'));
    }

    public function store(Request $request, Player $player)
    {
        $validatedData = $request->validate([
            'skills.*' => 'required',
        ]);

        foreach ($validatedData['skills'] as $key => $skill) {
            Evaluation::create(['player_id' => $player->id, 'skill_id' => $key, 'score_text_id' => $skill]);
        }

        return redirect('/admin/players');
    }

    public function edit(Player $player)
    {
        $activities = Activity::all();
        $scoreTexts = ScoreText::all();
        return view('admin.evaluations.edit', compact('player', 'activities', 'scoreTexts'));
    }

    public function update(Request $request, Player $player)
    {
        $validatedData = $request->validate([
            'skills.*' => 'required',
        ]);

        Evaluation::where('player_id', $player->id)->delete();

        foreach ($validatedData['skills'] as $key => $skill) {
            Evaluation::create(['player_id' => $player->id, 'skill_id' => $key, 'score_text_id' => $skill]);
        }

        return redirect('/admin/players');
    }
}
