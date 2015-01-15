<?php
$con = mysql_connect("localhost","root","");
mysql_select_db("words",$con);
$string = "کلمه 1,کلمه 2,کلمه 3,کلمه 4,کلمه 5";
mysql_query("create table ajax_words(id INT auto_increment not null primary key,word varchar(255))")
or die(mysql_error());
//set utf 8 for table
mysql_query("ALTER TABLE ajax_words
DEFAULT CHARACTER SET utf8
COLLATE utf8_general_ci;")
or die(mysql_error());
$words = explode(",",$string);
for($no=0;$no<count($words);$no++){
	mysql_query("insert into ajax_words(word)values('".$words[$no]."')") 
	or die(mysql_error());
}
?>