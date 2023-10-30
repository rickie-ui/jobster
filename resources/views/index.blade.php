@extends('layouts.base')

@section('content')
    {{-- search section --}}
    <section class="px-32 mt-20 flex">
        <div>
            <h2 class="text-6xl font-bold">Find the perfect <br> job for you</h2>
            <p class="my-6 text-sm font-medium opacity-60">A place where leading employers are already looking for
                your talent
                and experience
            </p>
            <form class="relative">
                <input type="text" class="bg-white rounded-full pl-12 pr-4 py-6 w-96 focus:outline-none"
                    placeholder="Job title or keyword">
                <div class="absolute left-4 top-5 text-2xl opacity-60">
                    <i class="fa fa-search "></i>
                </div>
            </form>

            <div class="flex gap-4">
                <a href="{{ route('signin') }}"
                    class="rounded-3xl text-[#002745] px-6 border-2 border-[#002745]  transition-all py-2 hover:bg-[#002745]  hover:text-white mt-10 inline-block font-semibold">Sign
                    in</a>
                <a href="{{ route('signup') }}"
                    class="rounded-3xl px-6 hover:opacity-70 transition-all py-2 bg-[#3EAA59]  text-white mt-10 inline-block font-semibold">Get
                    Started</a>
            </div>
        </div>

        <div class="relative -right-80">
            <div
                class="absolute z-20 p-4 hover:-translate-y-2 transition-transform bg-gradient-to-b from-gray-900 via-gray-700 to-gray-100  rounded-3xl h-80 w-64 ">
                <img src="{{ asset('images/teamwork.png') }}" alt="hero">
            </div>
            <div
                class="absolute hover:-translate-y-2 transition-transform rotate-12 z-10 rotate top-8 left-8 bg-[#0769C3]  rounded-3xl h-80 w-64 ">
            </div>
            <div
                class="absolute rotate-24 hover:-translate-y-2 transition-transform top-14 left-12 bg-[#002745]   rounded-3xl h-80 w-64 ">
            </div>

            <div
                class="absolute bg-white z-30 rounded-3xl h-40 w-40 top-36 -right-80 flex justify-center items-center p-2 hover:-translate-y-2 transition-transform ">
                <div class="text-3xl flex flex-col font-bold opacity-60">
                    <p>405+</p>
                    <p class="text-sm my-3">job offers</p>
                </div>

            </div>
        </div>
    </section>

    {{-- featured jobs --}}

    <section class="w-full bg-[#FFF8EC]  mt-52 h-auto px-32 py-20">
        <h2 class="text-6xl font-bold">Featured Job Offers</h2>
        <p class="font-medium opacity-60 my-4">Find the right job right now</p>


        {{-- list of jobs --}}
        <div class="mt-14 grid grid-cols-4 gap-2">
            <div class="bg-white shadow-sm outline-none border-0 rounded-3xl h-72 w-64 p-4">
                <a href="#" class=" block hover:text-[#0769C3] my-6 font-bold text-lg">Social Worker</a>
                <div class="flex gap-4 mb-16 whitespace-nowrap flex-wrap">
                    <p class="font-semibold hover:text-[#0769C3] cursor-pointer"><i class="fa fa-globe"></i>
                        Nairobi,
                        Kenya</p>
                    <p>Full-time</p>
                </div>

                <div class="flex justify-between items-center">
                    <p class="opacity-60">June 8, 2022 by <br> <span class="opacity-100 font-bold"> Atama Inc</span>
                    </p>
                    <p class="w-20 h-20 text-3xl flex items-center justify-center rounded-3xl bg-[#E6F0F9]"><i
                            class="fa fa-codiepie"></i>
                    </p>
                </div>
            </div>
            <div class="bg-white shadow-sm outline-none border-0 rounded-3xl h-72 w-64 p-4">
                <a href="#" class=" block hover:text-[#0769C3] my-6 font-bold text-lg">Truck Driver</a>
                <div class="flex gap-4 mb-16 whitespace-nowrap flex-wrap">
                    <p class="font-semibold hover:text-[#0769C3] cursor-pointer"><i class="fa fa-globe"></i>
                        Nakuru,
                        Kenya</p>
                    <p>Part-time</p>
                </div>

                <div class="flex justify-between items-center">
                    <p class="opacity-60">June 8, 2022 by <br> <span class="opacity-100 font-bold"> GenZ Inc</span>
                    </p>
                    <p class="w-20 h-20 text-3xl flex items-center justify-center rounded-3xl bg-[#E6F0F9]"><i
                            class="fa fa-codiepie"></i>
                    </p>
                </div>
            </div>
            <div class="bg-white shadow-sm outline-none border-0 rounded-3xl h-72 w-64 p-4">
                <a href="#" class=" block hover:text-[#0769C3] my-6 font-bold text-lg">Mechanic </a>
                <div class="flex gap-4 mb-16 whitespace-nowrap ">
                    <p class="font-semibold hover:text-[#0769C3] cursor-pointer"><i class="fa fa-globe"></i>
                        Mombasa,
                        Kenya</p>
                    <p>Temporary</p>
                </div>

                <div class="flex justify-between items-center">
                    <p class="opacity-60">June 8, 2022 by <br> <span class="opacity-100 font-bold"> Toyota
                            Inc</span>
                    </p>
                    <p class="w-20 h-20 text-3xl flex items-center justify-center rounded-3xl bg-[#E6F0F9]"><i
                            class="fa fa-codiepie"></i>
                    </p>
                </div>
            </div>
            <div class="bg-white shadow-sm outline-none border-0 rounded-3xl h-72 w-64 p-4">
                <a href="#" class=" block hover:text-[#0769C3] my-6 font-bold text-lg">Waitress</a>
                <div class="flex gap-4 mb-16 whitespace-nowrap flex-wrap">
                    <p class="font-semibold hover:text-[#0769C3] cursor-pointer"><i class="fa fa-globe"></i>
                        Nairobi,
                        Kenya</p>
                    <p>Contract</p>
                </div>

                <div class="flex justify-between items-center">
                    <p class="opacity-60">June 8, 2022 by <br> <span class="opacity-100 font-bold"> Atama Inc</span>
                    </p>
                    <p class="w-20 h-20 text-3xl flex items-center justify-center rounded-3xl bg-[#E6F0F9]"><i
                            class="fa fa-codiepie"></i>
                    </p>
                </div>
            </div>
        </div>

        <a href="#"
            class="rounded-3xl px-4 py-3 bg-[#0769C3] hover:pl-8 transition-all text-white mt-10 inline-block font-semibold">All
            Job
            Offers <i class="fa fa-caret-right"></i></a>
    </section>
@endsection
