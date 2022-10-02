<?php

$bigCities = [
    
        'NY' => [
            'city' => 'Nova York',
            'population' => 8175133],

        'NZ' => [
            'city' => 'Nova ZELAND',
            'population' => 123456],

        'BR' => [
            'city' => 'Brasilia',
            'population' => 686868]
    ]
;

$totalPopulation = 0;
var_dump($bigCities);

foreach ($bigCities as $initials){

    print('Chave:' . $initials . '<br>');
    
    foreach ( $initials as $key => $data){
    
        print('Dados' . $initials[$key] . '<br>');
        
        // var_dump($data);
    }
    // $GLOBALS['totalPopulation'] += $bigCities[$r]['population'];
    
    // print( 'City:', $bigCities[$r]['city'] . '<br>' . 'Population' . $bigCities[$r]['population'] . '<br>');
}


?>