<?php
// Carousel 8 produk terbaru VD Store di atas daftar produk beranda.
$slider = velocity_toko28_slider_produk(8);
if ($slider) {
    echo '<div class="bg-white p-3 shadow-sm mb-3">' . $slider . '</div>';
}
