<div class="card-wide-kelompok-3 card-kelompok-3">
    <h2 class="section-title-kelompok-3">Pendaftaran Member</h2>
    <p class="section-intro-kelompok-3">Bergabunglah dengan program keanggotaan kami untuk mendapatkan berbagai
        penawaran eksklusif, poin *reward*, dan informasi promosi terbaru. Seluruh data Anda akan dikelola dengan
        tingkat privasi dan keamanan yang tinggi.</p>

    <form method="POST" action="" class="form-wrapper-kelompok-3">

        <!-- Bidang Input -->
        <div class="form-group-kelompok-3">
            <label for="nama_member_838" class="form-label-kelompok-3">Nama Lengkap</label>
            <input type="text" id="nama_member_838" name="nama_member_838" required class="form-input-kelompok-3"
                placeholder="Masukkan nama lengkap Anda">
        </div>

        <!-- Bidang Input -->
        <div class="form-group-kelompok-3">
            <label for="email_member_838" class="form-label-kelompok-3">Alamat Email</label>
            <input type="email" id="email_member_838" name="email_member_838" required class="form-input-kelompok-3"
                placeholder="contoh: nama@email.com">
        </div>

        <!-- Bidang Input -->
        <div class="form-group-kelompok-3">
            <label for="kontak_member_838" class="form-label-kelompok-3">Nomor Telepon aktif</label>
            <input type="number" id="kontak_member_838" name="kontak_member_838" required class="form-input-kelompok-3"
                placeholder="Masukkan nomor telepon">
        </div>

        <!-- Bidang Input -->
        <div class="form-group-kelompok-3">
            <label for="tanggal_lahir_838" class="form-label-kelompok-3">Tanggal Lahir</label>
            <input type="date" id="tanggal_lahir_838" name="tanggal_lahir_838" required class="form-input-kelompok-3">
        </div>

        <!-- Bidang Input -->
        <div class="form-group-kelompok-3">
            <label for="paket_member_838" class="form-label-kelompok-3">Pilihan Paket</label>
            <select id="paket_member_838" name="paket_member_838" required class="form-input-kelompok-3">
                <option value="">-- Pilih Paket Member --</option>
                <option value="Silver">Silver</option>
                <option value="Gold">Gold</option>
                <option value="Platinum">Platinum</option>
            </select>
        </div>

        <!-- Bidang Input -->
        <div class="form-group-kelompok-3">
            <label for="preferensi_kopi_838" class="form-label-kelompok-3">Preferensi Minuman / Catatan</label>
            <textarea id="preferensi_kopi_838" name="preferensi_kopi_838" rows="3" class="form-input-kelompok-3"
                placeholder="Ceritakan minuman favorit Anda atau catatan tambahan (opsional)"></textarea>
        </div>

        <!-- Tombol Aksi -->
        <button type="submit" name="submit_member_838"
            class="button-kelompok-3 button-dark-kelompok-3 section-action-kelompok-3"
            style="width: 100%; margin-top: 10px;">
            Daftar Menjadi Member
        </button>
    </form>
</div>

<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['submit_member_838'])) {

    $nama_member_838 = htmlspecialchars($_POST['nama_member_838']);
    $email_member_838 = htmlspecialchars($_POST['email_member_838']);
    $kontak_member_838 = htmlspecialchars($_POST['kontak_member_838']);
    $tanggal_lahir_838 = htmlspecialchars($_POST['tanggal_lahir_838']);
    $preferensi_838 = htmlspecialchars($_POST['preferensi_kopi_838']);

    $daftar_paket_838 = ['Silver', 'Gold', 'Platinum'];
    $paket_member_838 = $_POST['paket_member_838'] ?? '';
    if (!in_array($paket_member_838, $daftar_paket_838, true)) {
        $paket_member_838 = 'Tidak valid';
    }

    echo '<div class="card-wide-kelompok-3 card-kelompok-3 result-container-kelompok-3">';
    echo '<h3 class="section-title-kelompok-3" style="margin-bottom: 15px;">Pendaftaran Berhasil</h3>';
    echo '<p style="margin-bottom: 20px; font-family: var(--font-body); color: var(--text-dark);">Terima kasih telah bergabung. Berikut adalah ringkasan profil keanggotaan Anda:</p>';

    echo '<div class="result-grid-kelompok-3">';

    echo '<div class="result-label-kelompok-3">Nama Lengkap</div>';
    echo '<div>: ' . $nama_member_838 . '</div>';

    echo '<div class="result-label-kelompok-3">Email</div>';
    echo '<div>: ' . $email_member_838 . '</div>';

    echo '<div class="result-label-kelompok-3">Nomor Telepon</div>';
    echo '<div>: ' . $kontak_member_838 . '</div>';

    echo '<div class="result-label-kelompok-3">Tanggal Lahir</div>';
    echo '<div>: ' . $tanggal_lahir_838 . '</div>';

    echo '<div class="result-label-kelompok-3">Paket Member</div>';
    echo '<div>: ' . $paket_member_838 . '</div>';

    echo '<div class="result-label-kelompok-3">Preferensi</div>';

    if (empty(trim($preferensi_838))) {
        echo '<div>: <i>Tidak ada preferensi spesifik yang dicatat.</i></div>';
    } else {
        echo '<div>: ' . nl2br($preferensi_838) . '</div>';
    }

    echo '</div>';
    echo '</div>';
}
?>