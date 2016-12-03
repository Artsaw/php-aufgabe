<pre>
<?php
    for($i=1; $i<=200; $i++){
        if($i % 2 == 0){
            echo $i." Zwei\r\n";
            if($i % 7 == 0){
                echo $i." ZweiSieben\r\n";
            }
        }else if($i % 7 == 0){
            echo $i." Sieben\r\n";
        }else{
            echo $i."\r\n";
        }
    }
?>
</pre>