@extends('layouts.app')

@section('content')
    <div class="container">
        <form action="{{ route('holiday.update', $holiday) }}" method="post">
            {{ csrf_field() }}
            {{ method_field('PUT') }}
            <div class="form-group">
                <label for="date">Date</label>
                <input type="date" class="form-control" id="date" placeholder="Email" name="date" required value="{{ $holiday->date->format('Y-m-d') }}">
            </div>
            <div class="checkbox">
                <label>
                    <input type="checkbox" name="am" value="1" {{ ($holiday->am) ? 'checked' : '' }}> AM
                </label>
            </div>
            <div class="checkbox">
                <label>
                    <input type="checkbox" name="pm" value="1" {{ ($holiday->pm) ? 'checked' : '' }}> PM
                </label>
            </div>
            <button type="submit" class="btn btn-default">Submit</button>
        </form>
    </div>
@stop
