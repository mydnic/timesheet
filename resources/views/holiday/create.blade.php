@extends('layouts.app')

@section('content')
    <div class="container">
        <form action="{{ route('holiday.store') }}" method="post">
            {{ csrf_field() }}
            <div class="form-group">
                <label for="date">Date</label>
                <input type="date" class="form-control" id="date" placeholder="Email" name="date" required>
            </div>
            <div class="checkbox">
                <label>
                    <input type="checkbox" name="am" value="1" checked> AM
                </label>
            </div>
            <div class="checkbox">
                <label>
                    <input type="checkbox" name="pm" value="1" checked> PM
                </label>
            </div>
            <button type="submit" class="btn btn-default">Submit</button>
        </form>
    </div>
@stop
