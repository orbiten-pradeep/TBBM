<?php

	  // $DBhost = "127.0.0.1";
	  // $DBuser = "thebigbeachmarat";
	  // $DBpass = "root@12";
	  // $DBname = "thebigbeachmarathon";

	 $DBhost = "localhost";
	 $DBuser = "root";
	 $DBpass = "Password99";
	 $DBname = "thebigbeachmarathon";
	 
	 $DBcon = new MySQLi($DBhost,$DBuser,$DBpass,$DBname);
    
     if ($DBcon->connect_errno) {
         die("ERROR : -> ".$DBcon->connect_error);
     }
