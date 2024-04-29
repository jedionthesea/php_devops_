<?php
    require "config.php";

    function dbConnect(){
        $mysqli = new mysqli(SERVER, USERNAME, PASSWORD, DATABASE);
        if($mysqli->connect_errno != 0){
            return FALSE;
        } else {
            return $mysqli;
        }
    }

    function getMegyek(){
        $mysqli = dbConnect();
        $result = $mysqli->query("SELECT DISTINCT megye FROM megyek");
        while($row = $result->fetch_assoc()){
            $megyek[] = $row;
        }

        return $megyek;
    }