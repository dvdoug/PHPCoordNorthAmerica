<?php
/**
 * PHPCoord.
 *
 * @author Doug Wright
 */
declare(strict_types=1);

namespace PHPCoord\CoordinateOperation;

class NADCON5NAD831993NAD83PA11HawaiiHeightProvider implements GridProvider
{
    public function provideGrid(): NADCON5Grid
    {
        return new NADCON5Grid(__DIR__ . '/../../resources/nadcon5.nad83_1993.nad83_pa11.hawaii.eht.trn.20160901.b');
    }
}
