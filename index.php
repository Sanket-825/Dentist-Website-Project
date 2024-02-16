<?php

$conn = mysqli_connect('localhost','root','','contact_db') or die('connection failed');

if(isset($_POST['submit'])){

   $name = mysqli_real_escape_string($conn, $_POST['name']);
   $email = mysqli_real_escape_string($conn, $_POST['email']);
   $des = mysqli_real_escape_string($conn, $_POST['des']);
   $number = $_POST['number'];
   $date = $_POST['date'];
//    $time = $_POST['time'];

   $insert = mysqli_query($conn, "INSERT INTO `contact_form`(name, email, des, number, date) VALUES('$name','$email','$des', '$number','$date')") or die('query failed');

   if($insert){
      $message[] = 'appointment made successfully!';
   }else{   
      $message[] = 'appointment failed';
   }

}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dentist Website Design</title>

    <!-- font awesome cdn link -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

    <!-- bootstrap cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/4.6.1/css/bootstrap.min.css">
   
   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">
</head>
<body>
    
<!-- header section starts  -->
<header class="header fixed-top">

    <div class="container">

        <div class="row align-items-center justify-content-between">

            <a href="#home" class="logo">Dental<span>Care.</span></a>

            <nav class="nav">
                <a href="#home">home</a>
                <a href="#about">about</a>
                <a href="#services">services</a>
                <a href="#reviews">reviews</a>
                <a href="#contact">contact</a>
            </nav>

            <a href="#contact" class="link-btn">Make Appointment</a>

            <div id="menu-btn" class="fas fa-bars"></div>
        </div>
    </div>
</header>
<!-- header section ends  -->

<!-- Home section starts -->
<section class="home" id="home">
    <div class="container">
        <div class="row min-vh-100 align-items-center">
            <div class="content text-center text-md-left">
                <h3>let us brighten your smile</h3>
                <p>Welcome to DentalCare, where you'll find an array of dental solutions for every member of your family. Show off a happier, healthier smile with our help. Contact us today to schedule a same-day appointment!</p>
                <a href="#contact" class="link-btn">Make Appointment</a>
            </div>
        </div>
    </div>
</section>
<!-- Home section ends -->

<!-- about section starts -->
    <section class="about" id="about">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-5 image">
                    <img src="images/about.webp" class="w-100 mb-5 mb-md-0" alt="" >
                </div>

                <div class="col-md-6 content">
                    <span>about us</span>
                    <h3>Dr. Kanchan Jadhav</h3>
                        <h2>Director, Lead Dentist at DentalCare Clinic</h2>
                    <p>DentalCare offers a range of family dental services. <b>Dr. Kanchan Jadhav</b> is the Periodontist and Oral Implantologist. She is a skilled clinician with more than 10 years of experience as a specialist.  She is committed to providing comprehensive and excellent dental treatment with the utmost precision and patient care.</p>
                    <a href="#contact" class="link-btn">make appointment</a>
                </div>                
            </div>
            <br>
            <div class="row align-items-center">
                <div class="col-md-5 image">
                    <img src="images/about2.jpeg" class="w-100 mb-5 mb-md-0" alt="" >
                </div>

                <div class="col-md-6 content">
                    <span>about us</span>
                    <h3>DR. SUMIT PRABHU</h3>
                        <h2>Oral and Endodontist Surgeon at DentalCare Clinic</h2>
                    <p>DentalCare offers a range of family dental services. <b>DR. SUMIT PRABHU</b> is the Oral and Endodontist Surgeon. he is a skilled clinician with 6 years of experience as a specialist. he is committed to providing comprehensive and excellent dental treatment with the utmost precision and patient care.</p>
                    <a href="#contact" class="link-btn">make appointment</a>
                </div>
                
            </div>
        </div>
    </section>
<!-- about section ends -->

<!-- service section starts -->

<section class="services" id="services">

    <h1 class="heading">our services</h1>

    <div class="box-container container">

        <div class="box">
            <img src="images/icon-1.svg">
             <h3>Alignment Specialist</h3>
             <p>  With years of professional experience, we understand that there is no such thing as "one-size-fits-all". We provide an expert and customized dental and orthodontic treatment keeping your individual choices in mind. </p>
        </div>

        <div class="box">
            <img src="images/icon-2.svg">
             <h3>Cosmetic dentistry</h3>
             <p>“One can use various options of cosmetic dentistry to regain their confidence and carefree smile.We have a highly skilled dental Surgeon and Implantologist with an experience of more than 10 years.</p>
        </div>

        <div class="box">
            <img src="images/icon-3.svg">
             <h3>Oral hygiene experts</h3>
             <p>"Your oral health is more important than you might realize."We have everything you need for your oral hygiene</p>
        </div>

        <div class="box">
            <img src="images/icon-4.svg">
             <h3>Root canal specialist</h3>
             <p>Root Canal treatment is a procedure to  disinfect and save the decayed tooth. As the name suggests, the canals of tooth root are fully cleaned, disinfected, shaped and filled to provide the tooth with the desired strength to be restored. </p>
        </div>

        <div class="box">
            <img src="images/icon-5.svg">
             <h3>Teeth Whitening </h3>
             <p>That extra coffee, alcohol, cigarette or coke whatsoever the culprit is, we got you sorted.  Teeth Whitening is a painless procedure to provide brighter teeth.  It involves placing the specialised tray with whitening agent for desired time duration.</p>
        </div>

        <div class="box">
            <img src="images/icon-6.svg">
             <h3>Wisdom Tooth Surgery</h3>
             <p>Wisdom tooth removal ranges from simple extraction to surgical disimpaction. The complexity of the tooth is determined based on the position and angulation of the tooth in the jaw.</p>
        </div>
    </div>
</section>

<!-- service section ends -->

<!-- process section starts -->

    <section class="process">

        <h1 class="heading ">work process</h1>

        <div class="box-container container">
            
            <div class="box">
                <img src="images/process-1.png" alt="">
                <h3>Cosmetic dentistry</h3>
                <p>As the name goes it includes treatments to enhance the appearance of teeth and gums. Be it uneven gum margins, yellow teeth, chipped teeth, gap in front teeth we got you covered. A specialised in-house Esthetic Dentist will evaluate the issue and provide you the individualized treatment plan</p>
            </div>

            <div class="box">
                <img src="images/process-2.png" alt="">
                <h3>Braces and Teeth Aligners</h3>
                <p>Orthodontist is the answer when it comes to getting the crooked teeth aligned. Orthodontic treatment involves placement of braces to move your teeth in desired position. Treatment involves multiple visits generally spaced out at monthly intervals. </p>
            </div>

            <div class="box">
                <img src="images/process-3.png" alt="">
                <h3>dental implants</h3>
                <p>Dental implants are the closest restorative alternative to your natural teeth. As they mimic the tooth root supporting the crown just the way like your natural ones. Dental Implant placement is planned based on the CBCT scan which guides us to choose the right implant for you. </p>
            </div>
        </div>
    </section>

<!-- process section ends -->

<!-- reviews section starts -->

    <div class="section reviews" id="reviews">

        <div class="heading">satisfied clients</div>

        <div class="box-container container">

            <div class="box">
                <img src="images/pic-1.png" alt="">
                <p>My experience at dentalCare clinic was very nice, Dr Kanchan Jadhav explains the procedures along with the treatment properly and also takes proper precautions.</p>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <h3>Omkar Bane</h3>
                <span>satisfied client</span>
            </div>
            
            
            <div class="box">
                <img src="images/pic-3.png" alt="">
                <p>Dr. Sumit Prabhu and his team are very professional, capable, understanding and down to earth. They patiently listen to the problem and advise the treatment. Very transparent on the costs involved.</p>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <h3>Jayant Agrawal</h3>
                <span>satisfied client</span>
            </div>

            <div class="box">
                <img src="images/pic-2.png" alt="">
                <p>Best dental clinic for Root Canal Treatment. Experienced the best dental treatment in affordable cost. Clinic is clean, hygienic and well equipped with advanced technology equipment. Should visit DentalCare Clinic for your dental issue.</p>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <h3> Bhagyashree Patil</h3>
                <span>satisfied client</span>
            </div>
        </div>
    </div>

<!-- reviews section ends -->

<!-- contact section starts  -->

<section class="contact" id="contact">

    <h1 class="heading">make appointment</h1>
 
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
       <?php 
          if(isset($message)){
             foreach($message as $message){
                echo '<p class="message">'.$message.'</p>';
             }
          }
         
//    $name = $_POST ["name"];  
//    if (!preg_match ("/^[a-zA-z]*$/", $name) ) {  
//        $Errmsg = "Only alphabets and whitespace are allowed.";  
//                 echo $name;  
//    } else {  
//        echo $Errmsg;  
//    } 
       ?>

 <?php
    date_default_timezone_set('Asia/Kolkata');

    $Format = 'Y-m-d';

    $PD = 0;
    $PM = 0;
    $PY = 0;

    $PDT = date($Format, strtotime(" -$PD days -$PM months -$PY years"));

    $CDT = date($Format);

    // echo 'past date '.$PDT .'<p>'; 
    // echo 'current date '.$CDT .'<p>'; 
?>
       <span>your name :</span>
       <input type="name" name="name" placeholder="enter your name" class="box" required>
       <span>your email :</span>
       <input type="email" name="email" placeholder="enter your email" class="box" required>
       <span>your number :</span>
       <input type="number" name="number" placeholder="enter your number" class="box" required>
       <span>appointment date :</span>
       <!-- <input type="date" name="date" class="box" required> -->
       <input type="date" name="date" class="box" min="<?=$PDT;?>"  value="<?=$CDT;?>">
       <!-- <span>appointment time :</span>
       <input type="time" name="time" class="box" required> -->
       <span>Description :</span>
       <input type="des" name="des" placeholder="appointment for..." class="box" required>
       <!-- <textarea rows="4" cols="50" name="message" placeholder="appointment for...." class="box" required></textarea> -->
       <input type="submit" value="make appointment" name="submit" class="link-btn">
    </form>  
 
 </section>
 
 <!-- contact section ends -->

 <!-- footer section starts -->

 <section class="footer">

    <div class="box-container container">
 
       <div class="box">
          <i class="fas fa-phone"></i>
          <h3>phone number</h3>
          <p>+123-456-7890</p>
          <p>+111-222-3333</p>
       </div>
       
       <div class="box">
          <i class="fas fa-map-marker-alt"></i>
          <h3>our address</h3>
          <p>mumbai, india - 400104</p>
       </div>
 
       <div class="box">
          <i class="fas fa-clock"></i>
          <h3>opening hours</h3>
          <p>00:07am to 10:00pm</p>
       </div>
 
       <div class="box">
          <i class="fas fa-envelope"></i>
          <h3>email address</h3>
          <p>JadhavKanchan@gmail.com</p>
          <p>PrabhuSumit@gmail.com</p>
       </div>
 
    </div>
 
    <div class="credit"> &copy; copyright @ <?php echo date('Y'); ?> by <span>DentalCare</span>  </div>
 
 </section>
 
 

 <!-- footer section ends -->
 
<!-- custom js file link  -->
<script src="script.js"></script>

</body>
</html>