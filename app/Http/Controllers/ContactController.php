<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\contact;

use App\Mail\careers;

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

        if ($request->name == "MartinPem") {
            return redirect('/');
        } else {
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


    public function careers(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|alpha',
            'email' => 'required|email|min:10|max:30',
            'position' => 'required|min:5|max:50',
            'message' => 'required|min:10|max:100',
            'cv' => 'file|mimetypes:application/pdf',

        ]);

        $data = [
            'email' => request('email'),
            'name' => request('name'),
            'position' => request('position'),
            'message' => request('message'),
            'cv_file' => request('cv'),
        ];

        try {
            \Mail::to('info@tasaweeq.com')->send(new careers($data));
        } catch (\Exception $e) {
            dd($e->getMessage());
        }
        return redirect('/');
    }
}
