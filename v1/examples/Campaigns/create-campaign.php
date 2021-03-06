<?php
# First we must import the actual Message360 library
require_once '../../library/message360.php';

# Now what we need to do is instantiate the library and set the required options defined above
$Message360 = Message360::getInstance();

# Message360 REST API credentials are required
$Message360 -> setOptions(array( 
    'account_sid'       => 'xxx', 
   'auth_token'        => 'xxx',   
    'response_to_array' =>true,
));
try 
{    
     # Fetch createCampaign
   $createCampaign = $Message360->create('Campaign','createCampaign', array(
              'FriendlyName'   => '',
              'StatusCallback'  => '',
              'StatusMethod'  => '',
              'HeartbeatUrl'  => '',
              'HeartbeatMethod'  => '',
              'CahceUrls'  => '',
          ));
    # Print content of the listcampaign objects
    print_r($createCampaign->getResponse());
}
catch (Message360_Exception $e) 
{
    echo "Error occured: " . $e->getMessage() . "\n";
}
?>





