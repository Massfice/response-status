<?php

namespace Massfice\ResponseStatus;

abstract class ResponseStatus  {

    protected $errors;
    protected $headers;

    public function __construct() {
        $this->errors = [];
        $this->headers = [];
    }

    abstract public function getCode() : int;
    
    public function getHeaders() : array {
        return $this->headers;
    }

    public function addError(string $error) {
        $this->errors[] = $error;
    }

    public function getErrors() : array {
        return $this->errors;
    }

    public function isError() : bool {
        return count($this->errors) > 0;
    }

    public function setLocation(string $location) {
        $header = "Location: ".$location;
        $this->headers[] = $header;
    }

    public function setCache(int $maxAge, string $type) {
        $header = "Cache-Control: ".$type.", max-age=".$maxAge;
        $this->headers[] = $header;
    }
}

?>