<?php
/**
 * PHPCoord.
 *
 * @author Doug Wright
 */
declare(strict_types=1);

namespace PHPCoord\CoordinateOperation;

class NADCON5SG1897SG1952StGeorgeLatitudeProvider implements GridProvider
{
    private NADCON5Grid $cache;

    public function provideGrid(): NADCON5Grid
    {
        return $this->cache ??= new NADCON5Grid(__DIR__ . '/../../resources/nadcon5.sg1897.sg1952.stgeorge.lat.trn.20160901.b');
    }
}
