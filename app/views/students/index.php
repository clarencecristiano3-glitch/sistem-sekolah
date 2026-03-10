<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Siswa</title>
    <link rel="stylesheet" href="/css/output.css">
</head>

<body class="min-h-screen flex flex-col">
    
    <header class="bg-blue-500 text-white ">
        <div class="flex items-center justify-between container mx-auto p-4">
            <a href="/students" class="font-bold text-xl">Sistem Sekolah</a>
            <a href="/students/create" class="bg-white text-blue-500 px-4 py-2 rounded-lg">+ Tambah Siswa</a>
        </div> 
    </header>
<!-- Header End -->

<!-- Main Start -->
 <main class="container mx-grow p-4 flex-1">
    <div class="mt-8 "></div>
    <!-- Card Header Start -->
    <div class="p-4 shadow-md bg-white rounded-lg mb-6">
        <h1 class="text-2xl font-bold">Daftar Siswa</h1>
        <p>Berikut adalah daftar siswa yang terdaftar di sistem.</p>
    </div>
    <!-- Card Header End -->
 </main>

 <!-- Main End -->

 <!--Footer Start -->
    <footer class="bg-gray-800 text-white">
     <div class="text-center p-4">
        &copy; <?= date('Y'); ?> Sistem Sekolah - SMK Kristen Immanuel
     </div>
    </footer>
</body>
</html>