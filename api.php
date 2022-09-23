<?php
 
 $json = file_get_contents("https://api.mil-frases.com/api/v1/publicPosts/getRandomQuote?lang=pt");

 $data = json_decode($json);

  

?>