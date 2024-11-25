<?php
// app/helpers.php

if (!function_exists('compareDateIntervals')) {
    /**
     * Compares two DateInterval objects to determine if the first interval is smaller than the second.
     *
     * @param \DateInterval $i1 The first DateInterval object.
     * @param \DateInterval $i2 The second DateInterval object.
     */
    function isDateIntervalSmaller(\DateInterval $i1, \DateInterval $i2): int
    {
        $dateRef = new \DateTimeImmutable();

        return $dateRef->add($i1) < $dateRef->add($i2);
    }

}
