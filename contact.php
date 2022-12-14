<?php 
if(isset($_POST['submit'])){
    $to = "sampart09@gmail.com"; // this is your Email address
    $from = $_POST['Email']; // this is the sender's Email address
    $Name = $_POST['Name'];
    $Number = $_POST['Number'];
    $Time_frame = $_POST['Timeframe'];
    $Duration = $_POST['Duration'];
    $Location = $_POST['Location'];
    $Synopsis = $_POST['Synopsis'];
    $subject = "Enquiry";
    $subject2 = "Copy of your Enquiry";
    $message = $first_name . " wrote the following:" . "\n\n" . $_POST['Number'. "\n\n" . 'Timeframe'. "\n\n" .  'Duration'. "\n\n" . 'Location'. "\n\n" . 'Synopsis'.];
    $message2 = "Here is a copy of your message " . $first_name . "\n\n" . $_POST['Number'. "\n\n" . 'Timeframe'. "\n\n" .  'Duration'. "\n\n" . 'Location'. "\n\n" . 'Synopsis'.];

    $headers = "From:" . $from;
    $headers2 = "From:" . $to;
    mail($to,$subject,$message,$headers);
    mail($from,$subject2,$message2,$headers2); // sends a copy of the message to the sender
    header('Location: thankyou.html');
?>

<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Williams Media</title>
  <link rel="icon" href="favicon.ico">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/4.6.1/css/bootstrap.min.css"
    integrity="sha512-T584yQ/tdRR5QwOpfvDfVQUidzfgc2339Lc8uBDtcp/wYu80d7jwBgAxbyMh0a9YM9F8N3tdErpFI8iaGx6x5g=="
    crossorigin="anonymous" referrerpolicy="no-referrer">
  <!-- JQuery -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <!-- Bootstrap JS -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/4.6.1/js/bootstrap.min.js"
    integrity="sha512-UR25UO94eTnCVwjbXozyeVd6ZqpaAE9naiEUBK/A+QDbfSTQFhPGj5lOR6d8tsgbBk84Ggb5A3EkjsOgPRPcKA=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <!-- font awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
    integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />

  <link rel="stylesheet" href="style.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link
    href="https://fonts.googleapis.com/css2?family=Changa+One&family=Montserrat:wght@900&family=Neuton:wght@800&family=Ubuntu:wght@700&display=swap"
    rel="stylesheet">

</head>

<body>

  <!-- Nav bar-->
  <header class="primary-header">
    <div class="container">
        <div class="nav-wrapper">
            <h1 class="titletext">WILLIAMS MEDIA</h1>
            <nav class="primary-navigation" id="primary-navigation">
                <ul aria-label="Primary" role="list" class="nav-list | navtextmain">
                    <li><a class="navtext" href="index.html">HOME</a></li>
                    <li><a class="navtext" href="vg.html">VIDEOGRAPHY</a></li>
                    <li><a class="navtext" href="smm.html">SOCIAL MEDIA MANAGEMENT</a></li>
                </ul>
                <ul aria-label="Primary" role="list" class="nav-list | navicons">
                    <li><a class="navlink" href="https://www.instagram.com/williamsmedia_"><i
                                class="fa-brands fa-instagram fa-2x"></i></a></li>
                    <li><a class="navlink" href="contact.php"><button class="smmmaxbtn"
                                type="button">CONTACT</button></a></li>
                </ul>
            </nav>
            <button class="hamburger">
                <div class="bar"></div>
            </button>
        </div>
    </div>
</header>

<nav class="mobile-nav">
    <a href="index.html">HOME</a>
    <a href="vg.html">VIDEOGRAPHY</a>
    <a href="smm.html">SOCIAL MEDIA MANAGEMENT</a>
    <div class="navlk">
        <a href="https://www.instagram.com/williamsmedia_"><i class="fa-brands fa-instagram fa-2x"></i></a>
        <a href="#"><i class="fa-brands fa-facebook fa-2x"></i></a>
    </div>
    <a href="contact.php"><button class="slidenavbtn" type="button">CONTACT</button></a>
</nav>

    <!-- Contact Me -->

    <section id="contactme">
        <div class="cntlogo">
            <img class="contactlogo" src="https://drive.google.com/uc?id=1sRJqN4ObyeTzjA-JNgSLANjap2N242Fo" alt="">
            <br>
            <h1 class="cnttext">LETS CREATE SOMETHING!</h1>
            <a href=""><i class="cnt-icon fa-solid fa-envelope fa-2x"></i></a>


            <a href="https://www.instagram.com/williamsmedia_"><i class="cnt-icon fa-brands fa-instagram fa-2x"></i></a>


            <a href=""><i class="cnt-icon fa-brands fa-facebook fa-2x"></i></a>

            <a href=""><i class="cnt-icon fa-brands fa-linkedin fa-2x"></i></a>
            <br>
            <br>
            <br>
        </div>
        <div class="cntform">
            <form method="POST" action="contactform.php" >

                <!-- Honeypot-->

                <input type="text" name="_honey" style="display: none;">

                <!-- Disable Captcha-->
                
                <input type="hidden" name="_captcha" value="false">

                <!-- Email Template -->

                <input type="hidden" name="_template" value="box">

                <input type="hidden" name="_next" value="https://williamsmedia.uk/thankyou.html">

                <div class="s1and2">
                <div class="selector1"><h3 class="formtext">Full name or Company *</h3><input type="text" name="Name" placeholder="Full Name/ Company" id="enquirybox" required><br><br> </div>
                <div class="selector2"><h3 class="formtext">Email *</h3><input type="email" name="Email" placeholder="Your Email Address" id="enquirybox" required><br><br> </div>
                </div>
                <div class="s1and2">
                <div class="selector1"><h3 class="formtext">Contact Number *</h3><input type="numeric" name="Number" placeholder="Your Mobile Number" id="enquirybox" required><br><br> </div>
                <div class="selector2"><h3 class="formtext">Time Frame *</h3><input type="numeric" name="Timeframe" placeholder="Your Time Frame" id="enquirybox" required><br><br> </div>
                </div>
                <div class="selector"><h3 class="formtext">Price Range *</h3>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="Price&nbsp;Range" id="flexRadioDefault1" value="??100&nbsp;or&nbsp;Below">
                    <label class="form-check-label" for="flexRadioDefault1">
                      ??100 or Below
                    </label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="Price&nbsp;Range" id="flexRadioDefault2" value="??100-??300">
                    <label class="form-check-label" >
                      ??100 - ??300
                    </label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="Price&nbsp;Range" id="flexRadioDefault3" value="??300-??500">
                    <label class="form-check-label" for="flexRadioDefault1">
                      ??300 - ??500
                    </label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="Price&nbsp;Range" id="flexRadioDefault4" value="??500-??700">
                    <label class="form-check-label" for="flexRadioDefault2">
                      ??500 - ??700
                    </label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="Price&nbsp;Range" id="flexRadioDefault5" value="??700+">
                    <label class="form-check-label" for="flexRadioDefault1">
                      ??700 +
                    </label>
                    <br><br>
                  </div>
                </div>
                <div class="s1and2">  
                <div class="selector1"><h3 class="formtext">Estimated Duration *</h3><input type="text" name="Duration" placeholder="Minutes" id="enquirybox"  required><br><br></div>
                <div class="selector2"><h3 class="formtext">Location *</h3><input type="numeric" name="Location" placeholder="Location" id="enquirybox" required><br><br> </div>
                </div>
                <div class="selector7"><h3 class="formtext">Brief synopsis of the shoot and its aims *</h3><textarea type="email" name="Synopsis" placeholder="Brief Synopsis and Aims" id="textbox" required></textarea><br><br> </div>
                <div><button class="smmmax" type="submit" value="Submit" name="submit">SUBMIT</button>
                    </div>
                    
            </form>
        </div>
    </section>




    <!-- Footer -->

    <footer id="footer">
      <div class="footertext">
          <h1 class="ftheading">CONTACT</h1>
          <br>
          <h3 class="footeremail">info@max.com</h3>
      </div>
      <div class="footsocial">
          <h1 class="ftheading">FOLLOW</h1>


          <a href="" onclick="sendEmail();"><i class="social-icon fa-solid fa-envelope fa-2x"></i></a>


          <a href="https://www.instagram.com/williamsmedia_"><i
                  class="social-icon fa-brands fa-instagram fa-2x"></i></a>




      </div>
  </footer>
  <script>
    function sendEmail() 
    {
      window.location = "mailto:";
    }
    </script>
</body>
<script type="module" src="/main.js"></script>
</html>