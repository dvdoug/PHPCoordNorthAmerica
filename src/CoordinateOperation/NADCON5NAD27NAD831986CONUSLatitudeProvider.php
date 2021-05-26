<?php
/**
 * PHPCoord.
 *
 * @author Doug Wright
 */
declare(strict_types=1);

namespace PHPCoord\CoordinateOperation;

class NADCON5NAD27NAD831986CONUSLatitudeProvider implements GridProvider
{
    private NADCON5Grid $cache;

    public function provideGrid(): NADCON5Grid
    {
        return $this->cache ??= new NADCON5Grid(__DIR__ . '/../../resources/nadcon5.nad27.nad83_1986.conus.lat.trn.20160901.b');
    }
}
