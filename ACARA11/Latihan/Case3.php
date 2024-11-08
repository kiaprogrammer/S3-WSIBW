<?php
interface Logger{
    public function log($message);
}
class FileLogger implements Logger{
    private $handle;
    private $logFile;
    public function __construct($filename, $mode = "a"){
        $this->logFile = $filename;
        // open log file for append
        $this->handle = fopen($filename, $mode)
            or die("Cloud not open thr log file");
    }
    public function log ($message){
        $message = date("F j, Y, g:i a") . ": ". $message."\n";
        fwrite($this->handle, $message);
    }
    public function __destruct(){
        if ($this->handle){
            fclose($this->handle);
        }
    }
}

class DatabaseLogger implements Logger{
    public function log($message){
        echo sprintf("Log %s to the database"."\n",$message);
    }
}

// Example 1
$logger = new FileLogger("./log.txt", "w");
$logger->log ("PHP interface is awesome");

// Example 2
$loggers = [
    new FileLogger ("./log.txt"),
    new DatabaseLogger()
];

foreach ($loggers as $logger){
    $logger->log("Log message");
}
?>