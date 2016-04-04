<?php

namespace DoiAssistant\Http\Controllers;

use DoiAssistant\Http\Requests;
use DoiAssistant\ProquestSubmissionEtd as Etd;
use Illuminate\Http\Request;
use Zofe\Rapyd\DataGrid\DataGrid;
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
        return view('welcome');
    }
}
