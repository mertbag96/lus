<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use Illuminate\View\View;

class PageController extends Controller
{
    /**
     * Summary of home
     *
     * @return View
     */
    public function home(): View
    {
        return view('website.pages.home');
    }

    /**
     * Summary of terms
     *
     * @return View
     */
    public function terms(): View
    {
        return view('website.pages.terms');
    }

    /**
     * Summary of privacy
     *
     * @return View
     */
    public function privacy(): View
    {
        return view('website.pages.privacy');
    }

    /**
     * Summary of login
     *
     * @return View
     */
    public function login(): View
    {
        return view('website.pages.auth.login');
    }

    /**
     * Summary of register
     *
     * @return View
     */
    public function register(): View
    {
        return view('website.pages.auth.register');
    }

    /**
     * Summary of forgotPassword
     *
     * @return View
     */
    public function forgotPassword(): View
    {
        return view('website.pages.auth.forgot-password');
    }

    /**
     * Summary of resetPassword
     *
     * @return View
     */
    public function resetPassword(): View
    {
        return view('website.pages.auth.reset-password');
    }
}
