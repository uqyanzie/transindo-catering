<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" data-theme="bumblebee">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Log In</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

        <!-- Styles -->
        @vite('resources/css/app.css')
    </head>
    <body class="antialiased">
        <div class="card bg-base-100 w-96 shadow-xl">
            <figure>
                <img
                src="https://img.daisyui.com/images/stock/photo-1606107557195-0e29a4b5b4aa.webp"
                alt="Shoes" />
            </figure>
            <div class="card-body">
                <h2 class="card-title">Menu</h2>
                <p>A menu description</p>
                <div class="card-actions justify-end">
                <div class="badge badge-outline">tag</div>
                <div class="badge badge-outline">tag2</div>
                </div>
            </div>
        </div>
        
    </body>
</html>
