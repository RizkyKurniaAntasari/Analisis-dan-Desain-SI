<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="min-h-screen relative">

    <!-- Background -->
    <div class="absolute inset-0 bg-[url('/img/Login_IMG_Arabica.jpg')] bg-fixed bg-center bg-no-repeat bg-cover min-h-screen z-0"></div>
    <!-- Container utama -->
    <form method="POST" action="{{ route('register.post') }}">
        @csrf
        <div class="relative min-h-screen flex items-center justify-center p-4 z-10">
            <!-- Card Register -->
            <div class="bg-white/10 backdrop-blur-sm rounded-2xl shadow-xl p-8 w-full max-w-md space-y-6">
                <!-- Header -->
                <div class="text-center space-y-2">
                    <h2 class="text-2xl font-bold text-white">Create Account</h2>
                </div>

                <!-- Alert Error -->
                @if(session('error'))
                    <div class="bg-red-500/30 border border-red-400 text-white rounded p-2 text-sm">
                        {{ session('error') }}
                    </div>
                @endif

                <!-- Form Input -->
                <div class="space-y-4">
                    <!-- Name -->
                    <div>
                        <label for="name" class="text-white">Name</label>
                        <input type="text" name="name" id="name" value="{{ old('name') }}" required
                            class="w-full px-4 py-2 rounded-lg bg-white/20 border border-white/30 text-white placeholder-gray-200 focus:outline-none focus:ring-2 focus:ring-white">
                        @error('name')
                            <div class="text-red-300 text-sm">{{ $message }}</div>
                        @enderror
                    </div>

                    <!-- Email -->
                    <div>
                        <label for="email" class="text-white">Email</label>
                        <input type="email" name="email" id="email" value="{{ old('email') }}" required
                            class="w-full px-4 py-2 rounded-lg bg-white/20 border border-white/30 text-white placeholder-gray-200 focus:outline-none focus:ring-2 focus:ring-white">
                        @error('email')
                            <div class="text-red-300 text-sm">{{ $message }}</div>
                        @enderror
                    </div>

                    <!-- Password -->
                    <div>
                        <label for="password" class="text-white">Password</label>
                        <input type="password" name="password" id="password" required
                            class="w-full px-4 py-2 rounded-lg bg-white/20 border border-white/30 text-white placeholder-gray-200 focus:outline-none focus:ring-2 focus:ring-white">
                        @error('password')
                            <div class="text-red-300 text-sm">{{ $message }}</div>
                        @enderror
                    </div>

                    <!-- Confirm Password -->
                    <div>
                        <label for="password_confirmation" class="text-white">Confirm Password</label>
                        <input type="password" name="password_confirmation" id="password_confirmation" required
                            class="w-full px-4 py-2 rounded-lg bg-white/20 border border-white/30 text-white placeholder-gray-200 focus:outline-none focus:ring-2 focus:ring-white">
                        @error('password_confirmation')
                            <div class="text-red-300 text-sm">{{ $message }}</div>
                        @enderror
                    </div>

                    <!-- Submit Button -->
                    <button type="submit"
                        class="w-full py-2 bg-green-700/80 hover:bg-green-800 text-white rounded-lg flex items-center justify-center transition duration-200">
                        Register
                    </button>

                    <!-- Login link -->
                    <p class="text-center text-gray-200 text-sm mt-2">
                        Already have an account? <a href="{{ route('login') }}" class="underline text-white hover:text-gray-300">Login here</a>
                    </p>
                </div>
            </div>
        </div>
    </form>
</body>
</html>
