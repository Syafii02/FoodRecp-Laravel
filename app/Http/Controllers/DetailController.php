<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class DetailController extends Controller
{
    public function index(Request $request, $title)
    {
        $item = Article::all()
            ->where('title', $title)
            ->firstOrFail();

        return view('pages.user.detail', [
            'item' => $item
        ]);
    }
}
