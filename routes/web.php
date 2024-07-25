<?php

use App\Mail\ContactFormSent;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});
Route::post('/', function () {
    request()->validate([
        'contact_email' => ['required', 'string', 'email', 'max:255'],
    ]);
    Mail::to('phil@kouryweb.com')->send(new ContactFormSent(request('contact_email')));

    return redirect()->back()->with('success', 'Your message has been sent successfully!');
});
