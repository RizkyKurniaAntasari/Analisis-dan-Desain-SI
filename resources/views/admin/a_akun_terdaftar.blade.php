<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>SIMAPAN Dashboard - Akun Terdaftar</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-[#CBDAA9] font-poppins">
  <div class="flex min-h-screen">
    <!-- Sidebar -->
    @include('admin.a_components.a_sidebar')

    <!-- Main Content -->
    <main class="flex-1 p-6 space-y-6">
      <!-- Header -->
      @include('admin.a_components.a_navbar')
      
      <!-- Account Management Tabs -->
      <div class="mt-6">
        <div class="flex border-b">
          <button id="tab-pengguna" class="px-4 py-2 bg-white text-black font-semibold rounded-t-lg border-t border-l border-r">
            Akun Pengguna
          </button>
          <button id="tab-dinas" class="px-4 py-2 bg-[#294B29] text-white font-semibold rounded-t-lg border-t border-l border-r ml-1">
            Akun Dinas
          </button>
        </div>

        <!-- User Accounts Table -->
        <div id="content-pengguna" class="bg-[#E8F0D5] border border-gray-300 rounded-b-lg rounded-tr-lg p-4">
          <table class="w-full border-collapse">
            <thead class="bg-[#CBDAA9]">
              <tr>
                <th class="py-2 px-4 text-left border border-gray-300">Username</th>
                <th class="py-2 px-4 text-left border border-gray-300">Email</th>
                <th class="py-2 px-4 text-left border border-gray-300">Tanggal Daftar</th>
                <th class="py-2 px-4 text-center border border-gray-300">Action</th>
              </tr>
            </thead>
            <tbody>
              <!-- This section will be populated from the database -->
              @foreach($users ?? [] as $user)
              <tr class="bg-[#E8F0D5] hover:bg-[#D9E7C4]">
                <td class="py-2 px-4 border border-gray-300 flex items-center">
                  <div class="w-8 h-8 rounded-full bg-gray-300 flex items-center justify-center mr-2">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                    </svg>
                  </div>
                  {{ $user->username ?? 'lilaa' }}
                </td>
                <td class="py-2 px-4 border border-gray-300">{{ $user->email ?? 'lilaa17005@gmail.com' }}</td>
                <td class="py-2 px-4 border border-gray-300">{{ $user->created_at ?? '23-03-2025' }}</td>
                <td class="py-2 px-4 border border-gray-300 text-center">
                  <div class="flex justify-center space-x-2">
                    <button class="text-blue-600 hover:text-blue-800">
                      <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" />
                      </svg>
                    </button>
                    <div class="flex justify-center space-x-2">
                        <button class="text-blue-600 hover:text-blue-800">
                          <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" />
                          </svg>
                        </button>
                        <form action="{{ route('admin.delete', $admin->id) }}" method="POST" class="inline">
                          @csrf
                          @method('DELETE')
                          <button type="submit" class="text-red-600 hover:text-red-800">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                            </svg>
                          </button>
                        </form>
                      </div>
                  </div>
                </td>
              </tr>
              @endforeach

              <!-- Sample data if no database records -->
              @if(empty($users))
              <tr class="bg-[#E8F0D5] hover:bg-[#D9E7C4]">
                <td class="py-2 px-4 border border-gray-300 flex items-center">
                  <div class="w-8 h-8 rounded-full bg-gray-300 flex items-center justify-center mr-2">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                    </svg>
                  </div>
                  leksi indah
                </td>
                <td class="py-2 px-4 border border-gray-300">indahileksi@gmail.com</td>
                <td class="py-2 px-4 border border-gray-300">23-03-2025</td>
                <td class="py-2 px-4 border border-gray-300 text-center">
                  <div class="flex justify-center space-x-2">
                    <button class="text-blue-600 hover:text-blue-800">
                      <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" />
                      </svg>
                    </button>
                    <button class="text-red-600 hover:text-red-800 delete-btn">
                      <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                      </svg>
                    </button>
                  </div>
                </td>
              </tr>
              <tr class="bg-[#E8F0D5] hover:bg-[#D9E7C4]">
                <td class="py-2 px-4 border border-gray-300 flex items-center">
                  <div class="w-8 h-8 rounded-full bg-gray-300 flex items-center justify-center mr-2">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                    </svg>
                  </div>
                  nadya arsa
                </td>
                <td class="py-2 px-4 border border-gray-300">nadyaarsa75@gmail.com</td>
                <td class="py-2 px-4 border border-gray-300">21-03-2025</td>
                <td class="py-2 px-4 border border-gray-300 text-center">
                  <div class="flex justify-center space-x-2">
                    <button class="text-blue-600 hover:text-blue-800">
                      <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" />
                      </svg>
                    </button>
                    <button class="text-red-600 hover:text-red-800 delete-btn">
                      <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                      </svg>
                    </button>
                  </div>
                </td>
              </tr>
              <tr class="bg-[#E8F0D5] hover:bg-[#D9E7C4]">
                <td class="py-2 px-4 border border-gray-300 flex items-center">
                  <div class="w-8 h-8 rounded-full bg-gray-300 flex items-center justify-center mr-2">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                    </svg>
                  </div>
                  risky kurnia
                </td>
                <td class="py-2 px-4 border border-gray-300">riskur123@gmail.com</td>
                <td class="py-2 px-4 border border-gray-300">18-03-2025</td>
                <td class="py-2 px-4 border border-gray-300 text-center">
                  <div class="flex justify-center space-x-2">
                    <button class="text-blue-600 hover:text-blue-800">
                      <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" />
                      </svg>
                    </button>
                    <button class="text-red-600 hover:text-red-800 delete-btn">
                      <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                      </svg>
                    </button>
                  </div>
                </td>
              </tr>
              @endif
            </tbody>
          </table>
        </div>

        <!-- Admin Accounts Table -->
        <div id="content-dinas" class="hidden bg-[#E8F0D5] border border-gray-300 rounded-b-lg rounded-tr-lg p-4">
          <table class="w-full border-collapse">
            <thead class="bg-[#CBDAA9]">
              <tr>
                <th class="py-2 px-4 text-left border border-gray-300">Username</th>
                <th class="py-2 px-4 text-left border border-gray-300">Password</th>
                <th class="py-2 px-4 text-center border border-gray-300">Action</th>
              </tr>
            </thead>
            <tbody>
              <!-- This section will be populated from the database -->
              @foreach($admins ?? [] as $admin)
              <tr class="bg-[#E8F0D5] hover:bg-[#D9E7C4]">
                <td class="py-2 px-4 border border-gray-300 flex items-center">
                  <div class="w-8 h-8 rounded-full bg-gray-300 flex items-center justify-center mr-2">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                    </svg>
                  </div>
                  {{ $admin->username ?? 'Petugas 1' }}
                </td>
                <td class="py-2 px-4 border border-gray-300">{{ $admin->password ?? 'sim4p4n01' }}</td>
                <td class="py-2 px-4 border border-gray-300 text-center">
                  <div class="flex justify-center space-x-2">
                    <button class="text-blue-600 hover:text-blue-800">
                      <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" />
                      </svg>
                    </button>
                    <button class="text-red-600 hover:text-red-800 delete-btn">
                      <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                      </svg>
                    </button>
                  </div>
                </td>
              </tr>
              @endforeach

              <!-- Sample data if no database records -->
              @if(empty($admins))
              <tr class="bg-[#E8F0D5] hover:bg-[#D9E7C4]">
                <td class="py-2 px-4 border border-gray-300 flex items-center">
                  <div class="w-8 h-8 rounded-full bg-gray-300 flex items-center justify-center mr-2">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                    </svg>
                  </div>
                  Petugas 1
                </td>
                <td class="py-2 px-4 border border-gray-300">sim4p4n01</td>
                <td class="py-2 px-4 border border-gray-300 text-center">
                  <div class="flex justify-center space-x-2">
                    <button class="text-blue-600 hover:text-blue-800">
                      <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" />
                      </svg>
                    </button>
                    <button class="text-red-600 hover:text-red-800 delete-btn">
                      <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                      </svg>
                    </button>
                  </div>
                </td>
              </tr>
              <tr class="bg-[#E8F0D5] hover:bg-[#D9E7C4]">
                <td class="py-2 px-4 border border-gray-300 flex items-center">
                  <div class="w-8 h-8 rounded-full bg-gray-300 flex items-center justify-center mr-2">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                    </svg>
                  </div>
                  Petugas 2
                </td>
                <td class="py-2 px-4 border border-gray-300">sim4p4n02</td>
                <td class="py-2 px-4 border border-gray-300 text-center">
                  <div class="flex justify-center space-x-2">
                    <button class="text-blue-600 hover:text-blue-800">
                      <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" />
                      </svg>
                    </button>
                    <button class="text-red-600 hover:text-red-800 delete-btn">
                      <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                      </svg>
                    </button>
                  </div>
                </td>
              </tr>
              <tr class="bg-[#E8F0D5] hover:bg-[#D9E7C4]">
                <td class="py-2 px-4 border border-gray-300 flex items-center">
                  <div class="w-8 h-8 rounded-full bg-gray-300 flex items-center justify-center mr-2">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                    </svg>
                  </div>
                  Petugas 3
                </td>
                <td class="py-2 px-4 border border-gray-300">sim4p4n03</td>
                <td class="py-2 px-4 border border-gray-300 text-center">
                  <div class="flex justify-center space-x-2">
                    <button class="text-blue-600 hover:text-blue-800">
                      <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" />
                      </svg>
                    </button>
                    <button class="text-red-600 hover:text-red-800 delete-btn">
                      <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                      </svg>
                    </button>
                  </div>
                </td>
              </tr>
              @endif
            </tbody>
          </table>

          <!-- Add Admin Button -->
          <div class="flex justify-end mt-4">
            <button id="add-admin-btn" class="bg-[#294B29] text-white p-2 rounded-full hover:bg-[#1A3A1A] transition-colors">
              <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4" />
              </svg>
            </button>
          </div>
        </div>

        <!-- Add Admin Form -->
        <div id="add-admin-form" class="hidden mt-4 bg-[#E8F0D5] border border-gray-300 rounded-lg p-6">
          <h3 class="text-lg font-semibold bg-[#294B29] text-white py-2 px-4 rounded-t-lg -mt-6 -mx-6 mb-4">Tambah Akun Dinas</h3>
          <form id="admin-form" action="{{ route('admin.store') }}" method="POST" class="space-y-4">
            @csrf
            <div class="grid grid-cols-[100px_1fr] items-center">
              <label for="nama" class="text-sm font-medium">Nama</label>
              <input type="text" id="nama" name="nama" placeholder="Masukkan nama" class="w-full p-2 border border-gray-300 rounded bg-[#CBDAA9] focus:outline-none focus:ring-2 focus:ring-[#294B29]">
            </div>
            <div class="grid grid-cols-[100px_1fr] items-center">
              <label for="username" class="text-sm font-medium">Username</label>
              <input type="text" id="username" name="username" placeholder="Masukkan username" class="w-full p-2 border border-gray-300 rounded bg-[#CBDAA9] focus:outline-none focus:ring-2 focus:ring-[#294B29]">
            </div>
            <div class="grid grid-cols-[100px_1fr] items-center">
              <label for="password" class="text-sm font-medium">Password</label>
              <input type="password" id="password" name="password" placeholder="Masukkan password" class="w-full p-2 border border-gray-300 rounded bg-[#CBDAA9] focus:outline-none focus:ring-2 focus:ring-[#294B29]">
            </div>
            <div class="flex justify-end space-x-2 mt-6">
              <button type="button" id="cancel-btn" class="px-4 py-2 bg-gray-200 text-gray-800 rounded hover:bg-gray-300 transition-colors">Kembali</button>
              <button type="submit" class="px-4 py-2 bg-[#294B29] text-white rounded hover:bg-[#1A3A1A] transition-colors">Buat Akun</button>
            </div>
          </form>
        </div>

        <!-- Delete Confirmation Modal -->
        <div id="delete-modal" class="hidden fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center z-50">
          <div class="bg-[#294B29] text-white p-6 rounded-lg shadow-lg max-w-sm w-full">
            <h3 class="text-lg font-semibold mb-4">Apakah Anda yakin ingin menghapus akun ini?</h3>
            <div class="flex justify-center space-x-4">
              <button id="cancel-delete" class="px-4 py-2 bg-gray-200 text-gray-800 rounded hover:bg-gray-300 transition-colors">Kembali</button>
              <button id="confirm-delete" class="px-4 py-2 bg-white text-[#294B29] rounded hover:bg-gray-100 transition-colors">Hapus</button>
            </div>
          </div>
        </div>
      </div>
    </main>
  </div>

  <script>
    // Tab switching functionality
    document.getElementById('tab-pengguna').addEventListener('click', function() {
      document.getElementById('tab-pengguna').classList.add('bg-white', 'text-black');
      document.getElementById('tab-pengguna').classList.remove('bg-[#294B29]', 'text-white');
      document.getElementById('tab-dinas').classList.add('bg-[#294B29]', 'text-white');
      document.getElementById('tab-dinas').classList.remove('bg-white', 'text-black');
      document.getElementById('content-pengguna').classList.remove('hidden');
      document.getElementById('content-dinas').classList.add('hidden');
      document.getElementById('add-admin-form').classList.add('hidden');
    });

    document.getElementById('tab-dinas').addEventListener('click', function() {
      document.getElementById('tab-dinas').classList.add('bg-white', 'text-black');
      document.getElementById('tab-dinas').classList.remove('bg-[#294B29]', 'text-white');
      document.getElementById('tab-pengguna').classList.add('bg-[#294B29]', 'text-white');
      document.getElementById('tab-pengguna').classList.remove('bg-white', 'text-black');
      document.getElementById('content-dinas').classList.remove('hidden');
      document.getElementById('content-pengguna').classList.add('hidden');
    });

    // Add admin form toggle
    document.getElementById('add-admin-btn').addEventListener('click', function() {
      document.getElementById('add-admin-form').classList.remove('hidden');
    });

    document.getElementById('cancel-btn').addEventListener('click', function() {
      document.getElementById('add-admin-form').classList.add('hidden');
    });

    // Delete confirmation modal
    const deleteButtons = document.querySelectorAll('.delete-btn');
    deleteButtons.forEach(button => {
      button.addEventListener('click', function() {
        document.getElementById('delete-modal').classList.remove('hidden');
      });
    });

    document.getElementById('cancel-delete').addEventListener('click', function() {
      document.getElementById('delete-modal').classList.add('hidden');
    });

    document.getElementById('confirm-delete').addEventListener('click', function() {
      // Here you would add the code to delete the account
      document.getElementById('delete-modal').classList.add('hidden');
      // After successful deletion, you might want to refresh the page or update the table
    });

    // Form submission
    document.getElementById('admin-form').addEventListener('submit', function(e) {
      e.preventDefault();
      // Here you would add the code to submit the form data to the server
      
      // For demonstration purposes, let's just hide the form after submission
      document.getElementById('add-admin-form').classList.add('hidden');
      
      // You might want to refresh the table or add the new admin to the table
    });
  </script>
</body>
</html>
