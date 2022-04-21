<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\ArticleController;
use App\Models\Article;
use App\Models\Type;

class HomeController extends Controller
{
    public function index()
    {
        $items = Article::paginate(4);

        return view('pages.user.home', [
            'items' => $items,
            'type_id' => Type::count(),
            'category_id' => Type::count(),
        ]);
    }
};