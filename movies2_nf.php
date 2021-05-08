<?php 
include("connection.php");
 ?>

<!DOCTYPE html>
<html>
<head>
  <title>
    
  </title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- google fonts -->
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500&display=swap" rel="stylesheet">
  
   <!-- font awaesome links-->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
     <!-- bootstrap cdn css link -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

  <!-- user defined css file for styling -->
  <link rel="stylesheet" type="text/css" href="style.css">
  
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>



</head>

<!-- ========================== Internal Css for my Contact us page ======================================== -->
<style type="text/css">

hr{
  background-color: #E2BFBF;
}
.cont-us{
  background: url(./img/BG.jpg);
  background-size: cover;
  background-repeat: no-repeat;
  
}
.about-us-conatct-us{
  margin-top: 70px;

}
.about-contact-us-card {
  float: left;
  width: 50%;
  padding: 0 10px;
  padding-bottom: 35px;
}

.actual-about-contact-us-card {
 background-color:#f2f2f2;
 box-shadow: 5px 2px 5px 5px white!important;
 border-radius: 10px;
 padding: 16px;
 text-align: justify-all;
   
}
.actual-about-contact-us-card #aboutText{
   color: #000000;
}

.actual-about-contact-us-card #ContactText{
   color: #000000;
}
.about-us-conatct-us #upperText{
  font-size: 30px; 
  text-align: center; 
  padding-top: 20px; 
  padding-bottom: 10px;
}

.actual-about-contact-us-card span{
  color: #000000;
}

.actual-about-contact-us-card  #bottomText{
  color: #000000;
  text-align: right;
}
/* Media Query to make Responsive about-contact-us-cards */
@media screen and (max-width: 1000px) {
  .about-contact-us-card {
    width: 100%;
    display: block;
    margin-bottom: 20px;
  }
}
</style>
<!-- ======================= End of internal Css for Contact us section ============================ -->


<body>

  
  
  <!-- ==================================== Navigation Section ======================================== -->
<div class="wrapper">
     <div class="header">
    <div class="container">
      <nav class="navbar navbar-expand-md">
        <a class="navbar-brand" href="#"><img src="./img/ownlogo.jpg"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
          <span class="navbar-toggler-icon">
              <i class="fa fa-bars" id="humbergertop"></i>
          </span>
        </button>
        <div class="collapse navbar-collapse" id="collapsibleNavbar">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link" href="#home" style="opacity: 1;">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#about">About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#movies">Movies</a>
            </li>
             <li class="nav-item">
              <a class="nav-link" href="#contact">Contact</a>
            </li> 
             <li class="nav-item">
              <a class="nav-link" href="register.html">Register</a>
            </li>    
                   
          </ul>
        </div>  
      </nav>
    </div>
   </div>


<?php
$connect = mysqli_connect("localhost", "root", "", "movies");  
 function fill_brand($connect)  
 {  
      $output = '';  
      $sql = "SELECT DISTINCT genre FROM movie_table";  
      $result = mysqli_query($connect, $sql);  
      while($row = mysqli_fetch_array($result))  
      {  
           $output .= '<option value="'.$row["genre"].'">'.$row["genre"].'</option>';  
      }  
      return $output;  
 }
  function Language($connect)  
 {  
      $output = '';  
      $sql = "SELECT DISTINCT m_lang FROM movie_table";  
      $result = mysqli_query($connect, $sql);  
      while($row = mysqli_fetch_array($result))  
      {  
           $output .= '<option value="'.$row["m_lang"].'">'.$row["m_lang"].'</option>';  
      }  
      return $output;  
 } 

 
 ?>

 <section>
<script>
  
</script>
 <script>  
 $(document).ready(function(){  
      $('#brand').change(function(){  
           var genre = $(this).val();  
           $.ajax({  
                url:"load_data.php",  
                method:"POST",  
                data:{genre:genre},  
                success:function(data){  
                     $('#show_movies').html(data);  
                }  
           });  
      });
      $('#lang').change(function(){  
           var lang = $(this).val();  
           $.ajax({  
                url:"load_data.php",  
                method:"POST",  
                data:{lang:lang},  
                success:function(data){  
                     $('#show_movies').html(data);  
                }  
           });  
      });  
 });   
 </script>  
    
    <div style="background-color: #999999; color: #fff; height: 200px">
  <h1>Filter BY</h1>
   
  <label for="Sort">Genre:</label>
   <select name="brand" id="brand">  
                          <option value="">Show All Movies</option>  
                          <?php echo fill_brand($connect); ?>  
                     </select>

                     </select>
   <label for="Sort">Language:</label>
   <select name="lang" id="lang">  
                          <option value="">Show All Movies</option>  
                          <?php echo Language($connect); ?>  
                     </select>   
                     <h1>Sort By:</h1>
  <form method="POST" action="#"> 
    <input type="submit" name="all" value="all" style="border-radius: 10px; background: #4d79ff; color: #fff"> 
    <input type="submit" name="r_date" value="Freshness" style="border-radius: 10px; background: #4d79ff; color: #fff">
    <input type="submit" name="length" value="length" style="border-radius: 10px; background: #4d79ff; color: #fff"> 
                 
  </form> 

  <?php 
        if (isset($_POST['r_date'])) {
          $q = "SELECT * FROM `movie_table` ORDER BY m_rel_date desc"; // display recent data first
        }
        else if (isset($_POST['length'])){
          $q = "SELECT * FROM `movie_table` ORDER BY m_length desc";
        }else{
          $q = "SELECT * FROM `movie_table`"; //display all data 
        
        }
      
    ?> 
</div> 

             
 </section>
   



 <!--------- Movies Section begins, displaying Them as grid  ------------>
    <div class="info"><h1 style="text-align: center; font-family: 'Montserrat'">LATEST MOVIES TO WATCH</h1></div>
    <section id="show_movies" class="boxes">
      <?PHP
      if(isset($_GET['page'])){

   $page = $_GET['page'];
 
}
else
{
  $page = 1;
}
$num_of_pages = 05;
$start_from = ($page-1)*05;
$result = mysqli_query($conn,$q);
$count = mysqli_num_rows($result);
$per_page = 5;
$no_of_page = ceil($count/$per_page);
$start = ($page-1)*$per_page;
$sql = " $q LIMIT $start,$per_page"; 

$res = mysqli_query($conn, $sql);
/*$query = "SELECT * FROM movie_table LIMIT $start_from,num_of_ges";*/

    if(mysqli_num_rows($res)){


     /*$Movies_details = mysqli_query($conn,"SELECT * FROM movie_table");*/ 
     while($row=mysqli_fetch_array($res)){
        $id = $row['m_id'];
        $name = $row['m_name'];
        $length = $row['m_length'];
        $lang = $row['m_lang'];
        $QA = $row['m_quality'];
        $size = $row['m_size'];
        $format = $row['format'];
        $Genre = $row['genre'];
        $reldate = $row['m_rel_date'];
        $image = $row['m_image'];
    
   ?>

      <div class="box">
        <img src="<?php echo $image;?>" style="width: 100%; height: ">
        <p>
          <ul style="list-style-type: none; margin: 0; overflow: hidden">
            <li>
             <h3>name:</h3><?php echo $name ?>
            </li>

            <li>
              <h3>Length:</h3><?php echo $length ?>
            </li>

            <li>
              <h3>Language:</h3><?php echo $lang ?>
            </li>

            <li>
              <h3>Qaulity:</h3><?php echo $QA ?>
            </li>

            <li>
              <h3>Size:</h3><?php echo $size ?>
            </li>

            <li>
              <h3>format:</h3><?php echo $format ?>
            </li>

            <li>
              <h3>Genre:</h3><?php echo $Genre ?>
            </li>

            <li>
              <h3>realease data:</h3><?php echo $reldate ?>
            </li>

          </ul>
        </p>
        <a href="watch.html" class="btn btn-movies">Watch Now</a>
      </div>
      
     <?php 
     }
      ?>
      <div>
        <ul>
        <?php 
        for($i=1;$i<=$no_of_page;$i++)
        {
         ?>
          <li><a href="movies2_nf.php?page=<?php echo $i;?>"><h1 style="text-decoration: none"><button style="border-radius: 10px; padding: 10px 10px; background:#ac39ac; color: #fff">PG<?php echo $i;?></button></h1></a></li>

        <?php } ?> 

        </ul>
      </div>
     <?php }else
          header("Location: movies2_nf.php?page=1");{ ?>
    <?php } ?>  
      
    </section>
    <!-- ============================== End of Movies Section ============================================ -->


    
    

<!-- ================================ start of Contact US secton =============================== -->

  <section id="contact" class="cont-us"> 
    <div class="container about-us-conatct-us" id="about-us-conatct-us">
     <div class="row">
      <div class="about-contact-us-card">
          <div class="actual-about-contact-us-card">
           <center> <h3>About Us</h3></center><hr>
            <p><b>Baban G Ghadi </b>,</p>
            <p id="aboutText">A final year student completing my Bacholers degree in Computer science Engineering. Also founder and developer movies nigth website. Also developed Maand.in website with the use of wordpress, Maand.in is shopping website which gives a platform to Goan people to sell thier home made items like masalas, sweet on traditional occasions.</p>
            <p id="aboutText">If you have any problem in accessing our services or you want to give any suggestions fell free to give us your feedback. We will take the necessary actions within 24 hours.
            </p><hr>
            <p id="bottomText"> Best Regards</p>
            <p id="bottomText">CEO <b> Baban Ghadi</b></p>
          </div>
        </div>

        <div class="about-contact-us-card">
          <div class="actual-about-contact-us-card">
           <center> <h3>Contact Us</h3></center><hr>
            <p><b>We from Movies Nigth Would Like to tell you that,</b></p>
            <p id="ContactText" >Below are the contact details through which you can contact us to send us all your doubts and suggestions so that we can take we can improve the efficiency of our services. Your Feedback will be highly appreciated</p>
            <p> <b>Email</b> :<span>feedbackmovie@gmail.com</span></p>
            <p><b>Mobile No:</b> <span >8007850410</span> </p>
            <p><b>Tel No </b>:<span > 0987-4657678 </span> </p><hr>
            <p id="bottomText"> Best Regards</p>
            <p id="bottomText">Team <b> Movies Night </b></p>

          </div>
        </div>
     </div>
  </div>
  </section>
  <!-- ================================================ end of contact us =================================== -->
 
    <!-- Footer -->
    <footer>
      <p>copyright issued by BabanGhadi@1998 in 2021 #Stay Home Stay Safe</p>
    </footer>

  </div>
  <!-- Wrapper Ends -->
</body>
<!-- bootstrap cdn js links -->

</html>
