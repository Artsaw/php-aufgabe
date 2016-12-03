<?php

    $sm = "+1"; 
    $time = strtotime("now".$sm." hour"); 
    $new_time = date('H:i:s', $time);
    $date = date('y.m.d', $time);
    
    function connect_db(){
        $server = 'localhost';
        $user = 'username';
        $pass = 'password';
        $db = 'database';
        
        $connection = mysql_connect($server, $user, $pass);
        
        if(!$connection || !mysql_select_db($db)){
          return false;
        }
        else{
          return true;
        }
    }
    
    function res_to_array($query){
        $arr = array();
        $count = 0;
        
        while($row = mysql_fetch_array($query)){
           $arr[$count] = $row;
           $count++;
        }
        return $arr;
      }
    
    function get_info(){
        
        connect_db();
        mysql_query("SET MANES utf8");
        
        $query = mysql_query("SELECT * FROM termine ORDER BY id DESC");
        $result = res_to_array($query);
        return $result;
    }
    
    function add_info($time, $date, $info){
        connect_db();
        mysql_query("INSERT INTO termine (zeit, datum, info) VALUES ('$time', '$date', '$info')");
      }
    
    function delete_row($id){
        connect_db();
        
        mysql_query("DELETE FROM termine WHERE id = '$id'");
        mysql_close();
    }

?>