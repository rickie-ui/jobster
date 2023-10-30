@extends('layouts.admin')

@section('content')
    <section class="mt-10 mb-5 w-7/12 mx-auto text-[#002745]">

        <div class="bg-white rounded-lg  p-4 w-full">
            <h2 class="text-4xl font-semibold">{{ $job->position }} <br>
                <p class="text-sm font-medium opacity-60">by {{ $job->company }}</p>
            </h2>

            <div class="flex gap-4 mt-6">
                <h2 class="bg-red-200 py-1 px-2 hover:cursor-pointer hover:opacity-80 rounded-lg">{{ $job->period }}</h2>
                <div class="py-1 px-2 bg-green-200 hover:cursor-pointer hover:opacity-80 rounded-lg">
                    <i class="fa fa-marker"></i> {{ $job->location }}
                </div>
            </div>

            <hr class="my-6">


            <h2 class="my-4 font-medium text-2xl">Job role insights </h2>

            <div class="grid grid-cols-3 gap-5">
                <div class="flex gap-2">
                    <div class="h-10 w-10 rounded-full flex justify-center items-center bg-[#ECF1F0]">
                        <i class="fa fa-calendar text-[#207456]"></i>
                    </div>

                    <div>
                        Date posted <br>
                        <p class="my-1 text-sm opacity-40"> {{ Carbon\Carbon::parse($job->created_at)->format('d F, Y') }}
                        </p>
                    </div>
                </div>

                <div class="flex gap-2">
                    <div class="h-10 w-10 rounded-full flex justify-center items-center bg-[#ECF1F0]">
                        <i class="fa fa-calendar text-[#207456]"></i>
                    </div>

                    <div>
                        Date closed <br>
                        <p class="my-1 text-sm opacity-40"> {{ Carbon\Carbon::parse($job->due)->format('d F, Y') }} </p>
                    </div>
                </div>

                <div class="flex gap-2">
                    <div class="h-10 w-10 rounded-full flex justify-center items-center bg-[#ECF1F0]">
                        <i class="fa fa-map-marker text-[#207456]"></i>
                    </div>

                    <div>
                        Location <br>
                        <p class="my-1 text-sm opacity-40">{{ $job->location }}</p>
                    </div>
                </div>
            </div>


            <h3 class="text-xl font-bold mb-4 mt-10">Description</h3>
            <div>
                {!! $job->description !!}
            </div>

            <div class="bg-[#ECF1F0] rounded-lg p-5 w-full mt-10 flex justify-between items-center">
                <div>
                    <h2 class="text-2xl font-medium">Check more jobs available.</h2>
                    <p class="font-medium my-3"> <span class="text-red-400">{{ $differenceInDays }}</span> days left to
                        apply</p>
                </div>

                <a href="{{ route('offers') }}"
                    class="px-6 rounded-3xl py-2 my-5 block bg-[#207456] text-white font-medium hover:opacity-80">Go
                    Back</a>

            </div>
        </div>
    </section>
@endsection
