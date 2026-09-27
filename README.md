Velocity Child Theme Paket Toko Online Toko 28
=================
[toko28.velocitydeveloper.com](https://toko28.velocitydeveloper.com/)

Child Theme for the Velocity System WordPress theme.

### Required
Theme Velocity versi 2.7.0 keatas, [Download](https://github.com/VelocityDeveloper/velocity/releases)

### Required Plugins
**VD Store**, [Download](https://github.com/Velocity-Developer/vd-store/releases) — produk `store_product`,
kategori `store_product_cat`, merek `brand`. Sejak 1.1.0 tema tidak lagi memakai plugin Velocity Toko
maupun Kirki.

Integrasi VD Store ada di `inc/vd-store.php`, `css/vd-store.css`, dan template override di folder
`vd-store/` (arsip, kategori, merek, detail produk). Pencarian di bar atas mencari produk.

### Beranda
Beranda = `index.php` (Settings > Reading: tulisan terbaru): bar atas warna tema (kontak, profil, keranjang, cari),
logo (Site Identity), menu **Primary** (tab putih) + **Menu Kedua** (`second_menu`, bar warna tema), carousel 8 produk
terbaru (4 kartu desktop, 2 kartu HP, tanpa slick), nama situs, 8 produk 4 kolom (Detail + keranjang) + "Produk lainnya",
2 artikel terbaru. Tanpa sidebar.

### Widget
Footer 4 kolom (latar warna tema), dibaca installer lewat `velocity_tema_widget_footer()`:
`[toko28_produk_terbaru jumlah="5"]`, `[toko28_ekspedisi]`, `[toko28_bank]`, `[toko28_kontak]`.
Lainnya: `[toko28_kategori]`, `[toko28_cari_produk]`, `[toko28_best_seller jumlah="5"]`, `[toko28_info_terbaru]`,
`[toko28_testimoni]`, `[toko28_sosmed facebook="…" twitter="…" instagram="…" youtube="…"]`.

### Halaman
Halaman **Konfirmasi Pembayaran** = `[store_tracking]` (input nomor pesanan VD Store: tagihan, rekening, unggah bukti
transfer). Override tipis `vd-store/pages/tracking.php` membuat pencarian tetap di halaman tempat form dipasang.
Template **Velocity Toko Pricelist** (`page-pricelist.php`). Katalog & Profil Saya VD Store selalu tanpa sidebar.

### Customizer
Appearance > Customize > **Velocity Toko 28**: Warna (utama, sekunder), Popup Sambutan (aktif/nonaktif +
isi HTML, tampil sekali sehari per pengunjung), Font (judul & teks), Slider Home (5 slot gambar).
Logo & gambar header: Site Identity / Header Image. Latar website: Background tema induk. Warna teks/link:
Theme Colors tema induk.

### Usage
Simply download the zip and upload the zip (velocity-toko28.zip) under your WordPress dashboard at Appearance > Themes. Or extract and upload via FTP at wp-content/themes/.
