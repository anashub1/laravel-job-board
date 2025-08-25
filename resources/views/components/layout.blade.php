<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <script src="https://cdn.tailwindcss.com"></script>
  <title>Laravel {{ isset($title) ? "- " . $title : "" }}</title>
</head>

<body>
  <div class="min-h-full">
    @php
    $Current = "bg-gray-900 text-white";
    $Default = "text-gray-300 hover:bg-gray-700 hover:text-white";
  @endphp

    <nav class="bg-gray-800">
      <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
        <div class="flex h-16 items-center justify-between">

          <!-- Left side -->
          <div class="flex items-center">
            <div class="shrink-0">
              <img class="size-8" src="https://tailwindcss.com/plus-assets/img/logos/mark.svg?color=indigo&shade=500"
                alt="Your Company" />
            </div>
            <div class="hidden md:block">
              <div class="ml-10 flex items-baseline space-x-4">
                <x-nav-link href="/" :active="request()->is('/')">Dashboard</x-nav-link>
                <x-nav-link href="/about" :active="request()->is('about')">About</x-nav-link>
                <x-nav-link href="/contact" :active="request()->is('contact')">Contact Us</x-nav-link>
                <x-nav-link href="/blog" :active="request()->is('blog')">Blog</x-nav-link>
              </div>
            </div>
          </div>
         @auth
        <div class="flex items-center space-x-2">
        <span class="text-white font-medium">{{ Auth::user()->name }}</span>
        <form action="/logout" method="POST">
          @csrf
          <button type="submit"
          class="rounded-md px-3 py-2 text-sm font-medium bg-red-500 text-white hover:bg-red-600 transition">
          Logout
          </button>
          </form>
         @else
          <div class="hidden md:flex items-center space-x-4">
          <a href="/signup"
            class="rounded-md px-3 py-2 text-sm font-medium {{ request()->is('signup') ? 'bg-blue-500 text-white' : 'text-gray-200 hover:bg-gray-500' }}">
            Signup
          </a>
          <a href="/login"
            class="rounded-md px-3 py-2 text-sm font-medium {{ request()->is('login') ? 'bg-blue-500 text-white' : 'text-gray-200 hover:bg-gray-500' }}">
            Login
          </a>
          </div>
        @endauth

              <!-- Mobile button -->
              <div class="-mr-2 flex md:hidden">
                <button type="button"
                  class="relative inline-flex items-center justify-center rounded-md bg-gray-800 p-2 text-gray-400 hover:bg-gray-700 hover:text-white focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-gray-800 focus:outline-none"
                  aria-controls="mobile-menu" aria-expanded="false">
                  <span class="absolute -inset-0.5"></span>
                  <span class="sr-only">Open main menu</span>
                  <svg class="block size-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round"
                      d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                  </svg>
                  <svg class="hidden size-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M6 18 18 6M6 6l12 12" />
                  </svg>
                </button>
              </div>
          </div>
        </div>

        <!-- Mobile menu -->
        <div class="md:hidden" id="mobile-menu">
          <div class="space-y-1 px-2 pt-2 pb-3 sm:px-3">
            <a href="/" class="rounded-md px-3 py-2 text-sm font-medium {{ request()->is('/') ? $Current : $Default }}"
              aria-current="page">Dashboard</a>
            <a href="/about"
              class="rounded-md px-3 py-2 text-sm font-medium {{ request()->is('about') ? $Current : $Default }}">About</a>
            <a href="/contact"
              class="rounded-md px-3 py-2 text-sm font-medium {{ request()->is('contact') ? $Current : $Default }}">Contact
              Us</a>
            <a href="/signup"
              class="rounded-md px-3 py-2 text-sm font-medium {{ request()->is('signup') ? $Current : $Default }}">Signup</a>
            <a href="/login"
              class="rounded-md px-3 py-2 text-sm font-medium {{ request()->is('login') ? $Current : $Default }}">Login</a>
          </div>
        </div>
    </nav>

    @if (isset($title))
    <header class="bg-white shadow-sm">
      <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
      <h1 class="text-3xl font-bold tracking-tight text-gray-900">{{ $title }}</h1>
      </div>
    </header>
  @endif

    <main>
      <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
        {{ $slot }}
      </div>
    </main>
  </div>
</body>

</html>