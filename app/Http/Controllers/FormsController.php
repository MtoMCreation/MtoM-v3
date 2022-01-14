<?php

namespace App\Http\Controllers;

use App\Mail\CallToAction;
use App\Mail\Contact;
use App\Mail\Formation;
use App\Mail\PresentationProjet;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class FormsController extends Controller
{

    public function testForm(Request $request)
    {
        dd('test');
    }

    /**
     * @param Request $request
     * @return RedirectResponse
     */
    public function contact(Request $request): RedirectResponse
    {
//        dd($request->all());
        $data = $request->validate([
            'nom' => 'required',
            'telephone' => 'required',
            'email' => 'required',
            'message' => 'required'
        ]);
//        dd($data);
        Mail::to('info@mtom-creation.com')->send(new Contact($data));
        return redirect()->back()->with('success', 'Merci, nous avons bien reçu votre demande');
    }

    /**
     * @param Request $request
     * @return RedirectResponse
     */
    public function presentationProjet(Request $request): RedirectResponse
    {
        $data = $request->validate([
            'nom' => 'required',
            'telephone' => 'required',
            'courriel' => 'required|email',
            'type' => 'required',
            'demande_concerne' => 'required',
            'message' => 'required'
        ]);

        Mail::to('info@mtom-creation.com')->send(new PresentationProjet($data));

        return redirect()->back()->with('success', 'Nous avons bien reçu votre courriel');
    }

    /**
     * @param Request $request
     * @return RedirectResponse
     */
    public function formation(Request $request): RedirectResponse
    {
        $data = $request->validate([
            'nom' => 'required',
            'telephone' => 'required',
            'email' => 'required|email',
            'formation' => 'required',
            'message' => 'required'
        ]);

//        dd($data);
        Mail::to('info@mtom-creation.com')->send(new Formation($data));
        return redirect()->back()->with('success', 'Nous avons bien reçu votre demande de formation');
    }

    public function callToAction(Request $request): RedirectResponse
    {
//        dd($request->all());
        $data = $request->validate([
            'nom' => 'required',
            'email' => 'required|email'
        ]);
        Mail::to('info@mtom-creation.com')->send(new CallToAction($data));
        return back()->with('success', 'Merci beaucoup, nous prendrons contact au plus vite avec vous ');
    }
}
