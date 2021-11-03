# DonovanChat
A simple PHP chat system. No databases or other complex stuff, just chatting.
## Configuration
Edit the `auth.php` file to meet your needs. Here's the default file and what everything means...
```<?php 
$realcode = '$3t@g00dp@$Sw0Rd!'; 
$chatname = 'Donovan Chat'; 
$chatreload = '10'; 
$minmsg = "10"; 
$maxmsg = "100"; 
$maxsize = "100000000"; 
$weburl = "http://localhost";
?>```

`$realcode` - Set this to the chat code you want. In order for someone to access the chat, they need this special access code.
`$chatname` - This will appear as a header above the chat, really doesn't affect the code.
`$chatreload` - Updates in the chat will be checked every x seconds. Don't leave it too high (it will make things delayed) or too low (it might rate limit your server).
`$minmsg` - The minimum length of every message.
`$maxmsg` - The maximum length of every message.
`$maxsize` - The maximum size of the chat.txt file. After the chat.txt file hits this size, older messages will be cleared and replaced with newer messages.
`$weburl` - The URL that Donovan Chat is being hosted on. If this is being locally ran on XAMPP, leave it as-is. If you have a domain, replace it with that. If you have SSL on your site, replace http:// with https://.
