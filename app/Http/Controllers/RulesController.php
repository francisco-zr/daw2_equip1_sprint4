<?php

namespace App\Http\Controllers;

use App\Models\Options;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class RulesController extends Controller
{
    public function indexPrivacy()
    {
        $text = DB::table('options')->select('privacy_policy')->first();
        return view('rules.privacy_policy')->with('text', $text);
    }
    public function indexCookies()
    {
        $text = DB::table('options')->select('cookies_policy')->first();
        return view('rules.cookies_policy')->with('text', $text);
    }
    public function indexTerms()
    {
        $text = DB::table('options')->select('terms')->first();
        return view('rules.terms')->with('text', $text);
    }

    public function editTerms()
    {
        $text = DB::table('options')->select('terms')->first();
        return view('rules.edit_terms')->with('text', $text);
    }

    public function storeTerms(Request $request)
    {
        $Q1 = Options::find(1);
        $Q1->terms = $request['content'];
        $Q1->save();

        return response()->json(['message' => 'Thread Saved']);
    }
}
