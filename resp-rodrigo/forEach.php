<?php

    $cities = ['a', 'b', 'c'];

    foreach( $cities as $key => $values){
        print($values);
    }

    print('</hr></br></br></br>');
    $people = [ 
        'Rodrigo' => [1,2,3],
        'Laura' => [4,5,6],
        'Enzo' => [7,8,9]
        
    ];
    
    print('</hr></br></br></br>');
    
    print_r($people);
    
    print('</hr></br></br></br>');
    
    foreach ($people as $pessoa => $dados) {
        print('Nome:' . $pessoa . '</br>');
        foreach ($dados as $key => $value) {
            // print('key:'. $key . 'Valor:' . $value);
            // print('----Valor:' . $value . '</br>');
            print('Primeiro Valor:' . $dados[0] . ' Segundo Valor:' . $dados[1] . ' Terceiro Valor:' . $dados[2] .'</br>');
            break;
        }

    }
?>