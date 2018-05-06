<?php
    $servername = "localhost";
    $username = "root";
    $password = "rootpass";
    
    mysql_connect($servername,$username, $password);//連結伺服器
    mysql_select_db("iloveav");//選擇資料庫
    mysql_query("set names utf8");//以utf8讀取資料，讓資料可以讀取中文
?>
<html>
    <head>
    </head>

    <body>
        <?php

        $age=0;
        $double=1.1;
        $nickname="peter";

        if (isset($_POST["name"]) && isset($_POST["gender"]))
        {

            $name=$_POST["name"];
            $gender=$_POST["gender"];



            print $name." ".$gender;

            $sql = "INSERT INTO actor (name, gender) VALUES ('$name', '$gender')";
            mysql_query($sql);
        }

        $sql = "select * from actor";
        $result = mysql_query($sql);
        while($row = mysql_fetch_array($result))
        {
            print $row["id"]." ".$row["name"]." ".$row["gender"]."<br/>";  

        }


        ?>
    </body>
</html>