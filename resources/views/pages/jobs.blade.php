@extends('layouts.base')

@section('content')
    <section class="mt-20 w-10/12 mx-auto">
        <h3 class="text-5xl font-bold">Jobs</h3>
        <p class="my-4 font-light">Search your career opportunity through {{ count($jobs) }}+ jobs</p>

        <form action="{{ route('search') }}" method="GET" class="relative">
            <input type="text" placeholder="Job Title or Keyword" name="query"
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

                <form action="{{ route('apply') }}" method="GET" id="filter-form">

                    @csrf

                    <div class="flex items-center my-4 text-base font-medium opacity-60">
                        <input type="checkbox" name="full_time" id="full_time" value="1"
                            class="form-checkbox h-4 w-4 text-primary border-primary"
                            @if (old('full_time', session('full_time', false))) checked @endif>
                        <label for="full_time" class="ml-2">Full Time</label>
                    </div>
                    <div class="flex items-center my-4 text-base font-medium opacity-60">
                        <input type="checkbox" name="part_time" id="part_time" value="1"
                            class="form-checkbox h-4 w-4 text-primary border-primary"
                            @if (old('part_time', session('part_time', false))) checked @endif>
                        <label for="part_time" class="ml-2">Part Time</label>
                    </div>
                    <div class="flex items-center my-4 text-base font-medium opacity-60">
                        <input type="checkbox" name="temporary" id="temporary" value="1"
                            class="form-checkbox h-4 w-4 text-primary border-primary"
                            @if (old('temporary', session('temporary', false))) checked @endif>
                        <label for="temporary" class="ml-2">Temporary</label>
                    </div>
                    <div class="flex items-center my-4 text-base font-medium opacity-60">
                        <input type="checkbox" name="contract" id="contract" value="1"
                            class="form-checkbox h-4 w-4 text-primary border-primary"
                            @if (old('contract', session('contract', false))) checked @endif>
                        <label for="contract" class="ml-2">Contract</label>
                    </div>
                </form>

            </aside>

            <main class="col-start-3 col-end-7">
                <div class="flex justify-between items-center">
                    <h2 class="opacity-50 font-bold text-xl">Showing {{ count($jobs) }} jobs</h2>
                    <select name="date" class="bg-inherit items-end">
                        <option value="Newest">Newest</option>
                        <option value="Oldest">Oldest</option>
                    </select>
                </div>

                <div class="grid grid-cols-3 gap-5 mt-10">

                    @if (count($jobs) > 0)
                        @foreach ($jobs as $job)
                            <div class="bg-white shadow-sm outline-none border-0 rounded-3xl h-auto w-64 p-4">
                                <a href="#"
                                    class=" block hover:text-[#0769C3] my-6 font-bold text-lg">{{ $job->position }}</a>
                                <div class="flex gap-4 mb-16 whitespace-nowrap flex-wrap">
                                    <p class="font-semibold hover:text-[#0769C3] cursor-pointer"><i class="fa fa-globe"></i>
                                        {{ $job->location }}</p>
                                    <p>{{ $job->period }}</p>
                                </div>

                                <div class="grid grid-cols-2 place-items-center">
                                    <p class="opacity-60">{{ $job->created_at }} by <br> <span
                                            class="opacity-100 font-bold">
                                            {{ $job->company }}</span>
                                    </p>
                                    <p class="w-20 h-20 text-3xl flex items-center justify-center rounded-3xl bg-[#E6F0F9]">
                                        <i class="fa fa-codiepie"></i>
                                    </p>
                                </div>
                            </div>
                        @endforeach
                    @else
                        <p class="font-medium absolute opacity-40 left-2/3">No job openings available!</p>
                    @endif
                </div>
            </main>
        </section>
    </section>
@endsection
