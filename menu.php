<div class="p-6 space-y-6">

    <div class="flex flex-col md:flex-row justify-between items-center space-y-4 md:space-y-0">
        <div class="flex w-full md:w-1/3 space-x-2">
            <input 
                type="text" 
                id="search" 
                placeholder="Cari roti..." 
                class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-yellow-500"
            />
            <button 
                onclick="filterMenu()" 
                class="bg-yellow-500 text-white px-4 py-2 rounded-lg hover:bg-yellow-600 focus:outline-none focus:ring-2 focus:ring-yellow-500">
                Cari
            </button>
        </div>

<!-- Filter -->
        <select 
            id="filterRasa" 
            class="w-full md:w-1/4 px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-yellow-500"
            onchange="filterMenu()"
        >
            <option value="">Semua Rasa</option>
            <option value="#manis">Manis</option>
            <option value="#asin">Asin</option>
            <option value="#gurih">Gurih</option>
        </select>
    </div>

<!-- DaftarRoti-->
    <div id="menuContainer" class="grid grid-cols-1 md:grid-cols-3 lg:grid-cols-4 gap-6">
        <?php 
        $menuItems = [
            [
                'nama' => 'Roti Manis',
                'harga' => 'Rp 10.000',
                'tags' => ['#manis', '#empuk'],
                'gambar' => 'images/roti.jpg'
            ],
            [
                'nama' => 'Roti Asin',
                'harga' => 'Rp 12.000',
                'tags' => ['#asin', '#gurih'],
                'gambar' => 'images/roti.jpg'
            ],
            [
                'nama' => 'Croissant',
                'harga' => 'Rp 15.000',
                'tags' => ['#renyah', '#buttery'],
                'gambar' => 'images/roti.jpg'
            ]
        ];
// tampil item
        foreach ($menuItems as $item): ?>
            <div class="bg-white p-4 rounded-lg shadow-lg flex flex-col items-center menu-item" data-name="<?php echo strtolower($item['nama']); ?>" data-tags="<?php echo implode(' ', $item['tags']); ?>">
                
                <img src="<?php echo $item['gambar']; ?>" alt="Gambar <?php echo $item['nama']; ?>" class="rounded-md w-full h-40 object-cover mb-4">
                <h3 class="font-semibold text-lg text-yellow-700"><?php echo $item['nama']; ?></h3>
                <div class="flex space-x-2 mt-1 mb-3">
                    <?php foreach ($item['tags'] as $tag): ?>
                        <span class="text-xs text-gray-500 bg-yellow-100 px-2 py-1 rounded"><?php echo $tag; ?></span>
                    <?php endforeach; ?>
                </div>
                <p class="text-gray-700 font-bold"><?php echo $item['harga']; ?></p>

            </div>
        <?php endforeach; ?>
    </div>

</div>

<!-- Filter dan Search -->
<script>
function filterMenu() {
    const searchValue = document.getElementById('search').value.toLowerCase();
    const filterValue = document.getElementById('filterRasa').value;
    const menuItems = document.querySelectorAll('.menu-item');

    menuItems.forEach(item => {
        const itemName = item.getAttribute('data-name');
        const itemTags = item.getAttribute('data-tags');
        const matchesSearch = itemName.includes(searchValue);
        const matchesFilter = filterValue === "" || itemTags.includes(filterValue);
        if (matchesSearch && matchesFilter) {
            item.style.display = "block";
        } else {
            item.style.display = "none";
        }
    });
}
</script>
