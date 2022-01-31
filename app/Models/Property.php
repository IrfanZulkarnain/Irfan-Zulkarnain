<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Property extends Model
{
    use HasFactory;

    public $timestamps = false;
    protected $table = "property";
    protected $primaryKey = "id";

    public function getProperties()
    {
        return DB::table("property")
            ->get();
    }

    public function getPropertyId($propertyId)
    {
        return DB::table("property")
            ->select("id")
            ->where("id", $propertyId)
            ->first();
    }

    public function getPropertyInfo($propertyId)
    {
        return DB::table("property")
            ->select("*")
            ->where("id", $propertyId)
            ->first();
    }

    public function getPropertyByOwner($userId)
    {
        return DB::table("property")
            ->select("*")
            ->where("user_id", $userId)
            ->whereIn('user_id', [session("id")])
            ->get();
    }

    public function getPropertyBooked($propertyId)
    {
        return DB::table("property")
            ->select("*")
            ->where("id", $propertyId)
            ->first();
    }
}
