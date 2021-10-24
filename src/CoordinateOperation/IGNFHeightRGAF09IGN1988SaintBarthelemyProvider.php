<?php
/**
 * PHPCoord.
 *
 * @author Doug Wright
 */
declare(strict_types=1);

namespace PHPCoord\CoordinateOperation;

class IGNFHeightRGAF09IGN1988SaintBarthelemyProvider implements GridProvider
{
    public function provideGrid(): IGNFHeightGrid
    {
        return new IGNFHeightGrid(__DIR__ . '/../../resources/gg10_sbv2.mnt');
    }
}
