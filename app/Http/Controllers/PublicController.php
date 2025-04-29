<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ContactMessage;


class PublicController extends Controller
{
    public function contact(){
        return view('public.contact');
    }

    public function about(){
        return view('public.about');
    }

    public function home(){
        return view('welcome');
    }

    public function submitForm(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email',
            'message' => 'required|string|max:2000',
        ]);
        ContactMessage::create($validated);
        return redirect()->back()->with('success', 'Votre message a été envoyé avec succès.');
    }

}


