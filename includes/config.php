<?php

/* 
 * 2 Ways to bring external scripts into existingL
 *  1- INCLUDE
 * 2- REQUIRE
 * 
 * 
 * Note: There is also an INCLUDE_PNCE and REQUIRE_ONCE
 * 
 * Differences between each are :
 * 
 * Failure to include a file results in a warning and the script continues...
 * 
 * Failure to require a file results in a fatal error and the scirpt is halted
 * 
 * Typically INCLUDE files like HTML header, footer, sidebar, etc
 * 
 * Typically REQUIRE files hat are critical to the sites functionality
 * like datbase connections, configuration files, etc
 */


//Retrieve the database info (outside of root folder)
$root = dirname($_SERVER['DOCUMENT_ROOT']).'/dbconn';
//echo $root;//Gives me the root of the folder that im working from C:/xampp/dbconn

//Create (another) a constant to represent the final db connection file location 
define('MYSQL',$root.'/2017_pdo_connect.php');
//giving the final path from where I am working
//C:/xampp/dbconn/2017_pdo_connect.php
//var_dump(MYSQL);
