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
        // Đếm số lượng đã xem hoặc chưa xem (0 là đã xem, 1 là chưa xem)
        $notificationCount = Notification::where('status', 1)->count();

        // Lấy thông báo chưa xem
        $unreadNotifications = Notification::where('status', 1)->get();
        return view('admincp.charts', compact('notificationCount', 'unreadNotifications'));
    }
    public function componetns_widgets()
    {
        // Đếm số lượng đã xem hoặc chưa xem (0 là đã xem, 1 là chưa xem)
        $notificationCount = Notification::where('status', 1)->count();

        // Lấy thông báo chưa xem
        $unreadNotifications = Notification::where('status', 1)->get();
        return view('admincp.components-widgets', compact('notificationCount', 'unreadNotifications'));
    }

    public function extras_pricing()
    {
        // Đếm số lượng đã xem hoặc chưa xem (0 là đã xem, 1 là chưa xem)
        $notificationCount = Notification::where('status', 1)->count();

        // Lấy thông báo chưa xem
        $unreadNotifications = Notification::where('status', 1)->get();
        return view('admincp.extras-pricing', compact('notificationCount', 'unreadNotifications'));
    }
    public function extras_profile()
    {
        // Đếm số lượng đã xem hoặc chưa xem (0 là đã xem, 1 là chưa xem)
        $notificationCount = Notification::where('status', 1)->count();

        // Lấy thông báo chưa xem
        $unreadNotifications = Notification::where('status', 1)->get();
        return view('admincp.extras-profile', compact('notificationCount', 'unreadNotifications'));
    }
    public function layouts_dark_sidebar()
    {
        // Đếm số lượng đã xem hoặc chưa xem (0 là đã xem, 1 là chưa xem)
        $notificationCount = Notification::where('status', 1)->count();

        // Lấy thông báo chưa xem
        $unreadNotifications = Notification::where('status', 1)->get();
        return view('admincp.layouts-dark-sidebar', compact('notificationCount', 'unreadNotifications'));
    }
    public function layouts_horizontal()
    {
        // Đếm số lượng đã xem hoặc chưa xem (0 là đã xem, 1 là chưa xem)
        $notificationCount = Notification::where('status', 1)->count();

        // Lấy thông báo chưa xem
        $unreadNotifications = Notification::where('status', 1)->get();
        return view('admincp.layouts-horizontal', compact('notificationCount', 'unreadNotifications'));
    }
    public function layouts_sidebar_collapsed()
    {
        // Đếm số lượng đã xem hoặc chưa xem (0 là đã xem, 1 là chưa xem)
        $notificationCount = Notification::where('status', 1)->count();

        // Lấy thông báo chưa xem
        $unreadNotifications = Notification::where('status', 1)->get();
        return view('admincp.layouts-sidebar-collapsed', compact('notificationCount', 'unreadNotifications'));
    }
    public function layouts_small_sidebar()
    {
        // Đếm số lượng đã xem hoặc chưa xem (0 là đã xem, 1 là chưa xem)
        $notificationCount = Notification::where('status', 1)->count();

        // Lấy thông báo chưa xem
        $unreadNotifications = Notification::where('status', 1)->get();
        return view('admincp.layouts-small-sidebar', compact('notificationCount', 'unreadNotifications'));
    }
    public function pages_404()
    {
        // Đếm số lượng đã xem hoặc chưa xem (0 là đã xem, 1 là chưa xem)
        $notificationCount = Notification::where('status', 1)->count();

        // Lấy thông báo chưa xem
        $unreadNotifications = Notification::where('status', 1)->get();
        return view('admincp.pages-404', compact('notificationCount', 'unreadNotifications'));
    }
    public function pages_confirm_mail()
    {
        // Đếm số lượng đã xem hoặc chưa xem (0 là đã xem, 1 là chưa xem)
        $notificationCount = Notification::where('status', 1)->count();

        // Lấy thông báo chưa xem
        $unreadNotifications = Notification::where('status', 1)->get();
        return view('admincp.pages-confirm-mail', compact('notificationCount', 'unreadNotifications'));
    }
    public function pages_forget_password()
    {
        // Đếm số lượng đã xem hoặc chưa xem (0 là đã xem, 1 là chưa xem)
        $notificationCount = Notification::where('status', 1)->count();

        // Lấy thông báo chưa xem
        $unreadNotifications = Notification::where('status', 1)->get();
        return view('admincp.pages-forget-password', compact('notificationCount', 'unreadNotifications'));
    }




    // Phương thức đăng xuất
    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }
    public function pages_session_expired()
    {
        // Đếm số lượng đã xem hoặc chưa xem (0 là đã xem, 1 là chưa xem)
        $notificationCount = Notification::where('status', 1)->count();

        // Lấy thông báo chưa xem
        $unreadNotifications = Notification::where('status', 1)->get();
        return view('admincp.pages-session-expired', compact('notificationCount', 'unreadNotifications'));
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
        // Đếm số lượng đã xem hoặc chưa xem (0 là đã xem, 1 là chưa xem)
        $notificationCount = Notification::where('status', 1)->count();

        // Lấy thông báo chưa xem
        $unreadNotifications = Notification::where('status', 1)->get();
        return view('admincp.pages-commet', compact('notificationCount', 'unreadNotifications'));
    }





    public function pages_evaluate()
    {
        // Đếm số lượng đã xem hoặc chưa xem (0 là đã xem, 1 là chưa xem)
        $notificationCount = Notification::where('status', 1)->count();

        // Lấy thông báo chưa xem
        $unreadNotifications = Notification::where('status', 1)->get();
        return view('admincp.pages-evaluate', compact('notificationCount', 'unreadNotifications'));
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
