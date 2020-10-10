<?php

namespace App\Http\Controllers;

use App\Contact;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    //
    public function about()
    {
        return view('about-us');
    }


    public function contact()
    {
        return view('contact-us');
    }

    public function contactForm(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'phone' => 'required|numeric',
            'email' => 'required|unique:contacts|max:255',
            'message' => 'required',
        ]);

        $contact = Contact::create($validatedData);
        if ($contact) {
            $request->session()->flash('status', 'Sent successfuly!');
            return redirect('/contact-us');
        } else {
            $request->session()->flash('error', 'Sent failed!');
            return redirect('/contact-us');
        }
    }
}
