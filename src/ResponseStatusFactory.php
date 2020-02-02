<?php

namespace Massfice\ResponseStatus;

class ResponseStatusFactory {
    public static function create(int $code) : ResponseStatus {
        $code = '\\Massfice\\ResponseStatus\\c'.$code;

        if(class_exists($code) && \is_subclass_of($code,'\\Massfice\\ResponseStatus\\ResponseStatus')) {
            return new $code();
        } else {
            return new c500();
        }
    }
}

?>