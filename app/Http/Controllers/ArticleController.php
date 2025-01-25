<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;

class ArticleController extends Controller
{
    public function index()
    {
        $articles = Article::where('status', 'publish')->latest()->paginate(25);

        // Verifikasi tipe data $articles
        if (!is_object($articles) || !$articles instanceof \Illuminate\Pagination\LengthAwarePaginator) {
            dd($articles); // Debugging: Tampilkan isi $articles
        }

        return view('articles.index', compact('articles'));
    }

    public function show($id_artikel)
    {
        $article = Article::findOrFail($id_artikel);
        return view('articles.show', compact('article'));
    }

}
