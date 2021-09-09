<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ShortLink;
use Illuminate\Support\Str;

class ShortLinkController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function create(Request $request)
    {
        $request->validate([
            'link' => 'required|url'
            ]);

        ShortLink::create([
            'link' => $request->link,
            'shortlink' => str_random(6)
        ]);
        $ShortLink = ShortLink::orderBy('id', 'DESC')->first();
        return redirect()->route('shortlink.index')
                         ->with('success','Short Link create!'." ".route('shortlink.shortenlink', $ShortLink->shortlink));
    }
     public function shortenLink($shortlink)
    {
        $link = ShortLink::where('shortlink',$shortlink)->first();
        return redirect($link->link);
    }
}
