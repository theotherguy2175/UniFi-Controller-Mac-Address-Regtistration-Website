<html>
<head>
    <title>Your Business Device Registration</title>
    <link rel="icon" href="/images/logo.png">
    <link rel="stylesheet" href="styles.css">
    <style>
    body{
        font-size: 1.5em;
    }
    p{
        font-size:1em;
    }
    b{
    color:orange;
    font-size:1.5em;
    }
    #phone{
        font-size:1.2em;
    }
    @media only screen and (max-width: 1000px) {
    body {
        font-size:1.7em; 
        padding: 70px 0;
        text-align: center;      
    }
    input{
        margin-bottom:10px;
        padding: 6%;
        width: 100%;
        box-sizing:border-box;
        }
    }
    @media only screen and (max-width: 535px) {
    body {
        font-size:1.7em; 
        padding: 70px 0;
        text-align: center;      
    }
    div{
        width:95%;
        
    }
    #fclogo{
        width:80%;
    }
    #title{
        font-size:1.5em;
    }
    input{
        margin-bottom:10px;
        padding: 6%;
        width: 100%;
        box-sizing:border-box;
        }
    #info{
        font-size:150%;
    }
    }
    </style>
</head>

<body>
<?php
$submit_mac = $_REQUEST['input_value']; //pulls the textbox value from previous page and sets it to var submit_mac

$mac_array = array(".","-"," ",":"); //makes an array of . - and space, that can be used to remove to make a proper mac with only :

        
$string = $submit_mac; //sets the string var, to the mac from the text box
$cleaned_mac = implode(":", str_split(str_replace($mac_array, "", $string), 2));//coverts the mac to have : every 2 characters
    
/**
 * PHP API usage example
 *
 * contributed by: Art of WiFi
 * description: example basic PHP script to perform a basic auth of a guest device
 */

/**
 * using the composer autoloader
 */
require_once('vendor/autoload.php');

/**
 * include the config file (place your credentials etc. there if not already present)
 * see the config.template.php file for an example
 */
require_once('config.php');
require_once('src/Client.php');

/**
 * the MAC address of the device to authorize
 */
$mac = $cleaned_mac;//makes the cleaned proper mac address set to var mac

/**
 * the duration to authorize the device for in minutes
 */
$duration = 525600;

/**
 * The site to authorize the device with
 */
$site_id = 'default';

/**
 * initialize the UniFi API connection class and log in to the controller
 */
$unifi_connection = new UniFi_API\Client($controlleruser, $controllerpassword, $controllerurl, $site_id, $controllerversion);
$set_debug_mode   = $unifi_connection->set_debug($debug);
$loginresults     = $unifi_connection->login();

/**
 * then we authorize the device for the requested duration
 */
$auth_result = $unifi_connection->authorize_guest($mac, $duration);

/**
 * provide feedback in json format
 */
?>
<div>
<img src="images\white.png" id="fclogo">
<p>Your MAC Address</p> 
            <?php
                
                echo "<div id=\"info\">$mac</div>";
            ?>
        <p>has sucessfully been registered!</p>
       
<p>You now should be able to access the Wi-Fi network <br><br><b>"Gaming and Streaming"</b></p>


<p id='issues'>If you have any issues connecting or any other questions, please call ITS at <br><br><b id="phone">(317) 867-5309</b><br><br> or submit a ticket at <br><br><a href="https://service.yourbuisness.edu">service.yourbuisness.edu</a>
</div>
</body>
</html>