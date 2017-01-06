<?php

namespace Wimby;


interface Comparable extends Equalable {

    /**
     * If $this and $other equals compare MUST return 0
     * @param $other
     * @return integer 1 when $this is greater than $other, 0 when both are equal, -1 otherwise
     * @throws InvalidComparisonException if $this is incomparable with $other
     */
    public function compare($other);

    public function greaterThan($other);

    public function greaterThanOrEqual($other);

    public function lessThan($other);

    public function lessThanOrEqual($other);
}
