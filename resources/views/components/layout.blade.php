<!doctype html>
    <html lang="en" class="h-full bg-gray-100">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport"
              content="width=device-width, initial-scale=1.0">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>firstLarProj</title>
        <script src="https://cdn.tailwindcss.com"></script>
    </head>
    <body class="h-full">
        <div class="min-h-full">
            <nav class="bg-gray-800">
                <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
                    <div class="flex h-16 items-center justify-between">
                        <div class="flex items-center">
                            <div class="flex-shrink-0">
                                <img class="h-8 w-8" src="https://tailwindui.com/img/logos/mark.svg?color=indigo&shade=500" alt="Your Company">
                            </div>
                            <div class="hidden md:block">
                                <div class="ml-10 flex items-baseline space-x-4">
                                    <x-nav-link href="/" :active="request()->is('/')">Home</x-nav-link>
                                    <x-nav-link href="/careers" :active="request()->is('careers')">Careers</x-nav-link>
                                    <x-nav-link href="/contact" :active="request()->is('contact')">Contact</x-nav-link>
                                    <x-nav-link href="/about" :active="request()->is('about')">About</x-nav-link>
                                </div>
                            </div>
                        </div>
                        <div class="hidden md:block">
                            <div class="ml-4 flex items-center md:ml-6">
                                @guest
                                    <x-nav-link href="/login" :active="request()->is('login')">Log In</x-nav-link>
                                    <x-nav-link href="/register" :active="request()->is('register')">Register</x-nav-link>
                                @endguest
                                @auth
                                    <form method="POST" action="/logout">
                                        @csrf
                                        <x-form-button>Log Out</x-form-button>
                                    </form>
                                @endauth
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Mobile menu, show/hide based on menu state. -->
                <div class="md:hidden" id="mobile-menu">
                    <div class="space-y-1 px-2 pb-3 pt-2 sm:px-3">
                        <x-nav-link href="/" :active="request()->is('/')">Home</x-nav-link>
                        <x-nav-link href="/careers" :active="request()->is('careers')">Careers</x-nav-link>
                        <x-nav-link href="/contact" :active="request()->is('contact')">Contact</x-nav-link>
                        <x-nav-link href="/about" :active="request()->is('about')">About</x-nav-link>
                    </div>
                </div>
            </nav>

            <header class="bg-white shadow">
                <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8 sm:flex sm:justify-between">
                    <h1 class="text-3xl font-bold tracking-tight text-gray-900">{{ $heading }}</h1>
                    <x-button href="/careers/create">Create Job</x-button>
                </div>
            </header>
            <main>
                <div class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8">
                    <?php echo $slot ?>
                </div>
            </main>
        </div>

    </body>
</html>
