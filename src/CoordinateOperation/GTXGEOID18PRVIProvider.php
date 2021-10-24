<?php
/**
 * PHPCoord.
 *
 * @author Doug Wright
 */
declare(strict_types=1);

namespace PHPCoord\CoordinateOperation;

class GTXGEOID18PRVIProvider implements GridProvider
{
    public function provideGrid(): GTXGrid
    {
        return new GTXGrid(__DIR__ . '/../../resources/g2018p0.bin');
    }
}
