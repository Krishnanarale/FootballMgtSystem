<?php

namespace App\Http\Controllers;

use App\Contact;
use App\Page;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    //
    public function about()
    {
        $content = Page::where('url', 'about-us')->first();
        return view('about-us', compact('content'));
    }


    public function contact()
    {
        $content = Page::where('url', 'contact-us')->first();
        return view('contact-us', compact('content'));
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
