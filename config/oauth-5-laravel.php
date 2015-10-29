<?php
return [ 

    /*
    |--------------------------------------------------------------------------
    | oAuth Config
    |--------------------------------------------------------------------------
    */

    /**
     * Storage
     */
    'storage' => 'Session', 

    /**
     * Consumers
     */
    'consumers' => [

        /**
         * Facebook
         */
        'Facebook' => [
            'client_id'     => '',
            'client_secret' => '',
            'scope'         => [],
        ],      

    ]

];