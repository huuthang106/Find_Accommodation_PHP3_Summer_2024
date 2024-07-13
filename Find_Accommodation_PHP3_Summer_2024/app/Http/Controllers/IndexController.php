<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndexController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    //router chuyển trang mẫu 
    public function home()
    {
        return view('home');
    }

    public function tables_advanced()
    {
        return view('pages.tables-advanced');
    }
    public function charts()
    {
        return view('pages.charts');
    }
    public function componetns_widgets()
    {
        return view('pages.components-widgets');
    }
    public function extras_contacts()
    {
        return view('pages.extras-contacts');
    }
    public function extras_pricing()
    {
        return view('pages.extras-pricing');
    }
    public function extras_profile()
    {
        return view('pages.extras-profile');
    }
    public function layouts_dark_sidebar()
    {
        return view('pages.layouts-dark-sidebar');
    }
    public function layouts_horizontal()
    {
        return view('pages.layouts-horizontal');
    }
    public function layouts_sidebar_collapsed()
    {
        return view('pages.layouts-sidebar-collapsed');
    }
    public function layouts_small_sidebar()
    {
        return view('pages.layouts-small-sidebar');
    }
    public function pages_404()
    {
        return view('pages.pages-404');
    }
    public function pages_confirm_mail()
    {
        return view('pages.pages-confirm-mail');
    }
    public function pages_forget_password()
    {
        return view('pages.pages-forget-password');
    }
    public function pages_login()
    {
        return view('pages.pages-login');
    }
    public function pages_register()
    {
        return view('pages.pages-register');
    }
    public function pages_session_expired()
    {
        return view('pages.pages-session-expired');
    }

    public function pages_notification()
    {
        return view('pages.pages-notification');
    }

    public function pages_notification_detail()
    {
        return view('pages.pages-notification-detail');
    }

    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
