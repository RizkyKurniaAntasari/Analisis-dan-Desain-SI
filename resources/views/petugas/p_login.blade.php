<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="min-h-screen relative">

    <!-- Background image -->
    <div class="absolute inset-0 bg-[url('/img/Login_IMG_Arabica.jpg')] bg-fixed bg-center bg-no-repeat bg-cover z-0"></div>

    <!-- Lapisan hitam transparan -->
    <div class="absolute inset-0 bg-black opacity-50 z-10"></div>

    <!-- Form Login -->
    <div class="relative min-h-screen flex items-center justify-center p-4 z-20">
        <form method="POST" action="" autocomplete="off"
              class="bg-white/30 backdrop-blur-lg rounded-2xl shadow-xl p-8 w-full max-w-md space-y-6">
            @csrf

            <!-- Header -->
            <div class="text-center space-y-2">
                <h2 class="text-4xl font-bold text-[#294B29]">Welcome, Petugas!</h2>
                <p class="text-[#294B29] text-sm font-semibold">Please insert your account</p>
            </div>

            <!-- Alert Error -->
            @if(session('error'))
                <div class="bg-red-500/30 border border-red-400 text-white rounded p-2 text-sm">
                    {{ session('error') }}
                </div>
            @endif

            <!-- Email -->
            <div>
                <label for="email" class="text-white">Email</label>
                <input type="email" name="email" id="email" placeholder="Masukkan email anda"
                    value="{{ old('email') }}"
                    class="w-full px-4 py-2 rounded-lg bg-white/20 border border-white/30 text-white placeholder-gray-200 focus:outline-none focus:ring-2 focus:ring-white" required>
                @error('email')
                    <p class="text-red-400 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>

            <!-- Password -->
            <div>
                <label for="password" class="text-white">Password</label>
                <input type="password" name="password" id="password" placeholder="Password"
                    class="w-full px-4 py-2 rounded-lg bg-white/20 border border-white/30 text-white placeholder-gray-200 focus:outline-none focus:ring-2 focus:ring-[#294B29]" required>
                @error('password')
                    <p class="text-red-400 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>

            <!-- Button -->
            <button type="submit"
                class="w-full py-2 bg-[#294B29]/80 hover:bg-green-800/80 text-white rounded-lg flex items-center justify-center gap-2 transition duration-200">
                Masuk
            </button>
        </form>
    </div>
</body>

</html>