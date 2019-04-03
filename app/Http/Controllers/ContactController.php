<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\contact;

class ContactController extends Controller
{
    public function send(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|alpha',
            'email' => 'required|email|min:10|max:30',
            'subject' => 'required|min:5|max:50',
            'message' => 'required|min:10|max:100',

        ]);

        $data = [
            'email' => request('email'),
            'name' => request('name'),
            'subject' => request('subject'),
            'message' => request('message')
        ];

        try {
            \Mail::to('info@tasaweeq.com')->send(new contact($data));
        } catch (\Exception $e) {
            dd($e->getMessage());
        }
        return redirect('/');
    }
}
