<?php   
        
        $servername = "sql302.infinityfree.com";
        $username = "if0_38002705";
        $password = "eVC0n3iVVh";
        $dbname = "if0_38002705_happy";
        $port = 3306;
        $sslCert = "./isgrootx1.pem";
        
        $conn = new mysqli($servername, $username, $password, $dbname);
       
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }
        
        $conn->set_charset("utf8");

?>