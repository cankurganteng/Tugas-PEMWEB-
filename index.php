<?php

session_start();

if (!isset($_SESSION["login"])) {
    header("Location: login.php");
    exit;
}

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!--bootstrap css-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous" />
    <!--bootstrap css-->

    <!--bootstrap saya-->
    <link rel="stylesheet" href="style.css" />
    <!--bootstrap saya-->

    	<link rel="icon" type="image/png" sizes="16x16" href="img/ubr.png" />
    <title> Volley ball | UNBARA</title>
  </head>
  <body>
    <!--navbar-->
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary shadow">
      <div class="container">
        <a class="navbar-brand">Unit Kegiatan Mahasiswa Volley Ball UNBARA</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" 
        data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" 
        aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav ms-auto">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="index.php">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#about">Tentang Kami</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="daftar.php">Daftar</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="logout.php">Log out</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="admin_login.php">Admin</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <br />
    <!--navbar-->

    <!--jumbotron-->
    <section class="jumbotron text-center">
      <img src="img/bola voli1.jpg" width="150" class="rounded-circle" />
      <h1 class="display-4">VOLLEY BALL UNBARA</h1>
      <p class="lead">| SALAM OLAHRAGA |</p>
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
        <path
          fill="#a2d9ff"
          fill-opacity="1"
          d="M0,64L34.3,80C68.6,96,137,128,206,122.7C274.3,117,343,75,411,96C480,117,549,203,617,240C685.7,277,754,267,823,218.7C891.4,171,960,85,1029,90.7C1097.1,96,1166,192,1234,224C1302.9,256,1371,224,1406,208L1440,192L1440,320L1405.7,320C1371.4,320,1303,320,1234,320C1165.7,320,1097,320,1029,320C960,320,891,320,823,320C754.3,320,686,320,617,320C548.6,320,480,320,411,320C342.9,320,274,320,206,320C137.1,320,69,320,34,320L0,320Z"
        ></path>
      </svg>
    </section>
    <br />
    <!--jumbotron-->

    <!--penjelasan singkat bola voli-->
    <section id="about">
      <div class="container">
        <div class="row text-center mb-4">
          <div class="col">  
            <h2>Bola Voli</h2>
          </div>
        </div>
        <div class="row justify-content-center fs-5 text-left">
          <div class="col-md-4">
            <p><h3>Sejarah Singkat Permainan Bola voli</h3>
            Permainan bola voli termasuk salah satu contoh dari cabang olahraga bola besar.
            Bisa dikatakan, permainan ini masuk ke dalam kategori pertandingan karena melibatkan dua tim yang saling 
            berhadapan untuk mendapatkan hasil pertandingan. 
<br>
            Awalnya, permainan ini ditujukan untuk para orang tua. Namun, Morgan ingin sekali menyesuaikan antara olahraga 
            dengan kemampuan fisik para orang tua.
 <br>
            Sebab tidak memungkinkan bagi orang-orang tua jika harus mengandalkan kekuatan fisik dalam waktu yang lama, misalnya berlari.
            Dan sekitar empat tahun setelah pertemuan tersebut, terciptalah sebuah olahraga yang merupakan kombinasi antara basket, bulutangkis, dan baseball. Pada awalnya, permainan ini bernama Mintonette. Seiring dengan berkembangnya waktu, olahraga ini mulai dikenal dan banyak digemari orang dari berbagai kalangan usia.
 <br>
            Perubahan nama menjadi Volleyball (Bola Voli) terjadi pada tahun 1896, bertepatan dengan diselenggarakannya pertandingan pertama pada acara 
            internasional Young Mens Christian Association (YMCA) Training School.
<br>
            Cara memainkan bola voli adalah dengan memukul bola agar melewati bagian atas net yang ada di tengah lapangan. Agar mendapatkan skor, para pemain dalam satu tim harus mengarahkan bola ke area lawan, sehingga bola terjatuh di daerah pertahanan lawan. 
<br>
            Pencetusnya adalah William G. Morgan yang merupakan guru pendidikan jasmani di Amerika Serikat. Ia sangat terinspirasi dari permainan bola basket. Inspirasi tersebut dia dapatkan setelah bertemu dengan James Naismith yang merupakan pencetus olahraga bola basket. <br>

            </p>
          </div>
          <div class="col-md-4">
          <p><h3>Peraturan Permainan Bola Voli</h3>
          1).Permainan dimainkan oleh dua tim yang saling berhadapan. <br>
          2).Setiap tim dimainkan oleh enam orang pemain yang menempati posisi sebagai spiker, defender, libero, dan tosser. <br>
          3).Pemain dengan posisi libero menggunakan seragam yang berbeda dari anggota tim lainnya. <br>
          4).Libero tidak diperbolehkan servis, pergantian posisi, dan melakukan pukulan bola. <br>
          5).Minimal, dalam satu tim dimainkan oleh empat orang pemain. <br>
          6).Permainan dimulai dengan servis pertama yang dilakukan oleh tim pemenang undian lempar koin. <br>
          7).Servis dilakukan dari luar garis lapangan. Dan bola harus melewati atas net, tidak boleh menyentuh net sedikitpun. <br>
          8).Bola dinyatakan keluar jika keluar garis lapangan. <br>
          9).Pemain hanya boleh melakukan segala macam teknik di areanya sendiri. Pemain tidak diijinkan masuk ke area lawan. <br>
          10).Bola dianggap masuk apabila menyentuh lantai lapangan dan masih berada dalam garis lapangan. <br>
          11).Semua anggota tubuh dapat digunakan untuk memantulkan atau memukul bola. Meskipun demikian, yang paling dominan adalah menggunakan tangan. <br>
          12).Pemain tidak boleh menangkap dan melempar bola. <br>
          13).Permainan bola voli berlangsung 2 sampai 3 set. Jika suatu tim memenangkan dua set secara beruntun, maka langsung keluar sebagai pemenang. 
              Namun jika skor imbang 1-1, maka permainan dilanjutkan hingga tiga set. <br>     
          14).Satu set dimenangkan oleh tim yang mencapai skor 25 lebih dulu. <br>
          15).Jika dalam satu set skor imbang 24-24, maka pemenang ditentukan bukan siapa yang mencapai skor 25 lebih dulu, melainkan tim mana yang unggul dua poin lebih dulu. <br>
          16).Pergantian pemain boleh dilakukan selama pertandingan masih berlangsung. <br>
            </p>
          </div>
        </div>

      </div>
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#00cba9" fill-opacity="1" 
      d="M0,32L48,58.7C96,85,192,139,288,181.3C384,224,480,256,576,272C672,288,768,288,864,266.7C960,245,1056,203,1152,160C1248,117,1344,75,1392,53.3L1440,32L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"></path></svg>
    </section>

    <!--penjelasan singkat bola voli-->

    <!--RESPONSIVE NAVBAR-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <!--RESPONSIVE NAVBAR-->
  </body>
</html>
