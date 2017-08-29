@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12 text-right">
            <a class="btn btn-primary" href="{{ route('holiday.create') }}">Add Holiday</a>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Date</th>
                        <th>AM</th>
                        <th>PM</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($holidays as $holiday)
                        <tr>
                            <th scope="row">1</th>
                            <td>{{ $holiday->date }}</td>
                            <td>{{ ($holiday->am) ? 'x' : '' }}</td>
                            <td>{{ ($holiday->pm) ? 'x' : '' }}</td>
                            <td>
                                <a class="btn btn-info" href="{{ route('holiday.edit', $holiday) }}">Edit</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            {{ $holidays->render() }}
        </div>
    </div>
</div>
@stop
