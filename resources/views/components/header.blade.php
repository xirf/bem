@php
    $links = [
        [
            'name' => 'Beranda',
            'route' => '/',
        ],
        [
            'name' => 'Profil',
            'route' => 'profil',
        ],
        [
            'name' => 'Kepengurusan',
            'route' => 'kepengurusan',
        ],
        [
            'name' => 'Aduan',
            'route' => 'aduan',
        ],
    ];
@endphp

<div class="sticky w-full top-0 left-0 flex items-center justify-between z-50">
    <div class="navbar bg-base-100 px-16 h-auto py-4">
        <div class="navbar-start">
            <div class="dropdown">
                <div tabindex="0" role="button" class="btn btn-ghost lg:hidden">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M4 6h16M4 12h8m-8 6h16" />
                    </svg>
                </div>
                <ul tabindex="0"
                    class="menu menu-sm dropdown-content mt-3 z-[1] p-2 shadow bg-base-100 rounded-box w-52">
                    <li><a>Item 1</a></li>
                    <li>
                        <a>Parent</a>
                        <ul class="p-2">
                            <li><a>Submenu 1</a></li>
                            <li><a>Submenu 2</a></li>
                        </ul>
                    </li>
                    <li><a>Item 3</a></li>
                </ul>
            </div>

            <a class="text-xl">
                <div class="flex items-center justify-start gap-4">
                    <img src="{{ asset('/assets/img/logo-xs.png') }}" alt="logo" class="w-14 h-14">
                    <div class="grid gap-1">
                        <h1 class="font-bold">Badan Eksekutif Mahasiswa</h1>
                        <p class="text-xs">Universitas Muhammadiyah Ponorogo</p>
                    </div>
                </div>
            </a>
        </div>
        <div class="navbar-end hidden lg:flex">
            <ul class="menu menu-horizontal px-1 gap-10 text-md font-bold">
                @foreach ($links as $link)
                    <li class="relative">
                        <a href="{{ $link['route'] }}"
                            class="{{ Request::path() == $link["route"] ? 'text-yellow-500' : '' }}">
                            {{ $link['name'] }}
                        </a>
                        @if (Request::path() == $link["route"])
                            <div class="absolute border-[8px] border-transparent border-r-transparent border-t-yellow-500 w-0 h-0 -bottom-4 left-1/2 -translate-x-1/2"
                            style="border-radius: 0; padding: 0"
                            ></div> 
                        @endif
                    </li>
                @endforeach
            </ul>
        </div>
    </div>
</div>