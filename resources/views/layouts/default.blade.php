<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="X-UA-Compatible" content="ie=edge" >  
        <title>Laravel Web</title>
        <link rel="stylesheet" href="{{ asset('css/app.css') }}" >
    </head>
    <body class="bg-gray-900">
        <header class="fixed top-0 left-0 right-0">
            <div class="container mx-auto p-4">
                <nav class="flex justify-end text-white">
                    <a href="/" class="mx-3 hover:text-purple-500">Home</a>
                    <a href="/about" class="mx-3 hover:text-purple-500">About</a>
                </nav>
            </div>
        </header>
        <main>
            @yield('content')
        </main>
        <div >
            @yield('animation')
        </div>
    </body>
</html>