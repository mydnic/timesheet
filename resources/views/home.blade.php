@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-success">
                <div class="panel-heading"><strong>Timesheet for {{ date('F') }}</strong></div>

                <div class="panel-body">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>
                                    Client
                                </th>
                                @for ($i = 1; $i < 30; $i++)
                                    <th class="text-center">
                                        <div>
                                            m
                                        </div>
                                        <div>
                                            {{ $i }}
                                        </div>
                                    </th>
                                @endfor
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th class="row">Stepstone<br>(am / pm)</th>
                                @for ($i = 1; $i < 30; $i++)
                                    <th class="text-center">
                                        <div>
                                            <input type="checkbox">
                                        </div>
                                        <div>
                                            <input type="checkbox">
                                        </div>
                                    </th>
                                @endfor
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="panel-footer text-right">
                    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
