<?php
/*
echo "Hello world\n";
echo bam(2,3);
function bam($a,$b) {
	return $a + $b."\n";
};

for ($i=0; $i < 20; $i++) { 
	echo "\nnumeravimas ".$i;
	};

for ($i=20; $i > 0; $i--) { 
	echo "\nnumeravimas ".$i;
	};

for ($i=5; $i > 0; $i-= 0.5) { 
	echo "\nnumeravimas ".$i;
	};


for ($i=5; $i > -5; $i-= 0.5) { 
	echo "\nnumeravimas ".$i;
	};

$iter = 0;

for ($i=5; $i > -5; $i-= 0.5) { 
	echo "\nnumeravimas ".$i;
	for ($a=5; $a > 5; $a--) { 
		$iter++;
	};
	};

echo $iter;

function suma($a,$b){
	$get = ($a * 1.5)*(1 + $b/100);
	echo $get;
}

function plotas($a,$b,$c){
	$get = $a*$b*$c;
	echo $get;
}


function bim($c,$b) {
for ($i=0; $i < $c; $i++) { 
	
	for ($a=0; $a < $b; $a++) { 
		echo "#";
	}
	echo "\n";
}
}*/

/*
function bim($a,$b,$c) {
	$diam = $a * 2.54;
	$pad = $b /10;
	$result = ($diam + (2 * $pad))*10;
	echo $result."\n";
	
echo ($result > $c) ? "Netinka" : "Tinka"; 
}



function counts($a,$b,$c){
	if ($c == true){
		for ($i=$a; $i < $b ; $i++) { 
		echo $i."\n";
	} 
	} else if ($c == false) {
		for ($i=$b; $i > $a ; $i--) { 
		echo $i."\n";
	}
	
}
}



function lentele($a){
	$taip = [];
	for ($i=0; $i <= 10; $i++) { 
		
		array_push($taip, $a * $i);
	}
	print_r($taip);
}


function get_taip(){
	for ($i=0; $i <= 9; $i++) { 
		lentele($i);
	}
}*/
/*
function get_volume($x,$y,$z){
	return (2 * $z * $x) + (2 * $z * $y) + $x * $y;
}
function get_tanks($volume, $tank_volume){
	return ceil($volume / $tank_volume);
}

function generate_volume(){
	for ($i=3; $i < 20; $i++) { 
		echo get_volume($i, 20, 2)." ".get_tanks(get_volume($i, 20, 2), 200)."\n";
	}
}

function get_tiles($x,$z,$a,$b){
	for ($i=5.5; $i <= 6.3; $i+=0.1) {
	echo "Baseino dydis ". get_volume($x,$i,$z)."(".$i.")"." Pliteliu kiekis ".(ceil((get_volume($x,$i,$z))/($a*$b)))." vnt, reikes ".ceil((((get_volume($x,$i,$z))/($a*$b)))/9)."-ju pakuociu"."\n";
	}
}


$users = [
	["username" => "PovilasP","name" =>"Povilas","surname"=>"Povilaitis"],
	["username" => "Paska","name" =>"Eimantas","surname"=>"Poskevicius"],
	["username" => "Babaduks","name" =>"Aivaras","surname"=>"Malosevskis"],
	["username" => "Joey","name" =>"Joey","surname"=>"Tribiani"],
	["username" => "trigubas","name" =>"Petras","surname"=>"Petrevicius"]
];
function bams(){
global $users;
sort($users);

echo $users[rand(0,4)]["username"]."\n";
foreach ($users as $user) {
	echo $user["username"]."\n";

}
}

$name = array_shift($argv);
$funcName = array_shift($argv);

call_user_func_array($funcName, $argv);
*/
function bam($a,$f,$d){
	$start = microtime();
for ($i=$a; $i >= 0; $i--) { 
	 if ($i == $f or $i == $d) {
		for ($c=$i; $c >= 0; $c--) { 
			echo $c;
		}
		
		echo "\n";

	 } else {
	 	echo $i."\n";
	 }
		
	} 
	echo "Duration ".(microtime().$start);
	
};

/*
function get_lowest(){
	$temperatures = [28, 5, 3.5, 8, 6, 14, 20];
	$lowest = $temperatures[0];
	foreach ($temperatures as $t) {
		if ($t < $lowest) {
			$lowest = $t;
		}
		}
		echo "lowest value ".$lowest;
}*/



$name = array_shift($argv);
$funcName = array_shift($argv);

call_user_func_array($funcName, $argv);
