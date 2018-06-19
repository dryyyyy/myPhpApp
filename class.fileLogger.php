<?php
class FileLogger implements LoggerInterface {
	private $dateFormat;
	/*
	*
	*/
	public function __construct() {
		$this->dateFormat = "d/M/Y H:i:s";
	}
	/*
	*
	*/
	public function setDateFormat($format) {
		$this->dateFormat = $format;
	}
	/*
	*
	*/
	public function getDateFormat() {
		return $this->dateFormat;
	}
	/*
	*
	*/
	public function log($severity = 'Info', $entries) {
		$logFile = 'myLog.log';
		if($fp = fopen($logFile, 'a')){
			if(is_string($entries)) {
				fwrite($fp, $severity . ": [" . date($this->dateFormat) . "] " . $entries . "\n");
				fclose($fp);
			} else {
				foreach($entries as $value) {
					fwrite($fp, $severity . "Error: [" . date($this->dateFormat) . "] " . $value . "\n");
				}
				fclose($fp);
			}
		} else {
			throw new Exception ('FileLogger->log() cannot open myLog.log file for appending');
		}
	}
}
