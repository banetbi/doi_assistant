<?php

namespace DoiAssistant\Http\Controllers;

use DoiAssistant\Http\Requests;
use DoiAssistant\ProquestSubmissionEtd as Etd;
use Illuminate\Http\Request;
use Zofe\Rapyd\DataGrid\DataGrid;

class EtdController extends Controller
{
    /**
     * Show the ETD dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //$arrProquestEtds = ProquestSubmissionEtd::all();
        $grid = DataGrid::source(new Etd);
        $grid->add('id', 'Id', true);
        $grid->add('{{basename($document_path)}}', 'Document');
        $grid->add('{{basename($metadata_path)}}', 'Metadata');
        $grid->add('processed', 'Processed?');
        $grid->add('updated_at', 'Updated');
        return view('etd.index', compact('grid'));
    }
}
