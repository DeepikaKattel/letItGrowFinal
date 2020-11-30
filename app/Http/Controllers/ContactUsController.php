<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Mail;
use App\Models\ContactUs;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Mail\SendContactNotification;
use Illuminate\Support\Facades\DB;

class ContactUsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $contact = new ContactUs();
        $contact->name = request('name');
        $contact->email = request('email');
        $contact->message = request('message');
        $contact->save();
        $contactSave = $contact->save();
        
        if ($contactSave) {  
            $data = array(
                'name' => $request['name'],
                'email' => $request['email'],
                'message' => $request['message'],
            );                 
       
            Mail::to("easycarservicenepal@gmail.com")
                ->send(new SendContactNotification($data));                      
            return redirect()->back()->with("success", "The record has been stored");
        } else {
            return redirect()->back()->with("error", "There is an error");
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ContactUs  $contactUs
     * @return \Illuminate\Http\Response
     */
    public function show(ContactUs $contactUs)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ContactUs  $contactUs
     * @return \Illuminate\Http\Response
     */
    public function edit(ContactUs $contactUs)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ContactUs  $contactUs
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ContactUs $contactUs)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ContactUs  $contactUs
     * @return \Illuminate\Http\Response
     */
    public function destroy(ContactUs $contactUs)
    {
        //
    }
}
