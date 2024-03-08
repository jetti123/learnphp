<?php

//library

class Job {
    public function task(Logger $logger){
        for($i = 0; $i<10; $i++){                       
            $logger->log("task done! #  $i");
        }
    }
}

interface Logger {
    public function log ($message);
}

class ConsoleLogger implements Logger {
    public function log($message){
        echo $message . "\n";
    }
}
//usage code
class NothingLogger {
    public function log($message){
    }
}

class FileLogger implements Logger {
    public function log($message){
        $file = fopen("log.txt", "a");
        fwrite($file, $message . "\n");
        fclose($file);
    }
}

$job = new Job;
$logger = new ConsoleLogger();
$job->task($logger);