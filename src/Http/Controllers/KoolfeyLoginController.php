<?php

namespace Koolfey\Koolfey\Http\Controllers;

use Koolfey\Koolfey\Models\Member;
use Koolfey\Koolfey\Models\Customer;
use Illuminate\Http\Request;
use Illuminate\Validation;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Response;
use Koolfey\Koolfey\Http\Controllers\ApiController;
use App\Http\Controllers\Controller;
use Crypt;


class KoolfeyLoginController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    protected $login;
    public function __construct(ApiController $koolfey)
    {
        $this->login = $koolfey;
    }
    public function index()
    {
        return view('Koolfey::koolfey.login');
    }
    public function checklogin(Request $request)
    {
        //return Crypt::encrypt($request->pn);
        $loggedin = $this->login->checkLogin($request);
        if($loggedin)
        {
            //return Response()->json($pn);
            return redirect('/api/koolfey/loading');
        }
        else
        {
            return back()->with('error', 'Wrong Personal Number');
        } 
       
    }
    public function load()
    {
        return view('koolfey.load');
    }
}
