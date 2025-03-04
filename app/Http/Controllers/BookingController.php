<?php 
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Booking;

class BookingController extends Controller
{
    public function showForm()
    {
        return view('booking'); // Trả về trang đặt chuyến đi
    }

    public function store(Request $request)
    {
        $request->validate([
            'fullname' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'required|string|max:15',
            'num_people' => 'required|integer|min:1',
            'trip_date' => 'required|date',
            'total_price' => 'required|numeric',
            'payment_method' => 'required|string',
        ]);

        Booking::create($request->all()); // Lưu vào database

        return redirect()->route('booking.form')->with('success', 'Đặt chuyến đi thành công!');
    }
}
