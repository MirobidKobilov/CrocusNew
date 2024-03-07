<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Session;

class LocalizationController extends Controller
{
    public function setLang($locale)
    {
        // Set the application locale
        App::setLocale($locale);

        // Store the locale in the session
        Session::put('locale', $locale);

        // Redirect back to the previous page or any desired page
        return redirect()->back();
    }
}
