<?php
/**
 * PHPCoord.
 *
 * @author Doug Wright
 */
declare(strict_types=1);

namespace PHPCoord\CoordinateOperation;

class NADCON5NAD832007NAD832011AlaskaHeightProvider implements GridProvider
{
    private NADCON5Grid $cache;

    public function provideGrid(): NADCON5Grid
    {
        return $this->cache ??= new NADCON5Grid(__DIR__ . '/../../resources/nadcon5.nad83_2007.nad83_2011.alaska.eht.trn.20160901.b');
    }
}
