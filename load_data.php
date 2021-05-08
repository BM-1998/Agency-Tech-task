<?php  
 //load_data.php  
 $connect = mysqli_connect("localhost", "root", "", "movies");  
 $output = '';  
  if(isset($_POST["lang"]))
 {  
      if($_POST["lang"] != '')  
      {  
           $sql = "SELECT * FROM movie_table WHERE m_lang = '".$_POST["lang"]."'";  
      }  
      else  
      {  
           $sql = "SELECT * FROM movie_table";  
      }
      
      $result = mysqli_query($connect,$sql);  
      while($row = mysqli_fetch_array($result)){
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
   }
  

  if(isset($_POST["genre"]))
 {  
      if($_POST["genre"] != '')  
      {  
           $sql = "SELECT * FROM movie_table WHERE genre = '".$_POST["genre"]."'";  
      }  
      else  
      {  
           $sql = "SELECT * FROM movie_table";  
      }  
      $result = mysqli_query($connect, $sql);  
      while($row = mysqli_fetch_array($result)){
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
  }
?>



