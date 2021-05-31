<?php
  class resep{
    protected $resep;
    
    public function __construct(){
        $this->resep=[
            // data resep
            (object)[
              'nama_resep' => 'Dalgona Coffee',
              'alat_bahan' => "<ol>
                <li>4 sdm nescafe</li>
                <li>4 sdm gula pasir</li>
                <li>4 sdm air panas</li>
                <li>es batu secukupnya</li>
                <li>susu UHT secukupnya</li>
                </ol>",

              'cara_membuat' => "<ol>
                <li>Campur semua bahan, kocok hingga mengembang (Pakai mixer lebih mudah)/li>
                <li>Tuang es batu dalam gelas saji, lalu tuang susu UHT sebanyak 3/4 bagian gelas</li>
                <li>Kemudian topping dengan dalgona cream, lalu taburi choco granola atau sesuai selera</li>
                <li>Sajikan</li>
                </ol>",
              'dijual'=> 'biasa dijual dengan harga 5K sampai 15K',
            ],
            (object)[
              'nama_resep' => 'es kopi susu',
              'alat_bahan' => "<ol>
                <li>3 kotak kecil susu cair rasa coconut delight</li>
                <li>6 sachet kopi nescafe classic</li>
                <li>6 sachet gula merah</li>
                <li>12 sachet creamer</li>
                <li>air panas sedikit dan es batu</li>
                </ol>",

              'cara_membuat' => "<ol>
                <li>Campurkan kedalam air panas, kopi, gula merah, krimer, aduk hingga rata</li>
                <li>Campurkan 3 bungkus susu cair</li>
                <li>Aduk lalu Tambahkan es batu dan Siap dinikmati</li>
                </ol>",
              'dijual'=> 'biasa dijual dengan harga 10K sampai 18K',
            ],
            (object)[
                'nama_resep' => 'Kopi gula aren',
                'alat_bahan' => "<ol>
                <li200ml susu cair UHT</li>
                <li>25 ml gula aren cair</li>
                <li>1 kopi instant sachet tanpa creamer/gula, dicairkan dengan 30ml air</li>
                <li>1 75 gr es batu</li>
                </ol>",

                'cara_membuat' => "<ol>
                <li>Masukkan gula aren cair ke dalam gelas tambahkan es batu</li>
                <li>Masukkan susu UHT 200 ml, 75 gr es batu dan terakhir tuangkan kopi pada layer paling atas</li>
                <li>Es kopi susu gula aren siap sajikan.</li>
                </ol>",
                'dijual'=> 'biasa dijual dengan harga 15K sampai 25K',
            ],
            (object)[
                'nama_resep' => 'Kopi Gayo Metode V60',
                'alat_bahan' => "<ol>
                <li>15 gram kopi gayo arabika</li>
                <li>200 ml air</li>
                <li>alat V60</li>
                <li>kertas v60 (porta filter)</li>
                <li>timbangan</li>
                </ol>",

                'cara_membuat' => "<ol>
                <li>Giling Kopi gayo khusus arabika dengan ukuran medium fine</li>
                <li>pasang alat V60 dan flush porta filter agar tidak ada aroma kertas </li>
                <li>Masukan kopi gayo ke kertas V60</li>
                <li>Seduh menggunakan ketel dengan perlahan pastikan seduhan pertama tunggu hingga kopi blomming</li>
                <li>Tunggu 20-25 detik lalu seduh lagi berulang kali hingga 200ml</li>
                <li>sajikan</li>
                </ol>",
                'dijual'=> 'biasa dijual dengan harga 15K sampai 29K',
            ],
            // ....dst
          ];
  }
  public function resep($no){
   echo $this->resep[$no]->nama_resep;
  }
  public function bahan($no){
    echo $this->resep[$no]->alat_bahan;
   }
   public function pembuatan($no){
    echo $this->resep[$no]->cara_membuat;
   }
   public function dijual($no){
    echo $this->resep[$no]->dijual;
   }
 }


?>