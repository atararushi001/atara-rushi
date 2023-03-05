<?php
if(isset($_POST['enter'])){
   echo "<h1>".$_POST['name'].':'."</h1>".'<br>';
   echo "hobbies :";
    foreach($_POST['hobbies'] as $value){
        echo $value.'<br/>';
    }

}
?>