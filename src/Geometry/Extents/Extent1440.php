<?php
/**
 * PHPCoord.
 *
 * @author Doug Wright
 */
declare(strict_types=1);

namespace PHPCoord\Geometry\Extents;

/**
 * North America/Canada - Ontario - 90°W to 84°W.
 * @internal
 */
class Extent1440
{
    public function __invoke(): array
    {
        return
        [
            [
                [
                    [-90, 48.031912562541], [-89.994239807129, 48.025268554688], [-89.899787902832, 47.990615844727], [-89.862503051758, 48.000831604004], [-89.838897705078, 48.011665344238], [-89.755561828613, 48.029575347901], [-89.606384277344, 48.011867523194], [-89.572914123535, 48.002250671387], [-89.493125915527, 48.003166198731], [-89.447769165039, 48.003326416016], [-89.356658935547, 47.979713439942], [-89.323333740234, 47.993049621582], [-89.148750305176, 48.066104888916], [-88.974166870117, 48.13916015625], [-88.691665649414, 48.255554199219], [-88.645553588867, 48.26416015625], [-88.368057250977, 48.312210083008], [-88.188323974609, 48.244155883789], [-87.940455118815, 48.148045857748], [-87.692586263021, 48.051935831706], [-87.444717407227, 47.955825805664], [-87.341674804687, 47.915542602539], [-87.201400756836, 47.860275268555], [-87.042922973633, 47.797496795654], [-86.88444519043, 47.734718322754], [-86.726669311523, 47.671524047852], [-86.568893432617, 47.60832977295], [-86.466659545898, 47.56721496582], [-86.25902557373, 47.483047485352], [-86.051391601562, 47.398880004883], [-86.014724731445, 47.383880615235], [-85.839721679687, 47.312210083008], [-85.738891601562, 47.270828247071], [-85.464172363281, 47.157211303711], [-85.354446411133, 47.11166381836], [-85.135971069336, 47.020133972168], [-84.917495727539, 46.928604125977], [-84.864585876465, 46.905822753906], [-84.832778930664, 46.829162597656], [-84.825561523437, 46.806938171387], [-84.806945800781, 46.748329162598], [-84.787780761719, 46.689712524414], [-84.775009155273, 46.653045654297], [-84.565002441406, 46.466384887695], [-84.521255493164, 46.460269927979], [-84.483955383301, 46.460201263428], [-84.458061218262, 46.483741760254], [-84.431381225586, 46.501663208008], [-84.408615112304, 46.508605957031], [-84.192764282226, 46.546661376953], [-84.125343322754, 46.529438018799], [-84.120063781738, 46.507076263428], [-84.144584655762, 46.465686798096], [-84.154449462891, 46.445266723633], [-84.160278320312, 46.424995422363], [-84.157646179199, 46.394161224365], [-84.102500915527, 46.240268707276], [-84.089721679687, 46.220268249512], [-84.076675415039, 46.203048706055], [-84, 46.119971321774], [-84, 46.333333333333], [-84, 46.5], [-84, 46.666666666667], [-84, 46.833333333333], [-84, 47], [-84, 47.166666666667], [-84, 47.333333333333], [-84, 47.5], [-84, 47.666666666667], [-84, 47.833333333333], [-84, 48], [-84, 48.166666666667], [-84, 48.333333333334], [-84, 48.5], [-84, 48.666666666667], [-84, 48.833333333333], [-84, 49], [-84, 49.166666666667], [-84, 49.333333333334], [-84, 49.5], [-84, 49.666666666667], [-84, 49.833333333333], [-84, 50], [-84, 50.166666666667], [-84, 50.333333333334], [-84, 50.5], [-84, 50.666666666667], [-84, 50.833333333333], [-84, 51], [-84, 51.166666666667], [-84, 51.333333333334], [-84, 51.5], [-84, 51.666666666667], [-84, 51.833333333333], [-84, 52], [-84, 52.166666666667], [-84, 52.333333333334], [-84, 52.5], [-84, 52.666666666667], [-84, 52.833333333333], [-84, 53], [-84, 53.166666666667], [-84, 53.333333333334], [-84, 53.5], [-84, 53.666666666667], [-84, 53.833333333333], [-84, 54], [-84, 54.166666666667], [-84, 54.333333333334], [-84, 54.5], [-84, 54.666666666667], [-84, 54.833333333333], [-84, 55], [-84, 55.166666666667], [-84, 55.333333333334], [-84, 55.359612150563], [-84.000707956372, 55.359404519877], [-84.047582942935, 55.344850863217], [-84.050788019825, 55.343783957044], [-84.09474723551, 55.328380964391], [-84.110013148696, 55.322920952999], [-84.123386780085, 55.325300226563], [-84.150828920839, 55.336255954326], [-84.155945947444, 55.338126360748], [-84.160902022351, 55.339673436602], [-84.16602811579, 55.341029610215], [-84.171302224236, 55.342189055648], [-84.176701701939, 55.343146791231], [-84.182203358944, 55.343898701184], [-84.187783561576, 55.344441553491], [-84.19341833492, 55.344773013953], [-84.199083466859, 55.344891656344], [-84.20520377937, 55.34477966793], [-84.328096810791, 55.339624807853], [-84.332849885239, 55.339347575418], [-84.338516370921, 55.338816734472], [-84.404476191601, 55.331304188875], [-84.40989756305, 55.330581287726], [-84.41534452222, 55.329638925687], [-84.421527090568, 55.328287555701], [-84.468675445519, 55.316473963583], [-84.565780746643, 55.295197896368], [-84.580863658761, 55.293185687559], [-84.602673932523, 55.291529796684], [-84.629023210615, 55.291931169753], [-84.67418160147, 55.294561216881], [-84.693081018885, 55.296738014752], [-84.719485173055, 55.302587981805], [-84.722042682482, 55.303127546639], [-84.840612924365, 55.32685337015], [-84.846201796873, 55.32783023397], [-84.951700637179, 55.343976786569], [-84.95733401945, 55.344716152264], [-84.96292399013, 55.345228032608], [-84.968817420284, 55.3455363778], [-84.996339190009, 55.346383503255], [-85.001500886319, 55.346453099561], [-85.007170110236, 55.346325619326], [-85.0137897605, 55.34590163013], [-85.04085640555, 55.343398910239], [-85.045289971337, 55.355833954552], [-85.046384170543, 55.358518639809], [-85.048005549187, 55.361629929174], [-85.049979270414, 55.364671262872], [-85.052296948821, 55.36762960398], [-85.054948718451, 55.370492268706], [-85.057923274022, 55.373246980966], [-85.061207918479, 55.375881925258], [-85.064788616668, 55.378385797588], [-85.068650054911, 55.380747854234], [-85.072775706242, 55.382957958122], [-85.077727346181, 55.385255802604], [-85.12145950677, 55.403721447899], [-85.124903448195, 55.405100500706], [-85.129715266001, 55.40679920535], [-85.134714443368, 55.408312248699], [-85.139879527278, 55.409633131901], [-85.145188345115, 55.410756180575], [-85.150618100557, 55.411676569424], [-85.156145472272, 55.412390343177], [-85.161746714997, 55.412894433764], [-85.167838277007, 55.413199178465], [-85.207342024179, 55.414145501894], [-85.237290917455, 55.420575416631], [-85.337499204145, 55.448366147562], [-85.405072979312, 55.486071116476], [-85.432694337719, 55.512759673557], [-85.446029908618, 55.538961183155], [-85.448641529028, 55.543088837993], [-85.450995686987, 55.546041112145], [-85.454412806059, 55.549586192142], [-85.489913015632, 55.581948670813], [-85.4940184711, 55.585257856395], [-85.49764142098, 55.587751264197], [-85.501545130213, 55.590101986779], [-85.505961252516, 55.592421519246], [-85.675135383329, 55.674349207049], [-85.67906714237, 55.676137276715], [-85.683724603295, 55.677996718169], [-85.688589167228, 55.679676949414], [-85.693639965668, 55.681170754412], [-85.698855322612, 55.682471716763], [-85.704212848196, 55.68357424752], [-85.707754537502, 55.684181244493], [-85.841924024883, 55.705329525831], [-86.039202143551, 55.739619474525], [-86.236480262218, 55.773909423219], [-86.25907501828, 55.781468101806], [-86.270127324195, 55.78971950087], [-86.274318368146, 55.792563705904], [-86.278283716938, 55.794893590202], [-86.282334193654, 55.79698357403], [-86.315756854271, 55.813149000177], [-86.320321292115, 55.815202814737], [-86.325425766785, 55.81718667125], [-86.351689306188, 55.826513638693], [-86.355345272809, 55.82774114479], [-86.406036888049, 55.843799651921], [-86.44056699558, 55.854210490854], [-86.444555487543, 55.855337815471], [-86.448585605763, 55.856334375852], [-86.511476091781, 55.870797267518], [-86.513789256664, 55.871297006563], [-86.542840917148, 55.877278815245], [-86.584955113737, 55.885493946507], [-86.796510820109, 55.935801919032], [-86.834528761122, 55.949430107122], [-86.839489205891, 55.951078110741], [-86.845016401311, 55.952635019413], [-86.93827974757, 55.976245912622], [-86.942762130305, 55.977294604344], [-86.94818946463, 55.978350426427], [-86.953730829278, 55.979201967792], [-86.959362419982, 55.97984556892], [-86.96708164104, 55.980380543799], [-86.989327154477, 55.981355107856], [-86.99304487177, 55.981472768304], [-86.998801060349, 55.981478670431], [-87.004633037959, 55.981266390786], [-87.039494283494, 55.979314349591], [-87.046239392752, 55.978781278402], [-87.062035828961, 55.977071276591], [-87.088029893761, 55.977981998532], [-87.170620179538, 55.987987364372], [-87.277782986456, 56.014421289088], [-87.279972338853, 56.017473337338], [-87.282480159092, 56.02039617948], [-87.285322229918, 56.023218027873], [-87.288486428293, 56.025926779895], [-87.291959241467, 56.028510815702], [-87.295725824203, 56.030959048331], [-87.299770061905, 56.033260971551], [-87.30407463936, 56.03540670524], [-87.308621114836, 56.037387038085], [-87.313389999198, 56.039193467419], [-87.318360839712, 56.040818236023], [-87.321463794327, 56.041711828012], [-87.438560913638, 56.073708585124], [-87.491414349149, 56.089508963515], [-87.626344987937, 56.18211808792], [-87.633127510188, 56.207347459662], [-87.634308452214, 56.210794423884], [-87.635788788134, 56.213940246168], [-87.637632195824, 56.217022844058], [-87.63983085443, 56.220029004445], [-87.643173546402, 56.223752418711], [-87.765045041762, 56.341304376997], [-87.903598264262, 56.466275779888], [-87.906876708786, 56.469008414591], [-87.910424058193, 56.471577969491], [-87.914266440708, 56.474010457949], [-87.918387415921, 56.476295440771], [-87.922769338458, 56.478423110051], [-87.925802518423, 56.47973973284], [-87.971208097916, 56.498550534442], [-87.976854809974, 56.500657471442], [-87.98131807976, 56.502085543825], [-88.006767332747, 56.509680416228], [-88.012295423882, 56.511179351318], [-88.017686271426, 56.512395652024], [-88.02344980971, 56.513449772029], [-88.040683374591, 56.516209656026], [-88.069184704156, 56.522384613905], [-88.113370537708, 56.532707373719], [-88.175473690431, 56.54836196333], [-88.271175757169, 56.583223380387], [-88.307465870522, 56.599690134672], [-88.350136962689, 56.621152845658], [-88.371713053872, 56.635716717791], [-88.375777321135, 56.638257371221], [-88.379940346659, 56.640529394104], [-88.382840380731, 56.641946939387], [-88.52724950297, 56.709288364039], [-88.53269263728, 56.711577845998], [-88.538714657339, 56.713707440515], [-88.58242214389, 56.727390669722], [-88.587496601663, 56.729985706123], [-88.59924933544, 56.738911585021], [-88.668862515634, 56.793051650328], [-88.740223110709, 56.852404019579], [-88.7426148289, 56.854292488785], [-88.746247639012, 56.856841896735], [-88.750175555923, 56.85925251605], [-88.754381770996, 56.861514000818], [-88.758848271582, 56.863616643479], [-88.763555918169, 56.865551416788], [-88.768484526563, 56.867310012883], [-88.773612954749, 56.868884879246], [-88.778919194056, 56.870269251424], [-88.784380464223, 56.871457182351], [-88.79067520518, 56.872549969239], [-88.922968604641, 56.891897291748], [-88.927269126621, 56.892461185432], [-88.933057219743, 56.89302738492], [-88.936063454664, 56.893236606354], [-88.965351448441, 56.894989545085], [-89.241727815875, 56.709214205777], [-89.518104183309, 56.523438866469], [-89.794480550744, 56.337663527162], [-90, 56.199516963567], [-90, 56], [-90, 55.833333333333], [-90, 55.666666666667], [-90, 55.5], [-90, 55.333333333333], [-90, 55.166666666667], [-90, 55], [-90, 54.833333333333], [-90, 54.666666666667], [-90, 54.5], [-90, 54.333333333333], [-90, 54.166666666667], [-90, 54], [-90, 53.833333333333], [-90, 53.666666666667], [-90, 53.5], [-90, 53.333333333333], [-90, 53.166666666667], [-90, 53], [-90, 52.833333333333], [-90, 52.666666666667], [-90, 52.5], [-90, 52.333333333333], [-90, 52.166666666667], [-90, 52], [-90, 51.833333333333], [-90, 51.666666666667], [-90, 51.5], [-90, 51.333333333333], [-90, 51.166666666667], [-90, 51], [-90, 50.833333333333], [-90, 50.666666666667], [-90, 50.5], [-90, 50.333333333333], [-90, 50.166666666667], [-90, 50], [-90, 49.833333333333], [-90, 49.666666666667], [-90, 49.5], [-90, 49.333333333333], [-90, 49.166666666667], [-90, 49], [-90, 48.833333333333], [-90, 48.666666666667], [-90, 48.5], [-90, 48.333333333333], [-90, 48.031912562541],
                ],
            ],
        ];
    }
}
