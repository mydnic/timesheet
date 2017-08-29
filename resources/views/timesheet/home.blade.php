@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            {!! Form::open(['route' => 'timesheet.store']) !!}
                <div class="panel panel-success">
                    <div class="panel-heading"><strong>Timesheet for {{ date('F Y') }}</strong></div>

                    <div class="panel-body">
                        <table class="table table-bordered table-condensed">
                            <thead>
                                <tr>
                                    <th>
                                        Client
                                    </th>
                                    @foreach ($month->days() as $day)
                                        <th class="text-center">
                                            <div>
                                                {{ $day->format('D') }}
                                            </div>
                                            <div>
                                                {{ $day->format('j') }}
                                            </div>
                                        </th>
                                    @endforeach
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th class="row">Stepstone<br>(am / pm)</th>
                                    @foreach ($month->days() as $day)
                                        <th class="text-center">
                                            <div>
                                                <input type="checkbox"
                                                    name="am[{{ $day->format('Y-m-d') }}]"
                                                    {{ ($day->isWeekend() or $holidays->where('date', $day)->first()['am']) ? '' : 'checked' }}>
                                            </div>
                                            <div>
                                                <input type="checkbox"
                                                    name="pm[{{ $day->format('Y-m-d') }}]"
                                                    {{ ($day->isWeekend() or $holidays->where('date', $day)->first()['pm']) ? '' : 'checked' }}>
                                            </div>
                                        </th>
                                    @endforeach
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="panel-footer text-right">
                        {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
                    </div>
                </div>
            {!! Form::close() !!}
        </div>
    </div>
</div>
@stop
