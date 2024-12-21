@extends('layouts.main')

@section('title', 'Login Page')

@section('content')

@include('partials.navbar')
<div class="h-screen w-full flex items-center justify-center flex-col">
    <div class="bg-white p-8 rounded-2xl shadow-lg mt-10 w-1/4">
        <h1 class="text-4xl font-bold font-Roboto text-center">Login</h1>
        <form class="flex flex-col gap-4 mt-8">
            <input type="email" id="name" class="w-full h-12 border border-blue-100 bg-blue-50 rounded-lg px-4 py-2" placeholder="E-Mail">
            <input type="password" id="email" class="w-full h-12 border border-blue-100 bg-blue-50 rounded-lg px-4 py-2" placeholder="Password">
            <div class="flex items-center">
                <input type="checkbox" id="remember" class="mr-2">
                <label for="remember" class="font-Roboto">Remember Me</label>
            </div>
            <button class="bg-cyan-400 w-full text-white font-Roboto font-bold mt-4 h-12 rounded-lg hover:bg-cyan-700 transition">Login</button>
        </form>
        <hr class="w-full bg-slate-400 my-5">
        <div class="flex justify-center mt-4 font-Roboto">
            Don't have an account? <a href="/register" class="text-cyan-400 ml-1">Register here!</a>
        </div>
    </div>
</div>

@endsection