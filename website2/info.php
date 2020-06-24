<?php 

    # $_SERVER Superglobal 
    // ref: https://www.php.net/manual/en/reserved.variables.server.php


    // Create server array (associative);
    
    $server = [

        /* 'SERVER_NAME'
        The name of the server host under which the current script is executing. If the script is running on a virtual host, this will be the value defined for that virtual host. */
        'Host Server Name' => $_SERVER['SERVER_NAME'],
        // outputs `localhost`;



        /* 'HTTP_HOST'
        Contents of the Host: header from the current request, if there is one. */
        'Host Header' => $_SERVER['HTTP_HOST'],
        // outputs `localhost`;



        /* 'SERVER_SOFTWARE'
            Server identification string, given in the headers when responding to requests. */
        'Server Software' => $_SERVER['SERVER_SOFTWARE'],
        // outputs `Apache/2.4.43 (Win64) OpenSSL/1.1.1g PHP/7.4.6 )`;



        /* 'DOCUMENT_ROOT'
        The document root directory under which the current script is executing, as defined in the server's configuration file.  */
        'Document Root' => $_SERVER['DOCUMENT_ROOT'],
        // outputs `C:/xampp/htdocs`;



        /* 'PHP_SELF'
        The filename of the currently executing script, relative to the document root. For instance, $_SERVER['PHP_SELF'] in a script at the address http://example.com/foo/bar.php would be /foo/bar.php. The __FILE__ constant contains the full path and filename of the current (i.e. included) file. If PHP is running as a command-line processor this variable contains the script name since PHP 4.3.0. Previously it was not available.  */
        'Current Page' => $_SERVER['PHP_SELF'],
        // OUTPUTS `/PHPlearnings/website2/info.php`



        /*'SCRIPT_NAME'
        Contains the current script's path. This is useful for pages which need to point to themselves. The __FILE__ constant contains the full path and filename of the current (i.e. included) file.  */
        'Script Name' => $_SERVER['SCRIPT_NAME'],
        // OUTPUTS `/PHPlearnings/website2/info.php`




        'Absolute path' => $_SERVER['SCRIPT_FILENAME'],
        // outputs `C:/xampp/htdocs/PHPlearnings/website2/info.php`

    ];

    foreach($server as $key => $value){
        echo "$key -  $value";
        echo "<br>";
    }



    
    echo "<br>";










    // Creat client array;

    $client = [
        'CLient System Info' => $_SERVER['HTTP_USER_AGENT'],
        // outputs `Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/83.0.4103.106 Safari/537.36`


        'Client IP' => $_SERVER['REMOTE_ADDR'],
        // outputs `::1`; this is the ouput because client and server are on the same machine;


        'Remote Port' => $_SERVER['REMOTE_PORT']
        // outputs `56410`
    ];


    foreach($client as $key => $value){
        echo "$key -  $value";
        echo "<br>";
    }


?>