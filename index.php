<html>
<head>
    <title>Your Business Device Registration</title>
    <link rel="icon" href="/images/logo.png">
    <link rel="stylesheet" href="styles.css">
</head>

<body>
    <div>
        <img src="images\white.png" id="fclogo">
    </div>
    <br>
        <div id="title">Wireless - Gaming and Streaming Device Registration</div>

        <div id="macadd">Please enter the MAC Address of your wireless device below. If you do not know the MAC Address of your device, please <a href="links.html">Click Here</a> to find out what it is.<br/><br/>
    If you are trying to register a <b>wired</b> device, visit <a href="https://google.com">that registration page</a> instead.</div>
    <br> 
    

    <div id ="form" >
        <form method="POST" action="success.php">
            <input placeholder="MAC Address"class="field" type="text" name="input_value" maxlength="17" pattern="^([0-9A-Fa-f]{2}[:.-]?){5}([0-9A-Fa-f]{2})$" title="MAC Address must follow this format 0A:A0:00:A0:00:AA">
            <input id="button"type="submit" name="submit" value="Register">
        </form>
    </div>

    <div>
        <?php
        session_start();

        if (isset($_POST['submit']))
        {
        // Execute this code if the submit button is pressed.
        $submit_mac = $_POST['input_value'];//will pull the value from the textbox
        } else {
        $submit_mac = ""; // on page load will set the mac to null
        }
        ?>
    </div>
</body>
</html>

