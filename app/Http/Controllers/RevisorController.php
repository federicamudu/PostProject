<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class RevisorController extends Controller
{
    public function dashboard(){
        $unrevisionedArticles = Article::where('is_accepted', NULL)->get();
        $acceptedArticles = Article::where('is_accepted', true)->get();
        $rejectedArticles = Article::where('is_accepted', false)->get();

        return view('revisor.dashboard', compact('acceptedArticles', 'rejectedArticles', 'unrevisionedArticles'));
    }

    public function acceptArticle(Article $article){
        $article->is_accepted = true;
        $article->save();
        return redirect()->route('revisor.dashboard')->with('success', 'Hai accettato l\'articolo');
    }

    public function rejectArticle(Article $article){
        $article->is_accepted = false;
        $article->save();
        return redirect()->route('revisor.dashboard')->with('success', 'Hai rifiutato l\'articolo');
    }

    public function undoArticle(Article $article){
        $article->is_accepted = null;
        $article->save();
        return redirect()->route('revisor.dashboard')->with('success', 'Hai riportato l\'articolo in revisione');
    }
}
