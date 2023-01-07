<?php
/**
 * PHPCoord.
 *
 * @author Doug Wright
 */
declare(strict_types=1);

namespace PHPCoord\Geometry\Extents;

/**
 * North America/Greenland - 18°W to 12°W.
 * @internal
 */
class Extent3459
{
    public function __invoke(): array
    {
        return
        [
            [
                [
                    [-18.1, 68.674916377983], [-18.1, 84], [-18.099862953475, 84.005233595624], [-18.099452189537, 84.010452846327], [-18.09876883406, 84.015643446504], [-18.097814760073, 84.020791169082], [-18.096592582629, 84.02588190451], [-18.09510565163, 84.030901699437], [-18.09335804265, 84.035836794955], [-18.091354545764, 84.040673664308], [-18.089100652419, 84.045399049974], [-18.086602540378, 84.05], [-18.083867056795, 84.054463903501], [-18.080901699437, 84.058778525229], [-18.077714596146, 84.062932039105], [-18.074314482548, 84.066913060636], [-18.070710678119, 84.070710678119], [-18.066913060636, 84.074314482548], [-18.062932039105, 84.077714596146], [-18.058778525229, 84.080901699437], [-18.054463903501, 84.083867056795], [-18.05, 84.086602540378], [-18.045399049974, 84.089100652419], [-18.040673664308, 84.091354545764], [-18.035836794955, 84.09335804265], [-18.030901699437, 84.09510565163], [-18.02588190451, 84.096592582629], [-18.020791169082, 84.097814760073], [-18.015643446504, 84.09876883406], [-18.010452846327, 84.099452189537], [-18.005233595624, 84.099862953475], [-18, 84.1], [-12, 84.1], [-11.994766404376, 84.099862953475], [-11.989547153673, 84.099452189537], [-11.984356553496, 84.09876883406], [-11.979208830918, 84.097814760073], [-11.97411809549, 84.096592582629], [-11.969098300563, 84.09510565163], [-11.964163205045, 84.09335804265], [-11.959326335692, 84.091354545764], [-11.954600950026, 84.089100652419], [-11.95, 84.086602540378], [-11.945536096498, 84.083867056795], [-11.941221474771, 84.080901699437], [-11.937067960895, 84.077714596146], [-11.933086939364, 84.074314482548], [-11.929289321881, 84.070710678119], [-11.925685517452, 84.066913060636], [-11.922285403854, 84.062932039105], [-11.919098300562, 84.058778525229], [-11.916132943205, 84.054463903501], [-11.913397459622, 84.05], [-11.910899347581, 84.045399049974], [-11.908645454236, 84.040673664308], [-11.90664195735, 84.035836794955], [-11.90489434837, 84.030901699437], [-11.903407417371, 84.02588190451], [-11.902185239927, 84.020791169082], [-11.90123116594, 84.015643446504], [-11.900547810463, 84.010452846327], [-11.900137046525, 84.005233595624], [-11.9, 84], [-11.9, 72.439883918958], [-11.900136593972, 72.434658965706], [-11.90054600273, 72.429448286396], [-11.901227107818, 72.424266115976], [-11.90217804854, 72.41912661151], [-11.903396227039, 72.414043813507], [-11.9048783154, 72.409031607556], [-11.906620264735, 72.4041036864], [-11.908617316249, 72.399273512526], [-11.910864014239, 72.394554281387], [-11.913354220995, 72.389958885352], [-11.916081133573, 72.38549987849], [-11.919037302377, 72.381189442271], [-11.92221465151, 72.377039352285], [-11.925604500838, 72.373060946079], [-11.9291975897, 72.369265092179], [-11.932984102211, 72.365662160399], [-11.936953694075, 72.362261993516], [-11.941095520847, 72.359073880376], [-12.452447195539, 71.986336723084], [-12.686259417561, 71.815905086131], [-12.94004088712, 71.235912471717], [-13.07235443496, 70.933522858054], [-13.204667982801, 70.631133244391], [-13.336981530641, 70.328743630729], [-13.469295078482, 70.026354017066], [-13.508988986634, 69.935637489949], [-13.199812859484, 69.657701111875], [-13.195961798565, 69.654049823284], [-13.192309860352, 69.650199378394], [-13.188867329642, 69.646160621049], [-13.185643901491, 69.641944925433], [-13.182648653903, 69.637564164031], [-13.179890022268, 69.633030674197], [-13.177375775605, 69.628357223407], [-13.175112994679, 69.623556973304], [-13.173108052065, 69.61864344263], [-13.1713665942, 69.613630469153], [-13.169893525476, 69.608532170701], [-13.168692994437, 69.603362905396], [-13.167768382085, 69.598137231222], [-13.16712229237, 69.592869865025], [-13.166756544844, 69.587575641067], [-13.166672169549, 69.582269469247], [-13.166869404106, 69.576966293114], [-13.167347693053, 69.571681047778], [-13.168105689403, 69.566428617854], [-13.169141258445, 69.561223795539], [-13.170451483748, 69.556081238954], [-13.17203267538, 69.551015430865], [-13.173880380299, 69.546040637894], [-13.175989394889, 69.54117087034], [-13.178353779623, 69.536419842725], [-13.180966875784, 69.531800935167], [-13.183821324218, 69.527327155701], [-13.186909086063, 69.523011103644], [-13.190221465386, 69.518864934111], [-13.193749133671, 69.514900323785], [-13.197482156097, 69.511128438031], [-13.201410019508, 69.507559899451], [-13.205521662028, 69.50420475797], [-13.498854663061, 69.277537756973], [-13.502948941062, 69.274536817122], [-13.507190231269, 69.271747514393], [-13.511567604407, 69.269177036469], [-13.51606978053, 69.266832007153], [-13.520685158093, 69.264718469292], [-13.525401843843, 69.262841869209], [-13.53020768347, 69.261207042669], [-13.535090292925, 69.259818202416], [-13.540037090333, 69.258678927318], [-13.545035328413, 69.257792153144], [-14.14336866206, 69.167236819832], [-14.442535328884, 69.121959153176], [-15.040868662532, 69.031403819864], [-15.340035329356, 68.986126153208], [-15.346210140253, 68.985387194377], [-15.738345567642, 68.950787038692], [-16.367869016056, 68.836929878915], [-16.684869016259, 68.779596478923], [-17.001869016463, 68.722263078931], [-17.318869016667, 68.664929678939], [-17.32345420545, 68.664209848472], [-17.54456536679, 68.634737581137], [-17.765676528129, 68.605265313803], [-17.986787689469, 68.575793046469], [-17.991919300323, 68.57524340124], [-17.997072434557, 68.574959240366], [-18.00223336652, 68.574941320724], [-18.00738834979, 68.575189690044], [-18.012523653792, 68.57570368678], [-18.017625600365, 68.576481941876], [-18.022680600201, 68.577522382406], [-18.027675189034, 68.5788222371], [-18.032596063506, 68.580378043727], [-18.037430116604, 68.58218565831], [-18.042164472566, 68.584240266172], [-18.046786521179, 68.586536394752], [-18.051283951367, 68.589067928188], [-18.055644783982, 68.591828123605], [-18.059857403711, 68.594809629072], [-18.063910590014, 68.59800450319], [-18.06779354701, 68.601404236239], [-18.071495932234, 68.604999772845], [-18.075007884183, 68.608781536104], [-18.078320048583, 68.612739453084], [-18.081423603306, 68.61686298166], [-18.084310281866, 68.621141138591], [-18.086972395439, 68.625562528775], [-18.089402853341, 68.630115375601], [-18.091595181917, 68.634787552315], [-18.093543541782, 68.639566614322], [-18.095242743373, 68.644439832334], [-18.096688260776, 68.64939422627], [-18.097876243777, 68.654416599835], [-18.098803528119, 68.659493575665], [-18.099467643929, 68.664611630963], [-18.099866822301, 68.66975713351], [-18.1, 68.674916377983],
                ],
            ],
        ];
    }
}
