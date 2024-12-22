<nav class="w-full h-fit flex justify-center items-center py-3 px-8 gap-96 select-none bg-white border-b">
    <img src="/images/logo.png" alt="Bookly Logo" class="h-10">
    
    <div class="flex gap-10 font-Roboto items-center justify-start">
        <a href="/contact-us" class="text-black text-base font-Roboto font-normal px-10 py-2 ">Contact Us</a>
        @if (Auth::check())
            <a href="/dashboard" class="text-black text-base font-Roboto font-normal px-10 py-2 ">Dashboard</a>
            <a href="/logout" class="text-black text-base font-Roboto font-normal px-10 py-2 ">Logout</a>
        @else
            <a href="/register" class="bg-black text-white px-10 py-2 rounded-full hover:bg-gray-800 transition">Register</a>
            <a href="/login" class="bg-black text-white px-10 py-2 rounded-full hover:bg-gray-800 transition">Login</a>
        @endif
    </div>
</nav>