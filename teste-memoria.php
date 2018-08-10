<?php
	echo "Uso de memoria no inicio:".memory_get_usage()." bytes\n";
	/* Ex: Uso de memoria no inicio: 361400 bytes */
	// Vamos fazer um loop para consumir memoria
	for($i=0; $i<50000; $i++) {
		$array[]=md5($i);
	}
	echo "Uso de memoria depois do loop:".memory_get_usage()." bytes\n";
	// Agora vamos reduzir alguns arrays com unset
	for($i=0; $i<10000; $i++){
		unset ($array[$i]);
	}
	echo "Uso de memoria no final:".memory_get_usage()." bytes\n";
	echo "O Pico de memoria:".memory_get_peak_usage()." bytes\n";