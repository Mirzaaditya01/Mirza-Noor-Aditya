<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Toko Roti Sepotong</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 text-gray-800 min-h-screen flex flex-col">
    <!-- Header -->
    <header class="bg-yellow-500 p-6 shadow-lg">
        <div class="container mx-auto flex flex-col items-center">
            <h1 class="text-4xl text-white font-bold mb-2">Toko Roti Sepotong</h1>
            <nav class="flex space-x-6 text-lg">
                <a href="?page=home" class="text-white hover:text-yellow-300 transition duration-300 ease-in-out">
                    Home
                </a>
                <a href="?page=menu" class="text-white hover:text-yellow-300 transition duration-300 ease-in-out">
                    DaftarRoti
                </a>
                <a href="?page=contact" class="text-white hover:text-yellow-300 transition duration-300 ease-in-out">
                    Kontak
                </a>
                <a href="?page=order" class="text-white hover:text-yellow-300 transition duration-300 ease-in-out">
                    CaraPemesanan
                </a>
            </nav>
        </div>
    </header>
    <!--Ganti Menu -->
    <main class="flex-grow container mx-auto p-6">
        <?php
        $page = $_GET['page'] ?? 'home';
        if ($page == 'home') include 'home.php';
        elseif ($page == 'menu') include 'menu.php';
        elseif ($page == 'contact') include 'contact.php';
        elseif ($page == 'order') include 'order.php';
        else include 'home.php';
        ?>
    </main>
    <!--Footer-->
    <footer class="bg-yellow-500 text-white p-4 text-center">
        &copy; 2024 Toko Roti Sepotong. All rights reserved.
    </footer>

</body>
</html>
