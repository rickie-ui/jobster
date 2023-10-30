@extends('layouts.admin')

@section('content')
    <section class="mt-10 mb-5 w-7/12 mx-auto text-[#002745]">
        <a href="#" class="font-medium opacity-60 my-4 hover:underline "><i class="fa fa-angle-left"></i> Back to
            candidates</a>
        <h2 class="font-bold text-xl my-4 opacity-70">User Information</h2>

        <div class="bg-white  rounded-lg p-4">

            <div class="flex gap-6 py-5">
                <img src="{{ asset('/images/work.avif') }}" alt="avatar"
                    class="h-20 w-20 rounded-full border-2 border-[#207456] object-cover object-center">
                <div class="opacity-60 font-semibold">
                    <h3 class="text-lg">Purity wakio</h3>
                    <h3><i class="fa fa-map-marker"></i> Nairobi, kenya</h3>
                    <p class="text-sm leading-6 my-3">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                        Lorem ipsum
                        dolor sit amet consectetur, adipisicing elit. Nihil nostrum sequi officia suscipit unde molestias
                        voluptatem voluptatibus magni amet nemo.
                        Sapiente, dicta.</p>
                </div>
            </div>

            <h2 class="my-4 font-medium text-lg opacity-80">User Details</h2>

            <div class="grid grid-cols-4 gap-2 w-full mx-auto">
                <div class="flex gap-2">
                    <div class="h-10 w-10 rounded-full flex justify-center items-center bg-[#ECF1F0]">
                        <i class="fa fa-envelope text-[#207456]"></i>
                    </div>

                    <div>
                        Email <br>
                        <p class="my-1 text-sm opacity-40">purity@gmail.com</p>
                    </div>
                </div>

                <div class="flex gap-2">
                    <div class="h-10 w-10 rounded-full flex justify-center items-center bg-[#ECF1F0]">
                        <i class="fa fa-phone text-[#207456]"></i>
                    </div>

                    <div>
                        Phone <br>
                        <p class="my-1 text-sm opacity-40">+254712345678</p>
                    </div>
                </div>

                <div class="flex gap-2">
                    <div class="h-10 w-10 rounded-full flex justify-center items-center bg-[#ECF1F0]">
                        <i class="fa fa-mars-stroke text-[#207456]"></i>
                    </div>

                    <div>
                        Gender <br>
                        <p class="my-1 text-sm opacity-40">Female</p>
                    </div>
                </div>

                <div class="flex gap-2">
                    <div class="h-10 w-10 rounded-full flex justify-center items-center bg-[#ECF1F0]">
                        <i class="fa fa-address-book text-[#207456]"></i>
                    </div>

                    <div>
                        Age <br>
                        <p class="my-1 text-sm opacity-40">24yrs</p>
                    </div>
                </div>
            </div>

            <a href="#" class="px-8 py-2 rounded-md bg-[#207456] text-white mt-8 mb-2 inline-block"><i
                    class="fa fa-download"></i>
                Download
                resume</a>

        </div>
    </section>
@endsection
