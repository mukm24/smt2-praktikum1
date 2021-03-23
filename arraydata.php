<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Nilai </title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

 
    
</head>

<body>
    <?php
    @$proses = $_GET['proses__'];
    $nama_siswa = $_GET['nama__lengkap']; 
    $mata_kuliah = $_GET['mata__kuliah'];
    @$nilai_uts = $_GET['nilai__uts'];
    @$nilai_uas = $_GET['nilai__uas'];
    $nilai_tugas = $_GET['nilai__tugas'];
    $nim = $_GET['nim__'];

    $ns1 = ['id'=>1,'nim'=>'01101','uts'=>80,'uas'=>90,'tugas'=>89];
    $ns2 = ['id'=>2,'nim'=>'01145','uts'=>100,'uas'=>90,'tugas'=>98];
    $ns3 = ['id'=>3,'nim'=>'01108','uts'=>40,'uas'=>70,'tugas'=>83];
    $ns4 = ['id'=>4,'nim'=>'01102','uts'=>90,'uas'=>93,'tugas'=>85];
    $ns5 = ['id'=>5,'nim'=> $nim,'uts'=>$nilai_uts,'uas'=>$nilai_uas,'tugas'=>$nilai_tugas];
    
    $ar_nilai = [$ns1, $ns2 , $ns3, $ns4, $ns5];
    ?>
     <div class="container shadow p-5 mt-5">
    <h3 class="text-center mb-5">Daftar Nilai Siswa</h3>
    <form action="array_siswa.php" method="GET">       
      <table border="1" width="90%" class="m-auto">
        <thead class="text-center">
          <tr>
            <th>No</th><th>NIM</th><th>UTS</th>
            <th>UAS</th><th>Tugas</th><th>Nilai Akhir</th>
          </tr>
        </thead>
        <tbody class="text-center" >
        <?php

$nomor = 1;
foreach($ar_nilai as $ns) {
    echo '<tr><td>'.$nomor.'</td>';
    echo '<td>'.$ns['nim'].'</td>';
    echo '<td>'.$ns['uts'].'</td>';
    echo '<td>'.$ns['uas'].'</td>';
    echo '<td>'.$ns['tugas'].'</td>';
    $nilai_akhir = ($ns['uts'] + $ns['uas']+$ns['tugas'])/3;
    echo '<td>'.number_format($nilai_akhir,2,',','.').'</td>';
    echo '<tr/>';
    $nomor++;
}
?>
</tbody>
</table>
</form>

</div>     
<div class="container mt-5 mb-5 p-5 shadow">
<h1 class="animate__animated animate__bounce animate__infinite	infinite animate__delay-4s	4s">INI  HASILNYA!</h1>
<br>
<?php
echo "<b>Proses :</b> $proses <br><br> <b>Nama :</b> $nama_siswa <br><br> <b>NIM :</b> $nim <br>
        <br><b>Mata Kuliah :</b> $mata_kuliah <br><br> <b>Nilai UTS :</b> $nilai_uts <br>
        <br><b>Nilai UAS :</b> $nilai_uas <br><br> <b>Nilai Tugas :</b> $nilai_tugas <br>";
?>
</div>
</body>
</html>