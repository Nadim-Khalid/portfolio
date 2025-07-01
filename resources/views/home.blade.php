
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Md Nadim Khalid - Laravel Developer Resume</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100 text-gray-800 font-sans">
    <div class="max-w-5xl mx-auto bg-white shadow-lg mt-10 rounded-lg overflow-hidden flex flex-col md:flex-row">
        
        <!-- Left Sidebar -->
        <div class="bg-indigo-700 text-white w-full md:w-1/3 p-6">
            <div class="text-center">
                <img src="{{ asset('profile.jpg') }}" alt="Profile Photo" class="w-32 h-32 mx-auto rounded-full border-4 border-white mb-4">
                <h1 class="text-2xl font-bold">Md Nadim Khalid</h1>
                <p class="text-sm mt-1">Laravel Developer</p>
                <p class="text-sm">Aurangabad, Bihar, India</p>
            </div>
            <div class="mt-6">
                <h3 class="text-lg font-semibold mb-2">Contact</h3>
                <p class="text-sm">📧 mdnadimkhalid732@gmail.com</p>
                <p class="text-sm">📱 +91 91134 76282</p>
                <p class="text-sm">🌐 <a href="https://www.linkedin.com/in/md-nadim-khalid-0ab626231" target="_blank" class="underline">LinkedIn</a></p>
                <p class="text-sm">💻 <a href="https://github.com/Nadim-Khalid" target="_blank" class="underline">GitHub</a></p>
            </div>
           <!-- Sidebar Buttons -->
<div class="mt-6">
    <a href="{{ asset('Md Nadim.pdf') }}" target="_blank" class="bg-white text-indigo-700 font-semibold px-4 py-2 rounded block text-center hover:bg-gray-200">
        📄 Download PDF
    </a>

    <div class="mt-4">
        <a href="/contact" class="bg-yellow-400 text-black font-semibold px-4 py-2 rounded block text-center hover:bg-yellow-500 transition">
            📬 Contact Me
        </a>
    </div>
</div>

        </div>

        <!-- Right Content -->
        <div class="w-full md:w-2/3 p-6">
            <!-- About Me -->
            <div class="mb-6">
                <h2 class="text-xl font-bold border-b-2 border-gray-200 pb-1 mb-2">About Me</h2>
                <p class="text-sm text-gray-700">
                    I'm a passionate Laravel Developer with 2+ years of hands-on experience in PHP, MySQL, Firebase, and REST APIs. I've built robust applications like Akira Pet Food and Central English School. My strengths lie in backend development, authentication, and clean architecture.
                </p>
            </div>

            <!-- Skills -->
            <div class="mb-6">
                <h2 class="text-xl font-bold border-b-2 border-gray-200 pb-1 mb-2">Skills</h2>
                <ul class="grid grid-cols-2 gap-2 text-sm">
                    <li>✅ PHP / Laravel</li>
                    <li>✅ MySQL / Firebase</li>
                    <li>✅ REST APIs</li>
                    <li>✅ Git / GitHub</li>
                    <li>✅ HTML / CSS / JavaScript</li>
                    <li>✅ Blade / MVC</li>
                </ul>
            </div>

            <!-- Projects -->
            <div class="mb-6">
                <h2 class="text-xl font-bold border-b-2 border-gray-200 pb-1 mb-2">Projects</h2>
                <ul class="list-disc list-inside text-sm text-gray-700 space-y-1">
                    <li><strong>Akira Pet Food</strong> – E-Commerce portal with Laravel backend, cart, and checkout.</li>
                    <li><strong>Central English School</strong> – Online admission, results, and staff management system.</li>
                      <li><strong>DivineSoulss</strong> – Spiritual products marketplace with user login, cart, and admin product management.</li>
                </ul>
            </div>


            <!-- Experience (Optional) -->
            <div>
                <h2 class="text-xl font-bold border-b-2 border-gray-200 pb-1 mb-2">Experience</h2>
                <p class="text-sm text-gray-700">
                    <strong>Laravel Developer – Lince Soft Solutions</strong><br>
                    Dec 2023 – Present, Hydrabad<br>
                    Built and maintained Laravel projects using modern practices and client collaboration.
                </p>
            </div>

            <!-- Education -->
<div class="mt-6">
    <h2 class="text-xl font-bold border-b-2 border-gray-200 pb-1 mb-2">Education</h2>

    <div class="mb-4">
        <p class="font-semibold text-gray-800">MCA – IIMT College of Engineering, Greater Noida</p>
        <p class="text-sm text-gray-600">2021 – 2023</p>
    </div>

    <div class="mb-4">
        <p class="font-semibold text-gray-800">B.Sc. – Mirza Ghalib College, Gaya</p>
        <p class="text-sm text-gray-600">2017 – 2020</p>
    </div>

    {{-- <div>
        <p class="font-semibold text-gray-800">12th – , Gaya</p>
        <p class="text-sm text-gray-600">2015 – 2017</p>
    </div> --}}
</div>

        </div>
    </div>
</body>
</html>

