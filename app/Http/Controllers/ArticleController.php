<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Etat;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Intervention\Image\Facades\Image;

class ArticleController extends Controller
{

    /**
     * @return Application|Factory|\Illuminate\Contracts\View\View
     */
    public function create()
    {
        return view('articles.create', [
            'etats' => Etat::all(),
        ]);
    }

    public function store(Request $request)
    {
        $data = $this->validateRequest($request);
        $data['slug'] = Str::slug($request['titre']);
        if ($request->has('image')) {
            $image = $request->file('image')->store('img/articles', 'public');
            $data['image'] = 'storage/'.$image;
        }
        $article = Article::create($data);

//        Image::make($article->image)->resize(1200, 800)->save();

//        $article->slug = $article->slug.'-'.$article->id;
        $article->save();

        return redirect()->route('dashboard.articles')->with('success', 'article modifié');
    }


    public function show(Article $article)
    {
        if ($article->publie() or (!$article->publie() and Auth::user())) {
            return view('articles.show', [
            'article' => $article,
            'articles_similaires' => Article::all()->where('id', '!=', $article->id)->random(2),
        ]);
        } else {
            return back();
        }
    }

    /**
     * @param Article $article
     * @return Application|Factory|\Illuminate\Contracts\View\View
     */
    public function edit(Article $article)
    {
        return view('articles.edit', [
            'article' => $article,
            'etats' => Etat::all(),
        ]);
    }

    /**
     * @param Request $request
     * @param Article $article
     * @return RedirectResponse
     */
    public function update(Request $request, Article $article): RedirectResponse
    {
        $data = $this->validateRequest($request);
        if ($request->has('image')) {
            $image = $request->file('image')->store('img/articles', 'public');
            $data['image'] = 'storage/'.$image;
            Storage::disk('public')->delete($article->image);
        }
//        $data['slug'] = Str::slug($data['titre']).'-'.$article->id;
        $data['slug'] = Str::slug($data['titre']);
        $article->update($data);
        return back()->with('success', 'article modifié');
    }

    /**
     * @param Article $article
     * @return RedirectResponse
     */
    public function delete(Article $article): RedirectResponse
    {
        if (isset($article->image)) {
            Storage::disk('public')->delete($article->image);
        }
        $article->delete();
        return redirect()->route('dashboard.articles')->with('success', 'article supprimé');
    }

    //---------------------------------------------------


    private function validateRequest(Request $request)
    {
        return $request->validate([
            'etat_id' => 'required|integer',
            'titre' => 'required',
            'date_publication' => 'required',
            'date_publication_order' => 'required',
            'meta_titre' => 'required',
            'meta_description' => 'required',
            'image' => 'image|mimes:jpg,jpeg,png|nullable',
            'description' => 'required',
            'contenu' => 'required',
        ]);
    }


}
