<?php

namespace App\Http\Controllers\AdminPanel;

use App\Models\Order;
use App\Models\OrderDetail;
use App\Exports\OrderExport;
use Illuminate\Http\Request;
// use Maatwebsite\Excel\Excel;
use Excel;
use App\Http\Controllers\Controller;

class AdminPanelController extends Controller
{
    public function dashboard()
    {
        return view('adminpanel.dashboard');
    }
    public function sales()
    {
        return view('adminpanel.sale');
    }
    public function order()
    {
        $orders = Order::all();
        return view('adminpanel.order', compact('orders'));
    }
    public function pendingorder()
    {
        $orders = Order::where('status','Pending')->get();
        return view('adminpanel.pendingorders',compact('orders'));
    }
    public function deliveredorder()
    {
        $orders = Order::where('status','Delivered')->get();
        return view('adminpanel.deliveredorder',compact('orders'));
    }
    //export order details
    public function exportorder()
    {
        return Excel::download(new OrderExport,'order_details.xlsx');
    }
    public function userorders($id)
    {
        $orders = OrderDetail::where('order_id',$id)->get();
        return view('adminpanel.userorders', compact('orders'));
    }
    public function analytics()
    {
        return view('adminpanel.analytics');
    }
}
