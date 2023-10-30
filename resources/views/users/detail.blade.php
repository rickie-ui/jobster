@extends('layouts.nav')

@section('content')
    <section class="mt-20 w-7/12 mx-auto flex gap-4">

        <div class="bg-white rounded-lg  p-4 w-2/3">
            <h2 class="text-5xl font-semibold">Gardener <br>
                <p class="text-sm font-medium opacity-60">by Atama Security</p>
            </h2>

            <div class="flex gap-4 mt-6">
                <h2 class="bg-red-200 py-1 px-2 hover:cursor-pointer hover:opacity-80 rounded-lg">Full Time</h2>
                <div class="py-1 px-2 bg-green-200 hover:cursor-pointer hover:opacity-80 rounded-lg">
                    <i class="fa fa-marker"></i> Nairobi,Kenya
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
                        <p class="my-1 text-sm opacity-40">June 8, 2023</p>
                    </div>
                </div>

                <div class="flex gap-2">
                    <div class="h-10 w-10 rounded-full flex justify-center items-center bg-[#ECF1F0]">
                        <i class="fa fa-calendar text-[#207456]"></i>
                    </div>

                    <div>
                        Date closed <br>
                        <p class="my-1 text-sm opacity-40">June 8, 2023</p>
                    </div>
                </div>

                <div class="flex gap-2">
                    <div class="h-10 w-10 rounded-full flex justify-center items-center bg-[#ECF1F0]">
                        <i class="fa fa-map-marker text-[#207456]"></i>
                    </div>

                    <div>
                        Location <br>
                        <p class="my-1 text-sm opacity-40">Nairobi</p>
                    </div>
                </div>
            </div>


            <h3 class="text-xl font-bold mb-4 mt-10">Description</h3>
            <h4 class="text-lg font-medium my-4">Overview</h4>
            <p>We are Uxper. With a presence in more than 60 countries, we’re a growing global organization that helps
                amazing companies engage with customers through mobile messaging, email, voice and video.</p>

            <h4 class="text-lg font-medium my-4">Requirement</h4>
            <p>
                Be heavily involved in turning user stories into testable, maintainable and high-quality code. This is a
                hands-on code design and coding role!
                Be a valued member of an autonomous, cross-functional team delivering our messaging experience to businesses
                around the world
                Promote and share knowledge for improvement of methodologies and best practices
                Close-knitted collaboration with equally passionate team members having fun at work and feeling proud that
                you are a key part of creating world-class solutions for customer engagement
            </p>

            <div class="bg-[#ECF1F0] rounded-lg p-5 w-full mt-10 flex justify-between items-center">
                <div>
                    <h2 class="text-2xl font-medium">Interested in this job?</h2>
                    <p class="font-medium my-3">20 days left to apply</p>
                </div>

                <a href="#"
                    class="px-6 rounded-3xl py-2 my-5 block bg-[#207456] text-white font-medium hover:opacity-80">Apply
                    now</a>

            </div>
        </div>

        <div class="bg-[#ECF1F0] rounded-lg p-5 w-2/6 text-center">
            <h2 class="text-2xl font-medium">Interested in this job?</h2>
            <p class="font-medium my-3">20 days left to apply</p>

            <a href="#"
                class="px-6 rounded-3xl py-2 my-5 block bg-[#207456] text-white font-medium hover:opacity-80">Apply
                now</a>

        </div>
    </section>
@endsection
