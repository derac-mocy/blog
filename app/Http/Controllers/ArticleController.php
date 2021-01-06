<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;
use Illuminate\Support\Facades\DB;

class ArticleController extends Controller
{
    public function index() {
        // $articles = DB::table('articles')->get();

        $data = Article::all();
        return view('articles.index', ['articles' => $data]);
    }

    public function detail($id) {
        return "Article Controller - Article Detail - $id";
    }
}
