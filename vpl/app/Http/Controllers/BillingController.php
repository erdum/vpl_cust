<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\VendorsAPIService;
use App\Models\Country;

class BillingController extends Controller
{
    public function billing(Request $request, VendorsAPIService $vendors){
        $countries = Country::all();

        if ($request->billing_type) {
        }

        if ($request->capability) {
        }

        if ($request->no_legal) {
        }

        if ($request->toll_free) {
        }

        $numbers = $vendors->vendor('DIDX')->get_numbers(
            $request->country,
            $request->prefix
        );
        // $numbers = $vendors->vendor('DIDX')->get_numbers('7');

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

        return view('billings.index',[
            'countries' => $countries,
            'numbers' => $numbers,
            'user' => $test
        ]);
    }
}
