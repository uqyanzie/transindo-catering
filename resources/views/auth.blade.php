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
    <body class="antialiased bg-catering-image bg-cover">
        <div class="p-5 md:px-32 flex flex-col justify-center align-middle min-h-screen backdrop-blur-sm">
            <h1 class="text-5xl md:text-7xl text-white font-bold text-center mb-5">Transindo Catering</h1>
            <div class="hero">
                <div class="hero-content flex-col lg:flex-row-reverse">
                    <div class="text-center bg-slate-400 bg-opacity-60 text-neutral-50 lg:text-left p-5">
                        <h1 class="text-3xl font-bold">Login to Transindo Catering</h1>
                        <p class="py-6">
                            Catering service for your daily needs. We provide a variety of food and drinks that are guaranteed to be delicious and healthy.
                        </p>
                    </div>
                    <div class="card bg-base-100 w-full max-w-sm shrink-0 shadow-2xl">
                    <form class="card-body">
                        <div class="form-control">
                        <label class="label">
                            <span class="label-text">Email</span>
                        </label>
                        <input type="email" placeholder="email" class="input input-bordered" required />
                        </div>
                        <div class="form-control">
                        <label class="label">
                            <span class="label-text">Password</span>
                        </label>
                        <input type="password" placeholder="password" class="input input-bordered" required />
                        <label class="label">
                            <a href="#" class="label-text-alt link link-hover">Forgot password?</a>
                        </label>
                        </div>
                        <div class="form-control mt-6">
                        <button class="btn btn-primary">Login</button>
                        </div>
                    </form>
                    </div>
                </div>
            </div>
        </div>
        
    </body>
</html>
