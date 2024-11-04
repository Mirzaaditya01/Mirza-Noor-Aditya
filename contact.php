<div class="p-6 space-y-8">

    <h2 class="text-3xl font-semibold text-yellow-700 text-center">Hubungi Kami</h2>
    <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
        <div class="bg-white p-6 rounded-lg shadow-md">
            <h3 class="text-xl font-semibold text-yellow-600 mb-4">Jam Operasional</h3>
            <p class="text-gray-700">Senin - Jumat: 08:00 - 20:00</p>
            <p class="text-gray-700">Sabtu - Minggu: 09:00 - 18:00</p>
        </div>
        <div class="bg-white p-6 rounded-lg shadow-md">
            <h3 class="text-xl font-semibold text-yellow-600 mb-4">Informasi Kontak</h3>
            <p class="text-gray-700">Telepon: <a href="tel:+628123456789" class="text-blue-500">+62 812 3456 789</a></p>
            <p class="text-gray-700">Email: <a href="mailto:contact@sepotoroti.com" class="text-blue-500">contact@sepotoroti.com</a></p>
            <p class="text-gray-700">Instagram: <a href="https://instagram.com/sepotoroti" target="_blank" class="text-blue-500">@sepotoroti</a></p>
        </div>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
        <div class="bg-white p-6 rounded-lg shadow-md">
            <h3 class="text-xl font-semibold text-yellow-600 mb-4">Lokasi Outlet</h3>
            <div class="h-64 overflow-y-scroll p-2 border border-gray-200 rounded-lg bg-gray-50 scrollable">
                <ul class="space-y-2">
                    <li class="text-gray-700">Outlet 1: Jl. Merdeka No. 123, Jakarta Pusat, DKI Jakarta</li>
                    <li class="text-gray-700">Outlet 2: Jl. Sudirman No. 456, Bandung, Jawa Barat</li>
                    <li class="text-gray-700">Outlet 3: Jl. Diponegoro No. 789, Surabaya, Jawa Timur</li>
                    <li class="text-gray-700">Outlet 4: Jl. Pemuda No. 101, Semarang, Jawa Tengah</li>
                    <li class="text-gray-700">Outlet 5: Jl. Adisucipto No. 15, Yogyakarta</li>
                    <li class="text-gray-700">Outlet 6: Jl. Gajah Mada No. 27, Denpasar, Bali</li>
                    <li class="text-gray-700">Outlet 7: Jl. Hasanuddin No. 88, Makassar, Sulawesi Selatan</li>
                    <li class="text-gray-700">Outlet 8: Jl. Dipati Ukur No. 21, Medan, Sumatera Utara</li>
                    <li class="text-gray-700">Outlet 9: Jl. A. Yani No. 49, Balikpapan, Kalimantan Timur</li>
                    <li class="text-gray-700">Outlet 10: Jl. S. Parman No. 36, Palembang, Sumatera Selatan</li>
                </ul>
            </div>
        </div>

        <div class="rounded-lg overflow-hidden shadow-md bg-white p-6">
            <h3 class="text-xl font-semibold text-yellow-600 mb-4">Peta Lokasi Kami</h3>
            <iframe 
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d198271.684497869!2d106.68942985000002!3d-6.200010100000004!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e6992c55efefcfb%3A0x8f9e1f16e3bb2bd6!2sJakarta!5e0!3m2!1sid!2sid!4v1601834608276!5m2!1sid!2sid" 
                width="100%" 
                height="250" 
                frameborder="0" 
                style="border:0;" 
                allowfullscreen="" 
                aria-hidden="false" 
                tabindex="0"
            ></iframe>
        </div>
    </div>

<!-- Form-->
    <div class="bg-white p-6 rounded-lg shadow-md">
        <h3 class="text-xl font-semibold text-yellow-600 mb-4">Tinggalkan Pesan</h3>
        <form action="#" method="POST" class="space-y-4">
            <div>
                <label for="name" class="block text-gray-700 font-medium">Nama</label>
                <input 
                    type="text" 
                    id="name" 
                    name="name" 
                    class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-yellow-500" 
                    placeholder="Nama Anda" 
                    required
                >
            </div>
            <div>
                <label for="email" class="block text-gray-700 font-medium">Email</label>
                <input 
                    type="email" 
                    id="email" 
                    name="email" 
                    class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-yellow-500" 
                    placeholder="Email Anda" 
                    required
                >
            </div>
            <div>
                <label for="message" class="block text-gray-700 font-medium">Pesan</label>
                <textarea 
                    id="message" 
                    name="message" 
                    class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-yellow-500" 
                    placeholder="Tulis pesan Anda disini..." 
                    rows="4" 
                    required
                ></textarea>
            </div>
            <button type="submit" class="bg-yellow-500 text-white px-4 py-2 rounded-lg hover:bg-yellow-600 focus:outline-none focus:ring-2 focus:ring-yellow-500">
                Kirim Pesan
            </button>
        </form>
    </div>
</div>

<style>
/* Untuk Chrome, Edge, dan Safari */
.scrollable::-webkit-scrollbar {
    width: 8px;
}

.scrollable::-webkit-scrollbar-track {
    background: #f1f1f1;
    border-radius: 4px;
}

.scrollable::-webkit-scrollbar-thumb {
    background: #f59e0b; /* Warna sesuai tema */
    border-radius: 4px;
}

.scrollable::-webkit-scrollbar-thumb:hover {
    background: #d97706;
}

/* Untuk Firefox */
.scrollable {
    scrollbar-width: thin;
    scrollbar-color: #f59e0b #f1f1f1;
}
</style>
