<?php

namespace Wimby;


interface Hashable extends Equalable {

    /**
     * If equals returns true for $other, both objects MUST return same value for hash
     * @return integer
     */
    public function hash();
}
