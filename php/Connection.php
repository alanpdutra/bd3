<?php
class Connection {

    static function DBConnect(){
    	$conn = pg_connect("host=localhost dbname=futebol user=postgres") or die('Não Conectou' . pg_last_error());
    	return $conn;
   	}

   	function query($sql){
   		$result = pg_query($sql);
   		return $result;	
   	}

  


}
