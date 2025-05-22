<?php
function jenisKendaraan($jumlahRoda) {
    switch ($jumlahRoda) {
        case 2:
            echo "Sepeda motor";
            break;
        case 3:
            echo "Becak atau Bajaj";
            break;
        case 4:
            echo "Mobil";
            break;
        case 6:
            echo "Truk kecil";
            break;
        case 8:
            echo "Truk besar";
            break;
        default:
            echo "Jenis kendaraan tidak diketahui";
    }
}
?>
