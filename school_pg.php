<?php
require_once ("DbConn.php");
session_start();
?>
<!DOCTYPE html>
<html>
<head>
<script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="schoolpg_style.css">
<style>

</style>

</head>
<body onload='myFunction()'>
<h2><img src="school_logo.png" style="height: 80px; width: 80px;">ABCD Matriculation Higher Secondary School</h2>

<div class="tab" style="overflow: hidden;" id="navbar">
  <button class="tablinks" style="margin-left: 25px;" onclick="openCity(event, 'AboutUs')">About Us</button>
  <button class="tablinks" onclick="openCity(event, 'Academics')">Academics</button>
  <button class="tablinks" onclick="openCity(event, 'Vision')">Vision & Mission</button>
  <button class="login" style="float: right;" onclick="showPopup()">Login</button>
</div>
<div class="container">
<div class="blocker" onclick="hidePopup()" style="position: absolute;"></div>
<div class="contact_form" id="form" style="display: none;" >
  <img src="https://f1.pngfuel.com/png/13/136/63/hair-style-woman-female-girl-avatar-person-video-face-png-clip-art.png" alt="" class="avatar">
  <form id="login" method="post">
    <p>user name:</p>
      <input type="text" id="Username" placeholder="Enter username" name="Username"><br><br>
      <p>password:</p>
      <div class="form_input">
        <input type="password" id="Password" name="Password" placeholder="Enter password" autocomplete="off" >
        <span class="icon" onclick="myFunction()">
          <i id="hide1" class="fa fa-eye"></i>
          <i id="hide2" class="fa fa-eye-slash"></i>
        </span>
      </div>
      <input type="submit" value="Sign in">
  </form>
</div>
</div>


<div id="AboutUs" class="tabcontent">
  <div class="slideshow-container">

<div class="mySlides fade">
  <img src="img1.jpg" style="width:100%;height: 20%;">
</div>

<div class="mySlides fade" >
  <img src="img4.jpg" style="width:100%;height: 20%;">
</div>

<div class="mySlides fade" style="height: 75%;">
  <img src="img3.jpg" style="width:100%;height: 20%;">
</div>

<a class="prev" onclick="plusSlides(-1)">&#10094;</a>
<a class="next" onclick="plusSlides(1)">&#10095;</a>

</div>
<br>

<div style="text-align:center">
  <span class="dot" onclick="currentSlide(1)"></span> 
  <span class="dot" onclick="currentSlide(2)"></span> 
  <span class="dot" onclick="currentSlide(3)"></span> 
</div>
<script>
var slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  if (n > slides.length) {slideIndex = 1}    
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";  
  }
  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
}
</script>
<h2 class="header">HISTORY OF THE SCHOOL</h2>
<p>ABCD Matriculation Higher Secondary school, Chennai-125 was started in the year 2005 with 12 students headed by Ms.Sridevi as principal and enlarged its growth to around 5000 students.</p>
<h2 class="header">ABOUT  MANAGEMENT</h2>
<p>ABCD Matriculation Higher Secondary School, established in 2005 is a leading independent school in Chennai, that offers a range of national and international curricula, to meet the educational needs of students in the 21st century. Set in a serene and green campus that is spread over 22 acres, the school is located away from the Central Business District in Chennai, and has an enrolment of 5000 students from different countries.</p>
<h2 class="header">EXPLANATION OF LOGO</h2>
<p style="margin-left: 30%;">Let all that is dark within me burst into flame,<br>&emsp;&emsp;&ensp;and the veil of error be torn away???.<br>&emsp;&emsp;&emsp;&emsp;-Rabindranath Tagore</p>
<p>The candle, a symbol of light, with its gentle glow spreading lustre and warmth all around, symbolized St.Ann???s Educational institutions, which have been imparting knowledge to enrich their lives and spread the glow of knowledge all around.

The three hearts, one merging with the other symbolize the material intellectual and spiritual aspects of life and represent the values we impart to our student???s education for livelihood, for learning, their ethical and moral enrichment.

They also represent the complexity of human body mind and spirit. As heart signifies life, it is humble effort to radiate knowledge, and prepare our students for life.

It aims at the development of each student and focuses on a comprehensive and balanced education. It strives to inculcate ethical and moral values in the students and encourages them to become integrated and wholesome individuals, capable of handling their careers and lives effectively.</p>
</div>

<div id="Academics" class="tabcontent">
  <img style="margin-left: 25%; margin-bottom: 35px;margin-top: 15px;" src="school.jpg">
  <h2 class="header">SYLLABUS AND STANDARD:</h2>
  <p>The school follows samacheer syllabus prescribed by the Government of Tamil nadu from classes Pre.kg to 12th standard . The medium followed in school is English</p>
  <h2 class="header">TEACHING METHODOLOGY:</h2>
  <p>The school uses Edu smart classes to educate the students to inculcate good knowledge on the syllabus taught.</p>
  <h2 class="header">SCHOOL UNIFORMS:</h2>
  <p><strong>Boys:</strong>&ensp;White shirt and blue shorts, black socks, black shoes.</p>
  <p><strong>Note:</strong>&ensp;A vest and brief should always be worn under the uniform</p>
  <p><strong>Girls:</strong>&ensp;White short and blue pinafore, black shoes, black socks and black ribbon.</p>
  <p><strong>Note:</strong>&ensp;Girls must wear bloomers and undergarments.</p>
  <h3 style="margin-left: 25px;">WEDNESDAY UNIFORM:</h3>
  <p><strong>Boys:</strong>&ensp; white short and house color t-shirt.</p>
  <p><strong>Girls: </strong>&ensp;white box pleated skirt & white color shirt, white canvas and white socks, white ribbon.</p>
  <h2 class="header">SCHOOL TIMING</h2>
  <p><strong>Monday to Friday:</strong>  8.45 am to 3.45 pm.</p>
  <p><strong>Saturday:</strong> 8.45 am to 12.15 pm.</p>
  <h2 class="header">RULES AND REGULATION:</h2>
  <h3 style="margin-left: 25px;">Academic year:</h3>
  <p>The school year begins in June and ends in April.</p>
  <h3 style="margin-left: 25px;">Discipline:</h3>
  <ul style="margin-left: 25px;font-size: 20px;margin-right: 35px;">
    <li>Refinement of manners, habits of obedience and order neatness in person and dress and punctuality are required at all times.</li>
    <li>Student shall be responsible for the safe custody of their belonging as a precautionary measure, it is suggested that they have their names inscribed on articles like Tiffin carriers, school bag, shoes, pencilbox and any other articles.</li>
    <li>It is not advisable for the student to wear valuable ornaments to bring other valuable articles to school. The school will not be responsible for the loss of such articles of students.</li>
    <li>Any damage caused to the property of the school is punishable according to the nature of the offence. Lost and found articles should be deposited in the office.</li>
  </ul>
  <h2 class="header">ATTENDANCE& LEAVE PROCESS:</h2>
  <ul style="margin-left: 25px;font-size: 20px;margin-right: 35px;">
    <li>No pupil should be absent from class without reason and prior permission.</li>
    <li>Half-a- day leave will not be granted to students. once they come to school, they have to attend the whole day, unless requested by the parents in case of emergency.</li>
    <li>Regular attendance is insisted upon. A pupil who is absent from class will not be admitted unless a leave notice is produced from the parent stating the reasons for absence.</li>
    <li>In case of serious illness that requires absence for more than 4 days, the Principal must be informed in writing and the doctor???s certificate must be produced by the parent. The Principal can grant only 15 days and another 15 days can???t be had through the production of medical certificate. Absence for more than 30 days in an academic year will make the student ineligible for promotion.</li>
    <li>Pupil???s who do not get 80 % attendance for the year are to go be detained or he advised to leave the school.</li>
    <li>Reason for the absence must be clearly stated in the ???record??? the diary.</li>

  </ul>

</div>
<div id="Vision" class="tabcontent">
  <h2 class="header" style="margin-top: 35px;">Vision of the EDUCATION:</h2>
  <p style="margin-right: 45px;">To produce vibrant generation for translating  challenges into opportunities through transformative education and to develop this institution as an academy of learning where the integrated formation of students is imparted, enabling them to build an equitable society based on Freedom, Love and Equality.</p>
  <h2 class="header">Mission of the school:</h2>
  <p style="margin-right: 45px;">To impart value-based education, install confidence to face the future with inflexible determination and sheer hard work and to prepare students for work and life, equipping them to be life-long learners and contributing to the ethical,spiritual,technological, economic and social development of india</p>
</div>

<div id="Login" class="tabcontent">
  <p>Hi this helps you to log out</p>
</div>
<script>
window.onscroll = function() {MyFunction()};

var navbar = document.getElementById("navbar");
var sticky = navbar.offsetTop;

function MyFunction() {
  if (window.pageYOffset >= sticky) {
    navbar.classList.add("sticky")
  } else {
    navbar.classList.remove("sticky");
  }
}
</script>
<script>
  function openCity(evt, tabPage) {
  var i, tabcontent, tablinks;
  tabcontent = document.getElementsByClassName("tabcontent");
  for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("tablinks");
  for (i = 0; i < tablinks.length; i++) {
    tablinks[i].className = tablinks[i].className.replace(" active", "");
  }
  document.getElementById(tabPage).style.display = "block";   
}
</script>

<script >
  function myFunction(){
    openCity(event, 'AboutUs');
    var p = document.getElementById("Password");
    var q = document.getElementById("hide1");
    var r = document.getElementById("hide2");

    if(p.type === 'password'){
      p.type = "text";
      q.style.display = "block";
      r.style.display = "none";
    }
    else{
      p.type = "password";
      q.style.display = "none";
      r.style.display = "block";
    }
  }
</script>
<script>
const popup = document.querySelector('.container');
function showPopup() {
  popup.classList.add('open');
  document.getElementById("form").style.display = "block";
}
function hidePopup() {
  popup.classList.remove('open');
  document.getElementById("form").style.display = "none";
}
</script>

<?php
if($_POST){
  $Username=$_POST["Username"];
  $Password=$_POST["Password"];
  $selectQuery  = "SELECT * FROM login";
  $result = mysqli_query($con,$selectQuery);
  $row= mysqli_fetch_array($result);
  $_SESSION["S_no"] = $row['S_no'];
  echo $row['S_no'];
    if(isset($_SESSION["S_no"])){
      if($Username == "ABCD school" and $Password == "abcd@123"){
        echo "<script>window.location.href='schoolPg.php';</script>";
      }
      else{
        echo "<script>alert('Login failed...');</script>";
      }
    }
}
?>


</body>
</html>

