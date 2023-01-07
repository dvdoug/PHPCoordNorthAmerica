<?php
/**
 * PHPCoord.
 *
 * @author Doug Wright
 */
declare(strict_types=1);

namespace PHPCoord\Geometry\Extents;

/**
 * North America/Greenland - 36°W to 30°W.
 * @internal
 */
class Extent3456
{
    public function __invoke(): array
    {
        return
        [
            [
                [
                    [-36.1, 60.161515108486], [-36.1, 84], [-36.099862953475, 84.005233595624], [-36.099452189537, 84.010452846327], [-36.09876883406, 84.015643446504], [-36.097814760073, 84.020791169082], [-36.096592582629, 84.02588190451], [-36.09510565163, 84.030901699437], [-36.09335804265, 84.035836794955], [-36.091354545764, 84.040673664308], [-36.089100652419, 84.045399049974], [-36.086602540378, 84.05], [-36.083867056795, 84.054463903501], [-36.080901699437, 84.058778525229], [-36.077714596146, 84.062932039105], [-36.074314482548, 84.066913060636], [-36.070710678119, 84.070710678119], [-36.066913060636, 84.074314482548], [-36.062932039105, 84.077714596146], [-36.058778525229, 84.080901699437], [-36.054463903501, 84.083867056795], [-36.05, 84.086602540378], [-36.045399049974, 84.089100652419], [-36.040673664308, 84.091354545764], [-36.035836794955, 84.09335804265], [-36.030901699437, 84.09510565163], [-36.02588190451, 84.096592582629], [-36.020791169082, 84.097814760073], [-36.015643446504, 84.09876883406], [-36.010452846327, 84.099452189537], [-36.005233595624, 84.099862953475], [-36, 84.1], [-30, 84.1], [-29.994766404376, 84.099862953475], [-29.989547153673, 84.099452189537], [-29.984356553496, 84.09876883406], [-29.979208830918, 84.097814760073], [-29.97411809549, 84.096592582629], [-29.969098300563, 84.09510565163], [-29.964163205045, 84.09335804265], [-29.959326335692, 84.091354545764], [-29.954600950026, 84.089100652419], [-29.95, 84.086602540378], [-29.945536096498, 84.083867056795], [-29.941221474771, 84.080901699437], [-29.937067960895, 84.077714596146], [-29.933086939364, 84.074314482548], [-29.929289321881, 84.070710678119], [-29.925685517452, 84.066913060636], [-29.922285403854, 84.062932039105], [-29.919098300562, 84.058778525229], [-29.916132943205, 84.054463903501], [-29.913397459622, 84.05], [-29.910899347581, 84.045399049974], [-29.908645454236, 84.040673664308], [-29.90664195735, 84.035836794955], [-29.90489434837, 84.030901699437], [-29.903407417371, 84.02588190451], [-29.902185239927, 84.020791169082], [-29.90123116594, 84.015643446504], [-29.900547810463, 84.010452846327], [-29.900137046525, 84.005233595624], [-29.9, 84], [-29.9, 64.960972508575], [-29.90013049122, 64.955865531392], [-29.900521624319, 64.950771882522], [-29.90117237851, 64.945704855495], [-29.902081055437, 64.940677674362], [-29.903245283615, 64.935703459181], [-29.904662024611, 64.930795191783], [-29.906327580981, 64.925965681881], [-29.908237605915, 64.92122753365], [-29.910387114583, 64.916593112824], [-29.912770497145, 64.912074514427], [-30.492520747357, 63.877853643269], [-30.584766870341, 63.678078253105], [-30.678655870679, 63.474744919755], [-30.772544871018, 63.271411586405], [-30.774823164446, 63.266793779049], [-30.777336141033, 63.262299369812], [-30.780077137678, 63.257940275513], [-30.783038886695, 63.253728054189], [-30.786213535074, 63.249673874446], [-30.789592665311, 63.245788485848], [-30.793167317719, 63.24208219041], [-30.796928014193, 63.238564815288], [-30.800864783334, 63.23524568672], [-30.804967186891, 63.232133605298], [-30.809224347436, 63.229236822632], [-30.813624977208, 63.226563019474], [-30.81815740804, 63.224119285351], [-30.822809622299, 63.221912099766], [-31.031566622322, 63.129377099817], [-31.037384892245, 63.127013747841], [-31.04334003321, 63.125020260052], [-31.268133238998, 63.057542114175], [-31.485055032815, 62.963222988982], [-31.490028263071, 62.961217374054], [-31.495101853699, 62.959481232193], [-32.545411854699, 62.631257231193], [-32.549609605727, 62.630045425491], [-32.553856283221, 62.629018139255], [-33.662799058356, 62.38627561886], [-34.012211209129, 62.017773113826], [-34.01555018115, 62.014414692792], [-34.019044412134, 62.011218120279], [-34.022686065315, 62.008190565473], [-34.026466973293, 62.00533881849], [-34.251581973293, 61.843764484824], [-34.476696973293, 61.682190151157], [-34.701811973293, 61.52061581749], [-34.705963387142, 61.517791344769], [-34.710251343874, 61.515178815309], [-34.714665032741, 61.512784815791], [-34.768967677848, 61.485072111904], [-35.049229589065, 61.277311625667], [-35.202254688298, 60.945779985548], [-35.204597572334, 60.94103787124], [-35.207187916242, 60.936426269332], [-35.21001847308, 60.93195808159], [-35.21308132387, 60.927645808552], [-35.216367899749, 60.923501514558], [-35.516043233082, 60.565489513891], [-35.665880899749, 60.386483513558], [-35.669291034222, 60.382616608781], [-35.672895938772, 60.378930603778], [-35.676686030851, 60.375435296679], [-35.680651235648, 60.372139978697], [-35.719429384503, 60.341568227839], [-35.906258498566, 60.111411169446], [-35.909718330796, 60.107373279299], [-35.91338790752, 60.103525006626], [-35.917256853012, 60.099877232416], [-35.921314227829, 60.096440270749], [-35.937415693829, 60.083520207235], [-35.941574971028, 60.080357755217], [-35.945893752585, 60.07741686837], [-35.950360247928, 60.074705575517], [-35.954962263217, 60.072231278676], [-35.959687234634, 60.070000732847], [-35.96452226268, 60.068020027574], [-35.969454147395, 60.06629457032], [-35.974469424395, 60.0648290717], [-35.979554401626, 60.063627532629], [-35.984695196751, 60.06269323339], [-35.989877775044, 60.062028724684], [-35.995087987709, 60.061635820667], [-36.000311610507, 60.061515593993], [-36.005534382586, 60.061668372889], [-36.010742045419, 60.062093740258], [-36.015920381727, 60.062790534819], [-36.021055254296, 60.063756854274], [-36.026132644568, 60.064990060504], [-36.031138690919, 60.066486786771], [-36.036059726496, 60.06824294691], [-36.040882316533, 60.070253746481], [-36.045593295027, 60.072513695864], [-36.050179800681, 60.075016625241], [-36.054629312019, 60.077755701442], [-36.058929681569, 60.0807234466], [-36.063069169023, 60.083911758567], [-36.067036473298, 60.08731193303], [-36.070820763377, 60.090914687278], [-36.074411707889, 60.094710185546], [-36.077799503307, 60.098688065859], [-36.080974900716, 60.102837468332], [-36.083929231062, 60.107147064808], [-36.08665442882, 60.111605089793], [-36.089143054011, 60.11619937257], [-36.091388312518, 60.120917370432], [-36.09338407463, 60.125746202918], [-36.095124891778, 60.130672686982], [-36.096606011412, 60.135683372984], [-36.097823389973, 60.140764581406], [-36.098773703934, 60.145902440197], [-36.099454358872, 60.151082922649], [-36.099863496552, 60.156291885688], [-36.1, 60.161515108486],
                ],
            ],
        ];
    }
}
