<?php
session_start();
$koneksi = new mysqli("localhost","root","","kanaquiz");
?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Jikoji | Halaman Utama</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
  <link rel="icon" href="Images/Jikoji Logo.png">
  <script src="https://kit.fontawesome.com/451d7165ed.js" crossorigin="anonymous"></script>
  <script src="script.js"></script>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Press+Start+2P&family=Roboto+Condensed:wght@700&display=swap" rel="stylesheet">
  <style>
    @import url('https://fonts.googleapis.com/css2?family=Press+Start+2P&family=Roboto+Condensed:wght@700&display=swap');
  </style>
    <link rel="stylesheet" href="enhome.css">
   
</head>
<body>

<div class="wrapper">
  <nav class="nav">
      <div class="Logo"><img src="./Images/Jikoji Logo Radius.png" width="44"><span>Jikoji</span></div>
      <ul>
        <li class="classactive"><a href="enhome.php">Beranda</a></li>
        <li><a href="enlogin.php">Quiz</a></li>
        <li><a href="idaboutus.php">Tentang Kami</a></li>
       
        <div class="dropdown" style="margin-right:50px;">
  <span>Pilih Bahasa</span>
  <div class="dropdown-content">
  <button style="width: 150px;"><a href="idhome.php">Indonesia  </a></button>
  <button style="width: 150px;"><a href="enhome.php">English</a></button>
  </div>
</div>
      </ul>
  </nav>
</div>

<br><br><br><br><br><br><br>

  


<div class="moto">
  <h1>Cara terbaik untuk belajar Kana</h1> <br>
<p id="pre">
       Karena "Tujuan utama dari 
    <mark>pendidikan</mark> bukanlah
   pengetahuan, tetapi <mark>aksi</mark>." 
</p>



  <h1 id="element"></h1>
  


 <button style="visibility:hidden;" id="button-kana-info" >All About Kana</button>


<img src="Images/MainPic.png" alt="My Logo" style="margin-left:900px;width:260px;height:260px;">

<br> <br> <br> <br> <br> <br>

<div id="whyus">
  <h2 class="moto2">Mengapa Kami?</h2>
  
  <h3 class="mainsub"> Semua didasarkan pada riset </h3>
  <p class="mainsubcon">Semua isi website ini didasarkan pada hasil penelitian kami selama 3 tahun sejak 2020. Kami menyediakan konten yang didasarkan pada fakta.</p>


  <h3 class="mainsub"> Dipercaya oleh lebih <br>dari 200 perusahaan</h3>
  <p class="mainsubcon">Sejak didirikan di tahun 2023, kami telah meraih 4 penghargaan untuk kategori website quiz terbaik. Membuat produk kami telah dipercaya oleh lebih dari 200 perusahaan di seluruh penjuru dunia. </p>

  <h3 class="mainsub"> Menghemat biaya Anda</h3>
  <p class="mainsubcon">Anda sudah tahu website kami dan memutuskan untuk mengunjunginya, maka Anda beruntung, karena semua fitur di website ini tidak memerlukan biaya untuk digunakan, Anda tidak perlu berlangganan dan lain sebagainya. Semuanya gratis untuk Anda.  </p>
</div>





<div class="faq-header" id="faq">Pertanyaan Yang Sering Diajukan</div>

<div class="faq-content">
  <div class="faq-question">
    <input id="q1" type="checkbox" class="panel">
    <div class="plus">+</div>
    <label for="q1" class="panel-title">Apa itu Jikoji</label>
    <div class="panel-content">Jikoji merupakan sebuah website yang menyediakan bahan belajar bahasa Jepang yang mana semua isinya didasarkan pada penelitian kami selama kurang lebih 3 tahun. </div>
</div>
  
  <div class="faq-question">
    <input id="q2" type="checkbox" class="panel">
    <div class="plus">+</div>
    <label for="q2" class="panel-title">Siapa pendiri Jikoji?</label>
    <div class="panel-content">Faiz Daffa Rafiansyah adalah seorang anak laki-laki yang mendirikan Jikoji. Dengan kefasihannya dalam berbahasa Jepang, khususnya hiragana & katakana, dia memutuskan untuk mendirikan website untuk orang-orang yang ingin belajar hiragana dan katakana dengan baik.</div>
  </div>
  
  <div class="faq-question">
    <input id="q3" type="checkbox" class="panel">
    <div class="plus">+</div>
    <label for="q3" class="panel-title">Kapan Jikoji dirilis?</label>
    <div class="panel-content">Kamis, 4 Januari 2024</div>
  </div>

  <div class="faq-question">
    <input id="q4" type="checkbox" class="panel">
    <div class="plus">+</div>
    <label for="q4" class="panel-title">Apa yang dimaksud dengan istilah "Kana"?</label>
    <div class="panel-content">Nah, pada umumnya Bahasa Jepang memiliki 4 aksara yang berbeda, meskipun beberapa orang mengatakan bahwa hanya ada 3. Keempat aksara Jepang tersebut adalah Hiragana, Katakana, Kanji, dan Romaji. Setiap aksara memiliki fungsi dan perbedaan dalam penggunaannya tergantung pada kata yang diungkap. Jadi, "Kana" di sini merujuk pada Hiragana dan Katakana. Orang biasanya menggunakan singkatan ini untuk menyebut kedua aksara tersebut. </div>
  </div>

  <div class="faq-question">
    <input id="q5" type="checkbox" class="panel">
    <div class="plus">+</div>
    <label for="q5" class="panel-title">Kapan kita menggunakan masing-masing dari mereka?
</label>
    <div class="panel-content">Hal ini mungkin membingungkan banyak orang, terutama bagi mereka yang tidak pernah mengenal dan belajar aksara Jepang. Jadi, Hiragana digunakan untuk kata-kata yang berasal dari bahasa Jepang asli, biasanya digunakan untuk memberikan cara yang benar untuk membaca Kanji yang disebut Furigana, yaitu Hiragana dengan ukuran kecil di atas Kanji. Katakana digunakan untuk kata-kata yang bukan berasal dari kata-kata Jepang, yaitu kata-kata asing. Kanji digunakan untuk kata bahasa Jepang asli, tetapi ini merupakan bentuk sebenarnya dari kata-kata Jepang, sehingga Hiragana digunakan untuk membaca Kanji. Dan yang terakhir adalah Romaji, sangat mudah dipahami karena ini hanya alfabet dasar bahasa Inggris dari A hingga Z. Kita menggunakan ini untuk mewakili singkatan, seperti HTML, CSS, JS, dan banyak lagi.</div>
  </div>

  <div class="faq-question">
    <input id="q6" type="checkbox" class="panel">
    <div class="plus">+</div>
    <label for="q6" class="panel-title">Apakah ada aturan khusus mengenai penggunaan hiragana dan katakana?</label>
    <div class="panel-content">Meskipun tidak ada aturan ketat, ada kecenderungan dalam penggunaannya. Misalnya, kata-kata asli Jepang lebih sering ditulis dengan Hiragana, sedangkan kata-kata asing biasanya ditulis dengan Katakana.</div>
  </div>

  <div class="faq-question">
    <input id="q7" type="checkbox" class="panel">
    <div class="plus">+</div>
    <label for="q7" class="panel-title">Berapa lama waktu yang dibutuhkan untuk mahir dalam Kana?</label>
    <div class="panel-content">Ini bergantung pada usaha Anda sendiri. Pastikan untuk konsisten dan jangan pernah berhenti jika Anda ingin mahir dan menguasainya.</div>
  </div>

  <div class="faq-question">
    <input id="q8" type="checkbox" class="panel">
    <div class="plus">+</div>
    <label for="q8" class="panel-title">Berapa banyak karakter dalam Hiragana dan Katakana?</label>
    <div class="panel-content"> Setiap huruf memiliki 46 karakter dasar. Meskipun karakter dalam Hiragana dan Katakana sama, bentuknya berbeda.</div>
  </div>

  <div class="faq-question">
    <input id="q9" type="checkbox" class="panel">
    <div class="plus">+</div>
    <label for="q9" class="panel-title">Bagaimana cara membaca Hiragana dan Katakana?</label>
    <div class="panel-content">Hiragana dan Katakana dibaca berdasarkan suara suku kata, dengan setiap karakter mewakili satu suku kata. Sebagai contoh, karakter "あ" dalam Hiragana dibaca sebagai "A," dan karakter "カ" dalam Katakana dibaca sebagai "Ka."</div>
  </div>

  <div class="faq-question">
    <input id="q10" type="checkbox" class="panel">
    <div class="plus">+</div>
    <label for="q10" class="panel-title">Apa pentingnya belajar Hiragana dan Katakana dalam pembelajaran bahasa Jepang?</label>
    <div class="panel-content">Kemahiran membaca dan menulis Hiragana dan Katakana adalah langkah awal yang sangat penting dalam pembelajaran bahasa Jepang. Menguasai keduanya memungkinkan seseorang untuk membaca dan menulis kata-kata dasar, memahami teks sederhana, dan berkomunikasi dalam konteks sehari-hari.</div>
  </div>


  <div class="study-materials" id="sm">
      <h1>Jikoji "Bahan Pembelajaran"</h1> <br> <br> <br>
      <p style="font-size: 30px;text-align:center;">Ingin memulai quiz?<br> Jangan mengerjakannya terlalu cepat. <br>Unduh dan kuasai <br>bahan pembelajaran ini <br>lalu Anda dapat memulai quiz <br>kapan pun Anda mau.</p> 
      <br> <br> <br> <br> <br> <br> <br>
      <div class="smdownload">
    
           <a href="Jikoji's Japanese Study Materials.rar" download style="margin-left:40%;"> 
          <button title="Download Jikoji Study Materials "style="padding: 15px; background-color: slateblue; border-radius: 12px; text-align: center; text-decoration: none; display: inline-block; font-size: 16px; margin: 4px 2px; cursor: pointer; color:powderblue; font-weight:bold; ">Unduh Bahan Pembelajaran Di Sini</button>
</a>
      </div>
     
     
</div>







<footer>
  <div class="content">
    <div class="top">
      <div class="logo-details">
        <i class="fab fa-slack"></i>
        <span class="logo_name">Jikoji</span>
      </div>
      <div class="media-icons">
        <a href="https://www.instagram.com/daffarafian/" target="_blank"> 
          <i class="fa fa-instagram" aria-hidden="true" style="color:pink;font-size:36px;"></i></a>
         <a href="https://www.youtube.com/channel/UC8faDRErE7P2wXGjne3Wdig" target="_blank">
          <i class="fa fa-youtube" aria-hidden="true" style="color:tomato;font-size:36px;"></i></a>
         <a href="https://www.linkedin.com/in/faiz-daffa-rafiansyah-93b25a296/" target="_blank">
          <i class="fa fa-linkedin" aria-hidden="true" style="color:lightskyblue;font-size:36px;"></i></a>
        
      </div>
    </div>
    <div class="link-boxes">
      <ul class="box">
        <li class="link_name">Menu Cepat</li>
        <li><a href="idhome.php">Beranda</a></li>
        <li><a href="#sm">Bahan Pembelajaran</a></li>
        <li><a href="enlogin.php">Quiz</a></li>
        <li><a href="idaboutus.php">Tentang Kami</a></li>
        <li><a href="#faq">F.A.Q</a></li>
      </ul>
   
      <form action="https://formspree.io/f/xpzggape"
  method="POST">
        <h1 style="margin-left:100px;font-weight: bold;margin-bottom:40px;">Feedback</h1>      
        <input name="name" type="text" class="feedback-input" placeholder="Nama"/> 
        <input name="email" type="email" class="feedback-input" placeholder="Email" />
        <textarea name="text" class="feedback-input" placeholder="Komentar"></textarea>
        <input type="submit" value="KIRIM"/>
      </form>

      <div class="direct-contact-container">

        <ul class="contact-list">
          <li class="list-item"><i class="fa fa-map-marker fa-2x"><span class="contact-text place">Tokyo, Japan</span></i></li>
          
          <li class="list-item"><i class="fa fa-phone fa-2x"><span class="contact-text phone"><a href="tel:1-212-555-5555" title="Give me a call">+8194-714-3240</a></span></i></li>
          
          <li class="list-item"><i class="fa fa-envelope fa-2x"><span class="contact-text gmail"><a href="mailto:#" title="Send me an email">daffarafiansyah123@gmail.com</a></span></i></li>
          
        </ul>

        <hr>
       

      </div>
    
  </div>
     
    </div>
  </div>
  <div class="bottom-details">
    <div class="bottom_text">
      <span class="copyright_text">Copyright &#169; 2023 <a href="#">Jikoji.</a>All rights reserved</span>
      <span class="policy_terms">
        <a href="#">Privacy Policy</a>
        <a href="#">Terms & Condition</a>
      </span>
    </div>
  </div>
</footer>




















<script src="https://unpkg.com/typed.js@2.1.0/dist/typed.umd.js"></script>
<script>
  var typed = new Typed('#element', {
      strings: ['いらっしゃいませ', '初めまして', 'ダッファです','いらっしゃいませ', '初めまして', 'ダッファです'],
      typeSpeed: 200,
    });



    const items = document.querySelectorAll(".accordion button");

function toggleAccordion() {
  const itemToggle = this.getAttribute('aria-expanded');
  
  for (i = 0; i < items.length; i++) {
    items[i].setAttribute('aria-expanded', 'false');
  }
  
  if (itemToggle == 'false') {
    this.setAttribute('aria-expanded', 'true');
  }
}

items.forEach(item => item.addEventListener('click', toggleAccordion));

  
</script> 


</body>
</html>



