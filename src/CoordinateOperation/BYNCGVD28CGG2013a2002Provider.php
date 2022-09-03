<?php
/**
 * PHPCoord.
 *
 * @author Doug Wright
 */
declare(strict_types=1);

namespace PHPCoord\CoordinateOperation;

class BYNCGVD28CGG2013a2002Provider implements GridProvider
{
    public function provideGrid(): BYNHeightGrid
    {
        return new BYNHeightGrid(__DIR__ . '/../../resources/HT2_2002v70_CGG2013a.byn');
    }
}
