<?php

namespace DoiAssistant\Http\Controllers;

use DoiAssistant\Http\Requests;
use DoiAssistant\ProquestSubmissionEtd;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $arrProquestEtds = ProquestSubmissionEtd::where('processed', 0);
        return view('home', array('arrProquestEtds' =>$arrProquestEtds));
    }
}
