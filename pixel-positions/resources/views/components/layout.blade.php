<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Pixel Positions</title>
    @vite(['resources/js/app.js'])
</head>
<body class="bg-black text-white pb-12">
<div class="px-10">
    <nav class="flex justify-between items-center">
        <div>
            <a href="/">
                <img src="{{Vite::asset('resources/images/logo.svg')}}" alt="pixel positions logo">
            </a>
        </div>
        <div class="space-x-6 font-bold">
            <a href="">Jobs</a>
            <a href="">Careers</a>
            <a href="">Salaries</a>
            <a href="">Companies</a>
        </div>
        @auth
            <div><a href="/jobs/create">post a job</a></div>
        @endauth
        @guest
            <div class="space-x-6 font-bold">
                <a href="">Sign Up</a>
                <a href="">Log In</a>
            </div>
        @endguest
    </nav>

    <main class="mt-10 max-w-[986px] mx-auto">
        {{$slot}}
    </main>
</div>
</body>
</html>
