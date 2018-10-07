Hello and welcome to the Template for adding a MAC Address to your UniFi Controller.

I made this for those who do not know php or just dont want to do the work, and just want a complete template to work off of. 
It took me a while to figure out how to compile all the proper php files and how to make everything work. 
So to save you some heartache, I've made this for the community.

**For this site to work, your webhost must have PHP installed. The host we are using is a wamp server, but a lamp should also work fine**

**If you already copied everything over and tried to test the site, you'll see that if you hit submit, the next page will look broken. Its not, you 
just have to enter the proper info in the config.php file, talked about below**


Please feel free to modify whatever you see fit. 

The CSS is linked to the styles.css file (except for the links.html page)

The index.php file is the homepage, all you should need to do it modify the text and style it to your buisness or univeristy.

The same goes for the success.php file, which is the next page when clicking submit. However this page will have to be edited
for the php variables:

on line 99 the $duration variable is the amount of time in minutes each mac will be authorized. We did a year.

on line 104 this is the site id you can find this by going to your UniFi controller website and from the dashboard page your
url should look something like this:  https://10.0.0.0:8443/manage/site/default/dashboard where "default" will show your site id

on this page that is it, but also be sure to plug in your proper credentials in the config.php There is where all your UniFi
info will go

Images are stored for all sites in the Image Folder

I hope this helps some of you!


