<?php
/**
 * PHPCoord.
 *
 * @author Doug Wright
 */
declare(strict_types=1);

namespace PHPCoord\CoordinateOperation;

class IGNFHeightRGAF09IGN1988MarieGalanteProvider implements GridProvider
{
    public function provideGrid(): IGNFHeightGrid
    {
        return new IGNFHeightGrid(__DIR__ . '/../../resources/RAMG2016.mnt');
    }
}
