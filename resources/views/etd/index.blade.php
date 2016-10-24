@extends('layout.master')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">Submitted Electronic Theses & Dissertations</div>

                <div class="panel-body">
                    {!! $grid !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
