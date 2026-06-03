<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-100 min-h-screen flex items-center justify-center">
   @error('dateNaissance')
       {{$message}}
   @enderror
    <div class="bg-white p-8 rounded-2xl shadow-lg w-full max-w-md">
        <h1 class="text-3xl font-bold text-center mb-6">
            Register
        </h1>
        <form action="{{ isset($student) ?route('student.update',$student->id):route('rgistre.post') }}" method="POST" class="space-y-4">
            @csrf
            @isset($student)
                @method('PUT')
            @endisset
            <div>
                <label class="block mb-1 font-medium">Nom Complet</label>
                <input type="text" name="nom_complet" value="{{$student->nom_complet ??'' }}"
                    class="w-full border border-gray-300 rounded-lg p-3 focus:outline-none focus:ring-2 focus:ring-blue-500">
            </div>

            <div>
                <label class="block mb-1 font-medium">CIN</label>
                <input type="text" name="CIN" value="{{$student->CIN ??''}}"
                    class="w-full border border-gray-300 rounded-lg p-3 focus:outline-none focus:ring-2 focus:ring-blue-500">
                @error('CIN')
                    <p class="text-red-500 text-sm mt-1">{{$message}}</p>   
                @enderror
            </div>

            <div>
                <label class="block mb-1 font-medium">Email</label>
                <input type="email" name="email" value="{{$student->email ??''}}"
                    class="w-full border border-gray-300 rounded-lg p-3 focus:outline-none focus:ring-2 focus:ring-blue-500">
                @error('email')
                    <p class="text-red-500 text-sm mt-1">{{$message}}</p>   
                @enderror
            </div>
            
            
            <div>
                <label class="block mb-1 font-medium">dateNaissance</label>
                <input type="date" name="dateNaissance" value="{{$student->dateNaissance ??''}}"
                    class="w-full border border-gray-300 rounded-lg p-3 focus:outline-none focus:ring-2 focus:ring-blue-500">
            </div>
            
            @error('erroreAge')
                {{$message}}
            @enderror 

            <button type="submit"
                class="w-full bg-blue-600 hover:bg-blue-700 text-white py-3 rounded-lg font-semibold transition">
               
                    
                {{ isset($student) ? 'Update' : 'Register' }}
                
                 
            </button>
        </form>
        
    </div>
</body>

</html>
