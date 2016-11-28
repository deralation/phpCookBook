<?php  

$name = "deralation";

print substr($name,0,8)."<br>";

print substr("watch out for that tree",17)."<br>";
print substr("watch out for that tree",20,5)."<br>";
print substr("watch out for that tree",-6)."<br>";
print substr("watch out for that tree",-17,5)."<br>";
print substr("watch out for that tree",15,-2)."<br>";
print substr("watch out for that tree",-4,-2)."<br>";

$old_string = "watch out for that tree";
$new_substring = "My pet is a blue dog.";
$start = 12;	

$new_string = substr_replace($old_string,$new_substring,$start);

print $new_string;

print substr_replace("My pet is a blue dog.","fish.",12)."<br>";

print substr_replace("My pet is a blue dog.","green",12,4);

$credit_card = '4111 1111 1111 1111';

print substr_replace($credit_card, 'xxxx', 0,strlen($credit_card)-4);

print substr_replace("My pet is a blue dog.", "Title: ", 0,0);

/*$r = mysql_query("SELECT id,message FROM messages WHERE id = $id") or die();

$ob = mysql_fetch_object($r);

printf('<a href="more-text.php?id=%id">%s</a>',$ob->id, substr_replace($ob->message, '...', 25));*/

print "\n";

$string = "This weekend, I am going to shopping for a pet chicken";
$vowels = 0;

for ($i=0, $j = strlen($string); $i< $j; $i++) { 
	if(strstr('aeiouAEIOU', $string[$i])){
		print $j;
		print $string;
		print $vowels;
		$vowels++;
	}
}


function lookandsay($s){
	// initialize the return value to the empty string
	$r = '';
	// $m holds the character we r counting, initialize to the first character in the string
	$m = $s[0];

}



?>