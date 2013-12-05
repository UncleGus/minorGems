<?php

// Basic settings
// You must set these for the server to work


$databaseServer = "localhost";
$databaseUsername = "testUser";
$databasePassword = "testPassword";
$databaseName = "test";

$serverRootURL = "http://localhost";
$fullServerURL = "http://localhost/jcr13/steamGate/server.php";

// The URL of the ticket server's server.php script.
// This is used to validate ticket IDs.
$ticketServerURL = "http://localhost/jcr13/ticketServer/server.php";

// users are prompted to email this address for help
$helpEmail = "jasonrohrer@fastmail.fm";


// key to prove our publisher identity to Steam API
// this key must be kept secret.
$steamWebAPIKey = "REPLACE_ME";


// the app ID that we check ownership for
// example ID is for The Castle Doctrine
$steamAppID = "249570";




// End Basic settings



// Customization settings

// Adjust these to change the way the server  works.
$steamButtonURL = "https://steamcommunity.com/public/images/signinthroughsteam/sits_large_border.png";


$steamLoginURL = "https://steamcommunity.com/openid/login";


// Prefix to use in table names (in case more than one application is using
// the same database).  Three tables are created:  "log", "tickets", and
// "downloads".
//
// If $tableNamePrefix is "test_" then the tables will be named
// "test_log" and "test_tickets" and "test_downloads".
//
// Thus, more than one server installation can use the same database
// (or the server can share a database with another application that uses
//  similar table names).
$tableNamePrefix = "steamGate_";


$enableLog = 1;


// should web-based admin require yubikey two-factor authentication?
$enableYubikey = 1;

// 12-character Yubikey IDs, one list for each access password
// each list is a set of ids separated by :
// (there can be more than one Yubikey ID associated with each password)
$yubikeyIDs = array( "ccccccbjlfbi:ccccccbjnhjc:ccccccbjnhjn", "ccccccbjlfbi" );

// used for verifying response that comes back from yubico
// Note that these are working values, but because they are in a public
// repository, they are not secret and should be replaced with your own
// values (go here:  https://upgrade.yubico.com/getapikey/ )
$yubicoClientID = "9943";
$yubicoSecretKey = "rcGgz0rca1gqqsa/GDMwXFAHjWw=";


// For hashing admin passwords so that they don't appear in the clear
// in this file.
// You can change this to your own string so that password hashes in
// this file differ from hashes of the same passwords used elsewhere.
$passwordHashingPepper = "262f43f043031282c645d0eb352df723a3ddc88f";

// passwords are given as hashes below, computed by:
// hmac_sha1( $passwordHashingPepper, $password )
// Where $passwordHashingPepper is used as the hmac key.

// For convenience, after setting a $passwordHashingPepper and chosing a
// password, hashes can be generated by invoking passwordHashUtility.php
// in your browser.

// default passwords that have been included as hashes below are:
// "secret" and "secret2"

// hashes of passwords for for web-based admin access
$accessPasswords = array( "0d322c185021e42cccba40fa34ba1dd2f92a2509",
                          "15ec5e229d96c9d21b40aba716bd66275fc89b9a" );



// in admin list view
$recordsPerPage = 50;




?>