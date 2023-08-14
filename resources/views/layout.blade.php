<!doctype html>
<title>Submission App</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<script src="https://cdn.tailwindcss.com"></script>

<body class="bg-gray-100 font-sans">
    <!-- Navbar -->
    <nav class="bg-gray-500 p-4 shadow-lg">
        <div class="container mx-auto flex justify-between items-center">
            <a href="#" class="text-white font-semibold text-lg">Submission</a>
            <ul class="flex space-x-4">
                <li><a href="/" class="text-white hover:text-gray-400">Home</a></li>
                <li><a href="#" class="text-white hover:text-gray-400">Logout</a></li>
            </ul>
        </div>
    </nav>
    <!-- Header Section -->
    <section class="py-6">
        <div class="container mx-auto text-center">
            <h1 class="text-3xl font-semibold text-gray-800 mb-4">Hi Username!</h1>
            <p class="text-lg text-gray-600">Good morning.</p>
        </div>
    </section>

    @yield('content')

    <!-- Footer Section -->
    <footer class="relative pt-8 pb-6 mt-8">
        <div class="container mx-auto px-4">
            <div class="flex flex-wrap items-center md:justify-between justify-center">
                <div class="w-full md:w-6/12 px-4 mx-auto text-center">
                    <div class="text-sm font-semibold text-blueGray-500 py-1">
                        This is the footer.
                    </div>
                </div>
            </div>
        </div>
    </footer>
</body>

</html>
