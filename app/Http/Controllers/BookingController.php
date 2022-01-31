<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Property;
use App\Models\User;
use App\Models\Booking;

class BookingController extends Controller
{
    public function index(Request $userId)
    {
        
        $bookings = Booking::getBookingsCustomer($userId);
        
        return view("/users/bookings/index", compact("bookings"));
    }

    public function getBookingsOwner($property_owner_id)
    {
        $bookings = Booking::getBookingIndex();
        return view("/users/bookings/list", "booking");
    }

    public function create()
    {
        return view("/users/bookings/create");
    }

    public function show($bookingId)
    {
        $booking = Booking::getBooking($bookingId);
        return view("/users/bookings/show", compact("booking"));
    }

    public function store(Request $request)
    {
        $booking = new Booking();
        $booking->user_id = session("id");
        $booking->start_date = $request->txtstart_Date;
        $booking->end_date = $request->txtend_Date;
        $booking->property_id = $request->txtproperty_id;
        $booking->save();
        return redirect()->route('bookings.index', $booking->user_id);
    }

    public function update()
    {
        dd("This is update method");
    }

    public function destroy()
    {
        dd("This is destroy method");
    }
}
