@extends('layout.master')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Bulk Register DOI's</div>

                <div class="panel-body">
                    {!! $grid !!}
                </div>

            </div>
            <div>
                <a href="/spreadsheet/upload-spreadsheet" class="btn btn-primary">Upload New Spreadsheet</a>
            </div>
        </div>
    </div>
</div>
@endsection
