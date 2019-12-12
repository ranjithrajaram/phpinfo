<ul>
 <?php
   foreach($_SERVER as $h=>$v)
     if(ereg('HTTP_(.+)',$h,$hp))
       echo "<li>$h = $v</li>\n";
   header('Content-type: text/html');
  ?>
</ul>
