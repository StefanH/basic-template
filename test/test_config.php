<?
//configure test database
define('DB_NAME', "test");
define('DB_USER', "test");
define('DB_PASSWORD', "test");

// fill this in for non-root websites
// not required for model testing
define('LANDING_PAGE', "/sample/index");
define('URL_BASE', "/~stefan/basic-template"); 

// some initialization
require('framework/boot.php');
Framework::$log = STDOUT;
error_reporting(E_ALL);
//ensure assertions work
assert_options(ASSERT_BAIL, 1);

// include test files here
// to test the framework, uncomment:
require 'framework/test/framework_test.php';