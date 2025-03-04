<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Booking;
use Illuminate\Support\Facades\Auth;

class BookingController extends Controller
{
    // Hiển thị form đặt vé
    public function showBooking()
    {
        return view('booking');
    }

    // Xử lý đặt vé
    public function bookTicket(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'phone' => 'required|string|max:15',
            'email' => 'required|email|max:255',
            'showtime' => 'required|string',
            'quantity' => 'required|integer|min:1',
        ], [
            'name.required' => 'Vui lòng nhập họ tên.',
            'phone.required' => 'Vui lòng nhập số điện thoại.',
            'email.required' => 'Vui lòng nhập email.',
            'showtime.required' => 'Vui lòng chọn suất chiếu.',
            'quantity.required' => 'Vui lòng chọn số lượng vé.',
            'quantity.min' => 'Số lượng vé phải lớn hơn 0.',
        ]);

        Booking::create([
            'user_id' => Auth::id(),
            'name' => $request->name,
            'phone' => $request->phone,
            'email' => $request->email,
            'showtime' => $request->showtime,
            'quantity' => $request->quantity,
        ]);

        return redirect('/')->with('success', 'Đặt vé thành công!');
    }
}
