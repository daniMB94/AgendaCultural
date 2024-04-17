<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Scripts -->
    <script src="https://cdn.tailwindcss.com"></script>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="font-sans antialiased">
    <div class="min-h-screen bg-gray-100 dark:bg-gray-900">


        <!-- Page Content -->
        <main>
            <!-- component -->
            <!-- This is an example component 
    Instagram: ccornejo__ -->
            <div class='grid grid-cols-12 banner'>
                <div class="col-span-4 text-white font-sans font-bold bg-black min-h-screen pl-7 bg-opacity-40">
                    <div class="grid grid-rows-6 grid-flow-col min-h-screen items-center justify-items-start">
                        <i class="text-5xl text-">Agenda Cultural de Taberno</i>

                        <div class="row-span-4 row-start-2 text-3xl">
                            <form method="POST" action="{{ route('login') }}">
                                @csrf
                                Sign In

                                <div class="pt-10 pr-20">
                                    <label class="text-sm font-sans font-medium" for="email">
                                        Email
                                    </label>
                                    <input type="text" name="email" placeholder="Escribe tu email"
                                        class="w-full bg-black py-3 px-12 border hover: border-gray-500 rounded shadow text-base font-sans" />
                                </div>
                                <div class="pt-2 pr-20">
                                    <label class="text-sm font-sans font-medium" for="password">
                                        Contraseña
                                    </label>
                                    <input type="password" name="password" placeholder="Escribe tu contraseña"
                                        class=" w-full bg-black py-3 px-12 border hover: border-gray-500 rounded shadow text-base font-sans" />

                                </div>
                                <a href="{{ route('register') }}" class="text-sm font-sans font-medium">¿No
                                    tienes cuenta? Registrate</a>
                                <!-- Button -->
                                <div class="text-sm font-sans font-medium w-full pr-20 pt-14">
                                    <button type="submit"
                                        class="text-center w-full py-4 bg-blue-700 hover:bg-blue-400 rounded-md text-white">
                                        Log in
                                    </button>
                                </div>

                            </form>
                        </div>
                        <!-- Text -->


                    </div>
                </div>

                <!-- Second column image -->
                <div class="col-span-8 text-white font-sans font-bold">
                    <!-- Aquí iría algún comentario -->
                </div>
            </div>



            <style>
            .banner {
                background: url('{{asset("images/taberno.jpg")}}');
                background-repeat: no-repeat;
                background-size: cover
            }
            </style>
        </main>
    </div>

</body>

</html>