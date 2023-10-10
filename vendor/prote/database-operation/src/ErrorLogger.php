<?php
namespace Prote\DatabaseOperation;
class ErrorLogger
{
    /**
     * @param string $errorMessage
     * @param string $logFilePath
     * @return void
     */
    public static function logError(string $errorMessage, string $logFilePath, int $times): void
    {
        $date = date('Y-m-d H:i:s');
        $logMessage = "[$date] $errorMessage\n\n";
        $logMessage .= str_repeat("-", $times) . "\n\n";
        error_log($logMessage, 3, $logFilePath);
    }
}