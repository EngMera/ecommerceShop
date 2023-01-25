<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Order;
use Illuminate\Support\Carbon;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Support\Facades\Mail;
use App\Mail\InvoiceOrderMailable;

class OrderController extends Controller
{
    public function index(Request $request)
    {
        // $todayDate = Carbon::now();
        // $orders = Order::whereDate('created_at',$todayDate)->paginate(5);

        $todayDate = Carbon::now()->format('Y-m-d');
        $orders = Order::when($request->date != null, function($q) use ($request)
                        {
                            return $q->whereDate('created_at',$request->date);
                        }, function($q) use ($todayDate)
                        {
                            $q->whereDate('created_at',$todayDate);
                        })
                        ->when($request->status != null, function($q) use ($request)
                        {
                            return $q->where('status_code',$request->status);
                        })
                        ->paginate(5);

        return view('admin.orders.index',compact('orders'));
    }
    public function show($orderId)
    {
        $order = Order::where('id',$orderId)->first();
        if ($order)
        {
            return view('admin.orders.view',compact('order'));
        }
        else
        {
            return redirect('admin/orders')->with('message','Order Id Not Found');
        }
    }
    public function updateOrderStatus(int $orderId , Request $request)
    {
        $order = Order::where('id',$orderId)->first();
        if ($order)
        {
            $order->update([
                'status_code' => $request->order_status
            ]);
            return redirect('admin/orders/'.$orderId)->with('message', 'Order Status Updated');
        }
        else
        {
            return redirect('admin/orders/'.$orderId)->with('message','Order Id Not Found');
        }
    }
    public function viewInvoice(int $orderId )
    {
        $order = Order::findOrFail($orderId);
        return view('admin.invoice.generate-invoice', compact('order') );
    }
    public function generateInvoice(int $orderId )
    {
        $order = Order::findOrFail($orderId);
        $data = ['order' => $order];
        $todayDate = Carbon::now()->format('d-m-y');
        $pdf = Pdf::loadView('admin.invoice.generate-invoice', $data);
        return $pdf->download('invoice'.$orderId.'-'.$todayDate.'.pdf');
    }
    public function mailInvoice($orderId)
    {
        
        try
        {
            $order = Order::findOrFail($orderId);
            Mail::to("$order->email")->send(new InvoiceOrderMailable($order));
            return redirect('/admin/orders/'.$orderId)->with('message','Invoice has been sent to '.$order->email);

        }
        catch (\Exception $e )
        {
            return redirect('/admin/orders/'.$orderId)->with('message','Something Went Wrong .!');
        }
    }
}
