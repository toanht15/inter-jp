<?php
return array( 

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
    'consumers' => array(

        /**
         * Facebook
         */
        'Facebook' => array(
            'client_id'     => '',
            'client_secret' => '',
            'scope'         => array(),
            ),      

        'Twitter' => array(
            'client_id'     => 'k6sfHzZOphRRgQRUV2Zce89mt',
            'client_secret' => 'JzO3pywLv5LLUCWfuRgYqyuj9aB3RPnxGk1WWQ4XrfqkPmffgz',
            // No scope - oauth1 doesn't need scope
            ),
        )

    );