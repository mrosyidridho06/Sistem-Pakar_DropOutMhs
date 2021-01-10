<?php

function answer($kode){
    if($kode=='m1'){
        echo "<a class='btn col-sm-1 mrg btn-lg btn-outline-light' href='question.php?kode=m10'>Ya</a>";
        echo "<a class='btn col-sm-1 mrg btn-lg btn-outline-light' href='question.php?kode=m21'>Tidak</a>";
    }
    if($kode=='m21'){
        echo "<a class='btn col-sm-1 mrg btn-lg btn-outline-light' href='solusi.php?kode=s5'>Ya</a>";
        echo "<a class='btn col-sm-1 mrg btn-lg btn-outline-light' href='question.php?kode=m3'>Tidak</a>";
    }
    if($kode=='m3'){
        echo "<a class='btn col-sm-1 mrg btn-lg btn-outline-light' href='solusi.php?kode=s6'>Ya</a>";
        echo "<a class='btn col-sm-1 mrg btn-lg btn-outline-light' href='question.php?kode=m10'>Tidak</a>";
    }
    if($kode=='m10'){
        echo "<a class='btn col-sm-1 mrg btn-lg btn-outline-light' href='question.php?kode=m10-a'>Ya</a>";
        echo "<a class='btn col-sm-1 mrg btn-lg btn-outline-light' href='question.php?kode=m2'>Tidak</a>";
    }
    if($kode=='m10-a'){
        echo "<a class='btn col-sm-1 mrg btn-lg btn-outline-light' href='solusi.php?kode=s1'>Ya</a>";
        echo "<a class='btn col-sm-1 mrg btn-lg btn-outline-light' href='question.php?kode=m11-a'>Tidak</a>";
    }
    if($kode=='m11-a'){
        echo "<a class='btn col-sm-1 mrg btn-lg btn-outline-light' href='solusi.php?kode=s2'>Ya</a>";
        echo "<a class='btn col-sm-1 mrg btn-lg btn-outline-light' href='question.php?kode=m2'>Tidak</a>";
    }
    if($kode=='m2'){
        echo "<a class='btn col-sm-1 mrg btn-lg btn-outline-light' href='solusi.php?kode=s2'>Ya</a>";
        echo "<a class='btn col-sm-1 mrg btn-lg btn-outline-light' href='question.php?kode=m3-a'>Tidak</a>";
    }
    if($kode=='m3-a'){
        echo "<a class='btn col-sm-1 mrg btn-lg btn-outline-light' href='solusi.php?kode=s3'>Ya</a>";
        echo "<a class='btn col-sm-1 mrg btn-lg btn-outline-light' href='solusi.php?kode=s4'>Tidak</a>";
    }

}

function kesimpulan($ketetapan){
    include 'koneksi.php';
    $sql = "SELECT * from tb_kesimpulan WHERE solusi='$ketetapan' AND status='setuju'";
    $data = mysqli_query($connect,$sql);
    while ($row = mysqli_fetch_assoc($data)) {
        echo '<p>-'.$row['fakta'].'</p>';
    }  
}

function solusi($kode){    
    if ($kode=='s1') {
        $ketetapan = "Mahasiswa status Tetap";
        kesimpulan($ketetapan);        
    }
    if ($kode=='s2') {
       $ketetapan= "Mahasiswa status Percobaan";
        kesimpulan($ketetapan);
    }
    if ($kode=='s3') {
       $ketetapan= "Mahasiswa status Drop Out secara akademik";
        kesimpulan($ketetapan);
    }
    if ($kode=='s5') {
        $ketetapan= "Mahasiswa status Drop Out karena kehadiran";
         kesimpulan($ketetapan);
     }
     if ($kode=='s6') {
        $ketetapan= "Mahasiswa status Drop Out karena pelanggaran";
         kesimpulan($ketetapan);
     }
}


?>