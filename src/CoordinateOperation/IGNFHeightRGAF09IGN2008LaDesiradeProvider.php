<?php
/**
 * PHPCoord.
 *
 * @author Doug Wright
 */
declare(strict_types=1);

namespace PHPCoord\CoordinateOperation;

class IGNFHeightRGAF09IGN2008LaDesiradeProvider implements GridProvider
{
    public function provideGrid(): IGNFHeightGrid
    {
        return new IGNFHeightGrid(__DIR__ . '/../../resources/RALD2016.mnt');
    }
}
