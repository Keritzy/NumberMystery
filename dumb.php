#!/usr/bin/php

<?php

# Coded by Steven
# What is life.
# Knowledge is power and all I have is nothing

error_reporting(E_ALL);
print "\n\t  Steven was here ";                


sleep(1);

print "By Steven\nQ8 Guess the number\nUsage : php {$argv[0]}\n";
	print "\n\n\n[1] Numbers\n[2] Convert Hex With any numericals \n[3] Bypass Word\n";

$Nm   = array("1","2","3");
$what = trim(fgets(STDIN));
if(!is_numeric($what)){ die("\t\n Choice Number in The Choices Only \n");}
if(in_array($what, $Nm)){
switch($what){
case "1";
print	"\t    Input  Numper  : ";
	$a = trim(fgets(STDIN, 1024));
print ("\t =========> ".Numer_S($a)."\n");
break;
case "2";
print	"\t    Input  Numper To Convert Hex With word:  ";
	$b = trim(fgets(STDIN, 1024));
print ("\t =========> ".Numer_Hex($b)."\n");
break;
case "3";
print   "\t    Input  Word : ";
	$c = trim(fgets(STDIN, 1024));
print ("\t =========> ".strtoupper__($c)."\n");
break;
}}
if(!in_array($what, $Nm)){
print "\t\nErorr : Select Number in The Choices\n";}

function Numer_S($n){
	if(!is_numeric($n))  die("\t Plz Input Numper\n");
	$un = "";
		for ($i = 1; $i <=  $n; $i++)
			$un .= $i.",";
		return substr ($un, 0, -1);
	}
function Numer_Hex($N){
	if(!is_numeric($N))  die("\t Plz Input Numper\n");
	$z = "";
        for ($x = 1; $x <=  $N; $x++) 	
	    $z.= ("0x".bin2hex("Q8".$x).",");
        $e = substr($z, 0, -1);
        return $e;
    }
function strtoupper__($string){
	if(is_numeric($string)) die ("\tPlz Input Word\n");
	    return "/*!".strtoupper($string)."*/";
    }

?>
