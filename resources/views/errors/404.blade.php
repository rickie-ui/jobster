<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {{-- css --}}
    @vite('resources/css/app.css')
    <title>404</title>
</head>

<body class="antialiased bg-[#E6F0F9] h-screen flex items-center justify-center text-[#002745]">

    <div class="w-1/2 text-center">
        <h1 class="text-4xl text-red-500 font-bold mb-4">404 Not Found!</h1>
        <p class="">The page you are looking for might not exist or has been moved.</p>
        <div class="mt-6">
            <button type="button" onclick="goBack()"
                class="px-8 py-2 bg-[#0769C3] text-white hover:opacity-60 rounded-md">Go back</button>
        </div>
    </div>

    <script>
        function goBack() {
            window.history.back();
        }
    </script>

</body>

</html>
