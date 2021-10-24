<?php
/**
 * PHPCoord.
 *
 * @author Doug Wright
 */
declare(strict_types=1);

namespace PHPCoord\CoordinateOperation;

class GTXGEOID12BGuamMIProvider implements GridProvider
{
    public function provideGrid(): GTXGrid
    {
        return new GTXGrid(__DIR__ . '/../../resources/g2012bg0.bin');
    }
}
