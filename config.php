<?php
//=================================================//
// MAIN CONFIGURATION, EDIT AS YOU PLEASE DIM WHIT //
//=================================================//

// Database Configuration
$config['host'] = 'localhost'; // MySQL/MariaDB Server Hostname/IP
$config['user'] = 'root'; // MySQL/MariaDB Username
$config['pass'] = ''; // MySQL/MariaDB Username Password
$config['name'] = 'cad'; // MySQL/MariaDB Database  Name

// General Configuration
$config['sslenabled'] = 1; // Do you have HTTPS/SSL enabled for your domain? 1 = yes, enabled | 2 = no, disabled
$config['systemtitle'] = 'Los Santos Life MDT/CAD'; // Title of the MDT/CAD System
$config['systemurl'] = 'http://domain.com'; // Main URL for the system, without the forward slash. HTTPS is better!
$config['systempath'] = '/home/username/public_html/cad'; // Main system path for the system, without the forward slash
$config['fivem_host'] = 'localhost'; // The hostname/ip for your FiveM Server
$config['fivem_port'] = '30125'; // The Port for your FiveM Server
$config['fivem_slots'] = '32'; // The max slots for your FiveM Server

$config['genlink1']['title'] = 'Title 1';
$config['genlink1']['url'] = 'http://domain.com';
$config['genlink2']['title'] = 'Title 2';
$config['genlink2']['url'] = 'http://domain.com';
$config['genlink3']['title'] = 'Title 3';
$config['genlink3']['url'] = 'http://domain.com';
$config['genlink4']['title'] = 'Title 4';
$config['genlink4']['url'] = 'http://domain.com';

//=============================================================================//
// DO NOT EDIT BELOW THIS LINE, UNLESS YOU ARE STUPID AND LIKE BREAKING THINGS //
//=============================================================================//

// Enable/Disable PHP Warnings (Mostly needed for debugging the script)
ini_set("display_errors", 0); // 1 = Enabled | 0 = Disabled

// Usergroup IDs
$config['banned'] = '0';
$config['police'] = '2';
$config['civ'] = '1';

// MySQL/MariaDB Database Connection
$link = new mysqli($config['host'], $config['user'], $config['pass'], $config['name']);
if ($link->connect_error) {
    die("Connection failed: " . $link->connect_error);
}

// Getting rid of the pesky Undefined index notices
if(!isset($_GET['message'])){
      $_GET['message'] = ''; 
}
if(!isset($_GET['page'])){
      $_GET['page'] = ''; 
}

// Redirect to HTTPS because HTTP sucks!
if($config['sslenabled'] == 1){
	if(!isset($_SERVER["HTTPS"]) || $_SERVER["HTTPS"] != "on") {
		header("Location: https://" . $_SERVER["HTTP_HOST"] . $_SERVER["REQUEST_URI"], true, 301);
		exit;
	}
}
