<?php

/**
 * Database config variables
 * Change this according to your server settings
 */

class Constants
{
	// Definitely your Database Host name
	const DB_HOST = "localhost";

	// change the user access, CPanel have user roles, when writing and reading files
	// set it to allow the certain User to read/write
	const DB_USER = "menmwen_menmwen";

	// change this according to your account credentials
	const DB_PASSWORD = "Melissa@@1";

	// if you wish you create your own name for 
	// Database then change the word "db_itemfinder"
	const DB_DATABASE = "menmwen_app";

	// If deployed in a web server, change this according to your configuration
	// For Example. the domain name is www.someUrl.com, then if the php files are stored in
	// a folder named as "responsive" then the complete url would be
	// www.someUrl.com/responsive/
	const ROOT_URL = "http://carimod.com/app/";

	// DO NOT CHANGE THIS
	// FOLDER DIRECTORY FOR IMAGES UPLOADED FROM
	// THE DESKTOP
	const IMAGE_UPLOAD_DIR = "upload_pic";

	// THIS KEY MUST MATCH TO YOUR IOS/Android key in Config.h/Config.java
	const API_KEY = "8d29430ba38327d91303a935520e7b95";

	const NO_OF_ITEMS_PER_PAGE = 20;
}


?>