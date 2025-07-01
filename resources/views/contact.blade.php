<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Contact - Md Nadim Khalid</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-50 text-gray-800">
    <div class="max-w-xl mx-auto p-6">
        <h1 class="text-3xl font-bold text-indigo-700 mb-6">📩 Contact Me</h1>

        <!-- Contact Form -->
       <form action="{{ route('contact.submit') }}" method="POST" class="space-y-4">
    @csrf
    <div>
        <label class="block mb-1 font-semibold">Name</label>
        <input type="text" name="name" required class="w-full border border-gray-300 p-2 rounded">
    </div>
    <div>
        <label class="block mb-1 font-semibold">Email</label>
        <input type="email" name="email" required class="w-full border border-gray-300 p-2 rounded">
    </div>
    <div>
        <label class="block mb-1 font-semibold">Phone Number</label>
        <input type="text" name="phone" required class="w-full border border-gray-300 p-2 rounded">
    </div>
    <div>
        <label class="block mb-1 font-semibold">Message</label>
        <textarea name="message" rows="4" required class="w-full border border-gray-300 p-2 rounded"></textarea>
    </div>
    <button type="submit" class="bg-indigo-600 text-white px-4 py-2 rounded">
        Send Message
    </button>
</form>

        <!-- Resume Download -->
        <div class="mt-6">
            <a href="/" class="bg-gray-800 text-white px-4 py-2 rounded">← Back to Home</a>
                {{-- <a href="{{ asset('Md Nadim.pdf') }}"
            target="_blank"
            class="bg-green-600 text-white px-4 py-2 rounded">
            📄 Download Resume
            </a> --}}
        </div>

        <!-- Back to Home -->
        {{-- <a href="/" class="block mt-4 text-indigo-600 underline">← Back to Home</a> --}}
    </div>
</body>
</html>
