<?php

namespace App\Http\Controllers\Customer;

use App\Http\Controllers\Controller;
use App\Models\Appointment;
use App\Models\Pricing;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function wishlist() 
    {
        $page_data['active'] = 'wishlist';
        return view('user.customer.wishlist', $page_data);
    }

    public function appointment() 
    {
        $page_data['active'] = 'userAppointment';
        $page_data['appointments'] = Appointment::where('customer_id', user('id'))->get();
        return view('user.customer.appointment.index', $page_data);
    }

    public function become_an_agent()
    {
        $page_data['packages'] = Pricing::get();
        $page_data['active'] = 'become_an_agent';
        return view('user.customer.become_an_agent', $page_data);
    }

    function generateUniqueCode($length = 16) {
        // Generate random bytes
        $bytes = random_bytes($length / 2);
        // Convert to hexadecimal representation
        return bin2hex($bytes);
    }

    function user_messages($prefix = "", $id = ""){
        if ($id) {
            $page_data['current_message_thread_code'] = round(''); // $param2 = message_thread_code
            $page_data['first_sender'] = $message_thread_details->sender;
            $page_data['sender'] = user('id');
            $page_data['receiver'] = $id;
        }
        // $page_data['messages'] = Message::where('message_thread_code' , $param2)->get();
        $page_data['active'] = 'message';
        return view('user.message.index', $page_data);
    }

    // function user_message_body($prefix = ""){
    //     $page_data['active'] = 'message';
    //     return view('user.message.index', $page_data);
    // }
}

