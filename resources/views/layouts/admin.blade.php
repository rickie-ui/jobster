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

    {{-- editor --}}
    <script src="https://cdn.ckeditor.com/ckeditor5/36.0.1/classic/ckeditor.js"></script>

    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/jquery.dataTables.css" />
    <script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.js"></script>
    <script src="{{ asset('custom.js') }}"></script>


    <title>Jobster</title>
</head>

<body class="antialiased bg-[#E6F0F9] h-auto text-white">


    {{-- header --}}
    <header class="w-full h-20 sticky px-10 top-0 flex z-40  justify-between items-center bg-[#2A3135]">
        <div>
            <h2 class="font-bold text-3xl first-letter:lowercase first-letter:text-[#0769C3]">Jobster</h2>
        </div>


        <ul class="font-medium flex gap-4">
            <li class="hover:opacity-60 transition-all  flex items-center">
                <a href="{{ route('new-job') }}" class="block px-8 py-1 bg-[#207456] text-white rounded-3xl">Post
                    Job</a>
            </li>

            <li class="hover:opacity-60 transition-all  flex items-center">
                <a href="#" class="text-white rounded-3xl text-sm">
                    <i class="fa fa-user"></i>&ensp;Jane Wachera</a>
            </li>
        </ul>
    </header>


    <section class="flex relative">
        <aside class="w-2/12 h-screen bg-[#2A3135] fixed ">
            <ul class="opacity-70 text-white">
                <li class=" font-light">
                    <a href="{{ route('dashboard') }}"
                        class="block p-3 {{ request()->is('admin/dashboard') ? 'bg-[#4E5356]' : '' }}">
                        <i class="fa fa-dashboard"></i>&ensp; Dashboard</a>
                </li>
                <li class=" font-light">
                    <a href="{{ route('applicants') }}"
                        class="block p-3 {{ request()->is('admin/applicants') ? 'bg-[#4E5356]' : '' }}">
                        <i class="fa fa-users"></i>&ensp; Candidates</a>
                </li>
                <li class=" font-light">
                    <a href="{{ route('offers') }}"
                        class="block p-3 {{ request()->is('admin/joboffers') ? 'bg-[#4E5356] text-white' : '' }}">
                        <i class="fa fa-briefcase"></i>&ensp; Job Offers</a>
                </li>
                <li class=" font-light">
                    <a href="{{ route('listing') }}"
                        class="block p-3 {{ request()->is('admin/applications') ? 'bg-[#4E5356] text-white' : '' }}">
                        <i class="fa fa-address-book"></i>&ensp; Applications</a>
                </li>
                <li class=" font-light mt-5">
                    <form action="#" method="POST">

                        @csrf

                        <button type="submit" class="px-4 py-2">
                            <i class="fa fa-lock"></i>&ensp; Log Out
                        </button>
                    </form>
                </li>
            </ul>
        </aside>

        <main class="w-10/12 h-auto ml-72">


            @yield('content')

        </main>
    </section>


    </section>

</body>

</html>
