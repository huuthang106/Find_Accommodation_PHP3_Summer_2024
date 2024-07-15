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
        return view('index');
    }

    public function tables_advanced()
    {
        return view('admincp.tables-advanced');
    }
    public function charts()
    {
        return view('admincp.charts');
    }
    public function componetns_widgets()
    {
        return view('admincp.components-widgets');
    }
    public function extras_contacts()
    {
        return view('admincp.extras-contacts');
    }
    public function extras_pricing()
    {
        return view('admincp.extras-pricing');
    }
    public function extras_profile()
    {
        return view('admincp.extras-profile');
    }
    public function layouts_dark_sidebar()
    {
        return view('admincp.layouts-dark-sidebar');
    }
    public function layouts_horizontal()
    {
        return view('admincp.layouts-horizontal');
    }
    public function layouts_sidebar_collapsed()
    {
        return view('admincp.layouts-sidebar-collapsed');
    }
    public function layouts_small_sidebar()
    {
        return view('admincp.layouts-small-sidebar');
    }
    public function pages_404()
    {
        return view('admincp.pages-404');
    }
    public function pages_confirm_mail()
    {
        return view('admincp.pages-confirm-mail');
    }
    public function pages_forget_password()
    {
        return view('admincp.pages-forget-password');
    }
    public function pages_login()
    {
        return view('admincp.pages-login');
    }
    public function pages_register()
    {
        return view('admincp.pages-register');
    }
    public function pages_session_expired()
    {
        return view('admincp.pages-session-expired');
    }

    public function pages_notification()
    {
        return view('admincp.pages-notification');
    }

    public function pages_notification_detail()
    {
        return view('admincp.pages-notification-detail');
    }

    public function pages_commet()
    {
        return view('pages.pages-commet');
    }


    public function pages_room()
    {
        return view('pages.pages-room');
    }


    public function pages_evaluate()
    {
        return view('pages.pages-evaluate');
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
