<?php

namespace Wimby;

/**
 * this trait expects class implementing Comparable interface
 * @method compare($other)
 */
trait ComparableTrait {

    public function greaterThan($other) {
        return $this->compare($other) > 0;
    }

    public function greaterThanOrEqual($other) {
        return $this->compare($other) >= 0;
    }

    public function lessThan($other) {
        return $this->compare($other) < 0;
    }

    public function lessThanOrEqual($other) {
        return $this->compare($other) <= 0;
    }
}
