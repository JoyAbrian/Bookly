@extends('layouts.main')

@section('content')
<div class="flex h-screen">
    @include('partials.dashboard.sidebar')
    <div class="flex-grow flex flex-col">
        @include('partials.dashboard.navbar')
        <main class="flex-grow p-6">
            @yield('dashboard-content')
        </main>
    </div>
</div>
@endsection