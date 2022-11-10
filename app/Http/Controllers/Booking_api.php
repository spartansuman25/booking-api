<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use Illuminate\Http\Request;

class Booking_api extends Controller
{
    public function index($id=null)
    {
        $booking=new Booking();
        return $id?$booking->find($id):$booking->all();
    }
}
