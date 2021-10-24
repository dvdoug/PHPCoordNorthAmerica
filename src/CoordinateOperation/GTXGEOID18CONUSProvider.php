<?php
/**
 * PHPCoord.
 *
 * @author Doug Wright
 */
declare(strict_types=1);

namespace PHPCoord\CoordinateOperation;

class GTXGEOID18CONUSProvider implements GridProvider
{
    public function provideGrid(): GTXGrid
    {
        return new GTXGrid(__DIR__ . '/../../resources/g2018u0.bin');
    }
}
