<?php
session_start();
$koneksi = new mysqli("localhost","root","","kanaquiz");
?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Jikoji | Home</title>
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
        <li class="classactive"><a href="enhome.php">Home</a></li>
        <li><a href="enlogin.php">Take Quiz</a></li>
        <li><a href="idaboutus.php">About Us</a></li>
       
        <div class="dropdown">
  <span>Choose Language</span>
  <div class="dropdown-content">
  <button style="width: 150px;"><a href="idhome.php">Bahasa Indonesia </a></button>
  <button style="width: 150px;"><a href="enhome.php">English</a></button>
  </div>
</div>
      </ul>
  </nav>
</div>

<br><br><br><br><br><br><br>

  


<div class="moto">
  <h1>The best way to learn kana</h1> <br>
<p id="pre">
       Because "The great aim 
   of <mark>education</mark> is not 
   knowledge, but <mark>action</mark>." 
</p>



  <h1 id="element"></h1>
  


 <button style="visibility:hidden;" id="button-kana-info" >All About Kana</button>


<img src="Images/MainPic.png" alt="My Logo" style="margin-left:900px;width:260px;height:260px;">

<br> <br> <br> <br> <br> <br>

<div id="whyus">
  <h2 class="moto2">Why Us?</h2>
  
  <h3 class="mainsub"> All Based on Research </h3>
  <p class="mainsubcon">All contents are based on the results of our research for 3 years since 2020. <br>We provide all contents that based on the fact</p>


  <h3 class="mainsub"> Trusted by +200 company's  <br>around the world</h3>
  <p class="mainsubcon">Since established in 2023, we've been gained 4 awards for the best quiz web category. <br>Make our product has been trusted by over 200 company's around the world. </p>

  <h3 class="mainsub"> Saving your costs and energy</h3>
  <p class="mainsubcon">You already know our website and decide to visit, then you are lucky, because all features on <br>this website has no required cost to use it, you do not have to subscribing or something <br>else, everything is free for you  </p>
</div>





<div class="faq-header" id="faq">Frequently Asked Questions</div>

<div class="faq-content">
  <div class="faq-question">
    <input id="q1" type="checkbox" class="panel">
    <div class="plus">+</div>
    <label for="q1" class="panel-title">What's Jikoji?</label>
    <div class="panel-content">Jikoji is a website that provides Japanese language study materials which all of the content is based on the results of our research for about 3 years. </div>
  </div>
  
  <div class="faq-question">
    <input id="q2" type="checkbox" class="panel">
    <div class="plus">+</div>
    <label for="q2" class="panel-title">Who Found Jikoji?</label>
    <div class="panel-content">Faiz Daffa Rafiansyah is the boy who found jikoji. With his fluency on Japanese, especially Hiragana & Katakana, he decided to established the website for people who wants to learn Hiragana & Katakana Properly.</div>
  </div>
  
  <div class="faq-question">
    <input id="q3" type="checkbox" class="panel">
    <div class="plus">+</div>
    <label for="q3" class="panel-title">When Jikoji was released?</label>
    <div class="panel-content">Thursday, January 4th, 2024</div>
  </div>

  <div class="faq-question">
    <input id="q4" type="checkbox" class="panel">
    <div class="plus">+</div>
    <label for="q4" class="panel-title">What's Kana means goes to?</label>
    <div class="panel-content">Well, typically Japanese language has 4 different alphabets although some people said they has 3. Those 4 japanese alphabets are Hiragana, Katakana, Kanji, and Romaji. Each of those alphabets has their own function and differences use case depends on the word. So, kana here means HIragana Katakana, people usually use this abbreviation to short it while called those 2 alphabets. </div>
  </div>

  <div class="faq-question">
    <input id="q5" type="checkbox" class="panel">
    <div class="plus">+</div>
    <label for="q5" class="panel-title">When we use each of them?</label>
    <div class="panel-content">This might be made many people confused, especially for those who never know and learn japanese alphabets. So, hiragana is used for all of the word that originally come from the Japanese word, usually used to giving the right way to read kanji which called furigana hiragana with small size on the up of a kanji. Katakana is used for all of the word that not originally come from the Japanese word ,,foreign word. Kanji is used for the originally word, but it's the real form of Japanese word, so hiragana here is used to read Kanji. And the last one is Romaji, really easy to understand because this is just basic english Alphabet from A to Z. We use this to represent an abbreviation, like HTML, CSS, JS, and many more.</div>
  </div>

  <div class="faq-question">
    <input id="q6" type="checkbox" class="panel">
    <div class="plus">+</div>
    <label for="q6" class="panel-title">Are there any specific rules regarding the use of Hiragana and Katakana?</label>
    <div class="panel-content">While there are no strict rules, there are tendencies in their usage. For instance, native Japanese words are more often written in Hiragana, whereas foreign words are typically written in Katakana.</div>
  </div>

  <div class="faq-question">
    <input id="q7" type="checkbox" class="panel">
    <div class="plus">+</div>
    <label for="q7" class="panel-title">How long to fluently in Kana?</label>
    <div class="panel-content">It depends of your effort itself, make sure to consistent and never stop if you want to be fluently on it.</div>
  </div>

  <div class="faq-question">
    <input id="q8" type="checkbox" class="panel">
    <div class="plus">+</div>
    <label for="q8" class="panel-title">How many characters are there in Hiragana and Katakana?</label>
    <div class="panel-content"> Each system has 46 basic characters. Although the characters in Hiragana and Katakana are the same, their forms differ.</div>
  </div>

  <div class="faq-question">
    <input id="q9" type="checkbox" class="panel">
    <div class="plus">+</div>
    <label for="q9" class="panel-title">How do i read Hiragana and Katakana?</label>
    <div class="panel-content">Hiragana and Katakana are read based on syllabic sounds, with each character representing a single syllable. For example, the character "あ" in Hiragana is read as "a," and the character "カ" in Katakana is read as "ka."</div>
  </div>

  <div class="faq-question">
    <input id="q10" type="checkbox" class="panel">
    <div class="plus">+</div>
    <label for="q10" class="panel-title">What is the significance of learning Hiragana and Katakana in Japanese language study?</label>
    <div class="panel-content">Proficiency in reading and writing Hiragana and Katakana is a crucial initial step in Japanese language learning. Mastering both allows individuals to read and write basic words, understand simple texts, and communicate in everyday contexts.</div>
  </div>


  <div class="study-materials" id="sm">
      <h1>Jikoji "Study Materials"</h1> <br> <br> <br>
      <p style="font-size: 30px;text-align:center;">Wanna take quiz?<br> Do not take it quickly. <br>download and mastery <br>this study materials first <br>Then you may take the quiz <br>anytime you want.</p> 
      <br> <br> <br> <br> <br> <br> <br>
      <div class="smdownload">
    
           <a href="Jikoji's Japanese Study Materials.rar" download style="margin-left:40%;"> 
          <button title="Download Jikoji Study Materials "style="padding: 15px; background-color: slateblue; border-radius: 12px; text-align: center; text-decoration: none; display: inline-block; font-size: 16px; margin: 4px 2px; cursor: pointer; color:powderblue; font-weight:bold; ">Download Study Materials Here</button>
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
        <li class="link_name">Quick Menu</li>
        <li><a href="enhome.php">Home</a></li>
        <li><a href="#sm">Study Materials</a></li>
        <li><a href="enlogin.php">Take Quiz</a></li>
        <li><a href="idaboutus.php">About us</a></li>
        <li><a href="#faq">F.A.Q</a></li>
      </ul>
   
      <form action="https://formspree.io/f/xpzggape"
  method="POST">
        <h1 style="margin-left:100px;font-weight: bold;margin-bottom:40px;">Feedback</h1>      
        <input name="name" type="text" class="feedback-input" placeholder="Name"/> 
        <input name="email" type="email" class="feedback-input" placeholder="Email" />
        <textarea name="text" class="feedback-input" placeholder="Comment"></textarea>
        <input type="submit" value="SEND"/>
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



