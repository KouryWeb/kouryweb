<?php

use App\Mail\ContactFormSent;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});
Route::post('/', function () {
    $response = Http::asForm()->post('https://www.google.com/recaptcha/api/siteverify', [
        'secret' => config('services.recaptcha.secret_key'),
        'response' => request()->input('g-recaptcha-response'),
        'remoteip' => request()->ip(),
    ]);

    $body = json_decode((string) $response->getBody());

    if ($body->success) {
        request()->validate([
            'contact_email' => ['required', 'string', 'email', 'max:255'],
        ]);
        Mail::to('phil@kouryweb.com')->send(new ContactFormSent(request('contact_email')));

        return redirect()->back()->with('success', 'Your message has been sent successfully!');
    }

    return redirect()->back()->with('success', 'Thanks for your message.');
})->name('contact');
