@extends('layouts.app')

@section('content')
    @if (Route::has('login'))
        @include('auth.login')
    @else
        @include('layouts.partials.nav')
        <div class="container">
            @yield('content')
        </div>
    @endif
@endsection