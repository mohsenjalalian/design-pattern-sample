<?php

interface Logger
{
    public function log($data);
}

class LogToFile implements Logger
{

    public function log($data)
    {
        var_dump('log to file');
    }
}

class LogToDatabase implements Logger
{

    public function log($data)
    {
        var_dump('log to database');
    }
}

class LogToXWebService implements Logger
{

    public function log($data)
    {
        var_dump('log to saas');
    }
}



class App
{
    public function log($data, Logger $logger = null)
    {
        $logger = $logger ?: new LogToFile;

        $logger->log($data);
    }
}



$app = new App;
$app->log('some info', new LogToXWebService);
$app->log('some info', new LogToDatabase);
$app->log('some info', new LogToFile);
$app->log('some info');