<?php

namespace DoiAssistant\Http\Controllers;

use Illuminate\Http\Request;

use DoiAssistant\Http\Requests;

class DatasetController extends Controller
{
    public function index() {
        return view(dataset.index);
    }

    public function show($intId) {

    }

    public function uploadFile($arrFile) {
        
    }

    public function registerDOI($strURL) {

    }

    public function iterateMetaData($fileMetaData) {

    }
}
