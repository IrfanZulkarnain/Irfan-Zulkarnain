<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades;
use Illuminate\Http\Request;
use App\Models\Property;
use App\Models\User;
use App\Models\Booking;

class PropertyController extends Controller
{
    public function index()
    {
        $properties = Property::getProperties();
        return view('/users/properties/index', compact("properties"));
    }

    public function list($userId)
    {
        $properties = Property::getPropertyByOwner($userId);
        return view('/users/properties/list', compact("properties"));
    }

    public function create()
    {
        return view("/users/properties/create");
    }

    public function edit($propertyId)
    {
        $property = Property::getPropertyInfo($propertyId);
        return view("/users/properties/edit", compact("property"));
    }

    public function show($propertyId)
    {
        $property = Property::getPropertyInfo($propertyId);
        $user = User::getCommonInfo($property->user_id);
        return view("/users/properties/show", compact("property", "user"));
    }

    public function store(Request $request)
    {
        $property = new Property();
        $property->strtAddress = $request->txtstrtAddress;
        $property->city = $request->txtcity;
        $property->state = "Johor";
        $property->zip = $request->txtzip;
        $property->title = $request->txttitle;
        $property->price = $request->txtprice;
        $property->toilet = $request->txttoilet;
        $property->bedroom = $request->txtbedroom;
        $property->brief_description = $request->txtbrief_description;
        $property->description = $request->txtdescription;
        $property->rules = $request->txtrules;
        $property->facilities = $request->txtfacilities;
        $property->availability = "1";
        $property->user_id = session("id");
        $property->save();

        return redirect()->route('properties.index');
    }

    public function update($id, Request $request)
    {
        $property = Property::find($id);
        $property->strtAddress = $request->txtstrtAddress;
        $property->city = $request->txtcity;
        $property->state = "Johor";
        $property->zip = $request->txtzip;
        $property->title = $request->txttitle;
        $property->price = $request->txtprice;
        $property->toilet = $request->txttoilet;
        $property->bedroom = $request->txtbedroom;
        $property->brief_description = $request->txtbrief_description;
        $property->description = $request->txtdescription;
        $property->rules = $request->txtrules;
        $property->facilities = $request->txtfacilities;
        $property->availability = $request->txtavailability;
        $property->user_id = session("id");
        $property->save();

        return redirect()
            ->route("properties.edit", [$id])
            ->with("msg", "Homestay sucessfully updated");
    }

    public function destroy()
    {
        dd("This is destroy method");
    }
}
