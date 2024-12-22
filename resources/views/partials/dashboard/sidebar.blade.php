<aside class="w-64 bg-[#F6F6F6] flex flex-col py-10">
    <img src="/images/logo.png" alt="Bookly" class="w-48 mx-auto mb-8">
    <nav class="flex-grow">
        <ul class="space-y-2 mt-4 font-Roboto text-lg">
            <li><a href="/dashboard" class="block py-2 px-4 hover:bg-slate-200 @if(request()->is('dashboard')) bg-white font-bold @endif">
                @if(request()->is('dashboard')) <i class="bi bi-arrow-right text-blue-600 mr-2"></i> @endif Home
            </a></li>
            <li><a href="#" class="block py-2 px-4 hover:bg-slate-200 @if(request()->is('')) bg-white font-bold @endif">
                @if(request()->is('')) <i class="bi bi-arrow-right text-blue-600 mr-2"></i> @endif Add Book
            </a></li>
            <li><a href="#" class="block py-2 px-4 hover:bg-slate-200 @if(request()->is('')) bg-white font-bold @endif">
                @if(request()->is('')) <i class="bi bi-arrow-right text-blue-600 mr-2"></i> @endif Add Collection
            </a></li>
            <li><a href="#" class="block py-2 px-4 hover:bg-slate-200 @if(request()->is('')) bg-white font-bold @endif">
                @if(request()->is('')) <i class="bi bi-arrow-right text-blue-600 mr-2"></i> @endif Post
            </a></li>
            <li><a href="#" class="block py-2 px-4 hover:bg-slate-200 @if(request()->is('')) bg-white font-bold @endif">
                @if(request()->is('')) <i class="bi bi-arrow-right text-blue-600 mr-2"></i> @endif Control Panel
            </a></li>
        </ul>

        <hr class="my-4 mx-5 border-t border-gray-300">

        <ul class="space-y-2 mt-4 font-Roboto text-lg">
            <li><a href="#" class="block py-2 px-4 hover:bg-slate-200 font-Roboto">Configuration</a></li>
            <li><a href="#" class="block py-2 px-4 hover:bg-slate-200 font-Roboto">Support</a></li>
            <li><a href="#" class="block py-2 px-4 hover:bg-slate-200 font-Roboto">Logout</a></li>
        </ul>
    </nav>
</aside>