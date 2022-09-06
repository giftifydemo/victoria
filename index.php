    <?php
  $api_url = "https://v2.jokeapi.dev/joke/Any";
  $joke = json_decode(file_get_contents($api_url));
?>


<?php echo $joke->category;?>

      <?php if($joke->type=='single'){?>
        <span><?php echo $joke->joke;?></span>
      <?php } else{ ?>
        <span><?php echo $joke->setup;?></span>
        <hr>
        <span><?php echo $joke->delivery;?></span>
      <?php } ?>