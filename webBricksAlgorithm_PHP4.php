<?php
function getCpt($o,$c,$p) {
// Table 1 from Algorithm
$Table1 = array(' '	=>	0,
				'a'	=>	1,
				'b'	=>	2,
				'c'	=>	3,
				'd'	=>	4,
				'e'	=>	5,
				'f'	=>	6,
				'g'	=>	7,
				'h'	=>	8,
				'i'	=>	9,
				'j'	=>	10,
				'k'	=>	11,
				'l'	=>	12,
				'm'	=>	13,
				'n'	=>	14,
				'o'	=>	15,
				'p'	=>	16,
				'q'	=>	17,
				'r'	=>	18,
				's'	=>	19,
				't'	=>	20,
				'u'	=>	21,
				'v'	=>	22,
				'w'	=>	23,
				'x'	=>	24,
				'y'	=>	25,
				'z'	=>	26,
				'0'	=>	27,
				'1'	=>	28,
				'2'	=>	29,
				'3'	=>	30,
				'4'	=>	31,
				'5'	=>	32,
				'6'	=>	33,
				'7'	=>	34,
				'8'	=>	35,
				'9'	=>	36,
				'!'	=>	37,
				'@'	=>	38,
				'%'	=>	39,
				'('	=>	40,
				')'	=>	41,
				'*'	=>	42,
				'+'	=>	43,
				','	=>	44,
				'-'	=>	45,
				'.'	=>	46,
				'@'	=>	47,
				';'	=>	48,
				'<'	=>	49,
				'='	=>	50,
				'>'	=>	51,
				'['	=>	53,
				']'	=>	54,
				'^'	=>	55,
				'_'	=>	56,
				'{'	=>	57,
				'|'	=>	58,
				'}'	=>	59,
				'~'	=>	60,);

/* Step 1 */

// to lower case
$p = strtolower($p);

// drop unused characters
$p = preg_replace("/[^ a-z0-9\!\$\%\(\)\*\+\,\-\.\@\\;\<\=\>\[\]\^\_\{\|\}\~]/",'',$p);

// append offer code
$p .= $o;

/* Step 2 */

// pad up to 20 characters
if (strlen($p)<20) {
	$p = str_pad($p,20,' couponness');//' udisglucoupondotcom'); // force $p to be 20 chars long at least
}

/* Step 3 */


// function to split string into an array (This function is built into PHP5, but Dreamfields has PHP4 installed)
// so, this creates the str_split function.
/*function splitStrArr($str) {
	$arChars = array();

	// We extract each character from the $str 'exploiting' the fact that 
	// strings behave like an array: watch the '$str[$i]' bit, and begin to fill up the blank array $arChars
    for ($i = 0; $i < strlen($str); $i++) { 
	  $arChars[] = $str[$i];
	}
	
	return $arChars;
}*/
if(!function_exists('str_split')){
   function str_split($string,$split_length=1){
       $count = strlen($string);  
       if($split_length < 1){
           return false;  
       } elseif($split_length > $count){
           return array($string);
       } else {
           $num = (int)ceil($count/$split_length);  
           $ret = array();  
           for($i=0;$i<$num;$i++){  
               $ret[] = substr($string,$i*$split_length,$split_length);  
           }  
           return $ret;
       }      
   }  
}


// convert into array of numbers
$Array1 = str_split($p); // split into array

foreach ($Array1 as $idx => $char) {
	$Array1[$idx] = $Table1[$char]; // replace char
}

/* Step 4 */

// use short key repeated to make second array
$sk = SHORT_KEY;
$sk = str_pad($sk,strlen($p),SHORT_KEY);
$skArray = str_split($sk); // split into array

foreach ($skArray as $idx => $char) {
	$skArray[$idx] = $Table1[$char]; // replace char using Table 1
}

/* Step 5 */

// double $skArray
$Array2 = array();
foreach ($skArray as $idx=>$num) {
	$Array2[$idx] = $num*2;
}

/* Step 6 */
$Array3 = array();

// split offer code
if (strlen($o)>4) {
	// ignore first char for 5-digit offer code
	$oSplit = str_split(substr($o,-4),2);
} else {
	$oSplit = str_split($o,2);
}

// alternate 2 splits from offer code - start with 2nd
for($i=0; $i<strlen($p); $i++) {
	if ($i%2==0) {
		$Array3[$i] = $oSplit[1];
	} else {
		$Array3[$i] = $oSplit[0];
	}
}

/* Step 7-8 */

// sum all 3 arrays
$sumArray = array();

for ($i=0; $i<strlen($p); $i++) {
	$sumArray[$i] = $Array1[$i]+$Array2[$i]+$Array3[$i];
	// Step 8: Add the values of all cells to the left
	if ($i>0) $sumArray[$i] += $sumArray[$i-1];
}

/* Step 9 */

// take modulo 61 of each cell
foreach ($sumArray as $idx => $num) {
	$sumArray[$idx] = $num%61;
}

/* Step 10 */

// convert sum array back to string using long cipher key
$lk = LONG_KEY;
$lkArray = str_split($lk);

$cpt = '';
foreach ($sumArray as $num) {
	$cpt .= $lkArray[$num];
}

/*echo $cpt;
print_r($sumArray);


print_r($Array1);
print_r($skArray);
print_r($Array2);
print_r($Array3);*/
return $cpt;
}
?>