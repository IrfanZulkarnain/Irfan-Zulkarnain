<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Booking extends Model
{
    use HasFactory;

    public $timestamps = false;
    protected $table = "booking";
    protected $primaryKey = "id";

    // customer punya booking index
    public function getBookings($userId)
    {
        return DB::table("booking")
            ->where("user_id", $userId)
            ->get();
    }

    // customer punya booking show
    public function getBooking($bookingId)
    {
        return DB::table("booking")
            ->select("*")
            ->where("id", $bookingId)
            ->first();
    }

    // customer punya booking index
    public function getBookingsCustomer($booking)
    {
        return DB::table('booking')
            ->select('*')
            ->where('booking.user_id', session("id"))
            ->get();
    }

    public function getBookingsOwner($property_owner_id)
    {
        return DB::table('booking')
            ->join('property', 'property.id', '=', 'booking.property_id')
            ->select('*')
            ->where('property.user_id', $property_owner_id)
            ->get();
    }
}
