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
    public function create()
    {
        return view('articles.create');
    }

    public function store(Request $request)
    {
        // Validasi data
        $validatedData = $request->validate([
            'banner' => 'required|url',
            'title' => 'required|string|max:255',
            'body' => 'required|string',
            'published_at' => 'required|date',
            'status' => 'required|in:draft,publish',
            'user_id' => 'required|exists:users,id', // Pastikan user_id valid
        ]);

        // Simpan data ke database
        $article = Article::create($validatedData);

        if ($article) {
            return redirect()->route('articles.index')->with('success', 'Artikel berhasil dibuat.');
        } else {
            return redirect()->route('articles.create')->with('error', 'Gagal membuat artikel.');
        }
    }
}
