<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-default navbar-static-top">
            <div class="container-fluid">
                <div class="navbar-header">

                    <!-- Collapsed Hamburger -->
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                        <span class="sr-only">Toggle Navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                    <!-- Branding Image -->
                    <a class="navbar-brand" href="{{ url('/') }}">
                        {{ config('app.name', 'Laravel') }}
                    </a>
                </div>

                <div class="collapse navbar-collapse" id="app-navbar-collapse">
                    <!-- Left Side Of Navbar -->
                    <ul class="nav navbar-nav">
                        &nbsp;
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="nav navbar-nav navbar-right">
                        <!-- Authentication Links -->
                        @auth
                            <li><a href="#">{{ Auth::user()->name }}</a></li>
                        @else
                            <li><a href="{{ route('login') }}">Login</a></li>
                            <li><a href="{{ route('register') }}">Register</a></li>
                        @endauth
                    </ul>
                </div>
            </div>
        </nav>

        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">

                    <h1>Timesheet for {{ date('F Y') }}</h1>

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
                                                name="date[{{ $day->format('Y-m-d') }}][am]"
                                                {{ (array_key_exists($day->format('Y-m-d'), request()->am)) ? 'checked' : '' }}>
                                        </div>
                                        <div>
                                            <input type="checkbox"
                                                name="date[{{ $day->format('Y-m-d') }}][pm]"
                                                {{ (array_key_exists($day->format('Y-m-d'), request()->pm)) ? 'checked' : '' }}>
                                        </div>
                                    </th>
                                @endforeach
                            </tr>
                        </tbody>
                    </table>
                    <hr>
                    <div class="text-centered">
                        <h3>Total : {{ (count(request()->pm) + count(request()->am)) / 2 }}</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
