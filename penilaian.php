<?php
    echo "<h1><p>Hasil Penilaian Siswa</p></h1>";

    $namaSiswa = "Darlius Setia Putra Hia<br>";
    $kelas = "XII PPLG 1<br>";
    $nilaiTugas = "90";
    $nilaiUTS = "85";
    $nilaiUAS = "85";
    $nilaiAkhir = ($nilaiTugas * 0.3) + ($nilaiUAS * 0.3) + ($nilaiUTS * 0.4);

    echo "Nama: " . $namaSiswa;
    echo "Kelas: " . $kelas;
    echo "________________________<br>";
    echo "<br>";
    echo "Nilai Tugas: " . $nilaiTugas;
    echo "<br>";
    echo "Nilai UTS: " . $nilaiUTS;
    echo "<br>";
    echo "Nilai UAS: " . $nilaiUAS;
    echo "<br>";
    echo "________________________<br>";
    echo "<br>";
    echo "Nilai Akhir: " . $nilaiAkhir;
    echo "<br>";


    if ($nilaiAkhir >= 90 && $nilaiAkhir <= 100){
        echo "Predikat: <b>A</b><br>";
    } elseif ($nilaiAkhir >= 80 && $nilaiAkhir <90){
        echo "Predikat: <b>B</b><br>";
    } elseif ($nilaiAkhir >=75 && $nilaiAkhir <80){
        echo "Predikat: <b>C</b><br>";
    } elseif ($nilaiAkhir >=60 && $nilaiAkhir <75){
        echo "Predikat: <b>D</b><br>";
    } else{
        echo "Predikat: <b>E</b><br>";
    }
    if($nilaiAkhir >= 75){
        echo "Status: LULUS<br>";
    } else {
        echo "Status: TIDAK LULUS<br>";
    }
?>