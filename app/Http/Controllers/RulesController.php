<?php

namespace App\Http\Controllers;

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
}
