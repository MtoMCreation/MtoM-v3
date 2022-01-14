<?php

namespace App\Http\Controllers;

use App\Models\Media;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class MediaController extends Controller
{

    /**
     * @return Application|Factory|\Illuminate\Contracts\View\View
     */
    public function create()
    {
        return view('medias.create');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'titre' => 'required',
            'media' => 'required|image|mimes:jpg,jpeg,png,pdf'
        ]);
        $image = $request->file('media')->store('img/medias', 'public');
        Media::create([
            'titre' => $data['titre'],
            'url' => 'storage/'.$image,
        ]);
        return redirect()->route('dashboard.medias')->with('success', 'Media ajouté');
    }

    /**
     * @param Media $media
     * @return Application|Factory|\Illuminate\Contracts\View\View
     */
    public function edit(Media $media)
    {
        return view('medias.edit', [
            'media' => $media
        ]);
    }

    /*
     *
     */
    public function update(Request $request, Media $media): RedirectResponse
    {
        $media->update($request->validate([
            'titre' => 'required',
        ]));
        return redirect()->route('dashboard.medias')->with('success', 'Media modifié');
    }

    public function delete(Request $request, Media $media)
    {
        dd($request->all());
    }

}
