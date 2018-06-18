<?php
class Logger {
	private $status, $dateFormat;
	public function __construct() {
		$this->dateFormat = "d/M/Y H:i:s";
	}
	public function setDateFormat($format) {
		$this->dateFormat = $format;
	}
	public function getDateFormat() {
		return $this->dateFormat;
	}

	public function log($status ,$entries) {
	    $this->status = $status;
		if(is_string($entries)) {
			print $this->status . ": [" . date($this->dateFormat) . "] " . $entries . "\n";
		} else {
			foreach($entries as $value) {
				print $this->status . ': [' . date($this->dateFormat) . '] ' . $entries . "\n";
			}
		}
	}
}
