<?php
     $mysqli = new mysqli("localhost","root","password","datadiri");
     if ($mysqli -> connect_errno){
      echo "Failed to connect to MysSQL: ". $mysqli -> connect_error;
      exit();

}
    