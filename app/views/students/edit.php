<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Siswa</title>
    <link rel="stylesheet" href="/css/output.css">
</head>

<body class="min-h-screen flex flex-col bg-gray-100">

    <!-- Card Header Start -->
        <div class="flex items-center justify-between container mx-auto p-4">
           
        </div>
    <!-- Header End -->

    <!-- Main Start -->
    <main class="container mx-auto p-4 grow">
        <div class="mt-8 space-y-2"></div>
        <!-- Card Header Start -->
        <div class="p-4 shadow-md bg-white rounded-lg mb-6 bg-white">
            <h1 class="text-2xl font-bold">Edit Siswa</h1>
            <p>Melakukan perubahan data siswa yang terdaftar.</p>
        </div>
        <!-- Card Header End -->

        <!-- Card Body Start -->
        <div class="bg-white shadow rounded-lg p-4">
            <form action="/students" method="POST" class="grid grid-cols-2 gap-4">
                <div class="mb-4">
                    <label class="block text-gray-700 font-bold mb-2" for="name">Nama:</label>
                    <input class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring focus:border-blue-300"type="text" id="name" 
                    placeholder="Masukkan Nama" name="name">
                </div>
                <div class="mb-4">
                    <label class="block text-gray-700 font-bold mb-2" for="nis">NIS:</label>
                    <input class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring focus:border-blue-300"type="text" id="nis" 
                    placeholder="Masukkan NIS" name="nis">
                </div>
                <div class="mb-4">
                    <label class="block text-gray-700 font-bold mb-2" for="class">Kelas:</label>
                    <input class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring focus:border-blue-300"type="text" id="class" 
                    placeholder="Masukkan Kelas" name="class">
                </div>
                <div class="mb-4">
                    <label class="block text-gray-700 font-bold mb-2" for="phone_number">No Telepon:</label>
                    <input class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring focus:border-blue-300"type="text" id="phone_number" 
                    placeholder="Masukkan No Telepon" name="phone_number">
                </div>
                <div class="flex justify-end col-span-2 gap-4">
                    <a href="/students" class="bg-gray-500 text-white px-4 py-2 rounded-lg hover:bg-gray-600">Kembali</a>
                    <button type="submit" class="bg-green-500 text-white px-4 py-2 rounded-lg hover:bg-green-600">Simpan</button>
                </div>
            </form>
        </div>
        <!-- Card Body End -->
    </main>


    <!--Footer Start -->
    <footer class="bg-gray-800 text-white">
        <div class="text-center p-4">
            &copy; <?= date('Y'); ?> Sistem Sekolah - SMK Kristen Immanuel
        </div>
    </footer>
</body>

</html>