<?php
// BAGIAN MENU
$menu_831 = [
    'Iced Kopi Guren' => 25000,
    'Iced Cheezy Latte'=> 30000,
    'Magic Seasonal'=> 30000,
    'Espresso' => 18000,
    'Americano' => 20000,
    'Cappuccino' => 25000,
    'Caffe Latte' => 26000,
    'Kopi Susu' => 22000,
    'Matcha Latte' => 27000,
    'Coklat Panas' => 24000,
];
// BAGIAN UKURAN
$ukuran_831 = [
    'Small' => 0,
    'Medium' => 4000,
    'Large' => 8000,
];
?>

<div class="card-wide-kelompok-3 card-kelompok-3">
    <h2 class="section-title-kelompok-3">Formulir Pembelian</h2>
    <p class="section-intro-kelompok-3">Silakan lengkapi detail di bawah ini untuk memesan minuman favorit Anda.
        Pesanan akan langsung ditampilkan sebagai ringkasan di bawah formulir.</p>

    <form method="POST" action="" class="form-wrapper-kelompok-3">
        <div class="form-group-kelompok-3">
            <label for="nama_831" class="form-label-kelompok-3">Nama Pelanggan</label>
            <input type="text" id="nama_831" name="nama_831" required class="form-input-kelompok-3">
        </div>
        <div class="form-group-kelompok-3">
            <label for="telepon_831" class="form-label-kelompok-3">Nomor Telepon</label>
            <input type="tel" id="telepon_831" name="telepon_831" pattern="[0-9+]{8,15}"
                title="Masukkan 8-15 digit angka" required class="form-input-kelompok-3">
        </div>
        <div class="form-group-kelompok-3">
            <label for="minuman_831" class="form-label-kelompok-3">Pilihan Minuman</label>
            <select id="minuman_831" name="minuman_831" required class="form-input-kelompok-3">
                <option value="">-- Pilih Minuman --</option>
                <?php foreach ($menu_831 as $nama_menu_831 => $harga_menu_831): ?>
                    <option value="<?= htmlspecialchars($nama_menu_831) ?>">
                        <?= htmlspecialchars($nama_menu_831) ?> (Rp <?= number_format($harga_menu_831, 0, ',', '.') ?>)
                    </option>
                <?php endforeach; ?>
            </select>
        </div>
        <div class="form-group-kelompok-3">
            <label for="ukuran_831" class="form-label-kelompok-3">Ukuran Minuman</label>
            <select id="ukuran_831" name="ukuran_831" required class="form-input-kelompok-3">
                <option value="">-- Pilih Ukuran --</option>
                <?php foreach ($ukuran_831 as $nama_ukuran_831 => $tambahan_831): ?>
                    <option value="<?= htmlspecialchars($nama_ukuran_831) ?>">
                        <?= htmlspecialchars($nama_ukuran_831) ?>
                        <?= $tambahan_831 > 0 ? '(+Rp ' . number_format($tambahan_831, 0, ',', '.') . ')' : '' ?>
                    </option>
                <?php endforeach; ?>
            </select>
        </div>
        <div class="form-group-kelompok-3">
            <label for="jumlah_831" class="form-label-kelompok-3">Jumlah</label>
            <input type="number" id="jumlah_831" name="jumlah_831" min="1" max="50" required
                class="form-input-kelompok-3">
        </div>
        <div class="form-group-kelompok-3">
            <label for="catatan_831" class="form-label-kelompok-3">Catatan Tambahan</label>
            <textarea id="catatan_831" name="catatan_831" rows="4" class="form-input-kelompok-3"
                placeholder="Contoh: less sugar, tanpa es, tambah shot espresso"></textarea>
        </div>
        <button type="submit" name="submit_pembelian_831"
            class="button-kelompok-3 button-dark-kelompok-3 section-action-kelompok-3"
            style="width: 100%; margin-top: 10px;">
            Konfirmasi Pesanan
        </button>
    </form>
</div>

<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['submit_pembelian_831'])) {

    $nama_831 = htmlspecialchars(trim($_POST['nama_831'] ?? ''));
    $telepon_831 = htmlspecialchars(trim($_POST['telepon_831'] ?? ''));
    $minuman_831 = $_POST['minuman_831'] ?? '';
    $ukuran_pilih_831 = $_POST['ukuran_831'] ?? '';
    $jumlah_831 = (int) ($_POST['jumlah_831'] ?? 0);
    $catatan_831 = htmlspecialchars(trim($_POST['catatan_831'] ?? ''));

    if (
        $nama_831 === '' || $telepon_831 === '' || $jumlah_831 < 1 ||
        !isset($menu_831[$minuman_831]) || !isset($ukuran_831[$ukuran_pilih_831])
    ) {
        echo '<div class="card-wide-kelompok-3 card-kelompok-3 result-container-kelompok-3">';
        echo '<h3 class="section-title-kelompok-3">Data tidak valid</h3>';
        echo '<p>Mohon lengkapi formulir dengan benar.</p>';
        echo '</div>';
    } else {
        $harga_satuan_831 = $menu_831[$minuman_831] + $ukuran_831[$ukuran_pilih_831];
        $total_831 = $harga_satuan_831 * $jumlah_831;

        echo '<div class="card-wide-kelompok-3 card-kelompok-3 result-container-kelompok-3">';
        echo '<h3 class="section-title-kelompok-3" style="margin-bottom: 15px;">Ringkasan Pesanan Anda</h3>';

        echo '<div class="result-grid-kelompok-3">';

        echo '<div class="result-label-kelompok-3">Nama</div>';
        echo '<div>: ' . $nama_831 . '</div>';

        echo '<div class="result-label-kelompok-3">No. Telepon</div>';
        echo '<div>: ' . $telepon_831 . '</div>';

        echo '<div class="result-label-kelompok-3">Minuman</div>';
        echo '<div>: ' . htmlspecialchars($minuman_831) . '</div>';

        echo '<div class="result-label-kelompok-3">Ukuran</div>';
        echo '<div>: ' . htmlspecialchars($ukuran_pilih_831) . '</div>';

        echo '<div class="result-label-kelompok-3">Jumlah</div>';
        echo '<div>: ' . $jumlah_831 . ' Gelas</div>';

        echo '<div class="result-label-kelompok-3">Harga Satuan</div>';
        echo '<div>: Rp ' . number_format($harga_satuan_831, 0, ',', '.') . '</div>';

        echo '<div class="result-label-kelompok-3">Total Bayar</div>';
        echo '<div><strong>: Rp ' . number_format($total_831, 0, ',', '.') . '</strong></div>';

        echo '<div class="result-label-kelompok-3">Catatan</div>';
        echo '<div>: ' . ($catatan_831 !== '' ? nl2br($catatan_831) : '-') . '</div>';

        echo '</div>';
        echo '</div>';
    }
}
?>