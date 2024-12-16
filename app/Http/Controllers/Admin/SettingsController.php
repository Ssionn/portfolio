<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Me;
use App\Models\Portfolio;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class SettingsController extends Controller
{
    public function index(): View
    {
        $portfolio = auth()->user()->portfolio()->first();
        $who = auth()->user()->me()->first();

        return view('admin.settings.index', [
            'portfolio' => $portfolio,
            'who' => $who,
        ]);
    }

    public function updateHero(Request $request): RedirectResponse
    {
        $portfolio = auth()->user()->portfolio()->first();

        if (! $portfolio) {
            $portfolio = new Portfolio;
        }

        $portfolio->name = $request->hero_title;
        $portfolio->description = $request->description;
        $portfolio->fallback = $request->fallback;
        $portfolio->user_id = auth()->user()->id;

        $portfolio->save();

        return redirect()->route('admin.settings.index');
    }

    public function updateWho(Request $request): RedirectResponse
    {
        $who = auth()->user()->me()->first();

        if (! $who) {
            $who = new Me;
        }

        $who->name = $request->who_title;
        $who->description = $request->description;
        $who->fallback = $request->fallback;
        $who->user_id = auth()->user()->id;

        $who->save();

        return redirect()->route('admin.settings.index');
    }
}
