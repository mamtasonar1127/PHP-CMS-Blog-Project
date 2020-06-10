<?php

   $conn=new MySQLi("us-cdbr-iron-east-01.cleardb.net","b794f66015c511","19936af4","heroku_abf85657748f742");


    if ($conn){
        echo "connected";
    }
    else
    {
    echo "error";
    }






?>