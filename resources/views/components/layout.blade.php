<!doctype html>

<title>Blog App</title>
<link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600;700&display=swap" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
<style>
    html {
        scroll-behavior: smooth
    }
</style>

<body style="font-family: Open Sans, sans-serif">
    <section class="px-2 py-1">
        <nav class="bg-gray-600">
            <div class="mx-auto max-w-7xl px-2 sm:px-6 lg:px-8">
                <div class="relative flex h-16 items-center justify-between">
                    <div class="absolute inset-y-0 left-0 flex items-center sm:hidden">

                    </div>
                    <div class="flex flex-1 items-center justify-center sm:items-stretch sm:justify-start">

                        <div class="flex flex-shrink-0 items-center">
                            <a href="/">
                                <img class="h-10 w-auto rounded" src="http://127.0.0.1:8000/images/blog.svg
" alt="Your Company">
                            </a>
                        </div>


                    </div>
                    <div class="absolute inset-y-0 right-0 flex items-center pr-2 sm:static sm:inset-auto sm:ml-6 sm:pr-0">
                        @auth
                        <x-dropdown>
                            <x-slot name="trigger">
                                <button class="text-xs font-bold uppercase text-white">Welcome, {{ auth()->user()->username }}!</button>
                            </x-slot>

                            @admin
                            <x-dropdown-item href="/admin/posts" :active="request()->is('admin/posts')">Dashboard</x-dropdown-item>
                            <x-dropdown-item href="/admin/posts/create" :active="request()->is('admin/posts/create')">New Post</x-dropdown-item>
                            @endadmin
                            <x-dropdown-item href="#" x-data="{}" @click.prevent="document.querySelector('#logout-form').submit()">Log Out</x-dropdown-item>

                            <form id="logout-form" method="POST" action="/logout" class="hidden">
                                @csrf
                            </form>
                        </x-dropdown>


                        @else
                        <a href="/register" class="text-xs font-bold text-white uppercase {{ request()->is('register') ? 'text-blue-500' : '' }}">Register</a>
                        <a href="/login" class="ml-6 text-xs font-bold text-white uppercase {{ request()->is('login') ? 'text-blue-500' : '' }}">Log In</a>

                        @endauth

                        <a href="#newsletter" class="bg-blue-500 ml-3 rounded-full text-xs font-semibold text-white uppercase py-3 px-5">
                            Subscribe for Updates
                        </a>

                    </div>
                </div>
            </div>


            </div>
        </nav>



        {{$slot}}

        <!-- <footer id="newsletter" class=" bg-gray-100 border border-black border-opacity-5 rounded-xl text-center py-16 px-10 mt-16">
            <img src="../images/lary-newsletter-icon.svg" alt="" class="mx-auto -mb-6" style="width: 145px;">
            <h5 class="text-3xl">Stay in touch with the latest posts</h5>
            <p class="text-sm mt-3">Promise to keep the inbox clean. No bugs.</p>

            <div class="mt-10">
                <div class="relative inline-block mx-auto lg:bg-gray-200 rounded-full">

                    <form method="POST" action="#" class="lg:flex text-sm">
                        <div class="lg:py-3 lg:px-5 flex items-center">
                            <label for="email" class="hidden lg:inline-block">
                                <img src="http://127.0.0.1:8000/images/mailbox-icon.svg" alt="mailbox letter">
                            </label>

                            <input id="email" type="text" placeholder="Your email address" class="lg:bg-transparent py-2 lg:py-0 pl-4 focus-within:outline-none">
                        </div>

                        <button type="submit" class="transition-colors duration-300 bg-blue-500 hover:bg-blue-600 mt-4 lg:mt-0 lg:ml-3 rounded-full text-xs font-semibold text-white uppercase py-3 px-8">
                            Subscribe
                        </button>
                    </form>
                </div>
            </div>
        </footer> -->
    </section>
    <x-flash />
</body>