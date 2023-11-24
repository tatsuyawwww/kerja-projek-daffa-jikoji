<?php
session_start();
$koneksi = new mysqli("localhost","root","","kanaquiz");
?>


<html>
    <head>
        <title>Jikoji | Tentang Kami</title>
        
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="idaboutus.css">
        <link rel="icon" href="Images/Jikoji Logo Radius.png">
    </head>
    <body>
      
        <div class="header-background">
            <div id="navigate" class="sticky-nav">
                <nav class="navbar navbar-expand">
                    <div class="container-fluid">
                      <a class="navbar-brand" href="#">Jikoji</a>
                      
                      
                      <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0 ms-auto">
                          <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="idhome.php">Beranda</a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link" href="enlogin.php">Quiz</a>
                          </li>
                          <li class="nav-item ">
                            <a class="nav-link" href="idaboutus.php">Tentang Kami</a>
                            
                          </li>

                          <li class="nav-item dropdown" id="languageDropdown" style="margin-left:20px;">
    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        Pilih Bahasa
    </a>
    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
        <li><a class="dropdown-item" href="idaboutus.php">Indonesia</a></li>
        <li><a class="dropdown-item" href="enaboutus.php">English</a></li>
    </ul>
</li>


                         
                        </ul>
            
</div>
                        
                      </div>
                    </div>
                  </nav>
              
            </div>
            
           <h1 class="heading container"> <BR>Ini semua bukan hanya soal alfabet<br>Ini semua tentang penguasaan</h1>
        </div>
          <div class="container-fluid" id="aboutus">
            <div class="row">
              <div class="col-xs-12 col-sm-6 col-ng-6 column-left">

              </div>
               <div class="col-xs-12 col-sm-6 col-ng-6 column-right">
                 <h1 class="section-title">Lahirnya Jikoji</h1>
                 <p class="paragraph">3 tahun yang lalu, tepatnya pada 2 Maret 2020, penyakit menular yang disebabkan oleh virus SARS-CoV-2, yang disebut Penyakit Coronavirus (COVID-19), dikonfirmasi telah menyebar ke Indonesia. Kondisi ini membatasi aktivitas masyarakat, memaksa mereka untuk menghabiskan sebagian besar waktu di rumah guna mengurangi risiko penularan virus.<br><br>

                 Salah satu konsekuensi dari virus ini adalah penutupan berbagai kursus dan lembaga pelatihan. Mereka terbatas oleh berkurangnya anggaran dari waktu ke waktu akibat kurangnya pendapatan, dan hal ini termasuk kursus bahasa Jepang.<br><br>
                 Berdasarkan kondisi ini, kami melihat adanya peluang untuk mendirikan aplikasi berbasis website yang dapat menjadi solusi, terutama bagi anak-anak berusia 12-18 tahun yang ingin menguasai keterampilan dasar bahasa Jepang, yaitu hiragana dan katakana, secara praktis dan efektif. Ini sangat bermanfaat bagi mereka yang terbatas oleh biaya dan waktu.</p>
                 </div>
            </div>
          </div>
          <div class="container-fluid" id="our-services">
            <div class="row">
              <div class="col-xs-12 col-sm-6 col-lg-6">
                   <h1 class="service-section"> Visi & Misi</h1>
                   <p class="paragraph">
                   Sejak berdiri pada tahun 2023, kami bertekad untuk menjadi pilihan utama banyak orang yang sedang belajar hiragana dan katakana. Berikut adalah visi dan misi kami.
                   </p>
                   <div class="row">
                     <div class="col-xs-12 col-sm-6 col-lg-6 service-1">
                       <h1 class="service-title-1">Visi</h1>
                       <p class="service-paragraph-1">
                       "Mengembangkan diri menjadi platform terdepan dalam pembelajaran praktis hiragana dan katakana, menyediakan akses gratis untuk semua pengguna agar dapat dengan mudah dan menyenangkan mengembangkan keterampilan bahasa Jepang mereka."
                       </p>
                     </div>
                     <div class="col-sm-6 col-xs-12 col-lg-6 service-2">
                       <h1 class="service-title-2">Misi</h1>
                       <p class="service-paragraph-2">
                       1.Menyediakan Pembelajaran Praktis <br>
                      2.Akses Gratis untuk Semua <br>
                      3.Fleksibilitas Waktu dan Tempat <br>
                      4.Interaktif dan Menyenangkan <br>
                      5.Dukungan Pengguna Aktif

                     </div>
                   </div>
              </div>
              <div class="col-xs-12 col-sm-6 col-lg-6 our-service-right">
              </div>
            </div>              
             <div class="container-fluid" id="team" >
               <div class="row">
                 <div class="col-xs-12 col-sm-6 col-lg portfolio">
                   <div class="row">
                     <div class="col-xs-12 col-lg-6 col-sm-6 col-sm-6">
                      <img src="https://tsunagulocal.com/wp-content/uploads/2020/06/007-1-1024x648.jpg" height="300px" width="450px" style="object-fit: fill;">
                     </div>
                     
                     <div class="col-sm-6 col-xs-12 col-lg-6 ">
                       <img src="https://s3.ap-southeast-1.amazonaws.com/we-xpats.com/uploads/article/2054/en_113_3.jpg" height="300px" width="380px" style="object-fit: fill;">
                     </div>
                   </div>
                    <div class="row">
                      <div class="col-lg-6 col-xs-12 col-sm-6 img-3">
                       <img src="https://img.freepik.com/premium-photo/photo-group-business-people-background_296537-10301.jpg?size=626&ext=jpg&ga=GA1.1.386372595.1698537600&semt=ais" height="300px" width="450px" style="object-fit: fill;">
                      </div>
                      <div class="col-lg-6 col-xs-12 col-sm-6 img-4">
                        <img src="https://japanintercultural.com/wpdata/wp-content/uploads/2011/10/iStock-984632884-tiny.jpg" height="300px" width="380px" style="object-fit: fill;">
                      </div>
                    </div>
                    
                 </div>
                 <div class="col-sm-6 col-xs-12 col-lg-6">
                   <div class="row">
                     <h2 class="team-section">Memperkenalkan Pendiri Kami</h2>
                     <p class="team-paragraph">Semua keberhasilan Jikoji saat ini dan yang telah terjadi tidak dapat dipisahkan dari kontribusi seorang remaja ambisius berusia 16 tahun bernama Daffa, yang telah berusaha keras untuk mencapai mimpinya. Salah satu prestasinya termasuk mendirikan situs web kuis hiragana dan katakana, yang ia beri nama Jikoji.</p>
                     <div class="col-sm-6 col-lg-6 col-xs-12 block-team">
                        <img src="Images/Jikoji Founder.png" alt="image7" class="team-member" width="800">
                        <h3 class="team-title-1">Faiz Daffa Rafiansyah</h3>
                        <small style="color: lightskyblue;">Programmer, Pelajar, Pembawa Acara, Ahli Bahasa, Penyanyi, Pendiri & CEO Jikoji
                      </small>
                        <p class="team-paragraph">Lahir : Banyumas, Indonesia <br> Tanggal Lahir : 4 Januari 2007. <br>Umur : 16<br>Mulai belajar Kana di tahun 2020.
                           <br>100% Kefasihan ✅ </p>
                       
                     </div>


                     
                      </div>
                   </div>
                 </div>
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
          <i class="fa fa-linkedin" aria-hidden="true" style="color:lightskyblue;font-size:36px;"></i></a>
         <a href="https://www.linkedin.com/in/faiz-daffa-rafiansyah-93b25a296/" target="_blank">
          <i class="fa fa-whatsapp" aria-hidden="true" style="color:greenyellow;font-size:36px;"></i></a>
        
      </div>
    </div>
    <div class="link-boxes">
      <ul class="box">
        <li class="link_name">Menu Cepat</li>
        <li><a href="idhome.php">Beranda</a></li>
        <li><a href="idhome.php/#sm">Study Materials</a></li>
        <li><a href="enlogin.php">Take Quiz</a></li>
        <li><a href="idaboutus.php">About us</a></li>
        <li><a href="idhome.php/#faq">F.A.Q</a></li>
      </ul>
   
      <form action="https://formspree.io/f/xpzggape"
  method="POST">
        <h1 style="margin-left:100px;font-weight: bold;margin-bottom:40px;">Feedback</h1>      
        <input name="name" type="text" class="feedback-input" placeholder="Name"/> 
        <input name="email" type="email" class="feedback-input" placeholder="Email" />
        <textarea name="text" class="feedback-input" placeholder="Comment"></textarea>
        <input type="submit" value="SEND"/>
      </form>

      <form
  
>
<!-- <label for="email">Your Email</label>
  <input  type="email">
  <button type="submit">Submit</button>
  <!-- your other form fields go here -->


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







<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"></script>


<script>
    document.getElementById('languageDropdown').addEventListener('mouseenter', function () {
        document.getElementById('navbarDropdown').click();
    });

    document.getElementById('languageDropdown').addEventListener('mouseleave', function () {
        document.getElementById('navbarDropdown').click();
    });
</script>

                  
                            
    </body>
</html>


<!--
  <div class="col-xs-12 col-sm-6 col-lg-6">
                        <img src="https://storage.googleapis.com/picxystatic/cache/2019/7/19/af3f1bddab7b63f2a4251ca4ea08e9e8.jpg" alt="image8" class="team-member" height="180px">
                        <h3 class="team-service-2">FaDaRa</h3>
                        <small style="color: red;">Photo Editor</small>
                        <p class="team-paragraph">Our senior photo editor with immense skills and innovative ideas.He ensures that all the photos are editted on time and manipulates the photos to high quality.</p>
                        <div class="social-media">
                          <i class="fa fa-facebook" aria-hidden="true" style="color:lightblue;font-size:36px;"></i>
                          <i class="fa fa-twitter" aria-hidden="true" style="color:blueviolet;font-size:36px;"></i>
                          <i class="fa fa-youtube" aria-hidden="true" style="color:red;font-size:36px;"></i>
                        </div>
-->