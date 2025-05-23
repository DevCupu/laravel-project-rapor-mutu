<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;

class ArticleController extends Controller
{
    //
    public function index()
    {
        $articles = Article::all();
        return view('articles.index', compact('articles'));
    }
    

    // Tampilkan form untuk menambah artikel
    public function create()
    {
        return view('articles.create');
    }

    // Simpan artikel baru
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|max:255',
            'content' => 'required',
        ]);

        Article::create($request->all());

        return redirect()->route('articles.index');
    }

    // Tampilkan artikel untuk diedit
    public function edit(Article $article)
    {
        return view('articles.edit', compact('article'));
    }

    // Update artikel
    public function update(Request $request, Article $article)
    {
        $request->validate([
            'title' => 'required|max:255',
            'content' => 'required',
        ]);

        $article->update($request->all());

        return redirect()->route('articles.index');
    }

    // Hapus artikel
    public function destroy(Article $article)
    {
        $article->delete();
        return redirect()->route('articles.index');
    }
}
