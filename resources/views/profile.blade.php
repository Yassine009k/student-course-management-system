
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>

    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 min-h-screen p-10">

    <div class="max-w-4xl mx-auto bg-white rounded-2xl shadow-lg p-8">

        <div class="flex justify-between items-center mb-8">

            <h1 class="text-3xl font-bold">
                My Profile
            </h1>

            <a href="{{route('student.get')}}">
                <button
                    class="bg-red-600 hover:bg-red-700 text-white px-5 py-2 rounded-lg">
                    Return 
                </button>
            </a>
        </div>

        <div class="grid md:grid-cols-2 gap-6 mb-10">

            <div class="border rounded-xl p-4">
                <h2 class="font-bold text-gray-600 mb-2">
                    Full Name
                </h2>

                <p class="text-xl">
                    {{ $student->nom_complet }}
                </p>
            </div>

            <div class="border rounded-xl p-4">
                <h2 class="font-bold text-gray-600 mb-2">
                    Email
                </h2>

                <p class="text-xl">
                    {{ $student->email }}
                </p>
            </div>

            <div class="border rounded-xl p-4">
                <h2 class="font-bold text-gray-600 mb-2">
                    CIN
                </h2>

                <p class="text-xl">
                    {{ $student->CIN }}
                </p>
            </div>

            <div class="border rounded-xl p-4">
                <h2 class="font-bold text-gray-600 mb-2">
                    Number Of Courses
                </h2>

                <p class="text-xl">
                    {{ $courses->count() }}
                </p>
            </div>

        </div>

        <h2 class="text-2xl font-bold mb-5">
            My Courses
        </h2>


            <div class="space-y-4">
                {{-- @dd($courses) --}}
                @forelse ($courses as $course)
                    <div class="border rounded-xl p-5 shadow-sm flex gap-2 items-center justify-between">

                        <h3 class="text-xl font-semibold">
                            {{ $course->nom_course }}
                        </h3>

                        <form action="{{route('course.delete',$course->id)}}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button class="bg-red-500 hover:bg-red-600 text-
white px-4 py-2 rounded-lg">
                                    Delete
                                </button>
                            </form>

                    </div>
                @empty
                    <div class="bg-yellow-100 border border-yellow-300 text-yellow-800 p-4 rounded-lg">
                        nout found coures
                    </div>
                @endforelse
                </div>
    </div>
    @if (@session('success'))
            <div class="fixed top-5 right-5 bg-green-500 text-white px-4 py-2 rounded-lg shadow-lg">
                {{ session('success') }}
            </div>
            
        @endsession
         @if (@session('error'))
            <div class="fixed top-5 right-5 bg-red-500 text-white px-4 py-2 rounded-lg shadow-lg">
                {{ session('error') }}
            </div>
            
        @endif

</body>
</html>
