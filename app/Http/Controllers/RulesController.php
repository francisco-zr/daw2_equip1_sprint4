<?php

namespace App\Http\Controllers;

use App\Models\Options;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class RulesController extends Controller
{
    // vistas
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
    public function indexEditTerms()
    {
        return view('rules.edit_terms');
    }

    public function storeTerms(Request $request)
    {
        $Q1 = Options::find(1);
        $Q1->terms = $request['content'];
        $Q1->save();

        return response()->json(['message' => 'Thread Saved']);
    }

    public function listTerms()
    {
        $text = DB::table('options')->select('terms')->first();

        return $text;
    }

    public function indexEditCookies()
    {
        return view('rules.edit_cookies');
    }

    public function storeCookies(Request $request)
    {
        $Q1 = Options::find(1);
        $Q1->cookies_policy = $request['content'];
        $Q1->save();

        return response()->json(['message' => 'Thread Saved']);
    }

    public function listCookies()
    {
        $text = DB::table('options')->select('cookies_policy')->first();

        return $text;
    }

    public function indexEditPrivacy()
    {
        return view('rules.edit_privacy');
    }

    public function storePrivacy(Request $request)
    {
        $Q1 = Options::find(1);
        $Q1->privacy_policy = $request['content'];
        $Q1->save();

        return response()->json(['message' => 'Thread Saved']);
    }

    public function listPrivacy()
    {
        $text = DB::table('options')->select('privacy_policy')->first();

        return $text;
    }
}
