<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\currency;
use App\Models\Payment;
use App\Models\Pricing;
use App\Models\Subscription;
use App\Models\User;
use Brian2694\Toastr\Facades\Toastr;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class PaymentController extends Controller
{
    public function payment_gateways(){
        $page_data['payment_gateways'] = Payment::get();
        return view('admin.payment.index', $page_data);
    }

    public function payment_status($id, $status){
       $status = $status == 1 ? 0: 1;
       Payment::where('id', $id)->update(['status'=>$status]);
       Toastr::success(get_phrase('Status Changed successfully!'), get_phrase('Success'));
       return redirect()->back();
    }

    public function payment_edit($id){
        $page_data['payment_gateway'] = Payment::where('id', $id)->first();
        $page_data['currencies'] = currency::get();
        return view('admin.payment.edit', $page_data);
    }

    public function payment_update($id, Request $request){
        $payment['currency'] = $request->currency;
        foreach($request->label as $key => $label) {
            $payment[$label] = $request->payment[$key];
        }
        Payment::where('id', $id)->update(['keys'=>json_encode($payment)]);
        Toastr::success(get_phrase('Payment credentials update successfully!'), get_phrase('Success'));
        return redirect()->back();
    }

    public function payment_index($id) {
        $package = Pricing::where('id',$id)->first();
        $page_data['package'] = $package;
        $page_data['payment_gateways'] = Payment::get();
        // $payment_details['package_name'] = $package->name;
        // $payment_details['cancel_url'] = route('pricing');
        // $payment_details['success_url'] = Payment::success_url();
        Session::put('package_details', $package);
        return view('payment.index', $page_data);
    }

    public function payment_button($identifier) {
        $page_data['payment_gateway'] = Payment::where('identifier', $identifier)->first();
        return view('payment.'.$identifier.'.index', $page_data);
    }

    public function payment_success($identifier) {
        $package = session('package_details');
        if($package->period == 'semiannually'){
            $days = 180;
        }elseif($package->period == 'monthly'){
            $days = 30;
        }else{
            $days = 365;
        }
        $sub['user_id'] = user('id');
        $sub['package_id'] = $package->id;
        $sub['paid_amount'] = $package->price;
        $sub['payment_method'] = $identifier;
        $sub['status'] = 1;
        $sub['auto_subscription'] = 0;
        // $sub['transaction_keys'] = array();
        $sub['expire_date'] = strtotime('+'.$days.' days');;
        $sub['date_added'] = time();
        $sub['created_at'] = Carbon::now();
        $sub['updated_at'] = Carbon::now();
        Subscription::insert($sub);
        User::where('id', user('id'))->update(['is_agent'=>1]);
        Toastr::success(get_phrase('Subscription successfully!'), get_phrase('Success'));
        return redirect()->route('pricing');
    }
}
