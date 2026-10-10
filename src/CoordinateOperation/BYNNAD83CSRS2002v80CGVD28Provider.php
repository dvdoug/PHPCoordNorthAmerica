<?php

/**
 * PHPCoord.
 *
 * @author Doug Wright
 */
declare(strict_types=1);

namespace PHPCoord\CoordinateOperation;

class BYNNAD83CSRS2002v80CGVD28Provider implements GridProvider
{
    public function provideGrid(): BYNHeightGrid
    {
        return new BYNHeightGrid(__DIR__ . '/../../resources/HT2_2002v80.byn');
    }
}
