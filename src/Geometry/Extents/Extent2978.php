<?php
/**
 * PHPCoord.
 *
 * @author Doug Wright
 */
declare(strict_types=1);

namespace PHPCoord\Geometry\Extents;

/**
 * North America/USA - conus north of 41°N, 112°W to 95°W.
 * @internal
 */
class Extent2978
{
    public function __invoke(): array
    {
        return
        [
            [
                [
                    [-95, 41], [-95, 41.25], [-95, 41.5], [-95, 41.75], [-95, 42], [-95, 42.25], [-95, 42.5], [-95, 42.75], [-95, 43], [-95, 43.25], [-95, 43.5], [-95, 43.75], [-95, 44], [-95, 44.25], [-95, 44.5], [-95, 44.75], [-95, 45], [-95, 45.25], [-95, 45.5], [-95, 45.75], [-95, 46], [-95, 46.25], [-95, 46.5], [-95, 46.75], [-95, 47], [-95, 47.25], [-95, 47.5], [-95, 47.75], [-95, 48], [-95, 48.25], [-95, 48.5], [-95, 48.75], [-95, 49], [-95, 49.178750038147], [-95, 49.357500076294], [-95.025833129883, 49.357500076294], [-95.08186340332, 49.359594345093], [-95.120834350586, 49.364999771118], [-95.142501831055, 49.371660232544], [-95.152786254883, 49.376657485962], [-95.154174804687, 49.366388320923], [-95.15444946289, 49.333330154419], [-95.15396118164, 49.173334121704], [-95.154174804687, 48.999437332153], [-95.266555786133, 48.999979019165], [-95.592119852702, 48.999935785929], [-95.917683919271, 48.999892552694], [-96.24324798584, 48.999849319458], [-96.568812052409, 48.999806086222], [-96.894376118978, 48.999762852987], [-97.219940185547, 48.999719619751], [-97.502792358398, 48.999437332153], [-97.635833740234, 48.999437332153], [-97.801940917969, 49.000001907349], [-97.969161987305, 49.000276565552], [-98.269165039062, 49.000276565552], [-98.502227783203, 48.999437332153], [-98.685417175293, 48.999719619751], [-98.868606567383, 49.000001907349], [-99.102081298828, 48.999719619751], [-99.335556030273, 48.999437332153], [-99.585556030273, 48.999719619751], [-99.835556030273, 49.000001907349], [-100.0022277832, 49.000001907349], [-100.2520904541, 48.99986076355], [-100.501953125, 48.999719619751], [-100.78556060791, 48.99986076355], [-101.06916809082, 49.000001907349], [-101.30222320557, 49.000276565552], [-101.36723327637, 48.998788833618], [-101.4688873291, 48.999437332153], [-101.70221710205, 48.999625523885], [-101.935546875, 48.999813715617], [-102.16887664795, 49.000001907349], [-102.33556365967, 48.999437332153], [-102.53555297852, 49.000276565552], [-102.76834106445, 48.999437332153], [-103.03527832031, 48.999437332153], [-103.16832733154, 48.999437332153], [-103.26889038086, 49.000001907349], [-103.435546875, 49.000276565552], [-103.53527832031, 48.999437332153], [-103.73528289795, 48.999437332153], [-104.03309631348, 49.000253677368], [-104.13527679443, 48.999719619751], [-104.33500671387, 48.999437332153], [-104.58500671387, 48.999437332153], [-104.83500671387, 48.999437332153], [-105.00140380859, 48.999437332153], [-105.26834106445, 49.000001907349], [-105.48527908325, 48.999719619751], [-105.70221710205, 48.999437332153], [-105.935546875, 48.999437332153], [-106.03472900391, 48.999437332153], [-106.13527679443, 48.999437332153], [-106.26862335205, 48.999437332153], [-106.46806335449, 48.999437332153], [-106.73554992676, 48.999437332153], [-107.03541564941, 48.999719619751], [-107.33528137207, 49.000001907349], [-107.43499755859, 49.000001907349], [-107.63474273682, 48.999437332153], [-107.73554992676, 48.999437332153], [-107.80110168457, 48.999437332153], [-107.98498916626, 48.999437332153], [-108.16887664795, 48.999437332153], [-108.33500671387, 48.999437332153], [-108.53472900391, 48.999437332153], [-108.66777038574, 48.999437332153], [-108.83473205566, 48.999437332153], [-109.08473205566, 48.999437332153], [-109.33473205566, 48.999437332153], [-109.63474273682, 48.999437332153], [-109.80194091797, 48.999437332153], [-109.9677734375, 48.999719619751], [-109.99965667725, 49.000604629517], [-110.10138702393, 48.999437332153], [-110.20111083984, 48.999437332153], [-110.30166625977, 49.000001907349], [-110.36776733398, 49.000001907349], [-110.50110626221, 49.000001907349], [-110.66777038574, 49.000001907349], [-110.76862335205, 48.999437332153], [-111.06847763062, 48.999437332153], [-111.36833190918, 48.999437332153], [-111.58471679687, 48.999437332153], [-111.80110168457, 48.999437332153], [-112, 48.999437332153], [-112, 48.666291554769], [-112, 48.333145777384], [-112, 48], [-112, 47.75], [-112, 47.5], [-112, 47.25], [-112, 47], [-112, 46.75], [-112, 46.5], [-112, 46.25], [-112, 46], [-112, 45.75], [-112, 45.5], [-112, 45.25], [-112, 45], [-112, 44.75], [-112, 44.5], [-112, 44.25], [-112, 44], [-112, 43.75], [-112, 43.5], [-112, 43.25], [-112, 43], [-112, 42.75], [-112, 42.5], [-112, 42.25], [-112, 42], [-112, 41.75], [-112, 41.5], [-112, 41.25], [-112, 41], [-111.75, 41], [-111.5, 41], [-111.25, 41], [-111, 41], [-110.75, 41], [-110.5, 41], [-110.25, 41], [-110, 41], [-109.75, 41], [-109.5, 41], [-109.25, 41], [-109, 41], [-108.75, 41], [-108.5, 41], [-108.25, 41], [-108, 41], [-107.75, 41], [-107.5, 41], [-107.25, 41], [-107, 41], [-106.75, 41], [-106.5, 41], [-106.25, 41], [-106, 41], [-105.75, 41], [-105.5, 41], [-105.25, 41], [-105, 41], [-104.75, 41], [-104.5, 41], [-104.25, 41], [-104, 41], [-103.75, 41], [-103.5, 41], [-103.25, 41], [-103, 41], [-102.75, 41], [-102.5, 41], [-102.25, 41], [-102, 41], [-101.75, 41], [-101.5, 41], [-101.25, 41], [-101, 41], [-100.75, 41], [-100.5, 41], [-100.25, 41], [-100, 41], [-99.75, 41], [-99.5, 41], [-99.25, 41], [-99, 41], [-98.75, 41], [-98.5, 41], [-98.25, 41], [-98, 41], [-97.75, 41], [-97.5, 41], [-97.25, 41], [-97, 41], [-96.75, 41], [-96.5, 41], [-96.25, 41], [-96, 41], [-95.75, 41], [-95.5, 41], [-95.25, 41], [-95, 41],
                ],
            ],
        ];
    }
}
