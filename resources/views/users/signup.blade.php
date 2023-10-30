<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {{-- css --}}
    @vite('resources/css/app.css')
    {{-- icons --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Sign Up</title>
</head>

<body class="antialiased bg-[#E6F0F9] h-auto w-full text-[#002745]">

    <section class="bg-white w-1/3 rounded-xl mt-44 py-4 px-8 mx-auto">
        <h2 class="my-5 text-2xl font-semibold tracking-wider">Create an account</h2>

        <form action="{{ route('signup') }}" method="POST">

            @csrf

            <div class="my-10 relative">
                <input type="text" name="full_name"
                    class="peer block h-10 w-full border-b-2 border-gray-300 text-gray-900 focus:outline-none focus:border-[#0769C3] placeholder-transparent @error('full_name') border-red-500 @enderror"
                    placeholder="Full name" value="{{ old('full_name') }}" />
                <label for="full_name"
                    class="absolute left-0 -top-3.5 text-gray-600 text-sm transition-all cursor-text pointer-events-none peer-placeholder-shown:text-base peer-placeholder-shown:text-gray-600 peer-placeholder-shown:top-2 peer-focus:-top-3.5 peer-focus:text-gray-600 peer-focus:text-sm peer-focus:font-semibold">Full
                    name</label>

                @error('full_name')
                    <div class="text-red-500 mt-2 -mb-4 font-medium  text-sm">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="my-10 relative">
                <input type="text" name="email"
                    class="peer block h-10 w-full border-b-2 border-gray-300 text-gray-900 focus:outline-none focus:border-[#0769C3] placeholder-transparent @error('email') border-red-500 @enderror"
                    placeholder="Email address" value="{{ old('email') }}" />
                <label for="email"
                    class="absolute left-0 -top-3.5 text-gray-600 text-sm transition-all cursor-text pointer-events-none peer-placeholder-shown:text-base peer-placeholder-shown:text-gray-600 peer-placeholder-shown:top-2 peer-focus:-top-3.5 peer-focus:text-gray-600 peer-focus:text-sm peer-focus:font-semibold">Email
                    address</label>

                @error('email')
                    <div class="text-red-500 mt-2 -mb-4 font-medium  text-sm">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="my-10 relative">
                <input type="password" name="password"
                    class="peer block h-10 w-full border-b-2 border-gray-300 text-gray-900 focus:outline-none focus:border-[#0769C3] placeholder-transparent @error('password') border-red-500 @enderror"
                    placeholder="Create password" />
                <label for="password"
                    class="absolute left-0 -top-3.5 text-gray-600 text-sm transition-all cursor-text pointer-events-none peer-placeholder-shown:text-base peer-placeholder-shown:text-gray-600 peer-placeholder-shown:top-2 peer-focus:-top-3.5 peer-focus:text-gray-600 peer-focus:text-sm peer-focus:font-semibold">Password</label>
                @error('password')
                    <div class="text-red-500 mt-2 -mb-4 font-medium  text-sm">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            <button type="submit"
                class="rounded-3xl bg-[#0769C3] text-white font-bold w-full py-3 hover:bg-[#002745] focus:bg-[#002745] text-xl">Continue</button>
        </form>

        <p class="text-center my-4 text-sm">
            Already have an account? <a href="{{ route('signin') }}" class="text-[#0769C3] hover:underline">Sign in</a>
        </p>

    </section>

</body>

</html>
