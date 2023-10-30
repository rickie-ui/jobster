@extends('layouts.nav')

@section('content')
    <section class="mt-20 w-7/12 mx-auto p-4 bg-white rounded-lg mb-10">

        <h2 class="font-bold text-xl my-4 opacity-70">Personal Information</h2>

        <form action="#">
            <div class=" flex space-x-4">
                <div class="w-full">
                    <label for="full_name" class="block my-2">Full Name</label>
                    <input type="text" class="w-full border-2 px-4 py-2 rounded-md outline-none focus:bg-[#F3F8FB]"
                        name="full_name" value="">
                    @error('full_name')
                        <div class="text-red-500 text-sm">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="w-full">
                    <label for="email" class="block my-2">Email</label>
                    <input type="text" class="w-full border-2 px-4 py-2 rounded-md outline-none focus:bg-[#F3F8FB]"
                        name="email" value="">
                    @error('email')
                        <div class="text-red-500 text-sm">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
            </div>

            <div class=" flex space-x-4">
                <div class="w-full">
                    <label for="location" class="block my-2">Location</label>
                    <input type="text" class="w-full border-2 px-4 py-2 rounded-md outline-none focus:bg-[#F3F8FB]"
                        name="location" value="">
                    @error('location')
                        <div class="text-red-500 text-sm">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="w-full">
                    <label for="phone" class="block my-2">Phone</label>
                    <input type="text" class="w-full border-2 px-4 py-2 rounded-md outline-none focus:bg-[#F3F8FB]"
                        name="phone" value="">
                    @error('phone')
                        <div class="text-red-500 text-sm">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
            </div>

            <div class="flex space-x-4">
                <div class="w-full">
                    <label for="age" class="block my-2">Age</label>
                    <input type="text" class="w-full border px-4 py-2 rounded-lg outline-none focus:bg-[#F3F8FB]"
                        name="age" value="">
                    @error('age')
                        <div class="text-red-500 text-sm">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="w-full">
                    <label for="gender" class="block my-2">Gender</label>
                    <select name="gender" class="w-full border px-4 py-2 rounded-lg outline-none focus:bg-[#F3F8FB]">
                        <option>Choose...</option>
                        <option value="male">Male</option>
                        <option value="female">Female</option>
                    </select>
                    @error('gender')
                        <div class="text-red-500 text-sm">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
            </div>

            <label for="info" class="block my-2">About me</label>
            <textarea name="info" rows="4" class="w-full border-2 px-4 py-2  rounded-md outline-none focus:bg-[#F3F8FB]"></textarea>

            <p class="mt-8 mb-2 font-medium opacity-40">Only: .pdf /.doc /.docx, .jpg, .jpeg, .png</p>
            <div class=" flex space-x-4">
                <div class="w-full">
                    <label for="resume" class="block my-2">Curriculum Vitae</label>
                    <input type="file" name="resume" accept=".pdf, .doc, .docx"
                        class="w-full border-2 px-4 py-2 rounded-md outline-none focus:bg-[#F3F8FB]" multiple />
                    @error('resume')
                        <div class="text-red-500 text-sm">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="w-full">
                    <label for="avatar" class="block my-2">Photo</label>
                    <input type="file" name="avatar" accept=".jpg, .jpeg, .png"
                        class="w-full border-2 px-4 py-2 rounded-md outline-none focus:bg-[#F3F8FB]" multiple />
                    @error('avatar')
                        <div class="text-red-500 text-sm">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
            </div>

            <button type="submit" class="block px-6 py-2 rounded-3xl  bg-[#207456] text-white font-semibold mt-6">Update
                Information</button>
        </form>

    </section>
@endsection
