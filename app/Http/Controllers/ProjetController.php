<?php

namespace App\Http\Controllers;

use App\Models\Categorie;
use App\Models\Etat;
use App\Models\Projet;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class ProjetController extends Controller
{

    public function create()
    {
        return view('projets.create', [
            'etats' => Etat::all(),
            'categories' => Categorie::all(),
        ]);
    }

    public function store(Request $request)
    {
        $this->projetStore($request);
        return redirect()->route('dashboard.projets')->with('success', 'Projet ajouté');
    }


    /**
     * @param Projet $projet
     * @return Application|Factory|View
     */
    public function edit(Projet $projet)
    {
        return view('projets.edit', [
            'projet' => $projet,
            'etats' => Etat::all(),
            'categories' => Categorie::all(),
        ]);
    }

    /**
     * @param Request $request
     * @param Projet $projet
     * @return RedirectResponse
     */
    public function update(Request $request, Projet $projet): RedirectResponse
    {
        $this->projetUpdate($request, $projet);
        return back()->with('success', 'Projet modifié');
    }

    /**
     * @param Projet $projet
     * @return Application|Factory|View
     */
    public function show(Projet $projet)
    {
        return view('projets.show', [
            'projet' => $projet,
            'projets_similaires' => Projet::with('categories')->get()
                ->where('id', '!=', $projet->id)
                ->where('etat_id', 2)
                ->random(2),
        ]);
    }

    /**
     * @param Projet $projet
     * @return RedirectResponse
     */
    public function delete(Projet $projet): RedirectResponse
    {
        if (isset($projet->logo)){
            Storage::disk('public')->delete($projet->logo);
        }
        if (isset($projet->image)) {
            Storage::disk('public')->delete($projet->image);
        }
        if (isset($projet->image_reponse)) {
            Storage::disk('public')->delete($projet->image_reponse);
        }

        $projet->delete();
        return redirect()->route('dashboard.projets')->with('success', 'Projet Supprimé');
    }


// ---------------------------------------------------------------------------------------------



    /**
     * @param Request $request
     * @return array
     */
    private function validateRequest(Request $request): array
    {
        return $request->validate([
            'etat_id'                   => 'required|integer',
            'client'                    => 'required',
            'description_prestation'    => 'nullable|string',
            'date_publication'          => 'required',
            'date_publication_order'    => 'required',
            'lien_site'                 => 'required',
            'meta_titre'                => 'required',
            'meta_description'          => 'required',
            'logo'                      => 'image|mimes:jpg,jpeg,png|nullable',
            'image'                     => 'image|mimes:jpg,jpeg,png|nullable',
            'demande'                   => 'required',
            'image_reponse'             => 'image|mimes:jpg,jpeg,png|nullable',
            'reponse'                   => 'required',
            'temoignage'                => 'nullable|string',
            'nom_temoignage'            => 'nullable|string'
        ]);
    }


    /**
     * @param Request $request
     * @param Projet $projet
     */
    private function projetUpdate(Request $request, Projet $projet)
    {
        $data = $this->validateRequest($request);
//        $data['slug'] = Str::slug($data['client']).$projet->id;
        $data['slug'] = Str::slug($data['client']);

        if ($request->has('logo')) {
            $logo = $request->file('logo')->store('img/projets/logos', 'public');
            $data['logo'] = 'storage/'.$logo;
            Storage::disk('public')->delete($projet->logo);
        }

        if ($request->has('image')) {
            $image = $request->file('image')->store('img/projets/img', 'public');
            $data['image'] = 'storage/'.$image;
            Storage::disk('public')->delete($projet->image);
        }

        if ($request->has('image_reponse')) {
            $image_reponse = $request->file('image_reponse')->store('img/projets/img', 'public');
            $data['image_reponse'] = 'storage/'.$image_reponse;
            Storage::disk('public')->delete($projet->image_reponse);
        }

        $projet->categories()->sync($request['categories']);

        $projet->update($data);

    }


    /**
     * @param Request $request
     */
    private function projetStore(Request $request)
    {
        $data = $this->validateRequest($request);
        if ($request->has('logo')) {
            $logo = $request->file('logo')->store('img/projets/logos', 'public');
            $data['logo'] = 'storage/'.$logo;
        }

        if ($request->has('image')) {
            $image = $request->file('image')->store('img/projets/img', 'public');
            $data['image'] = 'storage/'.$image;
        }

        if ($request->has('image_reponse')) {
            $image = $request->file('image')->store('img/projets/img', 'public');
            $data['image'] = 'storage/'.$image;
        }
        $data['slug'] = Str::slug($data['client']);
        $projet = Projet::create($data);
        $projet->categories()->sync($request['categories']);
//        $projet->slug = $data['slug'].'-'.$projet->id;
        $projet->slug = $data['slug'];
        $projet->save();
    }




}
