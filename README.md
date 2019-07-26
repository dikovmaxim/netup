# netUP
<p>A PHP-based web engine for small websites.
The best feature of my engine is a complete url abstraction.
It means user will not see file paths and extentions, what means your
website is more secure.</p>

<p>Release 0.0.2 r3
Scurity module added. Users can not access filetree and folders anymore. They will be automaticly redirected to homepage.</p>
<hr>
<p>How to make a new style:
For examle you want to make an other style for your website based on netUP.
We would not recommend you to delete a standart <br>style folder. We would suggest you to
copy It, rename it and make all changes. <br>To apply changes - you have to edit 
config.php and change style <br>parameter to name of your ew style folder.
example:</p>
<b>config.php</b><br>
...<br>
$style = "[name of your new style folder here.]";<br>
...<br>
<br>
You can disable header or footer by changing "true" to "false" in config.php<br>
example:<br>
<b>config.php</b><br>
<br>
...<br>
$header = "flase";  < In this case, header is disabled<br>
$footer = "true";   < and footer is enabled<br>
...<br>
<p>
<b>pages.php</b><br>
Original:<br>
<br>
<?php<br>
$pages = [<br>
    "Credits" => "credits.php",<br>
    "Features" => "features.php",<br>
    "About" => "about.php",<br>
    "Home" => "home.php",<br>
];<br>
?><br>
</p><br>
<hr>
<p>To add a new page:<br>
1) Drag this page into /pages folder<br>
WARNING! there is no need to add header and footer manually. They will be automaticly added.<br>
You just have to make a body of your page. To edit header/footer - open /objects/(header/footer).php<br>
2) Add to pages.php file "YourPageName" => "yourpagefilename.php",<br>
<b>pages.php</b><br> file should look like this:</p><br>
<p><?php<br>
$pages = [<br>
    "Credits" => "credits.php",<br>
    "Features" => "features.php",<br>
    "About" => "about.php",<br>
    "Home" => "home.php",<br>
    "YourPageName" => "yourpagefilename.php",<br>
];<br>
?><br>
</p>
<p>A link to a new page will be automaticly added to a navigation menu!</p>
<hr>
<p>If you have any questions - please contact me:
Facebook - https://www.facebook.com/maxim.dikov.12935 			E-Mail - dikvmax04@gmail.com 		Languages: German, English and Russian</p>
