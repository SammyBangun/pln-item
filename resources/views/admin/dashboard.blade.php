<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">
    <script src="{{ mix('js/app.js') }}"></script>
    @vite('resources/css/app.css')
</head>

<body>
    <div class="container mx-auto mt-5">
        <div class="flex flex-wrap">
            <!-- Sidebar -->
            <div class="w-full md:w-1/4 mb-4 md:mb-0 md:pr-4">
                <div class="bg-white shadow-md rounded-lg">
                    <div class="p-4 border-b">
                        <h3 class="text-lg font-semibold">Menu</h3>
                    </div>
                    <div class="divide-y">
                        @if (auth()->user()->email === 'admin@gmail.com')
                            <a href="{{ route('admin.dashboard') }}"
                                class="block px-4 py-2 text-gray-800 bg-blue-100 hover:bg-blue-200">
                                Admin Dashboard
                            </a>
                            <a href="#" class="block px-4 py-2 text-gray-800 hover:bg-gray-100">
                                Settings
                            </a>
                            <a href="{{ route('logout') }}" class="block px-4 py-2 text-gray-800 hover:bg-gray-100">
                                Logout
                            </a>
                        @else
                            <a href="{{ route('user.dashboard') }}"
                                class="block px-4 py-2 text-gray-800 bg-blue-100 hover:bg-blue-200">
                                User Dashboard
                            </a>
                            <a href="{{ route('logout') }}" class="block px-4 py-2 text-gray-800 hover:bg-gray-100">
                                Logout
                            </a>
                        @endif
                    </div>
                </div>
            </div>

            <!-- Main Content -->
            <div class="w-full md:w-3/4">
                <div class="bg-white shadow-md rounded-lg">
                    <div class="p-4 border-b bg-gray-100">
                        @if (auth()->user()->email === 'admin@gmail.com')
                            <h2 class="text-xl font-semibold text-gray-800">Welcome Admin</h2>
                        @endif
                    </div>
                    <div class="p-6">
                        @if (auth()->user()->email === 'admin@gmail.com')
                            <h3 class="text-lg font-medium text-gray-700">Admin Dashboard Overview</h3>
                            <p class="mt-2 text-gray-600">
                                Ini adalah dashboard untuk admin. segala sesuatu yang ada ada di kendali admin 😁.
                            </p>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
