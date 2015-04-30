 <?php

/*
  Yangdizhu.com
  2012 All rights reserved.

  db_conn.php
  DB connector

  Author: Xiaoli, Ma
  03/10/2013

  */

            //Variables for connecting to your database.
            //These variable values come from your hosting account.
            $hostname = "stage0db.db.10279122.hostedresource.com";
            $username = "stage0db";
            $dbname = "stage0db";

            //These variable values need to be changed by you before deploying
            $password = "wW9@36JHf7UzKs";
            
        
            //Connecting to your database
            mysql_connect($hostname, $username, $password) OR DIE ("Unable to 
            connect to database! Please try again later.");
            mysql_select_db($dbname);

         
?>