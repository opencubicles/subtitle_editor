# Mep Home Page

This project uses the Captioning library(https://github.com/captioning/captioning
There is a bug however.  If the start or end times of the Subrip files have just 2 digits instead of 3
an error reads "Invalid Subrip File"

Example:

~~~

31
00:02:20,990 --> 00:02:23,990
yeah

32
00:02:25,580 --> 00:02:30,26
~~~

In subtitle 32 you can see that the end time is ",26"  this will cause an error.

It instead needs to read: ",260"


To fix this, you need to modify the regex in /vendor/captioning/captioning/src/Captioning/Format/SubripFile.php
to be valid even if there are just two difits