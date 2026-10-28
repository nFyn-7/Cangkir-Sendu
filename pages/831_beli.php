<section class="card-kelompok-3 card-wide-kelompok-3">
    <h2 class="section-title-kelompok-3">Form Pemesanan Kopi</h2>
    <p class="section-intro-kelompok-3">Isi detail pesananmu. Kolom bertanda * wajib diisi.</p>
    <form action="" method="post">
        <input type="hidden" name="jenisformkelompok3" value="pesanan">
        <div class="">
            <div class="">
                <label for="namapelanggan23100001">Nama pelanggan *</label>
                <input id="namapelanggan23100001" name="namapelanggan23100001" type="text" maxlength="80" required>
            </div>
            <div class="">
                <label for="telepon23100001">Nomor telepon *</label>
                <input id="telepon23100001" name="telepon23100001" type="tel" maxlength="25" required>
            </div>
            <div class="">
                <label for="minuman23100001">Pilihan minuman *</label>
                <select id="minuman23100001" name="minuman23100001" required>
                    <option value="">Pilih minuman</option>
                    <option value="Espresso">Espresso — Rp 18.000</option>
                    <option value="Americano">Americano — Rp 22.000</option>
                    <option value="Cafe Latte">Cafe Latte — Rp 28.000</option>
                    <option value="Cappuccino">Cappuccino — Rp 28.000</option>
                    <option value="Caramel Latte">Caramel Latte — Rp 32.000</option>
                    <option value="Matcha Latte">Matcha Latte — Rp 30.000</option>
                </select>
            </div>
            <div class="">
                <label for="ukuran23100001">Ukuran *</label>
                <select id="ukuran23100001" name="ukuran23100001" required>
                    <option value="Regular">Regular</option>
                    <option value="Large">Large (+Rp 5.000)</option>
                </select>
            </div>
            <div class="">
                <label for="jumlah23100001">Jumlah *</label>
                <input id="jumlah23100001" name="jumlah23100001" type="number" min="1" max="20" value="1" required>
            </div>
        </div>
        <div class="">
            <label for="catatan23100001">Catatan tambahan</label>
            <textarea id="catatan23100001" name="catatan23100001" maxlength="300"
                placeholder="Contoh: less sugar, no ice..."></textarea>
        </div>
        <button class="" type="submit">Proses pesanan <span>↗</span></button>
    </form>
</section>