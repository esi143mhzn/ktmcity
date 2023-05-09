<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Food;
use App\Models\Destination;
use App\Models\Hotel;
use App\Models\BookRide;
use App\User;


use Mail;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Traits\NepEngDate;
use Response;

class FrontendController extends Controller
{
    // use NepEngDate;
    private $_notify_message = null;
    private $_notify_type = "success";

    // public function __construct() {
    //     $navbar_flashnews = Flashnews::where('status', 1)->orderBy('created_at', 'desc')->limit(5)->get();
    //     $navbar_publications = Publication::limit(10)->get();

    //     view()->share(compact('navbar_flashnews', 'navbar_publications'));
    // }

    public function food() {
        $foods = Food::where('status', 1)->get();
        

        return view('frontend.food', compact('foods'));
    }

    public function destination() {
        $destinations = Destination::where('status', 1)->get();
        
        return view('frontend.destination', compact('destinations'));
    }

    public function hotel() {
        $hotels = Hotel::where('status', 1)->get();
        
        return view('frontend.hotel', compact('hotels'));
    }

    public function bookRide(Request $request) {
        try {
            $data = $request->all();
            BookRide::create($data);

            $this->_notify_message = "Book Ride submitted.";
        } catch (Exception $e) {
            $this->_notify_message = "Failed to submit book ride, Try again.";
            $this->_notify_type = "danger";
        }

        return redirect()->back()->with([
            'notify_message' => $this->_notify_message,
            'notify_type' => $this->_notify_type,
        ]);
    }

    public function register(Request $request) {
        try {
            $request['password'] = bcrypt($request->password);
            $data = $request->all();
            User::create($data);

            $this->_notify_message = "User Registered.";
        } catch (Exception $e) {
            $this->_notify_message = "Failed to submit register, Try again.";
            $this->_notify_type = "danger";
        }

        return redirect()->back()->with([
            'notify_message' => $this->_notify_message,
            'notify_type' => $this->_notify_type,
        ]);
    }


}
