@extends('layouts.nav')

@section('content')
    <section class="mt-20 w-7/12 mx-auto">
        <h3 class="text-5xl font-bold">Jobs</h3>
        <p class="my-4 font-light">Search your career opportunity through {{ count($jobs) }}+ jobs</p>

        <form action="{{ route('jobs-search') }}" method="GET" class="relative">
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
        <section class="grid grid-cols-6 gap-4 my-10">
            <aside class="bg-white  rounded-lg p-5 col-span-2">
                <h2 class="text-xl opacity-70 font-bold mt-2 mb-6">Filter</h2>
                <hr class="mb-2">
                <h2 class="font-bold text-lg uppercase opacity-40">Jobs Type</h2>

                <form action="{{ route('jobs') }}" method="GET" id="filter-form">

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
                    <h2 class="opacity-50 font-medium text-lg">Showing {{ count($jobs) }} jobs</h2>
                    <select name="date" class="bg-inherit items-end">
                        <option value="Newest">Newest</option>
                        <option value="Oldest">Oldest</option>
                    </select>
                </div>

                <div class="flex flex-col  gap-4 mt-10">

                    @if (count($jobs) > 0)
                        @foreach ($jobs as $job)
                            <a href="/users/jobs/detail/{{ $job->id }}"
                                class="hover:shadow-lg border p-4 border-[#FFD75E] rounded-lg w-full">
                                <div class="flex items-center justify-between">
                                    <div class="flex gap-2">
                                        <img src="{{ asset('storage/' . $job->avatar) }}" alt="avatar"
                                            class="h-14 w-14 rounded-full border-2 border-[#0769C3] object-cover object-center" />
                                        <h2>{{ $job->position }} <br>by {{ $job->company }}</h2>
                                    </div>
                                    <p></p>
                                </div>

                                <div class="flex justify-between items-center mt-5 font-medium">
                                    <div class="flex gap-4 font-mono">
                                        <h2 class="border border-gray-300 py-1 px-2 hover:opacity-60 rounded-lg">
                                            {{ $job->period }}
                                        </h2>
                                        <div class="py-1 px-2 border border-gray-300 hover:opacity-60 rounded-lg">
                                            <i class="fa fa-marker"></i> {{ $job->location }}
                                        </div>
                                    </div>
                                    <p class="inline-block bg-[#207456] text-white px-5 py-1 rounded-md hover:opacity-70">
                                        <i class="fa fa-bolt"></i>&ensp;Apply
                                    </p>
                                </div>
                            </a>
                        @endforeach
                    @else
                        <p class="font-medium absolute opacity-40 left-2/4">No job openings available!</p>
                    @endif
                </div>
            </main>
        </section>
    </section>
@endsection
