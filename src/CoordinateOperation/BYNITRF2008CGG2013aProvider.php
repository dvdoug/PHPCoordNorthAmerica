<?php
/**
 * PHPCoord.
 *
 * @author Doug Wright
 */
declare(strict_types=1);

namespace PHPCoord\CoordinateOperation;

class BYNITRF2008CGG2013aProvider implements GridProvider
{
    public function provideGrid(): BYNHeightGrid
    {
        return new BYNHeightGrid(__DIR__ . '/../../resources/CGG2013ai08.byn');
    }
}
