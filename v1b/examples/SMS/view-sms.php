<?php
// First we must import the actual Message360 library
require_once '../../library/message360.php';
// Now what we need to do is instantiate the library and set the required options defined above
$Message360 = Message360::getInstance();
// Message360 REST API credentials are required
$Message360 -> setOptions(array( 
    'account_sid'       => 'XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX', 
    'auth_token'        => 'XXXXXXXXXXXXXXXXXXXXXXXXXXXXX',
    'response_to_array' =>true,
));

try 
{    
    // Fetch View SMS
    $viewSMS = $Message360->get('sms','viewsms',array('SMXXXXXXXX-XXXX-XXXX-XXXX-XXXXXXXXXXXX'));
    // Print content of the $viewSMS objects
    print_r($viewSMS->getResponse());
} 
catch (Message360_Exception $e) 
{
  echo "Error occured: " . $e->getMessage() . "\n";
}
?>
