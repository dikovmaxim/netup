# netUP
A PHP-based web engine for small websites.
The best feature of my engine is a complete url abstraction.
It means user will not see file paths and extentions, what means your
website is more secure.

Release 0.0.2 r3
Scurity module added. Users can not access filetree and folders anymore. They will be automaticly redirected to homepage.

How to make a new style:
For examle you want to make an other style for your website based on netUP.
We would not recommend you to delete a standart style folder. We would suggest you to
copy It, rename it and make all changes. <br>To apply changes - you have to edit 
config.php and change style parameter to name of your ew style folder.
example:
config.php
...
$style = "[name of your new style folder here.]";
...

You can disable header or footer by changing "true" to "false" in config.php
example:
config.php

...
$header = "flase";  < In this case, header is disabled
$footer = "true";   < and footer is enabled
...

pages.php
Original:

<?php
$pages = [
    "Credits" => "credits.php",
    "Features" => "features.php",
    "About" => "about.php",
    "Home" => "home.php",
];
?>

To add a new page:
1) Drag this page into /pages folder
WARNING! there is no need to add header and footer manually. They will be automaticly added.
You just have to make a body of your page. To edit header/footer - open /objects/(header/footer).php
2) Add to pages.php file "YourPageName" => "yourpagefilename.php",
pages.php file should look like this:
<?php
$pages = [
    "Credits" => "credits.php",
    "Features" => "features.php",
    "About" => "about.php",
    "Home" => "home.php",
    "YourPageName" => "yourpagefilename.php",
];
?>

A link to a new page will be automaticly added to a navigation menu!

If you have any questions - please contact me:
Facebook - https://www.facebook.com/maxim.dikov.12935 			E-Mail - dikvmax04@gmail.com 		Languages: German, English and Russian
