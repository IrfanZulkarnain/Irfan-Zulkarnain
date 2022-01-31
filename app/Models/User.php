<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class User extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table = "user";
    protected $primaryKey = "id";

    public static function getCommonInfo($userId)
    {
        return DB::table("user")
            ->select("id", "fname", "lname", "email", "phone", "password")
            ->where("id", $userId)
            ->first();
    }

    public function getUsers()
    {
        return DB::table("user")
            ->get();
    }

    public function getUserId($email, $password)
    {
        return DB::table("user")
            ->select("id", "fname")
            //   ("attribute dalam database",
            ->where("email", $email)
            ->where("password", $password)
            ->first();
    }

    public function getUserfname($id)
    {
        return DB::table("user")
            ->select("fname", "id")
            ->where("id", $id)
            ->first();
    }

}
