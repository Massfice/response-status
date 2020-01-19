<?php

namespace Massfice\ResponseStatus;

class c500 extends ResponseStatus {
    public function getCode() : int {
        return 500;
    }
}

?>