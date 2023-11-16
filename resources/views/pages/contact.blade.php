@extends('layouts.base')


@section('content')
    <section class="mt-20">
        <h2 class="text-3xl text-center font-bold my-4">We'd love to hear from you</h2>
        <p class="text-center opacity-60 mt-2 mb-10">Get in touch with us</p>

        <div class="grid grid-cols-3 w-8/12 mx-auto">
            <div
                class="w-52 h-44 flex justify-center items-center flex-col bg-[#FFF8EC] rounded-2xl hover:bg-[#002745] hover:text-white ">
                <div class="rounded-2xl text-[#0769C3] text-3xl flex justify-center items-center bg-white h-16 w-16">
                    <i class="fa fa-globe"></i>
                </div>
                <p class="my-4 font-semibold">Nairobi, Kenya</p>
            </div>

            <div
                class="w-52 h-44 flex justify-center items-center flex-col bg-[#FFF8EC] rounded-2xl hover:bg-[#002745] hover:text-white ">
                <div class="rounded-2xl text-[#0769C3] text-3xl flex justify-center items-center bg-white h-16 w-16">
                    <i class="fa fa-phone"></i>
                </div>
                <p class="my-4 font-semibold">(+254) 712345678</p>
            </div>
            <div
                class="w-52 h-44 flex justify-center items-center flex-col bg-[#FFF8EC] rounded-2xl hover:bg-[#002745] hover:text-white ">
                <div class="rounded-2xl text-[#0769C3] text-3xl flex justify-center items-center bg-white h-16 w-16">
                    <i class="fa fa-envelope"></i>
                </div>
                <p class="my-4 font-semibold">office@jobster.com
                </p>
            </div>
        </div>

        {{-- send message --}}
        <form action="{{ route('contact') }}" method="POST" class="w-1/3 mx-auto my-24">

            @csrf

            <h2 class="text-4xl mb-8 text-center font-bold">Contact Us</h2>


            @if (session('status'))
                <div class="bg-[#34BAA5] py-2 px-4 rounded-lg text-center text-white" id="message">
                    <i class="fa fa-check-circle"></i> {{ session('status') }}
                </div>
            @endif
            <label for="name" class="block my-2">Name</label>
            <input type="text" name="name"
                class="px-4 w-full py-3 outline-none rounded-lg focus:ring-2 focus:ring-[#002745] @error('name') ring-2 ring-red-500 @enderror"
                value="{{ old('name') }}" placeholder="Enter your name">
            @error('name')
                <div class="text-red-500 my-2 font-medium  text-sm">
                    {{ $message }}
                </div>
            @enderror


            <label for="email" class="block my-2">Email</label>
            <input type="text" name="email"
                class="px-4 w-full py-3 outline-none rounded-lg  focus:ring-2 focus:ring-[#002745] @error('email') ring-2 ring-red-500 @enderror"
                value="{{ old('email') }}" placeholder="Enter your email">
            @error('email')
                <div class="text-red-500 my-2 font-medium  text-sm">
                    {{ $message }}
                </div>
            @enderror


            <label for="message" class="block my-2">Message</label>
            <textarea name="message" placeholder="Type your message here"
                class="w-full px-4 py-3 outline-none rounded-lg  focus:ring-2 focus:ring-[#002745] @error('message') ring-2 ring-red-500 @enderror">{{ old('message') }}</textarea>
            @error('message')
                <div class="text-red-500 my-1 font-medium  text-sm">
                    {{ $message }}
                </div>
            @enderror

            <button type="submit"
                class="rounded-3xl text-[#002745] w-full mt-4 px-6 border-2 border-[#002745]  transition-all py-2 hover:bg-[#002745]  hover:text-white  inline-block font-semibold">Send
                Message</button>
        </form>
    </section>
@endsection
