<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Notification;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

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


    public function charts()
    {
    
        return view('admincp.charts');
    }
    public function componetns_widgets()
    {
 
        return view('admincp.components-widgets');
    }

    public function extras_pricing()
    {
       
        return view('admincp.manages.extras-pricing', );
    }
    public function extras_profile()
    {
      
        return view('admincp.extras-profile', );
    }
  

    public function pages_404()
    {
   
        return view('admincp.error.pages-404');
    }
    public function pages_forget_password()
    {
       
        return view('admincp.pages-forget-password');
    }




    // Phương thức đăng xuất
    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }
 

    // public function pages_notification()
    // {
    //     return view('admincp.pages-notification');
    // }

    // public function pages_notification_detail()
    // {
    //     return view('admincp.pages-notification-detail');
    // }

    public function pages_commet()
    {

        return view('admincp.manages.pages-commet');
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
