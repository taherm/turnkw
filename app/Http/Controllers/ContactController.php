<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\contact;
use App\Mail\careers;

use App\Mail\maintenance;

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
                \Mail::to('mgm@turnkw.com')->send(new contact($data));
            } catch (\Exception $e) {
                dd($e->getMessage());
            }
            return redirect('/');
        }
    }


    public function maintenance(Request $request)
    {
        $validatedData = $request->validate([
            'type' => 'required|alpha',
            'location' => 'required|min:5|max:30',
            'branch_name' => 'required|min:5|max:20',
            'branch_no' => 'required|digits:8',
            'working_hours' => 'required|digits:1',
            'image' => 'required|image',

        ]);

        $data = [
            'type' => request('type'),
            'location' => request('location'),
            'branch_name' => request('branch_name'),
            'branch_no' => request('branch_no'),
            'working_hours' => request('working_hours'),
            'image' => request('image'),
        ];

        try {
            \Mail::to('mgm@turnkw.com')->send(new maintenance($data));
        } catch (\Exception $e) {
            dd($e->getMessage());
        }
        return redirect('/');
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
            \Mail::to('mgm@turnkw.com')->send(new careers($data));
        } catch (\Exception $e) {
            dd($e->getMessage());
        }
        return redirect('/');
    }
}
