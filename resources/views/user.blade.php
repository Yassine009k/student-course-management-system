<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Users</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-100 min-h-screen p-10">
    <div class="max-w-5xl mx-auto bg-white rounded-2xl shadow-lg p-8">
        <div class="flex justify-between items-center mb-8">
            <h1 class="text-3xl font-bold">
                Users List
            </h1>
            <a href="{{route('add-students')}}" class="bg-blue-600 hover:bg-blue-700 text-white px-5 py-2
rounded-lg">
                add students
            </a>
        </div>
        <table class="w-full border-collapse">
            <thead>
                <tr class="bg-gray-200">
                    <th class="p-3 text-left">ID</th>
                    <th class="p-3 text-left">Name</th>
                    <th class="p-3 text-left">Email</th>
                    <th class="p-3 text-left">CIN</th>
                    <th class="p-3 text-left">date de naissance</th>
                    <th class="p-3 text-left">Action</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($students as $user)
                    <tr class="border-b hover:bg-gray-50">
                        <td class="p-3">{{ $user->id }}</td>
                        <td class="p-3">{{ $user->nom_complet }}</td>
                        <td class="p-3">{{ $user->email }}</td>
                        <td class="p-3">{{ $user->CIN }}</td>
                        <td class="p-3">{{ $user->dateNaissance }}</td>
                        <td class="p-3 flex gap-2">
                            <a href="{{route('students.profile',$user->id)}}"
                                class="bg-blue-500 hover:bg-blue-600 text-white px-1 py-5 rounded-lg">
                                Show
                            </a><br>
                            <a href="{{route('add-course',$user->id)}}"
                                class="bg-blue-500 hover:bg-blue-600 text-white px-1 py-2 rounded-lg">
                                add coures
                            </a><br>
                            <a href="{{route('student.edit',$user->id)}}"
                                class="bg-yellow-500 hover:bg-yellow-600 text-white px-1 py-5 rounded-lg">
                                Edit
                            </a><br>
                            <form action="{{route('student.delete',$user->id)}}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button class="bg-red-500 hover:bg-red-600 text-white px-1 py-5 rounded-lg">
                                    Delete
                                </button>
                            </form>
                        </td>
                    </tr>
                @empty

                    <tr>
                        <td colspan="5" class="text-center p-6 text-gray-500">
                            No students found
                        </td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
    <div>
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
    </div>
</body>

</html>
