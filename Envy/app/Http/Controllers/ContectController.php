<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContectController extends Controller
{
    public function submit(Request $req) {
        $validation = $req->validate([
            'author' => 'required|min:3|max:35',
            'fullText' => 'required|min:25|max:555'
        ]);

//        $contact = new Contact();
//        $contact->author = $req->input('author');
//        $contact->theme = $req->input('theme');
//        $contact->teg = $req->input('teg');
//        $contact->fullText = $req->input('fullText');
//
//        $contact->save();
//
//        return redirect()->route('/catalog');
    }
}
