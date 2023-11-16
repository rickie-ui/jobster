@extends('layouts.admin')

@section('content')
    <section class="p-4">
        <section class="mx-10 my-10 text-[#002745]">

            <div class="w-full px-4 py-4 rounded-sm">
                <h3 class="mb-4 font-medium">Overview Jobs</h3>

                <div class="flex justify-between items-center mb-4">
                    <h2 class="opacity-50 font-medium
                    text-lg">Showing {{ count($jobs) }} jobs</h2>
                    <select name="date" class="bg-inherit items-end" id="filterSelect">
                        <option value="Newest">Newest</option>
                        <option value="Oldest">Oldest</option>
                    </select>


                </div>

                <section class="grid grid-cols-2 gap-4">

                    @foreach ($jobs as $job)
                        <div class="p-6 bg-white rounded-lg">

                            <h2 class="text-lg my-2 font-medium">{{ $job->position }}</h2>
                            <div class="flex gap-4 font-medium opacity-60">
                                <h2 class="py-1 px-4 border-0  border-r-2 border-l-2  text-sm">
                                    <i class="fa fa-clock-o"></i> {{ $job->period }}
                                </h2>
                                <div class="py-1 px-4 border-0 border-r-2  text-sm">
                                    <i class="fa fa-map-marker"></i> {{ $job->location }}
                                </div>

                                <div class="py-1 px-4 border-0 text-sm">
                                    <i class="fa fa-calendar"></i>
                                    {{ Carbon\Carbon::parse($job->created_at)->format('d F, Y') }}
                                </div>
                            </div>

                            <p class="mt-3 mb-6">
                                {!! \Illuminate\Support\Str::words($job->description, 16, '...') !!}
                            </p>

                            <hr class="mt-4">

                            <div class="flex justify-between">
                                <a href="/admin/job/{{ $job->id }}"
                                    class="bg-[#002745] hover:opacity-70 rounded-3xl px-8 mt-4  py-2 text-white inline-block">Job
                                    details</a>

                                <a href="/admin/update/{{ $job->id }}"
                                    class="bg-[#207456] hover:opacity-70 rounded-3xl px-6 mt-4  py-2 text-white inline-block"><i
                                        class="fa fa-edit"></i> Edit
                                    Job</a>

                            </div>
                        </div>
                    @endforeach

                </section>

                <div class="mt-5"> {{ $jobs->links() }} </div>

            </div>

        </section>
    </section>
@endsection
