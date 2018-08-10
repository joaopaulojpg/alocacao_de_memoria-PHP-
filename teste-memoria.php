<?php
    /*
    *   memory_get_usage()          = Retorna a quantidade de memória, em bytes, que esta atualmente alocada para o seu script PHP.
        memory_get_peak_usage()     = Retorna o pico de memória, em bytes, que foi alocado para seu script PHP.
        unset                       = Destrói a variável especificada.

    /                                       */
    ////////////// VALOR DA MEMORIA NO PRIMEIRO MOMENTO //////////////
	echo 'Uso de memória antes de qualquer regra de negocio:'.memory_get_usage().' bytes<br>';
    
    ////////////// LOOP PARA CONSUMIR MEMORIA //////////////
    for($contador=0; $contador<50000; $contador++) {
        $array[]=md5($contador);
    }
    echo 'O valor do uso da memório após a "regra de negocio":'.memory_get_usage()." bytes<br>";
    
    ////////////// USANDO BOAS PRATICAS PARA REDUZIR OCUSTO DA MEMORIA  //////////////
	for($contador=0; $contador<10000; $contador++){
		unset ($array[$contador]);
    }
    
	echo 'O uso de memória ao terminar a aplicação:'.memory_get_usage().' bytes<br>';
	echo 'O auge do uso de memória durante a aplicação:'.memory_get_peak_usage().' bytes<br>';
