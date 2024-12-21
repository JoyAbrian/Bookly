@extends('layouts.main')

@section('title', 'Register')

@section('content')

@include('partials.navbar')
<div class="h-screen w-full flex items-center justify-center flex-col">
    <h1 class="text-6xl font-bold font-Roboto">Register With Bookly</h1>
    <p class="text-2xl font-Roboto mt-8 font-light">Your library catalog is available anywhere, anytime.</p>
    <div class="bg-white p-8 rounded-2xl shadow-lg mt-10 w-1/3">
        <h1 class="text-2xl font-bold font-Roboto mb-10">Account Information:</h1>
        <form class="flex flex-col gap-5">
            <div class="w-full flex gap-5">
                <div class="w-1/2">
                    <label for="first-name" class="font-Roboto">First Name</label>
                    <input type="text" id="first-name" class="w-full h-12 border border-blue-100 bg-blue-50 rounded-lg px-4 py-2">
                </div>
                <div class="w-1/2">
                    <label for="last-name" class="font-Roboto mt-4">Last Name</label>
                    <input type="text" id="last-name" class="w-full h-12 border border-blue-100 bg-blue-50 rounded-lg px-4 py-2">
                </div>
            </div>
            <div class="w-full flex gap-5">
                <div class="w-1/2">
                    <label for="email" class="font-Roboto">E-Mail</label>
                    <input type="email" id="email" class="w-full h-12 border border-blue-100 bg-blue-50 rounded-lg px-4 py-2">
                </div>
                <div class="w-1/2">
                    <label for="password" class="font-Roboto mt-4">Password</label>
                    <input type="password" id="password" class="w-full h-12 border border-blue-100 bg-blue-50 rounded-lg px-4 py-2">
                </div>
            </div>
            <div class="w-full flex gap-5">
                <div class="w-1/2">
                    <label for="country" class="font-Roboto">Country</label>
                    <select id="country" name="country" class="w-full h-12 border border-blue-100 bg-blue-50 rounded-lg px-4 py-2">
                        <option value="" disabled selected></option>
                        @foreach (config('countries') as $code => $name)
                            <option value="{{ $code }}">{{ $name }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <button class="bg-cyan-400 w-1/4 text-white font-Roboto font-bold mt-4 h-12 rounded-lg hover:bg-cyan-700 transition">Register</button>
        </form>
    </div>
</div>

@endsection