<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>add coures</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-100 min-h-screen flex items-center justify-center">
    <div class="bg-white p-8 rounded-2xl shadow-lg w-full max-w-md">
        <h1 class="text-3xl font-bold text-center mb-6">
            Add Courses
        </h1>
        <form action="{{route('course.add',$id)}}" method="POST" class="space-y-4">
            @csrf
            <div>
                <label class="block mb-1 font-medium">Nom Course</label>
                <input type="text" name="nom_course"
                    class="w-full border border-gray-300 rounded-lg p-3
focus:outline-none focus:ring-2 focus:ring-blue-500">
            </div>
            <button type="submit"
                class="w-full bg-green-600 hover:bg-green-700 text-white py-3
rounded-lg font-semibold transition">
                Add Course
            </button>
        </form>
      
    </div>
</body>

</html>
