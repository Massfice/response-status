<?php

namespace Massfice\ResponseStatus;

class c401 extends ResponseStatus {
    public function getCode() : int {
        return 401;
    }

    public function setBasicAuthenticate(?string $realm = null) {
        $header = "WWW-Authenticate: Basic";
        if($realm !== null) {
            $header = $header.' realm="'.$realm.'", charset="UTF-8"';
        }

        $this->headers[] = $header;
    }
}

?>