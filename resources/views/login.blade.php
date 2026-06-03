<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-100 min-h-screen flex items-center justify-center">
    <div class="bg-white p-8 rounded-2xl shadow-lg w-full max-w-md">
        <h1 class="text-3xl font-bold text-center mb-6">
            Login
        </h1>
        @error('aeriere')
            {{$message}}
        @enderror
        <form action="{{route('login-post')}}" method="POST" class="space-y-4">
            @csrf
            <div>
                <label class="block mb-1 font-medium">Email</label>
                <input type="email" name="email"
                    class="w-full border border-gray-300 rounded-lg p-3
focus:outline-none focus:ring-2 focus:ring-blue-500">
            </div>
            <div>
                <label class="block mb-1 font-medium">Password</label>
                <input type="password" name="password"
                    class="w-full border border-gray-300 rounded-lg p-3
focus:outline-none focus:ring-2 focus:ring-blue-500">
            </div>
            <button type="submit"
                class="w-full bg-green-600 hover:bg-green-700 text-white py-3
rounded-lg font-semibold transition">
                add student
            </button>
        </form>
        
    </div>
</body>

</html>
