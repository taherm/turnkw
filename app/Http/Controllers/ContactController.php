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
            'email' => 'required|email',
            'subject' => 'required',
            'message' => 'required',

        ]);

        $data = [
            'email' => request('email'),
            'name' => request('name'),
            'subject' => request('subject'),
            'message' => request('message')
        ];
        //dd($data['name']);

        try {
            \Mail::to('info@tasaweeq.com')->send(new contact($data));
        } catch (\Exception $e) {
            dd($e->getMessage());
        }
        return redirect('/');
    }
}
