<?php

namespace Wimby;


interface Equalable {

    /**
     * @param mixed $other
     * @return boolean
     */
    public function equals($other);
}
