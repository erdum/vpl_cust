<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\Number;
use App\Models\User;
use App\Models\Invoice;


class BillingController extends Controller
{
    public function billing(){

        $user = Auth::user();
        $numbers = Number::where('current_user_id', $user->id)->get();
        $invoice = Invoice::where('user_id', $user->id)->get();

        $test = (object) [
            'payment_methods' => [
                (object) [
                    'id' => 'adfwqewredt4',
                    'brand' => 'visa',
                    'last_digits' => '4242',
                    'expiry_month' => '12',
                    'expiry_year' => '2025',
                    'updated_at' => now()
                ],
            ]
        ];

        // dd($user->invoices);
        return view('billings.index',[
            'test_Card' => $test,
            'numbers' => $numbers,
            'user' =>$user,
        ]);
    }
}