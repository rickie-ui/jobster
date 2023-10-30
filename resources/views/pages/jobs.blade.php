@extends('layouts.base')

@section('content')
    <section class="mt-20 w-10/12 mx-auto">
        <h3 class="text-5xl font-bold">Jobs</h3>
        <p class="my-4 font-light">Search your career opportunity through 12,800 jobs</p>

        <form action="#" class="relative">
            <input type="text" placeholder="Job Title or Keyword"
                class="bg-white rounded-full pl-12 pr-4 py-5 w-full focus:outline-none">
            <div class="absolute left-4 top-4 text-2xl opacity-60">
                <i class="fa fa-search "></i>
            </div>
            <button type="submit"
                class=" px-8 py-4 top-1 absolute right-4 rounded-full bg-[#0769C3] text-white font-semibold hover:bg-[#002745] focus:bg-[#002745]">Find
                Jobs</button>
        </form>


        {{-- section for the jobs --}}
        <section class="grid grid-cols-6 gap-4 mt-14">
            <aside class="bg-white rounded-lg p-6 col-span-2">
                <h2 class="font-bold text-xl">Type of Employment</h2>

                <div class="flex items-center my-4 text-base font-medium opacity-60">
                    <input type="checkbox" class="form-checkbox h-4 w-4 text-primary border-primary">
                    <label class="ml-2">Full Time</label>
                </div>
                <div class="flex items-center my-4 text-base font-medium opacity-60">
                    <input type="checkbox" class="form-checkbox h-4 w-4 text-primary border-primary">
                    <label class="ml-2">Part Time</label>
                </div>
                <div class="flex items-center my-4 text-base font-medium opacity-60">
                    <input type="checkbox" class="form-checkbox h-4 w-4 text-primary border-primary">
                    <label class="ml-2">Temporary</label>
                </div>
                <div class="flex items-center my-4 text-base font-medium opacity-60">
                    <input type="checkbox" class="form-checkbox h-4 w-4 text-primary border-primary">
                    <label class="ml-2">Contract</label>
                </div>

            </aside>

            <main class="col-start-3 col-end-7">
                <div class="flex justify-between items-center">
                    <h2 class="opacity-50 font-bold text-xl">Showing 4 jobs</h2>
                    <select name="date" class="bg-inherit items-end">
                        <option value="Newest">Newest</option>
                        <option value="Oldest">Oldest</option>
                    </select>
                </div>

                <div class="grid grid-cols-3 gap-5 mt-10">
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
            </main>
        </section>
    </section>
@endsection
