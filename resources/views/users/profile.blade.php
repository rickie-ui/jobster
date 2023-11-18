@extends('layouts.nav')

@section('content')
    <section class="mt-20 w-7/12 mx-auto p-4 bg-white rounded-lg mb-10">

        <h2 class="font-bold text-xl my-4 opacity-70">Personal Information</h2>

        @if (session('message'))
            <div class="bg-[#34BAA5] py-2 px-4 absolute bottom-4 right-4 rounded-lg text-center text-white" id="profile">
                <i class="fa fa-check-circle"></i> {{ session('message') }}
            </div>
        @endif

        <form action="/users/profile/{{ $user->id }}" method="POST" enctype="multipart/form-data">

            @csrf

            @method('PUT')

            <div class=" flex space-x-4">
                <div class="w-full">
                    <label for="full_name" class="block my-2">Full Name</label>
                    <input type="text" class="w-full border-2 px-4 py-2 rounded-md outline-none focus:bg-[#F3F8FB]"
                        name="full_name" value="{{ $user->full_name }}">
                    @error('full_name')
                        <div class="text-red-500 text-sm">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="w-full">
                    <label for="email" class="block my-2">Email</label>
                    <input type="text" class="w-full border-2 px-4 py-2 rounded-md outline-none focus:bg-[#F3F8FB]"
                        name="email" value="{{ $user->email }}">
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
                        name="location" value="{{ old('location', $profile->location ?? '') }}"
                        placeholder="Enter your current location">
                    @error('location')
                        <div class="text-red-500 text-sm">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="w-full">
                    <label for="phone" class="block my-2">Phone</label>
                    <input type="text" class="w-full border-2 px-4 py-2 rounded-md outline-none focus:bg-[#F3F8FB]"
                        name="phone" value="{{ old('phone', $profile->phone ?? '') }}"
                        placeholder="Enter your phone number">
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
                        name="age" value="{{ old('age', $profile->age ?? '') }}" placeholder="Enter your age">
                    @error('age')
                        <div class="text-red-500 text-sm">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="w-full">
                    <label for="gender" class="block my-2">Gender</label>
                    <select name="gender" class="w-full border px-4 py-2 rounded-lg outline-none focus:bg-[#F3F8FB]">
                        <option value="" {{ old('gender', optional($profile)->gender) === '' ? 'selected' : '' }}>
                        </option>
                        <option value="Male"
                            {{ old('gender', optional($profile)->gender) === 'Male' ? 'selected' : '' }}>Male
                        </option>
                        <option value="Female"
                            {{ old('gender', optional($profile)->gender) === 'Female' ? 'selected' : '' }}>Female
                        </option>
                    </select>
                    @error('gender')
                        <div class="text-red-500 text-sm">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
            </div>

            <label for="about" class="block my-2">About me</label>
            <textarea name="about" rows="4" class="w-full border-2 px-4 py-2  rounded-md outline-none focus:bg-[#F3F8FB]"
                placeholder="Tell us about yourself">{{ old('about', $profile->about ?? '') }}</textarea>
            @error('about')
                <div class="text-red-500 text-sm">
                    {{ $message }}
                </div>
            @enderror

            <p class="mt-4 mb-2 font-medium opacity-40">Only: .pdf /.doc /.docx, .jpg, .jpeg, .png</p>
            <div class=" flex space-x-4">
                <div class="w-full">
                    <label for="resume" class="block my-2">Curriculum Vitae</label>
                    <input type="file" name="resume"
                        class="w-full border-2 px-4 py-2 rounded-md outline-none focus:bg-[#F3F8FB]" multiple />
                    @error('resume')
                        <div class="text-red-500 text-sm">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="w-full">
                    <label for="avatar" class="block my-2">Photo</label>
                    <input type="file" name="avatar"
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
