    <div class="content-home vollkorn">
      <div class="title center cinzel">
        <br>
        <h1>The Characters of Relic</h1>
      </div> <!--title-->
        <br> 
        <br>


        <div class="characters">

         <figure class="char-item">
          <a href="structure.php?title=creator">
            <img src="images/question.jpg" alt="Create a Character">
          </a>
          <figcaption class="display">
          <a href="structure.php?title=creator">
            <p>Create a Character</p>
          </a>
          </figcaption>
        </figure>

         <?php
          $query = "SELECT id, name, pic FROM characters ORDER BY name DESC";
          $result = mysqli_query($connection, $query);

          if (!$result) {
            die("Database query failed.");
          }

          while($row = mysqli_fetch_assoc($result)){
            $name = $row['name'];
            $pic = $row['pic'];

          ?>

        <figure class="char-item">
          <a href="structure.php?title=character&id=<?php echo $row['id']; ?>">
             <?php if($row['pic'] === "Picture URL"){
              $pic = "images/question.jpg";}
              else {
                $pic = $row['pic'];
                } //if no pic is selected?>
            <img src="<?php echo $pic;?>" alt="<?php echo $row['name'];?>">
          </a>
          <figcaption class="display">
          <a href="structure.php?title=character&id=<?php echo $row['id']; ?>">
            <p><?php echo $row['name'];?></p>
          </a>
          </figcaption>
        </figure>

        <?php } ?>
        </div><!--characters-->

    </div><!--content vollkorn-->