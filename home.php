<div class="space-y-8">

<!-- Carousel -->
    <div class="relative w-full overflow-hidden h-64 bg-gray-100">
        <div id="carousel" class="flex items-center space-x-4 animate-scroll">
            <img src="images/roti.jpg" alt="Roti 1" class="w-full object-cover h-64">
            <img src="images/roti.jpg" alt="Roti 2" class="w-full object-cover h-64">
            <img src="images/roti.jpg" alt="Roti 3" class="w-full object-cover h-64">
            <img src="images/roti.jpg" alt="Roti 4" class="w-full object-cover h-64">
            <img src="images/roti.jpg" alt="Roti 1" class="w-full object-cover h-64">
            <img src="images/roti.jpg" alt="Roti 2" class="w-full object-cover h-64">
            <img src="images/roti.jpg" alt="Roti 3" class="w-full object-cover h-64">
            <img src="images/roti.jpg" alt="Roti 4" class="w-full object-cover h-64">
        </div>
    </div>

    <style>
        @keyframes scroll {
            0% { transform: translateX(0); }
            100% { transform: translateX(-50%); }
        }

        .animate-scroll {
            display: flex;
            animation: scroll 20s linear infinite;
        }
    </style>



    <hr class="border-t border-gray-300 my-4">

    <div class="flex flex-col md:flex-row items-center space-y-4 md:space-y-0 md:space-x-4 p-6">
        <div class="md:w-1/2 text-center md:text-left">
            <h3 class="font-semibold text-xl text-yellow-700">Tentang Kami</h3>
            <p class="mt-2 text-gray-700">Toko Roti Sepotong menyediakan roti segar berkualitas setiap hari. Kami berkomitmen untuk memberikan roti sehat dan lezat yang disukai oleh semua kalangan.</p>
        </div>
        <div class="md:w-1/2">
            <img src="images/logo.png" alt="Tentang Kami" class="rounded-lg shadow-lg">
        </div>
    </div>

    <hr class="border-t border-gray-300 my-4">

    <div class="flex flex-col md:flex-row items-center space-y-4 md:space-y-0 md:space-x-4 p-6">
        <div class="md:w-1/2 order-2 md:order-1">
            <img src="images/keranjang.png" alt="Produk Kami" class="rounded-lg shadow-lg">
        </div>
        <div class="md:w-1/2 text-center md:text-left order-1 md:order-2">
            <h3 class="font-semibold text-xl text-yellow-700">Produk Kami</h3>
            <p class="mt-2 text-gray-700">Kami menawarkan beragam pilihan roti berkualitas tinggi, dari roti manis hingga croissant, semua dibuat dengan bahan-bahan terbaik dan teknik tradisional.</p>
        </div>
    </div>

    <hr class="border-t border-gray-300 my-4">

    <div class="grid grid-cols-2 gap-4 p-6">
        <div class="bg-yellow-400 p-4 text-center rounded-lg shadow-lg">
            <h3 class="font-semibold text-lg">Visi Kami</h3>
            <p>Menjadi toko roti terfavorit di kota dengan produk berkualitas tinggi.</p>
        </div>
        <div class="bg-yellow-500 p-4 text-center rounded-lg shadow-lg">
            <h3 class="font-semibold text-lg">Misi Kami</h3>
            <p>Menyediakan roti sehat dan lezat yang dapat dinikmati oleh semua kalangan masyarakat.</p>
        </div>
    </div>

    <hr class="border-t border-gray-300 my-4">

<!-- Testimoni -->
    <div class="grid grid-cols-1 md:grid-cols-2 gap-4 p-6">
        <div class="p-6 text-center bg-gray-100 rounded-lg shadow-lg">
            <h3 class="text-2xl font-bold mb-4">Lokasi Kami</h3>
            <iframe 
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3153.1171352076613!2d-122.40765038514452!3d37.774929379759795!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x80858064bbf445b5%3A0x92bfe92427ff876!2sToko%20Roti%20Sepotong!5e0!3m2!1sen!2sus!4v1605674245045!5m2!1sen!2sus" 
                width="100%" 
                height="300" 
                style="border:0;" 
                allowfullscreen="" 
                loading="lazy">
            </iframe>
        </div>
        <div class="bg-gray-100 p-6 rounded-lg shadow-lg">
            <h3 class="text-2xl font-bold mb-4 text-center">Testimoni Pelanggan Kami</h3>
            <div class="space-y-4">
                <blockquote class="border-l-4 border-yellow-500 pl-4 italic text-gray-700">
                    "Roti di Toko Sepotong sangat lezat dan selalu segar! Saya sangat merekomendasikannya."
                </blockquote>
                <p class="text-right text-gray-600">- Adi, Pelanggan Setia</p>
                
                <blockquote class="border-l-4 border-yellow-500 pl-4 italic text-gray-700">
                    "Pelayanannya sangat ramah, dan pilihan rotinya beragam. Selalu puas dengan kualitasnya."
                </blockquote>
                <p class="text-right text-gray-600">- Rina, Pelanggan Baru</p>
            </div>
        </div>
    </div>
</div>
