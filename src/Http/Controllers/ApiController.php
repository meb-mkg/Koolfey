<?php
namespace Koolfey\Koolfey\Http\Controllers;

use Koolfey\Koolfey\Models\Member;
use Koolfey\Koolfey\Models\Customer;
use Illuminate\Http\Request;

class ApiController {

    public function checkLogin(Request $request){
        $request->validate([
            'pn' => ['required']
        ]);
        $pn = $request->input('pn');
        $loggedin = \DB::table('members')->where(['personal_number' => $pn])->first();
        return $loggedin;
    }
}