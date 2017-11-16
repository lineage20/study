<?php

$arr = Array
    (
    '0' => Array
        (
        '0' => Array
            (
            'id' => 12,
             'name' => 12
        )
    ),
    '1' => Array
        (
        '0' => Array
            (
           'id' => 123,
             'name' => 123
        )
    ),
    '2' => Array
        (
        '0' => Array
            (
           'id' => 124,
             'name' => 125
        )
    ),
    '3' => Array
        (
        '0' => Array
            (
           'id' => 126,
             'name' => 126
        )
    ),
    '4' => Array
        (
        '0' => Array
            (
           'id' => 127,
             'name' => 127
        )
    ),
    '5' => Array
        (
        '0' => Array
            (
           'id' => 128,
             'name' => 'test'
        )
    ),
);
foreach($arr as $k=>$v){
    foreach($v as $k1=>$v1){
        $params            = $v1['name'];
    }
    
}
print_r($params);

