<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>@yield('title', 'Artikel')</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet">
</head>

<body class="bg-[#DBE7C9] font-poppins">

    <!-- NAVBAR -->
    @include('components.navbar')

    <!-- MAIN CONTENT -->
    <div class="flex px-6 py-8 space-x-8">
        <!-- Yield untuk konten utama -->
        @yield('content')
    </div>

    <!-- FOOTER -->
    @include('components.footer')

</body>

</html>
