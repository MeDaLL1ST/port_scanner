<?php
if ($argv[1]=="hostname"){
	$hstnm=gethostname();
 echo "Hostname: $hstnm ";
}
if ($argv[1]=="help"){
 echo "Using the program:\n php ips.php help - about it \n php ips.php hostname - get name of the host \n php ips.php scan <ip adress> <port> -  Checking all ports in the range up to 'port' for openness at the specified address";
}
if ($argv[1]=="scan"){
for ($port = 0; $port <= $argv[3]; $port++) {
if (@fsockopen($argv[2], $port, $errno, $errstr,0.01)){
	echo "Opened port: $port \n";
}
}
}
?>