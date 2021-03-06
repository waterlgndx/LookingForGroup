<?php

// Replace with your actual admin email (yeah just put your email here)
$GLOBALS['ACTUAL_ADMIN'] = "youremailhere@localhost";
// default PDO Attributes
$GLOBALS['PDO_ATTRIBS'] = array(PDO::ATTR_CURSOR=> PDO::CURSOR_FWDONLY);
//Database hostname
$GLOBALS['DB_HOSTNAME']='localhost';
// DB_USER_BASE - the base name for all of your database users
// Leave this empty '' if there's no naming convention.
// Most hosts use hostusername_database
$GLOBALS['DB_USER_BASE'] = '';
// DB_USERNAME - username for this database
$GLOBALS['DB_USERNAME'] = 'db_username';
// DB_PASSWORD - Password for the database.
$GLOBALS['DB_PASSWORD'] = 'db_password';
// DB_SEL_NAME - Name of the database
$GLOBALS['DB_SEL_NAME'] = 'database';
/* DB_FULLUSER - Full database name (shouldn't change this unless your provider uses a different username scheme).
 * and
 * DB_NAME - Data Base Name, you should not change this unless you have a different naming convention.
 */
if (empty($GLOBALS['DB_USER_BASE'])) {
	$GLOBALS['DB_FULLUSER'] = $GLOBALS['DB_USERNAME'];
	$GLOBALS['DB_NAME'] = $GLOBALS['DB_SEL_NAME'];
} else {
	$GLOBALS['DB_FULLUSER'] = $GLOBALS['DB_USER_BASE'] . "_" . $GLOBALS['DB_USERNAME'];
	$GLOBALS['DB_NAME'] = $GLOBALS['DB_USER_BASE'] . "_" . $GLOBALS['DB_SEL_NAME'];
}
// BUG_MAIL_NAME - bug email name
$GLOBALS['BUG_MAIL_NAME'] = 'BugTracker Local Host';
// CONFIRMATION VALUE - The value that appears in the database when an email is confirmed
$GLOBALS['CONFIRMED']='00000000000000000000';
// SKIP_EMAIL_CONFIRMATION - skip the email confirmation process.
$GLOBALS['SKIP_EMAIL_CONFIRMATION'] = true;
// BUG_EMAIL - where bug emails should be sent from
$GLOBALS['BUG_EMAIL'] = 'bugs@localhost';
// CSS page
$GLOBALS['CSS'] = 'groups.css';
// AUTO_ADMIN_NAME - The Name that should show when automatic emails are generated
$GLOBALS['AUTO_ADMIN_NAME'] = 'AutoAdmin LocalHost Site';
// AUTO_ADMIN_EMAIL - The automatically generated emails from admin
$GLOBALS['AUTO_ADMIN_EMAIL'] = 'no-reply@localhost';
//FQP - Fully Qualified Path
//Warning: This should not end with a / and it should start with http://
$GLOBALS['FQP'] = 'http://localhost:8101/LookingForGroup';


 ?>
