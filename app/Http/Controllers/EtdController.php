<?php

namespace DoiAssistant\Http\Controllers;

use DoiAssistant\Http\Requests;
use DoiAssistant\ProquestSubmissionEtd as Etd;
use Illuminate\Http\Request;
use Zofe\Rapyd\DataGrid\DataGrid;
use Zofe\Rapyd\DataEdit;

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
        $grid->add('<a href="/etd/show/{{$id}}">{{$id}}</a>', 'Id', true);
        $grid->add('{{basename($document_path)}}', 'Document');
        $grid->add('{{basename($metadata_path)}}', 'Metadata');
        $grid->add('{{basename($university_agreement_path)}}', 'University Agreement');
        $grid->add('{{basename($dissertation_defense_path)}}', 'Signature Page');
        $grid->add('{{$processed == 1 ? "True" : "False"}}', 'Processed?');
        $grid->add('{{date("m/d/Y", strtotime($updated_at))}}', 'Updated');
        return view('etd.index', compact('grid'));
    }
    
    public function show($id) {
        $form = DataEdit::source(Etd::find($id));

    }
}
