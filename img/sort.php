<?php  
 //load_data.php  
 $connect = mysqli_connect("localhost", "root", "", "movies");  
 $output = '';  
  if(isset($_POST["rel"]))
 {  
      if($_POST["rel"] != '')  
      {  
           $sql = "SELECT * FROM movie_table ORDER BY  m_rel_date desc";  
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
              <?php echo $name ?>
            </li>

            <li>
              <?php echo $length ?>
            </li>

            <li>
              <?php echo $lang ?>
            </li>

            <li>
              <?php echo $QA ?>
            </li>

            <li>
              <?php echo $size ?>
            </li>

            <li>
              <?php echo $format ?>
            </li>

            <li>
              <?php echo $Genre ?>
            </li>

            <li>
              <?php echo $reldate ?>
            </li>

          </ul>
        </p>
        <a href="watch.html" class="btn btn-movies">Watch Now</a>
      </div>
      <?php 
      } 
      ?>

      <?php
      }
       ?>