<?php

print"<table border=1>";
   foreach ($_POST as $key=>$val )
      {
        echo "<tr><td>".$key."</td><td>" .$val."</tr>";
       }
   print"</table>";
?>
<a href="index.html">Home</a>
