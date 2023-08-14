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

    <section class="py-6">
        <div class="max-w-md mx-auto p-6 bg-white rounded-lg shadow-lg">
            <h2 class="text-2xl font-semibold mb-4">Create Submission</h2>
            <form action="#" method="POST">
                <div class="mb-4">
                    <label for="type" class="block text-gray-700 text-sm font-medium mb-1">Type</label>
                    <select id="type" name="type"
                        class="w-full px-4 py-2 border rounded-lg focus:ring focus:ring-indigo-200" required>
                        <option value="Pending">Leave</option>
                        <option value="Approved">Permit</option>
                        <option value="Rejected">Travel</option>
                    </select>
                </div>
                <div class="mb-4">
                    <label for="description" class="block text-gray-700 text-sm font-medium mb-1">Description</label>
                    <textarea id="description" name="description"
                        class="w-full px-4 py-2 border rounded-lg resize-none focus:ring focus:ring-indigo-200" required></textarea>
                </div>
                <div class="mb-4">
                    <label for="attachment" class="block text-gray-700 text-sm font-medium mb-1">Attachment</label>
                    <input type="file" id="attachment" name="attachment"
                        class="w-full border rounded-lg focus:ring focus:ring-indigo-200">
                </div>
                <div class="mb-4">
                    <label for="submitter" class="block text-gray-700 text-sm font-medium mb-1">Submitter</label>
                    <input type="text" id="submitter" name="submitter"
                        class="w-full px-4 py-2 border rounded-lg focus:ring focus:ring-indigo-200" value="UserA"
                        disabled required>
                </div>
                <div class="mb-4">
                    <label for="status" class="block text-gray-700 text-sm font-medium mb-1">Status</label>
                    <select id="status" name="status"
                        class="w-full px-4 py-2 border rounded-lg focus:ring focus:ring-indigo-200" required>
                        <option value="Pending">Pending</option>
                        <option value="Approved">Approved</option>
                        <option value="Rejected">Rejected</option>
                    </select>
                </div>
                <button type="submit"
                    class="bg-indigo-500 text-white px-4 py-2 rounded-lg hover:bg-indigo-600">Submit</button>
            </form>
        </div>

    </section>

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