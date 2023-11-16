<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {{-- css --}}
    @vite('resources/css/app.css')
    {{-- icons --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script defer src="{{ asset('data.js') }}"></script>

    <title>Jobster</title>
</head>

<body class="antialiased bg-[#E6F0F9] h-auto text-[#002745]">


    {{-- header --}}
    <header
        class="w-full  h-20  sticky top-0 flex px-32 z-40  justify-between items-center transition duration-300 ease-in-out"
        id="header">
        <div>
            <h2 class="font-bold text-3xl first-letter:lowercase first-letter:text-[#0769C3]">Jobster</h2>
        </div>


        <ul class="flex gap-6 font-semibold opacity-80">
            <li class="hover:opacity-60 transition-all  flex items-center">
                <a href="/" class="block p-2 {{ request()->is('/') ? 'text-[#2CB39C]' : '' }}">Home</a>
            </li>
            <li class="hover:opacity-60 transition-all  flex items-center">
                <a href="/jobs" class="block p-2 {{ request()->is('jobs') ? 'text-[#2CB39C]' : '' }} ">Find Jobs</a>
            </li>
            <li class="hover:opacity-60 transition-all  flex items-center">
                <a href="/contact" class="block p-2 {{ request()->is('contact') ? 'text-[#2CB39C]' : '' }} ">Contact
                    Us</a>
            </li>
            <li class="hover:opacity-60 transition-all  flex items-center">
                <a href="/about" class="block p-2 {{ request()->is('about') ? 'text-[#2CB39C]' : '' }}">About Us</a>
            </li>
        </ul>
    </header>


    @yield('content')



    {{-- Footer --}}
    <section class="px-32 py-20 grid grid-cols-3 gap-4 bottom-0">
        <div class="">
            <h2 class="font-bold text-3xl first-letter:lowercase first-letter:text-[#0769C3]">Jobster</h2>
            <h2 class="text-xl my-2 font-semibold">Call us</h2>
            <p class="text-xl my-2 font-semibold text-[#0769C3]">(+254) 712345678</p>

            <pre class="opacity-80 mt-4">90 Fifth Avenue, 3rd Floor <br>Nairobi Kenya, KE 1980 <br>office@jobster.com</pre>
        </div>

        <div>
            <h2 class="text-2xl font-semibold
                ">For Candidates</h2>

            <ul>
                <li class="my-2 hover:cursor-pointer hover:opacity-50 transition-all "><a href="#">Find
                        Jobs</a></li>
                <li class="my-2 hover:cursor-pointer hover:opacity-50 transition-all "><a href="#">All
                        Categories</a></li>
                <li class="my-2 hover:cursor-pointer hover:opacity-50 transition-all"><a href="#">Companies</a>
                </li>
            </ul>
        </div>

        <div>
            <h2 class="text-2xl font-semibold
                ">More links</h2>

            <ul>
                <li class="my-2 hover:cursor-pointer hover:opacity-50 transition-all "><a href="#">About
                        Us</a></li>
                <li class="my-2 hover:cursor-pointer hover:opacity-50 transition-all "><a href="#">Contact
                        Us</a></li>
                <li class="my-2 hover:cursor-pointer hover:opacity-50 transition-all"><a href="#">FAQs</a>
                </li>
            </ul>
        </div>
    </section>

    <section class="w-full bg-[#FFF8EC] px-32 py-8">
        &copy; 2023 Jobster. All Right Reserved.
    </section>
    </section>


    {{-- javascript --}}
    <script>
        const header = document.getElementById('header');

        window.addEventListener('scroll', () => {
            if (window.scrollY > 0) {
                header.classList.add('shadow-lg', 'bg-white');
            } else {
                header.classList.remove('shadow-lg', 'bg-white');
            }
        });
    </script>
</body>

</html>
