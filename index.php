<html>
<head>
    <title>promp-o-matic</title>
</head>
<body>

<h2>random prompts!</h2>
<br />
<b>character: </b>
<?php
    $f_contents = file("list1.txt"); 
    $line = $f_contents[rand(0, count($f_contents) - 1)];
    print_r($line);
?>
<br />
<b>setting: </b>
<?php
    $f_contents2 = file("list2.txt"); 
    $line2 = $f_contents2[rand(0, count($f_contents2) - 1)];
    print_r($line2);
?>
<br />
<b>resolution: </b>
<?php
    $f_contents3 = file("list3.txt"); 
    $line3 = $f_contents3[rand(0, count($f_contents3) - 1)];
    print_r($line3);
?>
<br /><br />
<button onClick="window.location.href=window.location.href">roll again</button>
<br /><br />
<!--
<h3>debug</h3> (will remove later)
<br />
list1.txt: 
<?php 
    print_r($f_contents);
?>
<br />
list2.txt:
<?php
    print_r($f_contents2);
?>
<br />
list3.txt:
<?php
    print_r($f_contents3);
?>

<br /><br />
todo: 
<br />
[*] improve seeding (some vars get 'stuck' on reload)
<br />
[ ] styling?
<br />
[ ] upload system allowing on-the-fly list updating
-->
</body>
</head>
