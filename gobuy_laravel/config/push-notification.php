<?php

return [

    'appNameIOS'     => [
        'environment' =>'production',
        'certificate' => public_path().'/ios.cert',
        'passPhrase'  =>'1234',
        'service'     =>'apns'
    ],
    'appNameAndroid' => [
        'environment' =>'production',
        'apiKey'      =>'AIzaSyAsU472n7TtNorj4OkknjpIFaIwMeIkeTs',
        'service'     =>'gcm'
    ]

];