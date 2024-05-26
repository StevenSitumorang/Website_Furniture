<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Toko Web Furniture</title>
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
</head>

<body>

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


    <main class="container mx-auto  py-1">
        <!-- Sidebar -->
        <div class="grid grid-cols-1 md:grid-cols-5 gap-4">
            <aside class="md:col-span-1 bg-gray-100 p-4 rounded-md"> <!-- Tetapkan padding kiri dan kanan ke sidebar -->
                <h3 class="text-gray-800 font-bold text-lg mb-4">Kategori Produk</h3>
                <ul class="text-gray-600">
                    <li class="mb-2">
                        <a href="#" class="flex items-center justify-between hover:text-gray-800">
                            <span>Meja</span>
                            <span class="bg-gray-300 text-gray-700 px-2 py-1 rounded-full text-xs">20</span>
                        </a>
                    </li>
                    <li class="mb-2">
                        <a href="#" class="flex items-center justify-between hover:text-gray-800">
                            <span>Kursi</span>
                            <span class="bg-gray-300 text-gray-700 px-2 py-1 rounded-full text-xs">15</span>
                        </a>
                    </li>
                    <li class="mb-2">
                        <a href="#" class="flex items-center justify-between hover:text-gray-800">
                            <span>Lemari</span>
                            <span class="bg-gray-300 text-gray-700 px-2 py-1 rounded-full text-xs">10</span>
                        </a>
                    </li>
                    <li class="mb-2">
                        <a href="#" class="flex items-center justify-between hover:text-gray-800">
                            <span>Lampu</span>
                            <span class="bg-gray-300 text-gray-700 px-2 py-1 rounded-full text-xs">25</span>
                        </a>
                    </li>
                </ul>
            </aside>



            <!-- Product Section -->
            <section class="md:col-span-4 grid grid-cols-1 md:grid-cols-4 gap-4">
                <!-- Baris 1 -->
                <div class="bg-white rounded-md p-4 shadow-lg">
                    <img src="https://picsum.photos/200" alt="Product Image" class="w-full h-48 object-cover mb-4">
                    <h3 class="text-gray-800 font-medium mb-2">Nama Produk</h3>
                    <p class="text-gray-600">Deskripsi singkat produk</p>
                    <p class="text-gray-600">Rp. 1.000.000</p><br>
                    <a href="#" class="bg-blue-500 text-white font-medium px-4 py-2 rounded-md hover:bg-blue-600">Info
                        Selengkapnya</a>
                </div>

                <!-- Produk lainnya di baris 1 -->
                <div class="bg-white rounded-md p-4 shadow-lg">
                    <img src="https://picsum.photos/200" alt="Product Image" class="w-full h-48 object-cover mb-4">
                    <h3 class="text-gray-800 font-medium mb-2">Nama Produk</h3>
                    <p class="text-gray-600">Deskripsi singkat produk</p>
                    <p class="text-gray-600">Rp. 1.000.000</p><br>
                    <a href="#" class="bg-blue-500 text-white font-medium px-4 py-2 rounded-md hover:bg-blue-600">Info
                        Selengkapnya</a>
                </div>

                <div class="bg-white rounded-md p-4 shadow-lg">
                    <img src="https://picsum.photos/200" alt="Product Image" class="w-full h-48 object-cover mb-4">
                    <h3 class="text-gray-800 font-medium mb-2">Nama Produk </h3>
                    <p class="text-gray-600">Deskripsi singkat produk</p>
                    <p class="text-gray-600">Rp. 1.000.000</p><br>
                    <a href="#" class="bg-blue-500 text-white font-medium px-4 py-2 rounded-md hover:bg-blue-600">Info
                        Selengkapnya</a>
                </div>

                <div class="bg-white rounded-md p-4 shadow-lg">
                    <img src="https://picsum.photos/200" alt="Product Image" class="w-full h-48 object-cover mb-4">
                    <h3 class="text-gray-800 font-medium mb-2">Nama Produk</h3>
                    <p class="text-gray-600">Deskripsi singkat produk</p>
                    <p class="text-gray-600">Rp. 1.000.000</p><br>
                    <a href="#" class="bg-blue-500 text-white font-medium px-4 py-2 rounded-md hover:bg-blue-600">Info
                        Selengkapnya</a>
                </div>

                <!-- Baris 2 -->
                <div class="bg-white rounded-md p-4 shadow-lg">
                    <img src="https://picsum.photos/200" alt="Product Image" class="w-full h-48 object-cover mb-4">
                    <h3 class="text-gray-800 font-medium mb-2">Nama Produk</h3>
                    <p class="text-gray-600">Deskripsi singkat produk</p>
                    <p class="text-gray-600">Rp. 1.000.000</p><br>
                    <a href="#" class="bg-blue-500 text-white font-medium px-4 py-2 rounded-md hover:bg-blue-600">Info
                        Selengkapnya</a>
                </div>

                <!-- Produk lainnya di baris 2 -->
                <div class="bg-white rounded-md p-4 shadow-lg">
                    <img src="https://picsum.photos/200" alt="Product Image" class="w-full h-48 object-cover mb-4">
                    <h3 class="text-gray-800 font-medium mb-2">Nama Produk</h3>
                    <p class="text-gray-600">Deskripsi singkat produk</p>
                    <p class="text-gray-600">Rp. 1.000.000</p><br>
                    <a href="#" class="bg-blue-500 text-white font-medium px-4 py-2 rounded-md hover:bg-blue-600">Info
                        Selengkapnya</a>
                </div>

                <div class="bg-white rounded-md p-4 shadow-lg">
                    <img src="https://picsum.photos/200" alt="Product Image" class="w-full h-48 object-cover mb-4">
                    <h3 class="text-gray-800 font-medium mb-2">Nama Produk</h3>
                    <p class="text-gray-600">Deskripsi singkat produk</p>
                    <p class="text-gray-600">Rp. 1.000.000</p><br>
                    <a href="#" class="bg-blue-500 text-white font-medium px-4 py-2 rounded-md hover:bg-blue-600">Info
                        Selengkapnya</a>
                </div>

                <div class="bg-white rounded-md p-4 shadow-lg">
                    <img src="https://picsum.photos/200" alt="Product Image" class="w-full h-48 object-cover mb-4">
                    <h3 class="text-gray-800 font-medium mb-2">Nama Produk</h3>
                    <p class="text-gray-600">Deskripsi singkat produk</p>
                    <p class="text-gray-600">Rp. 1.000.000</p><br>
                    <a href="#" class="bg-blue-500 text-white font-medium px-4 py-2 rounded-md hover:bg-blue-600">Info
                        Selengkapnya</a>
                </div>

                <!-- Baris 3 -->
                <div class="bg-white rounded-md p-4 shadow-lg">
                    <img src="https://picsum.photos/200" alt="Product Image" class="w-full h-48 object-cover mb-4">
                    <h3 class="text-gray-800 font-medium mb-2">Nama Produk</h3>
                    <p class="text-gray-600">Deskripsi singkat produk</p>
                    <p class="text-gray-600">Rp. 1.000.000</p><br>
                    <a href="#" class="bg-blue-500 text-white font-medium px-4 py-2 rounded-md hover:bg-blue-600">Info
                        Selengkapnya</a>
                </div>

                <!-- Produk lainnya di baris 3 -->
                <div class="bg-white rounded-md p-4 shadow-lg">
                    <img src="https://picsum.photos/200" alt="Product Image" class="w-full h-48 object-cover mb-4">
                    <h3 class="text-gray-800 font-medium mb-2">Nama Produk</h3>
                    <p class="text-gray-600">Deskripsi singkat produk</p>
                    <p class="text-gray-600">Rp. 1.000.000</p><br>
                    <a href="#" class="bg-blue-500 text-white font-medium px-4 py-2 rounded-md hover:bg-blue-600">Info
                        Selengkapnya</a>
                </div>

                <div class="bg-white rounded-md p-4 shadow-lg">
                    <img src="https://picsum.photos/200" alt="Product Image" class="w-full h-48 object-cover mb-4">
                    <h3 class="text-gray-800 font-medium mb-2">Nama Produk</h3>
                    <p class="text-gray-600">Deskripsi singkat produk</p>
                    <p class="text-gray-600">Rp. 1.000.000</p><br>
                    <a href="#" class="bg-blue-500 text-white font-medium px-4 py-2 rounded-md hover:bg-blue-600">Info
                        Selengkapnya</a>
                </div>

                <div class="bg-white rounded-md p-4 shadow-lg">
                    <img src="https://picsum.photos/200" alt="Product Image" class="w-full h-48 object-cover mb-4">
                    <h3 class="text-gray-800 font-medium mb-2">Nama Produk</h3>
                    <p class="text-gray-600">Deskripsi singkat produk</p>
                    <p class="text-gray-600">Rp. 1.000.000</p><br>
                    <a href="#" class="bg-blue-500 text-white font-medium px-4 py-2 rounded-md hover:bg-blue-600">Info
                        Selengkapnya</a>
                </div>


            </section>
        </div>

        <!-- Next Slide Button -->
        <div class="flex justify-center mt-8">
            <button
                class="bg-blue-500 hover:bg-blue-600 text-white font-bold py-2 px-6 rounded-full shadow-md transition duration-300 ease-in-out transform hover:scale-105">
                Next Slide
            </button>
        </div>

    </main>

    <footer class="bg-gray-800 text-white text-center py-4">
        <p>&copy; 2024 Toko Web Furniture</p>
    </footer>
</body>

</html>