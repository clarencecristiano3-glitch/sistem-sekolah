<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Siswa</title>
    <link rel="stylesheet" href="/css/output.css">
</head>

<body class="min-h-screen flex flex-col bg-gray-100">

    <!-- Header Start -->
    <header class="bg-blue-500 text-white ">
        <div class="flex items-center justify-between container mx-auto p-4">
            <a href="/students" class="font-bold text-xl">Sistem Sekolah</a>
            <a href="/students/create" class="bg-white text-blue-500 px-4 py-2 rounded-lg">+ Tambah Siswa</a>
        </div>
    </header>
    <!-- Header End -->

    <!-- Main Start -->
    <main class="container mx-auto p-4 grow">
        <div class="mt-8 space-y-2"></div>
        <!-- Card Header Start -->
        <div class="p-4 shadow-md bg-white rounded-lg mb-6 bg-white">
            <h1 class="text-2xl font-bold">Daftar Siswa</h1>
            <p>Berikut adalah daftar siswa yang terdaftar di sistem.</p>
        </div>
        <!-- Card Header End -->

        <!-- Card Body Start -->
        <div class="bg-white shadow rounded-lg">
            <table class="w-full">
                <thead class="bg-gray-200">
                    <tr>
                        <th class="px-4 py-2 text-left">No</th>
                        <th class="px-4 py-2 text-left">Nama</th>
                        <th class="px-4 py-2 text-left">NIS</th>
                        <th class="px-4 py-2 text-left">Kelas</th>
                        <th class="px-4 py-2 text-left">No Telepon</th>
                        <th class="px-4 py-2">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="px-4 py-2 text-left">1</td>
                        <td class="px-4 py-2 text-left">Andi</td>
                        <td class="px-4 py-2 text-left">1234</td>
                        <td class="px-4 py-2 text-left">11 TKJ 2</td>
                        <td class="px-4 py-2 text-left">08214358476575</td>
                        <td class="px-4 py-2">
                            <div class="flex justify-center items-center gap-4">
                                <a href="/students/1" class="text-green-500">Detail</a>
                                <a href="/students/1/edit" class="text-yellow-500">Edit</a>
                                <a href="/students/1/delete" class="text-red-500">Hapus</a>

                            </div>
                        </td>
                    </tr>
                </tbody>
            </table>
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