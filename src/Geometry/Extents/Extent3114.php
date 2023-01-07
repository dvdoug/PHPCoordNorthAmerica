<?php
/**
 * PHPCoord.
 *
 * @author Doug Wright
 */
declare(strict_types=1);

namespace PHPCoord\Geometry\Extents;

/**
 * North America/North America - 96°W to 90°W and NAD83 by country.
 * @internal
 */
class Extent3114
{
    public function __invoke(): array
    {
        return
        [
            [
                [
                    [-93.469005230347, 25.896868249502], [-94.546557270635, 25.902513272579], [-95.657496602581, 25.908333203256], [-95.944954995555, 25.908402642928], [-96.000024156425, 25.908415945668], [-96.00525691469, 25.908554214106], [-96.010475268548, 25.90896611244], [-96.015664919251, 25.909650512033], [-96.020811646702, 25.91060553757], [-96.025901348415, 25.911828572198], [-96.030920078161, 25.913316264694], [-96.03585408418, 25.91506453865], [-96.040689846864, 25.917068603642], [-96.045414115797, 25.919322968357], [-96.05001394607, 25.921821455637], [-96.054476733743, 25.924557219408], [-96.058790250387, 25.927522763437], [-96.062942676587, 25.930709961874], [-96.066922634332, 25.934110081515], [-96.070719218189, 25.937713805734], [-96.074322025184, 25.94151126001], [-96.07772118331, 25.945492038987], [-96.080907378576, 25.949645234979], [-96.083871880527, 25.953959467867], [-96.086606566168, 25.958422916272], [-96.089103942221, 25.963023349956], [-96.091357165656, 25.967748163326], [-96.093360062442, 25.972584409978], [-96.095107144468, 25.977518838174], [-96.096593624574, 25.982537927147], [-96.097815429676, 25.987627924153], [-96.09876921192, 25.992774882153], [-96.09945235786, 25.997964698032], [-96.099862995614, 26.003183151237], [-96.1, 26.008415942751], [-96.1, 84], [-96.099862953475, 84.005233595624], [-96.099452189537, 84.010452846327], [-96.09876883406, 84.015643446504], [-96.097814760073, 84.020791169082], [-96.096592582629, 84.02588190451], [-96.09510565163, 84.030901699437], [-96.09335804265, 84.035836794955], [-96.091354545764, 84.040673664308], [-96.089100652419, 84.045399049974], [-96.086602540378, 84.05], [-96.083867056795, 84.054463903501], [-96.080901699437, 84.058778525229], [-96.077714596146, 84.062932039105], [-96.074314482548, 84.066913060636], [-96.070710678119, 84.070710678119], [-96.066913060636, 84.074314482548], [-96.062932039105, 84.077714596146], [-96.058778525229, 84.080901699437], [-96.054463903501, 84.083867056795], [-96.05, 84.086602540378], [-96.045399049974, 84.089100652419], [-96.040673664308, 84.091354545764], [-96.035836794955, 84.09335804265], [-96.030901699437, 84.09510565163], [-96.02588190451, 84.096592582629], [-96.020791169082, 84.097814760073], [-96.015643446504, 84.09876883406], [-96.010452846327, 84.099452189537], [-96.005233595624, 84.099862953475], [-96, 84.1], [-90, 84.1], [-89.994766404376, 84.099862953475], [-89.989547153673, 84.099452189537], [-89.984356553496, 84.09876883406], [-89.979208830918, 84.097814760073], [-89.97411809549, 84.096592582629], [-89.969098300562, 84.09510565163], [-89.964163205045, 84.09335804265], [-89.959326335692, 84.091354545764], [-89.954600950026, 84.089100652419], [-89.95, 84.086602540378], [-89.945536096499, 84.083867056795], [-89.941221474771, 84.080901699437], [-89.937067960895, 84.077714596146], [-89.933086939364, 84.074314482548], [-89.929289321881, 84.070710678119], [-89.925685517452, 84.066913060636], [-89.922285403854, 84.062932039105], [-89.919098300563, 84.058778525229], [-89.916132943205, 84.054463903501], [-89.913397459622, 84.05], [-89.910899347581, 84.045399049974], [-89.908645454236, 84.040673664308], [-89.90664195735, 84.035836794955], [-89.90489434837, 84.030901699437], [-89.903407417371, 84.02588190451], [-89.902185239927, 84.020791169082], [-89.90123116594, 84.015643446504], [-89.900547810463, 84.010452846327], [-89.900137046525, 84.005233595624], [-89.9, 84], [-89.9, 25.761865297778], [-89.900134780666, 25.756675117882], [-89.900538759347, 25.751498928704], [-89.901210847073, 25.746350683248], [-89.902149232156, 25.741244259194], [-89.903351385071, 25.736193421486], [-89.90481406528, 25.73121178523], [-89.906533329963, 25.726312778991], [-89.908504544646, 25.721509608594], [-89.910722395697, 25.716815221531], [-89.913180904647, 25.712242272054], [-89.915873444307, 25.707803087065], [-89.91879275663, 25.703509632892], [-89.921930972281, 25.699373483026], [-89.925279631842, 25.695405786928], [-89.928829708623, 25.691617239973], [-89.93257163299, 25.688018054618], [-89.93649531816, 25.684617932875], [-89.940590187397, 25.681426040158], [-89.944845202515, 25.678450980575], [-89.949248893641, 25.675700773736], [-89.953789390124, 25.673182833136], [-89.958454452543, 25.670903946169], [-89.963231505693, 25.668870255833], [-89.968107672486, 25.66708724417], [-89.973069808662, 25.665559717491], [-89.97810453822, 25.664291793416], [-89.983198289477, 25.66328688978], [-89.988337331648, 25.662547715413], [-89.993507811863, 25.662076262843], [-89.998695792507, 25.661873802926], [-90.003887288791, 25.661940881413], [-90.047728624955, 25.66364640986], [-90.490182860443, 25.680858893336], [-91.071885419224, 25.605171383642], [-91.080147850185, 25.603154794391], [-91.084857593252, 25.602124922902], [-91.089611499023, 25.601323240318], [-91.09439851832, 25.600751609935], [-91.099207525001, 25.600411360354], [-91.104027341823, 25.600303282395], [-91.107008155356, 25.600380189676], [-91.135978971813, 25.596098530926], [-91.184160004757, 25.588965905332], [-91.232326216965, 25.581817193116], [-91.280498211179, 25.574648613606], [-91.328666091687, 25.567468077997], [-91.367682418845, 25.561639226268], [-91.376815984303, 25.560273077159], [-91.424978547332, 25.553055978518], [-91.473126486045, 25.545828493007], [-91.521264156129, 25.538582384445], [-91.569406779525, 25.531320294545], [-91.617545749948, 25.524043508218], [-91.638750050021, 25.520829906886], [-91.656702476852, 25.518110136444], [-91.662082891349, 25.517443652608], [-91.667491518891, 25.517069742228], [-91.672912461867, 25.516989504341], [-91.678329786466, 25.51720317479], [-91.683727569512, 25.517710125532], [-91.689089945268, 25.518508866483], [-91.694401152073, 25.519597049901], [-91.699645578661, 25.52097147728], [-91.70480781006, 25.522628108758], [-91.713739461266, 25.525763893531], [-91.738396549687, 25.534414544904], [-91.781087945867, 25.536330599881], [-91.829134796518, 25.538471443058], [-91.877168066546, 25.540600585063], [-91.92520913931, 25.5427087693], [-91.973251158927, 25.544805559017], [-92.021297420722, 25.546883157055], [-92.047894413689, 25.548024828537], [-92.069349970616, 25.548945804728], [-92.117400512885, 25.550995023987], [-92.16544676502, 25.553026907481], [-92.213504938898, 25.555041818393], [-92.261553224289, 25.557043298942], [-92.309614816735, 25.559025674347], [-92.357676987899, 25.560993138544], [-92.405740529546, 25.562948911118], [-92.453800436762, 25.56488357194], [-92.501870271592, 25.566803382821], [-92.54992432873, 25.56871116856], [-92.554557111932, 25.568892157933], [-92.598004393515, 25.570600627115], [-92.646076676819, 25.572472621713], [-92.694150191784, 25.574331321981], [-92.742221457026, 25.576172781675], [-92.790302680415, 25.577999112134], [-92.838374282061, 25.579810128409], [-92.88645320373, 25.581603979663], [-92.934544221405, 25.583383030733], [-92.943747257945, 25.583722375319], [-92.948916839652, 25.58404723559], [-92.954062664937, 25.584639343141], [-92.959170927496, 25.585497109341], [-92.964227921803, 25.586618232793], [-92.969220079889, 25.587999705512], [-92.974134007737, 25.58963782099], [-92.978956521227, 25.591528184146], [-92.983674681501, 25.593665723115], [-92.988275829685, 25.596044702857], [-92.992747620847, 25.598658740543], [-92.997078057123, 25.601500822682], [-93.001255519905, 25.604563323935], [-93.005268801015, 25.607838027579], [-93.009107132775, 25.611316147548], [-93.0127602169, 25.614988352008], [-93.016218252126, 25.618844788394], [-93.019471960505, 25.622875109846], [-93.022512612302, 25.627068502967], [-93.042717307065, 25.656508320441], [-93.061388832964, 25.683698566155], [-93.064989636356, 25.688939374296], [-93.071540916642, 25.692189244406], [-93.108930466052, 25.710724545955], [-93.110599905767, 25.711571703941], [-93.121342117284, 25.717149897785], [-93.169503666601, 25.742126753355], [-93.194421510907, 25.755040262257], [-93.21767020013, 25.767081143389], [-93.265867339973, 25.792028245739], [-93.278366548774, 25.798490695662], [-93.314077157617, 25.81695292952], [-93.362378862586, 25.841898798339], [-93.410570731285, 25.866757433419], [-93.446462335408, 25.885256768194], [-93.458844081054, 25.891635812446], [-93.469005230347, 25.896868249502],
                ],
            ],
        ];
    }
}
