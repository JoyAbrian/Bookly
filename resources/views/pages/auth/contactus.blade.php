@extends('layouts.main')

@section('title', 'Contact Us')

@section('content')

@include('partials.navbar')
<div style="background-image: url('{{ asset('images/contact-us-bg.png') }}')" class="bg-cover bg-center h-screen w-full flex items-center justify-center flex-col">
    <div class="justify-start">
        <h1 class="text-6xl font-bold font-Roboto">Contact Us</h1>
        <p class="text-2xl font-Roboto mt-8 font-light">Our attendants are prepared to help you!</p>
    </div>
    <div class="bg-white p-8 rounded-2xl shadow-lg mt-10 w-1/3">
        <form class="flex flex-col">
            <label for="name" class="font-Roboto">Name</label>
            <input type="text" id="name" class="w-full h-12 border border-blue-100 bg-blue-50 rounded-lg px-4 py-2">
        
            <label for="email" class="font-Roboto mt-4">E-Mail</label>
            <input type="email" id="email" class="w-full h-12 border border-blue-100 bg-blue-50 rounded-lg px-4 py-2">
        
            <label for="message" class="font-Roboto mt-4">Message</label>
            <textarea id="message" class="w-full h-60 border border-blue-100 bg-blue-50 rounded-lg px-4 py-2 text-start resize-none"></textarea>
        
            <button class="bg-cyan-400 w-1/4 text-white font-Roboto font-bold mt-4 h-12 rounded-lg hover:bg-cyan-700 transition">Send</button>
        </form>
    </div>
</div>

@endsection