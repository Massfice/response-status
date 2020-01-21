<?php

namespace Massfice\ResponseStatus;

class c405 extends ResponseStatus {
    public function getCode() : int {
        return 405;
    }

    public function setAllow(array $allow) {
        if(count($allow) > 0) {
            $header = "Allow: ";
            foreach($allow as $a) {
                $header = $header.$a.", ";
            }
            $header = \substr($header,0,\strlen($header) - 2);
            $this->headers[] = $header;
        }
    }
}

?>