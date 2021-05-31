<?php
include("resep.php");
$resep=new resep ();

?>
<!DOCTYPE html>
<html>
<head>
  <title>Secret Recepy Of A Coffee</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
</head>
<body>
<div class="container">
  <center><h3>Secret Recepy Of A Coffee</h3></center>
  <div class="row">
    <div class="card col lg-3">
      <img src="gambar/Dalgona.png" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title"><?php $resep->resep(0); ?> </h5>
        <p class="card-text">Dalgona Coffee adalah sebuah minuman kopi kental yang dibuat dengan campuran kopi hitam, gula, dan air panas. Dalgona sendiri sebenarnya adalah sebuah jajanan ringan di Korea Selatan atau dalam bahasa korea biasa disebut ppopgi.
          penasaran ? mari kita ulas resepnya</p>
        <a href="detail.php?no=0" class="btn btn-primary">lihat selengkapnya</a>
      </div> 
    </div>
    <div class="card col lg-3">
      <img src="gambar/susu.jpg" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title"><?php $resep->resep(1); ?> </h5>
        <p class="card-text">Kopi Susu merupakan salah satu kopi yang paling banyak diminati oleh masyarakat Indonesia. Sebagian besar masyarakat Indonesia cocok dan menyukai cita rasa dari Kopi Susu Kekinian. Selain itu harga Kopi Susu Kekinian ini memiliki harga yang relatif terjangkau. 
        penasaran ? mari kita ulas resepnya</p>
        <a href="detail.php?no=1" class="btn btn-primary">lihat selengkapnya</a>
      </div>
    </div>
    <div class="card col lg-3">
      <img src="gambar/gulaaren.jpg" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title"><?php $resep->resep(2); ?> </h5>
        <p class="card-text">es kopi susu gula aren adalah istilah untuk mencakup jenis racikan kopi yang mengandung susu dan gula aren. Racikan ini umumnya disajikan dingin dengan es dalam kemasan gelas plastik bertutup. Perbedaan mendasar antara kopi susu kekinian dan kopi susu tradisional ada pada penggunaan susunya. 
        penasaran ? mari kita ulas resepnya</p>
        <a href="detail.php?no=2" class="btn btn-primary">lihat selengkapnya</a>
      </div>
    </div>
    <div class="card col lg-3">
      <img src="gambar/v60.jpg" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title"><?php $resep->resep(3); ?> </h5>
        <p class="card-text">V60 Hario adalah salah satu alat seduh kopi yang mengguanakan metode pour over. keuntungan menggunakan teknik V60 adalah kopi yang dihasilkan lebih bersih dan tidak berminyak. Sebab ada filter yang berfungsing menahan minyak agar tidak turun saat disebut. Kopi yang dihasilkan dari teknik V60 akan lebih menonjolkan rasa, tapi lebih bersih karena tidak ada minyak dan waktu kontak dengan kopinya juga singkat.
         penasaran ? mari kita ulas resepnya</p>
        <a href="detail.php?no=3" class="btn btn-primary">lihat selengkapnya</a>
      </div>
    </div>
  </div>
</div>
<center><a href="login.html" class="btn btn-warning">logout</a></center> 
</body>
</html>