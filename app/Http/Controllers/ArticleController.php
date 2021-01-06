<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function index() {
        return "Article Controller - Article List";
    }

    public function detail($id) {
        return "Article Controller - Article Detail - $id";
    }
}
