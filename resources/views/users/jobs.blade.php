@extends('layouts.nav')

@section('content')
    <section class="mt-20 w-7/12 mx-auto">
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
        <section class="grid grid-cols-6 gap-4 my-10">
            <aside class="bg-white  rounded-lg p-5 col-span-2">
                <h2 class="text-xl opacity-70 font-bold mt-2 mb-6">Filter</h2>
                <hr class="mb-2">
                <h2 class="font-bold text-lg uppercase opacity-40">Jobs Type</h2>
                <div class="flex items-center my-4 text-base font-medium opacity-60">
                    <input type="checkbox" class="form-checkbox h-4 w-4 text-primary border-primary">
                    <label class="ml-2">Full Time (0)</label>
                </div>
                <div class="flex items-center my-4 text-base font-medium opacity-60">
                    <input type="checkbox" class="form-checkbox h-4 w-4 text-primary border-primary">
                    <label class="ml-2">Part Time (2)</label>
                </div>
                <div class="flex items-center my-4 text-base font-medium opacity-60">
                    <input type="checkbox" class="form-checkbox h-4 w-4 text-primary border-primary">
                    <label class="ml-2">Temporary (6)</label>
                </div>
                <div class="flex items-center my-4 text-base font-medium opacity-60">
                    <input type="checkbox" class="form-checkbox h-4 w-4 text-primary border-primary">
                    <label class="ml-2">Contract (0)</label>
                </div>

            </aside>

            <main class="col-start-3 col-end-7">
                <div class="flex justify-between items-center">
                    <h2 class="opacity-50 font-medium text-lg">Showing 4 jobs</h2>
                    <select name="date" class="bg-inherit items-end">
                        <option value="Newest">Newest</option>
                        <option value="Oldest">Oldest</option>
                    </select>
                </div>

                <div class="flex flex-col  gap-4 mt-10">
                    <a href="#" class="hover:shadow-lg border p-4 border-[#FFD75E] rounded-lg w-full">
                        <div class="flex items-center justify-between">
                            <div class="flex gap-2">
                                <img src="{{ asset('images/work.avif') }}" alt="avatar"
                                    class="h-14 w-14 rounded-full border-2 border-[#0769C3] object-cover object-center" />
                                <h2>Gradener <br>by Atama Security</h2>
                            </div>
                            <p></p>
                        </div>

                        <div class="flex justify-between items-center mt-5 font-medium">
                            <div class="flex gap-4">
                                <h2 class="bg-red-200 py-1 px-2 hover:opacity-60 rounded-lg">Full Time</h2>
                                <div class="py-1 px-2 bg-green-200 hover:opacity-60 rounded-lg">
                                    <i class="fa fa-marker"></i> Nairobi,Kenya
                                </div>
                            </div>
                            <p class="opacity-70">10 days left to apply</p>
                        </div>
                    </a>

                    <a href="#" class="hover:shadow-lg border p-4 border-[#FFD75E] rounded-lg w-full">
                        <div class="flex items-center justify-between">
                            <div class="flex gap-2">
                                <img src="{{ asset('images/work.avif') }}" alt="avatar"
                                    class="h-14 w-14 rounded-full border-2 border-[#0769C3] object-cover object-center" />
                                <h2>Gradener <br>by Atama Security</h2>
                            </div>
                            <p></p>
                        </div>

                        <div class="flex justify-between items-center mt-5 font-medium">
                            <div class="flex gap-4">
                                <h2 class="bg-red-200 py-1 px-2 hover:opacity-60 rounded-lg">Full Time</h2>
                                <div class="py-1 px-2 bg-green-200 hover:opacity-60 rounded-lg">
                                    <i class="fa fa-marker"></i> Nairobi,Kenya
                                </div>
                            </div>
                            <p class="opacity-70">10 days left to apply</p>
                        </div>
                    </a>
                </div>
            </main>
        </section>
    </section>
@endsection
