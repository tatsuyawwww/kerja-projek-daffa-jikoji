<?php
session_start();
$koneksi = new mysqli("localhost","root","","kanaquiz");
?>


<html>
    <head>
        <title>Jikoji | About Us</title>
        
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
                            <a class="nav-link active" aria-current="page" href="enhome.php">Home</a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link" href="enlogin.php">Take Quiz</a>
                          </li>
                          <li class="nav-item ">
                            <a class="nav-link" href="enaboutus.php">About Us</a>
                            
                          </li>

                          <li class="nav-item dropdown" id="languageDropdown" style="margin-left:20px;">
    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        Choose Language
    </a>
    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
        <li><a class="dropdown-item" href="enaboutus.php">English</a></li>
        <li><a class="dropdown-item" href="idaboutus.php">Bahasa Indonesia</a></li>
    </ul>
</li>


                         
                        </ul>
            
</div>
                        
                      </div>
                    </div>
                  </nav>
              
            </div>
            
           <h1 class="heading container"> <BR>It's not just about the alphabets.<br>It's all about a mastery.</h1>
        </div>
          <div class="container-fluid" id="aboutus">
            <div class="row">
              <div class="col-xs-12 col-sm-6 col-ng-6 column-left">

              </div>
               <div class="col-xs-12 col-sm-6 col-ng-6 column-right">
                 <h1 class="section-title">Born of Jikoji</h1>
                 <p class="paragraph">3 years ago, exactly On March 2nd 2020, an infectious disease caused by the SARS-CoV-2 virus, called Coronavirus disease (COVID-19) was confirmed to have spread to Indonesia. This condition limits people's activities, requiring them to spend most of their time at home to reduce the risk of contracting the virus.<br><br>

                  Another consequence of this virus is the closure of various courses and training institutions. They are constrained by decreasing budgets over time due to a lack of income, and this includes Japanese language courses.<br><br>
                  Based on these conditions, we see an opportunity to establish a website-based application that can serve as a solution, especially for children aged 12-18 years who wish to master basic Japanese skills, namely hiragana and katakana, in a practical and effective manner. This is particularly beneficial for those constrained by costs and time.</p>
                 </div>
            </div>
          </div>
          <div class="container-fluid" id="our-services">
            <div class="row">
              <div class="col-xs-12 col-sm-6 col-lg-6">
                   <h1 class="service-section"> Vision & Mission</h1>
                   <p class="paragraph">
                    Since Established in 2023, we have been determined to become the number one website of choice for many people learning hiragana and katakana. Here are our vision and mission.
                   </p>
                   <div class="row">
                     <div class="col-xs-12 col-sm-6 col-lg-6 service-1">
                       <h1 class="service-title-1">Vision</h1>
                       <p class="service-paragraph-1">
                        "To become a leading platform in practical learning of hiragana and katakana, providing free access to all users to easily and enjoyably develop their Japanese language skills."
                       </p>
                     </div>
                     <div class="col-sm-6 col-xs-12 col-lg-6 service-2">
                       <h1 class="service-title-2">Mission</h1>
                       <p class="service-paragraph-2">
                        1. Provide Practical Learning <br>
                        2. Free Access for All <br>
                        3. Flexibility of Time and Place<br>
                        4. Interactive and Enjoyable<br>
                        5. Active User Support

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
                     <h2 class="team-section">Introducing our founder</h2>
                     <p class="team-paragraph">All of Jikoji's current and past successes cannot be separated from the contribution of an ambitious 16-year-old boy named Daffa who has been striving to achieve his dreams. One of his accomplishments includes establishing a hiragana and katakana quiz website, which he named Jikoji.</p>
                     <div class="col-sm-6 col-lg-6 col-xs-12 block-team">
                        <img src="Images/Jikoji Founder.png" alt="image7" class="team-member" width="800">
                        <h3 class="team-title-1">Faiz Daffa Rafiansyah</h3>
                        <small style="color: lightskyblue;">Programmer, Student, MC, Linguists, Singer, Founder & CEO of Jikoji </small>
                        <p class="team-paragraph">Born : Banyumas, Indonesia <br> Date of birth : January 4th 2007. <br>Age : 16<br>Start Learn Kana in 2020.
                           <br>100% Proficiency ✅ </p>
                       
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
        <li class="link_name">Quick Menu</li>
        <li><a href="#">Home</a></li>
        <li><a href="#">Study Materials</a></li>
        <li><a href="#">Take Quiz</a></li>
        <li><a href="#">About us</a></li>
        <li><a href="#">F.A.Q</a></li>
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


