@extends('layout.master')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">Select Columns</div>

                    <div class="panel-body">
                        {!! Form::open(['url' => 'spreadsheet/process-spreadsheet/']) !!}
                        <table>
                        @for($i=1; $i < sizeof($arrSheetData); $i++)
                            {!! Form::hidden('id', Request::route('id'))  !!}
                            @foreach($arrSheetData[$i] as $strColumnName)
                                @if($strColumnName != '')
                                <tr>
                                    <td><input type="checkbox" id="{{$strColumnName}}" name="{{$strColumnName}}" value="{{$strColumnName}}" /></td>
                                    <td>{{$strColumnName}}</td>
                                    <td>
                                        <select name="{{$strColumnName}}_selectMatch">
                                            <option value="-----">-----</option>
                                            @if(strpos($strColumnName, 'url') !== false)
                                                <option value="location" selected>URL</option>
                                            @else
                                                <option value="location">URL</option>
                                            @endif
                                            @if(strpos($strColumnName, 'title') !== false)
                                                <option value="title" selected>Title</option>
                                            @else
                                                <option value="title">Title</option>
                                            @endif
                                            @if(strpos($strColumnName, 'author') !== false || strpos($strColumnName, 'creator') !== false)
                                                <option value="creator" selected>Creator</option>
                                            @else
                                                <option value="creator">Creator</option>
                                            @endif
                                            <option value="creator_firstname">Creator Firstname</option>
                                            <option value="creator_lastname">Creator Lastname</option>
                                            @if(strpos($strColumnName, 'publisher') !== false)
                                                <option value="publisher" selected>Publisher</option>
                                            @else
                                                <option value="publisher">Publisher</option>
                                            @endif
                                            @if(strpos($strColumnName, 'year') !== false || strpos($strColumnName, 'date') !== false)
                                                <option value="year" selected>Publication Year</option>
                                            @else
                                                <option value="year">Publication Year</option>
                                            @endif
                                        </select>
                                    </td>
                                </tr>
                                @endif
                            @endforeach
                            @if($i >= 1)
                                @break
                            @endif
                        @endfor
                        </table>
                    </div>

                </div>
                <div>
                    {!! Form::submit('Register DOIs') !!}
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
@endsection