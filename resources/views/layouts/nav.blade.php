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


    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/jquery.dataTables.css" />
    <script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.js"></script>
    <script defer src="{{ asset('data.js') }}"></script>
    <script defer src="{{ asset('custom.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/alpinejs@2.8.2/dist/alpine.min.js" defer></script>



    <title>Jobster</title>
</head>

<body class="antialiased bg-[#E6F0F9] h-auto text-[#002745]">


    {{-- header --}}
    <header
        class="w-full h-20 sticky px-10 top-0 flex z-40  justify-between items-center transition duration-300 ease-in-out"
        id="header">
        <div>
            <h2 class="font-bold text-3xl first-letter:lowercase first-letter:text-[#0769C3]">Jobster</h2>
        </div>


        <ul class="flex gap-6 font-semibold opacity-80">
            <li class="hover:opacity-60 transition-all  flex items-center">
                <a href="{{ route('jobs') }}"
                    class="block p-2 {{ request()->is('users/jobs*') ? 'text-[#2CB39C] border-b-2 border-[#207456]' : '' }} ">Find
                    Jobs</a>
            </li>
            <li class="hover:opacity-60 transition-all  flex items-center">
                <a href="{{ route('applications') }}"
                    class="block p-2 {{ request()->is('users/applications') ? 'text-[#2CB39C] border-b-2 border-[#207456]' : '' }} ">My
                    Jobs</a>
            </li>

            <li x-data="{ isOpen: false }" class="transition-all flex items-center relative">
                <div x-on:mouseover="isOpen = true" x-on:mouseout="isOpen = false">
                    <a href="/users/profile/{{ auth()->id() }}"
                        class="block p-2 capitalize {{ request()->is('users/profile/*') ? 'text-[#2CB39C] border-b-2 border-[#207456]' : '' }}">
                        <i class="fa fa-address-book-o"></i> {{ auth()->user()->full_name }}
                    </a>

                    <form x-show="isOpen" x-cloak action="{{ route('logout') }}" method="POST"
                        class="bg-white p-2  shadow-md absolute right-0 top-full">
                        @csrf
                        <button type="submit" class="text-red-500 hover:opacity-60"><i class="fa fa-sign-out"></i>
                            Logout</button>
                    </form>
                </div>
            </li>




        </ul>
    </header>


    @yield('content')

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
