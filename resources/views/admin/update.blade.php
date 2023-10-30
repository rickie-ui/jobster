@extends('layouts.admin')

@section('content')
    <section class="p-4">
        <section class="mx-10 my-5 text-[#002745]">

            <div class="w-full px-4 py-4 rounded-sm">
                <h2 class="font-bold text-xl my-4 opacity-70">Update Job Information</h2>
                @if (session('status'))
                    <div class="bg-[#34BAA5] py-2 px-4 absolute top-6 right-16 rounded-lg text-center text-white"
                        id="duration">
                        <i class="fa fa-check-circle"></i> {{ session('status') }}
                    </div>
                @endif

                <form action="/admin/update/{{ $job->id }}"class="p-4 bg-white rounded-lg" method="POST">

                    @csrf

                    @method('PUT')

                    <div class=" flex space-x-4">
                        <div class="w-full">
                            <label for="company" class="block my-2">Company Name</label>
                            <input type="text" class="w-full border px-4 py-2 rounded-lg outline-none focus:bg-[#F3F8FB]"
                                name="company" value="{{ $job->company }}">
                            @error('company')
                                <div class="text-red-500 text-sm">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="w-full">
                            <label for="position" class="block my-2">Position</label>
                            <input type="text" class="w-full border px-4 py-2 rounded-lg outline-none focus:bg-[#F3F8FB]"
                                name="position" value="{{ $job->position }}">
                            @error('position')
                                <div class="text-red-500 text-sm">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>

                    <div class=" flex space-x-4">
                        <div class="w-full">
                            <label for="location" class="block my-2">Location</label>
                            <input type="text" class="w-full border px-4 py-2 rounded-lg outline-none focus:bg-[#F3F8FB]"
                                name="location" value="{{ $job->location }}">
                            @error('location')
                                <div class="text-red-500 text-sm">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="w-full">
                            <label for="period" class="block my-2">Job Type</label>
                            <select name="period"
                                class="w-full border px-4 py-2 rounded-lg outline-none focus:bg-[#F3F8FB]"
                                value="{{ $job->period }}">
                                <option></option>
                                <option value="Full-Time" {{ $job->period == 'Full-Time' ? 'selected' : '' }}>
                                    Full-Time
                                </option>
                                <option value="Part-Time" {{ $job->period == 'Part-Time' ? 'selected' : '' }}>
                                    Part-Time
                                </option>
                            </select>
                            @error('period')
                                <div class="text-red-500 text-sm">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>

                    <div class=" flex space-x-4">
                        <div class="w-full">
                            <label for="due" class="block my-2">Close Date</label>
                            <input type="date" id="due"
                                class="w-full border px-4 py-2 rounded-lg outline-none focus:bg-[#F3F8FB]" name="due"
                                value="{{ $job->due }}">
                            @error('due')
                                <div class="text-red-500 text-sm">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="w-full">

                        </div>
                    </div>

                    <label for="description" class="block my-2">Job Description</label>
                    <textarea name="description" id="editor" class="w-full border px-4 py-2  rounded-lg outline-none focus:bg-[#F3F8FB]">{{ $job->description }}</textarea>
                    @error('description')
                        <div class="text-red-500 text-sm">
                            {{ $message }}
                        </div>
                    @enderror

                    <button type="submit"
                        class="block px-6 py-2 rounded-3xl  bg-[#207456] text-white font-semibold mt-6">Update Job</button>
                </form>

            </div>

        </section>
    </section>
@endsection
