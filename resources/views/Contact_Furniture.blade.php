<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact</title>
    <!-- Include the Tailwind CSS CDN -->
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>

<body class="bg-gray-100">

    <!-- Header -->
    <header class="bg-white shadow">
        <div class="container mx-auto px-4 py-4 flex justify-between items-center">
            <a href="#" class="text-gray-800 font-bold">Web Furniture</a>
            <nav class="hidden md:block">
                <ul class="list-none flex space-x-4">
                    <li><a href="#" class="text-gray-800 font-medium hover:text-gray-600">Home</a></li>
                    <li><a href="#" class="text-gray-800 font-medium hover:text-gray-600">About</a></li>
                    <li><a href="#" class="text-gray-800 font-medium hover:text-gray-600">Product</a></li>
                    <li><a href="#" class="text-gray-800 font-medium hover:text-gray-600">Contact</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <!-- Contact Section -->
    <section class="container mx-auto px-4 py-8">
        <div class="max-w-3xl mx-auto bg-white rounded-lg shadow-lg overflow-hidden">
            <div class="p-6">
                <h2 class="text-2xl font-semibold text-gray-800 mb-4">Hubungi Kami</h2>
                <p class="text-gray-700 mb-6">Silakan hubungi kami jika Anda memiliki pertanyaan atau ingin mengetahui
                    lebih lanjut tentang produk kami.</p>

                <!-- Form Kontak -->
                <form action="#" method="POST">
                    <div class="mb-4">
                        <label for="nama" class="block text-gray-700 font-medium">Nama</label>
                        <input type="text" id="nama" name="nama"
                            class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:border-blue-500"
                            placeholder="Masukkan nama Anda" required>
                    </div>
                    <div class="mb-4">
                        <label for="email" class="block text-gray-700 font-medium">Email</label>
                        <input type="email" id="email" name="email"
                            class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:border-blue-500"
                            placeholder="Masukkan alamat email Anda" required>
                    </div>
                    <div class="mb-4">
                        <label for="pesan" class="block text-gray-700 font-medium">Pesan</label>
                        <textarea id="pesan" name="pesan" rows="4"
                            class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:border-blue-500"
                            placeholder="Tulis pesan Anda" required></textarea>
                    </div>
                    <div class="text-center">
                        <button type="submit"
                            class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Kirim
                            Pesan</button>
                    </div>
                </form>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-gray-800 text-white py-4">
        <div class="container mx-auto text-center">
            &copy; 2024 Web Furniture. All rights reserved.
        </div>
    </footer>

</body>

</html>