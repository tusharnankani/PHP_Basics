
<!-- 

    website2 is made for using functions $_SERVER Superglobal
    ref: https://www.php.net/manual/en/language.variables.superglobals.php

    
 -->
<?php

// That will give you the result of each variable;
    foreach($_SERVER as $key => $value) {
        echo "$key    -    $value";
        echo "<br>";
    }

?>

<!-- OUTPUT:
MIBDIRS - C:/xampp/php/extras/mibs
MYSQL_HOME - \xampp\mysql\bin
OPENSSL_CONF - C:/xampp/apache/bin/openssl.cnf
PHP_PEAR_SYSCONF_DIR - \xampp\php
PHPRC - \xampp\php
TMP - \xampp\tmp
HTTP_HOST - localhost
HTTP_CONNECTION - keep-alive
HTTP_CACHE_CONTROL - max-age=0
HTTP_UPGRADE_INSECURE_REQUESTS - 1
HTTP_USER_AGENT - Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/83.0.4103.106 Safari/537.36
HTTP_ACCEPT - text/html,application/xhtml+xml,application/xml;q=0.9,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.9
HTTP_SEC_FETCH_SITE - same-origin
HTTP_SEC_FETCH_MODE - navigate
HTTP_SEC_FETCH_USER - ?1
HTTP_SEC_FETCH_DEST - document
HTTP_REFERER - http://localhost/PHPlearnings/
HTTP_ACCEPT_ENCODING - gzip, deflate, br
HTTP_ACCEPT_LANGUAGE - en-GB,en-US;q=0.9,en;q=0.8,hi;q=0.7
PATH - C:\Windows\system32;C:\Windows;C:\Windows\System32\Wbem;C:\Windows\System32\WindowsPowerShell\v1.0\;C:\Windows\System32\OpenSSH\;C:\Program Files (x86)\NVIDIA Corporation\PhysX\Common;C:\Program Files\NVIDIA Corporation\NVIDIA NvDLISR;C:\Program Files\Git\cmd;C:\Program Files (x86)\mingw-w64\i686-8.1.0-posix-dwarf-rt_v6-rev0\mingw32\bin;C:\Windows\system32\config\systemprofile\AppData\Local\Microsoft\WindowsApps
SystemRoot - C:\Windows
COMSPEC - C:\Windows\system32\cmd.exe
PATHEXT - .COM;.EXE;.BAT;.CMD;.VBS;.VBE;.JS;.JSE;.WSF;.WSH;.MSC
WINDIR - C:\Windows
SERVER_SIGNATURE -
Apache/2.4.43 (Win64) OpenSSL/1.1.1g PHP/7.4.6 Server at localhost Port 80

SERVER_SOFTWARE - Apache/2.4.43 (Win64) OpenSSL/1.1.1g PHP/7.4.6
SERVER_NAME - localhost
SERVER_ADDR - ::1
SERVER_PORT - 80
REMOTE_ADDR - ::1
DOCUMENT_ROOT - C:/xampp/htdocs
REQUEST_SCHEME - http
CONTEXT_PREFIX -
CONTEXT_DOCUMENT_ROOT - C:/xampp/htdocs
SERVER_ADMIN - postmaster@localhost
SCRIPT_FILENAME - C:/xampp/htdocs/PHPlearnings/$_SERVER Superglobal.php
REMOTE_PORT - 56303
GATEWAY_INTERFACE - CGI/1.1
SERVER_PROTOCOL - HTTP/1.1
REQUEST_METHOD - GET
QUERY_STRING -
REQUEST_URI - /PHPlearnings/$_SERVER%20Superglobal.php
SCRIPT_NAME - /PHPlearnings/$_SERVER Superglobal.php
PHP_SELF - /PHPlearnings/$_SERVER Superglobal.php
REQUEST_TIME_FLOAT - 1593032243.678
REQUEST_TIME - 1593032243
 -->


<br>

<?php 


    // That will give you the result of each variable;

    $indicesServer = array('PHP_SELF', 
    'argv', 
    'argc', 
    'GATEWAY_INTERFACE', 
    'SERVER_ADDR', 
    'SERVER_NAME', 
    'SERVER_SOFTWARE', 
    'SERVER_PROTOCOL', 
    'REQUEST_METHOD', 
    'REQUEST_TIME', 
    'REQUEST_TIME_FLOAT', 
    'QUERY_STRING', 
    'DOCUMENT_ROOT', 
    'HTTP_ACCEPT', 
    'HTTP_ACCEPT_CHARSET', 
    'HTTP_ACCEPT_ENCODING', 
    'HTTP_ACCEPT_LANGUAGE', 
    'HTTP_CONNECTION', 
    'HTTP_HOST', 
    'HTTP_REFERER', 
    'HTTP_USER_AGENT', 
    'HTTPS', 
    'REMOTE_ADDR', 
    'REMOTE_HOST', 
    'REMOTE_PORT', 
    'REMOTE_USER', 
    'REDIRECT_REMOTE_USER', 
    'SCRIPT_FILENAME', 
    'SERVER_ADMIN', 
    'SERVER_PORT', 
    'SERVER_SIGNATURE', 
    'PATH_TRANSLATED', 
    'SCRIPT_NAME', 
    'REQUEST_URI', 
    'PHP_AUTH_DIGEST', 
    'PHP_AUTH_USER', 
    'PHP_AUTH_PW', 
    'AUTH_TYPE', 
    'PATH_INFO', 
    'ORIG_PATH_INFO') ; 

    echo '<table cellpadding="10">' ; 
    foreach ($indicesServer as $arg) { 
        if (isset($_SERVER[$arg])) { 
            echo '<tr><td>'.$arg.'</td><td>' . $_SERVER[$arg] . '</td></tr>' ; 
        } 
        else { 
            echo '<tr><td>'.$arg.'</td><td>-</td></tr>' ; 
        } 
    } 
    echo '</table>' ; 

?>

<!-- 
    OUTPUT:
PHP_SELF	/PHPlearnings/$_SERVER Superglobal.php
argv	-
argc	-
GATEWAY_INTERFACE	CGI/1.1
SERVER_ADDR	::1
SERVER_NAME	localhost
SERVER_SOFTWARE	Apache/2.4.43 (Win64) OpenSSL/1.1.1g PHP/7.4.6
SERVER_PROTOCOL	HTTP/1.1
REQUEST_METHOD	GET
REQUEST_TIME	1593031977
REQUEST_TIME_FLOAT	1593031977.53
QUERY_STRING	
DOCUMENT_ROOT	C:/xampp/htdocs
HTTP_ACCEPT	text/html,application/xhtml+xml,application/xml;q=0.9,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.9
HTTP_ACCEPT_CHARSET	-
HTTP_ACCEPT_ENCODING	gzip, deflate, br
HTTP_ACCEPT_LANGUAGE	en-GB,en-US;q=0.9,en;q=0.8,hi;q=0.7
HTTP_CONNECTION	keep-alive
HTTP_HOST	localhost
HTTP_REFERER	http://localhost/PHPlearnings/
HTTP_USER_AGENT	Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/83.0.4103.106 Safari/537.36
HTTPS	-
REMOTE_ADDR	::1
REMOTE_HOST	-
REMOTE_PORT	56285
REMOTE_USER	-
REDIRECT_REMOTE_USER	-
SCRIPT_FILENAME	C:/xampp/htdocs/PHPlearnings/$_SERVER Superglobal.php
SERVER_ADMIN	postmaster@localhost
SERVER_PORT	80
SERVER_SIGNATURE	
Apache/2.4.43 (Win64) OpenSSL/1.1.1g PHP/7.4.6 Server at localhost Port 80
PATH_TRANSLATED	-
SCRIPT_NAME	/PHPlearnings/$_SERVER Superglobal.php
REQUEST_URI	/PHPlearnings/$_SERVER%20Superglobal.php
PHP_AUTH_DIGEST	-
PHP_AUTH_USER	-
PHP_AUTH_PW	-
AUTH_TYPE	-
PATH_INFO	-
ORIG_PATH_INFO	-
 -->