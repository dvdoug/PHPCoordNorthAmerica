<?php
/**
 * PHPCoord.
 *
 * @author Doug Wright
 */
declare(strict_types=1);

namespace PHPCoord\Geometry\Extents;

/**
 * North America/Canada - 60°W to 54°W and NAD27.
 * @internal
 */
class Extent3891
{
    public function __invoke(): array
    {
        return
        [
            [
                [
                    [-53.9, 57.744712897771], [-54.184258551291, 57.840461169647], [-54.43894108956, 57.877517816394], [-54.693623627828, 57.914574463141], [-54.832582550944, 57.934793169769], [-54.92366155124, 58.111363169875], [-55.062193051768, 58.23752016992], [-55.200724552296, 58.363677169965], [-55.226213633253, 58.465735908585], [-55.28054309269, 58.683272039673], [-55.334872552127, 58.900808170761], [-55.476171551676, 59.025580170788], [-55.515967552261, 59.140297171178], [-55.671023552195, 59.320813171141], [-55.82607955213, 59.501329171104], [-56.008633552097, 59.64430717074], [-56.163239552413, 59.801495671438], [-56.31784555273, 59.958684172137], [-56.532215552655, 60.121242172239], [-56.746585552581, 60.28380017234], [-56.907501552954, 60.385390171719], [-56.9614895533, 60.454090172424], [-57.004048552698, 60.512963172313], [-57.059809052897, 60.806447672589], [-57.115569553096, 61.099932172866], [-57.152649764847, 61.378509455911], [-57.189729976599, 61.657086738956], [-57.219296764852, 61.879216956462], [-57.248863553105, 62.101347173967], [-57.25080655294, 62.134125173869], [-57.265806553015, 62.15134817394], [-57.316357553079, 62.284685174041], [-57.649126553599, 62.584277674013], [-57.781895554118, 62.883870173985], [-57.887875267586, 63.115421361902], [-57.993854981055, 63.34697254982], [-58.04965555418, 63.468889175148], [-58.083818554091, 63.568336174887], [-58.131870554091, 63.683340174955], [-58.115757553984, 63.717230174867], [-58.067415554042, 63.833621174989], [-58.04907655387, 63.933624174958], [-58.033518553969, 63.968347175191], [-57.983233554192, 64.051126175067], [-57.915446554207, 64.167518175212], [-57.89905055387, 64.300577176148], [-57.876717887277, 64.600400509455], [-57.854385220684, 64.900223842761], [-57.832052554091, 65.200047176068], [-57.817604554153, 65.235882175861], [-57.832880553847, 65.285050176912], [-57.848711554197, 65.334774176794], [-57.850652553986, 65.400331177071], [-57.834257554121, 65.484223176979], [-57.799244553946, 65.668950177155], [-57.784241553802, 65.718674177036], [-57.767004553858, 65.935903177045], [-57.76672555417, 65.952014177106], [-57.765330553931, 66.051739176961], [-57.750045554029, 66.151465176838], [-57.732257553971, 66.302580177217], [-57.717250554185, 66.402306178044], [-57.717243554023, 66.501753177784], [-57.732515554075, 66.600923177881], [-57.748898554112, 66.700371178094], [-57.750008554076, 66.719260177908], [-57.766671553825, 66.785652178103], [-57.780432327636, 66.823382045728], [-57.81499855387, 66.918157177906], [-57.890956053839, 67.184972178462], [-57.966913553809, 67.451787179018], [-58.000796554009, 67.550957179115], [-58.015796554084, 67.567624178956], [-58.031907554145, 67.583736179041], [-58.050517553821, 67.602070179098], [-58.132182554091, 67.684296178813], [-58.198847553836, 67.752077179109], [-58.250788554024, 67.834025179159], [-58.417171553912, 68.035978179025], [-58.482446553983, 68.119037179061], [-58.514944554174, 68.167650178956], [-58.533553553827, 68.202374179212], [-58.548831554016, 68.218208179182], [-58.665214554904, 68.367103179184], [-58.748268554825, 68.452107179102], [-58.799377555165, 68.517665179902], [-58.958270055009, 68.576835679961], [-59.117162554854, 68.636006180021], [-59.166607555047, 68.666841180088], [-59.332445554959, 68.719344180195], [-59.333277554808, 68.733511179949], [-59.588851703205, 68.830132148611], [-59.844425851603, 68.926753117273], [-60.1, 69.023374085935], [-60.1, 68.766666666667], [-60.1, 68.6], [-60.1, 68.433333333333], [-60.1, 68.266666666666], [-60.1, 68.1], [-60.1, 67.933333333333], [-60.1, 67.766666666667], [-60.1, 67.6], [-60.1, 67.433333333333], [-60.1, 67.266666666666], [-60.1, 67.1], [-60.1, 66.933333333333], [-60.1, 66.766666666667], [-60.1, 66.6], [-60.1, 66.433333333333], [-60.1, 66.266666666666], [-60.1, 66.1], [-60.1, 65.933333333333], [-60.1, 65.766666666667], [-60.1, 65.6], [-60.1, 65.433333333333], [-60.1, 65.266666666666], [-60.1, 65.1], [-60.1, 64.933333333333], [-60.1, 64.766666666667], [-60.1, 64.6], [-60.1, 64.433333333333], [-60.1, 64.266666666666], [-60.1, 64.1], [-60.1, 63.933333333334], [-60.1, 63.766666666667], [-60.1, 63.6], [-60.1, 63.433333333334], [-60.1, 63.266666666667], [-60.1, 63.1], [-60.1, 62.933333333334], [-60.1, 62.766666666667], [-60.1, 62.6], [-60.1, 62.433333333333], [-60.1, 62.266666666667], [-60.1, 62.1], [-60.1, 61.933333333334], [-60.1, 61.766666666667], [-60.1, 61.6], [-60.1, 61.433333333333], [-60.1, 61.266666666667], [-60.1, 61.1], [-60.1, 60.933333333334], [-60.1, 60.766666666667], [-60.1, 60.6], [-60.1, 60.433333333333], [-60.1, 60.266666666667], [-60.1, 60.1], [-60.1, 59.933333333334], [-60.1, 59.766666666667], [-60.1, 59.6], [-60.1, 59.433333333333], [-60.1, 59.266666666667], [-60.1, 59.1], [-60.1, 58.933333333334], [-60.1, 58.766666666667], [-60.1, 58.6], [-60.1, 58.433333333333], [-60.1, 58.266666666667], [-60.1, 58.1], [-60.1, 57.933333333334], [-60.1, 57.766666666667], [-60.1, 57.6], [-60.1, 57.433333333333], [-60.1, 57.266666666667], [-60.1, 57.1], [-60.1, 56.933333333334], [-60.1, 56.766666666667], [-60.1, 56.6], [-60.1, 56.433333333333], [-60.1, 56.266666666667], [-60.1, 56.1], [-60.1, 55.933333333334], [-60.1, 55.766666666667], [-60.1, 55.6], [-60.1, 55.433333333333], [-60.1, 55.266666666667], [-60.1, 55.1], [-60.1, 54.933333333334], [-60.1, 54.766666666667], [-60.1, 54.6], [-60.1, 54.433333333333], [-60.1, 54.266666666667], [-60.1, 54.1], [-60.1, 53.933333333334], [-60.1, 53.766666666667], [-60.1, 53.6], [-60.1, 53.433333333333], [-60.1, 53.266666666667], [-60.1, 53.1], [-60.1, 52.933333333334], [-60.1, 52.566666666667], [-60.1, 52.4], [-60.1, 52.233333333333], [-60.1, 52.066666666666], [-60.1, 51.9], [-60.1, 51.733333333333], [-60.1, 51.566666666667], [-60.1, 51.4], [-60.1, 51.233333333333], [-60.1, 51.066666666666], [-60.1, 50.9], [-60.1, 50.733333333333], [-60.1, 50.566666666667], [-60.1, 50.4], [-60.1, 50.233333333333], [-60.1, 50.066666666666], [-60.1, 49.9], [-60.1, 49.733333333333], [-60.1, 49.566666666667], [-60.1, 49.4], [-60.1, 49.233333333333], [-60.1, 49.066666666666], [-60.1, 48.9], [-60.1, 48.733333333333], [-60.1, 48.566666666667], [-60.1, 48.4], [-60.1, 48.233333333333], [-60.1, 48.066666666666], [-60.1, 47.9], [-60.1, 47.733333333333], [-60.1, 47.566666666667], [-60.1, 47.4], [-60.1, 47.233333333333], [-60.1, 47.066666666666], [-60.1, 46.9], [-60.1, 46.733333333333], [-60.1, 46.566666666667], [-60.1, 46.4], [-60.1, 46.233333333333], [-60.1, 46.066666666666], [-60.1, 45.9], [-60.1, 45.733333333333], [-60.1, 45.566666666667], [-60.1, 45.4], [-60.1, 45.233333333333], [-60.1, 45.066666666666], [-60.1, 44.9], [-60.1, 44.733333333333], [-60.1, 44.566666666667], [-60.1, 44.4], [-60.1, 44.233333333333], [-60.1, 44.066666666666], [-60.1, 43.9], [-60.1, 43.733333333333], [-60.1, 43.566666666667], [-60.1, 43.4], [-60.1, 43.233333333333], [-60.1, 43.066666666666], [-60.1, 42.9], [-60.1, 42.733333333333], [-60.1, 42.566666666667], [-60.1, 42.4], [-60.1, 42.233333333333], [-60.1, 42.066666666666], [-60.1, 41.9], [-60.1, 41.733333333333], [-60.1, 41.566666666667], [-60.1, 41.4], [-60.1, 41.233333333333], [-60.1, 41.066666666666], [-60.1, 40.9], [-60.1, 40.733333333333], [-60.1, 40.566666666667], [-60.1, 40.476463425566], [-60.099905556396, 40.476478154443], [-60.091198555969, 40.475190154402], [-60.090280555903, 40.47533615394], [-60.089294556299, 40.475190154402], [-60.084130555581, 40.476007154307], [-60.073181556084, 40.475977153823], [-60.070393556118, 40.475883153985], [-60.06986055582, 40.475968154307], [-60.059506555883, 40.475938153823], [-60.058544555587, 40.476086154353], [-60.052417556325, 40.475177153803], [-60.041370555906, 40.476920154142], [-60.040670556001, 40.476815153796], [-60.034228555703, 40.476815153796], [-60.022934555585, 40.475112154403], [-60.021059556353, 40.475112154403], [-60.009862556212, 40.476850153612], [-59.998516556394, 40.475161153964], [-59.997605555752, 40.475304154263], [-59.996640556217, 40.475161153964], [-59.988058556157, 40.47651015412], [-59.984348555941, 40.4759571538], [-59.977723556197, 40.476997154096], [-59.976787556201, 40.476858153981], [-59.965683555851, 40.47860115432], [-59.965417556175, 40.478561154274], [-59.958199556065, 40.479693154316], [-59.955981556304, 40.47936215434], [-59.954590556009, 40.479580153601], [-59.9531255559, 40.479361154294], [-59.93818255568, 40.481703154377], [-59.920885555724, 40.479390153833], [-59.918028556173, 40.479487153809], [-59.908211555819, 40.481180153641], [-59.894617555755, 40.479237153972], [-59.888932556192, 40.479330153764], [-59.845657556151, 40.486379154175], [-59.819683556251, 40.482769154073], [-59.815903556404, 40.482863153912], [-59.787378555776, 40.487624154032], [-59.767627555967, 40.484955154157], [-59.764770556416, 40.485048153949], [-59.605349554838, 40.512160154168], [-59.305588554768, 40.527273154133], [-59.304663555279, 40.527367153971], [-58.999476888048, 40.588107487271], [-58.694290220817, 40.648847820571], [-58.389103553586, 40.70958815387], [-58.340389553635, 40.717150153657], [-58.289760554406, 40.724758153766], [-58.280339554327, 40.726061153599], [-58.28016755359, 40.726146153922], [-58.275596554138, 40.726778154288], [-58.275293553655, 40.726927153965], [-58.270821554271, 40.727597154285], [-58.269913553767, 40.728044154214], [-58.267932554144, 40.728350153937], [-58.267747553707, 40.728441153636], [-58.263189553955, 40.729070153865], [-58.261782553822, 40.729763154346], [-58.261256553847, 40.729836154115], [-58.259965553667, 40.730472153767], [-58.258393554019, 40.730689153881], [-58.256974554232, 40.731387153694], [-58.256459553865, 40.73145815427], [-58.255866554398, 40.731750154246], [-58.252643554157, 40.732195154083], [-58.252189553905, 40.732418153575], [-58.24786855429, 40.73301415408], [-58.247285554385, 40.733301153825], [-58.244052553682, 40.733747153708], [-58.243458554169, 40.734039153684], [-58.240236553974, 40.734483154374], [-58.238943553702, 40.735120154072], [-58.237373554146, 40.73533615414], [-58.234241553605, 40.736878154204], [-58.23353355423, 40.73697515418], [-58.232113554397, 40.737674154039], [-58.231599554076, 40.737745153716], [-58.230595553642, 40.738239154014], [-58.228739554387, 40.738494154082], [-58.22602455419, 40.739830153639], [-58.223943553552, 40.740117154283], [-58.220808553772, 40.741659154347], [-58.22010255359, 40.741756154323], [-58.218699553641, 40.742426153744], [-58.21819855392, 40.742522153675], [-58.216776553995, 40.743221154433], [-58.216264553766, 40.74329215411], [-58.215248553678, 40.743792153785], [-58.213404554077, 40.744045153761], [-58.212121554266, 40.744676154081], [-58.210512553811, 40.744898154426], [-58.209088553794, 40.745598154331], [-58.208608554141, 40.745664153778], [-58.205888553714, 40.74700115428], [-58.203812554206, 40.747286153933], [-58.199261553878, 40.749523153671], [-58.198038554136, 40.749691154223], [-58.196602553565, 40.750397154405], [-58.196134553567, 40.750461153759], [-58.194471554219, 40.751278153664], [-58.194197554174, 40.751330154263], [-58.032666554218, 40.830472153567], [-57.874732553764, 40.884937154326], [-57.857964553921, 40.887637153832], [-57.855058553909, 40.888680154266], [-57.838322553743, 40.897443153679], [-57.735582554391, 40.932628153866], [-57.734610553634, 40.933009154349], [-57.7135155539, 40.944443153729], [-57.658879554248, 40.96341415444], [-57.657935553883, 40.963795154023], [-57.260337053512, 41.071400653817], [-57.062738553142, 41.179006153611], [-56.800105552929, 41.290468154082], [-56.798152552798, 41.291612153778], [-56.794935552833, 41.293688154185], [-56.794839552903, 41.293728154231], [-56.792887552818, 41.294873153973], [-56.699657553153, 41.354909154434], [-56.682860552872, 41.362310153991], [-56.680898553226, 41.363555153847], [-56.677400552893, 41.367037154341], [-56.65494955268, 41.377224153772], [-56.653949553329, 41.377892154], [-56.637215553255, 41.395000154234], [-56.600316553166, 41.418647153843], [-56.541579553254, 41.44600115443], [-56.540464553097, 41.447135153664], [-56.5395935534, 41.447540154355], [-56.539188552709, 41.447964154122], [-56.536636552835, 41.449151154003], [-56.529501552954, 41.455502154601], [-56.527612553077, 41.456381154667], [-56.526572552781, 41.457469155377], [-56.525597552785, 41.457922154684], [-56.524510553019, 41.459059154956], [-56.521628553215, 41.460399154697], [-56.519236552625, 41.462526154758], [-56.518629553411, 41.462808155172], [-56.516989553325, 41.464525155212], [-56.512500553158, 41.468517154943], [-56.5076325526, 41.470778154888], [-56.491057552664, 41.484737154696], [-56.479712552892, 41.490738155342], [-56.478156553082, 41.492008154553], [-56.474756552773, 41.493585155331], [-56.472943552803, 41.495066155279], [-56.470786553157, 41.496066154629], [-56.467441552686, 41.499559154731], [-56.422790553042, 41.535990154822], [-56.422717553272, 41.536026154683], [-56.421707552561, 41.536791154888], [-56.421405553024, 41.537119154725], [-56.419497553169, 41.538675155434], [-56.40808955319, 41.544209155228], [-56.407078553333, 41.544978154718], [-56.397753553184, 41.555139154748], [-56.381502552901, 41.56301915481], [-56.379480553185, 41.564557154689], [-56.367443552977, 41.577665154823], [-56.362778552788, 41.57996215463], [-56.361795553322, 41.580732155065], [-56.352361552643, 41.59116215491], [-56.342778553188, 41.595804154938], [-56.340756552573, 41.597342154817], [-56.340710553149, 41.597392155324], [-56.335492552639, 41.599970154599], [-56.332449552605, 41.602372154751], [-56.326920553041, 41.608506155235], [-56.321033553156, 41.61143215527], [-56.318018552614, 41.613837154661], [-56.317382552962, 41.614546154981], [-56.31376755263, 41.61634115502], [-56.310753553034, 41.618743155173], [-56.308235552928, 41.62154915507], [-56.302949552879, 41.624174154714], [-56.296919552695, 41.628982155202], [-56.294851552657, 41.631287155378], [-56.29221955269, 41.632578154658], [-56.29123755327, 41.633344154909], [-56.287632553399, 41.637314155424], [-56.284652552673, 41.638799154657], [-56.282620553396, 41.640431155274], [-56.27872855288, 41.644786154657], [-56.275891553352, 41.646201155159], [-56.273859553176, 41.647837155061], [-56.26601955226, 41.656618155304], [-56.240156552083, 41.676095155067], [-56.238152552298, 41.677732155015], [-56.220600552274, 41.697520154731], [-56.131566551855, 41.766776154996], [-56.130573551928, 41.767644154554], [-56.116358552005, 41.784226154813], [-56.012463551552, 41.867689154631], [-56.010399551698, 41.869621154693], [-55.969198551972, 41.919384155355], [-55.965530551893, 41.92240615532], [-55.963485552017, 41.924436155404], [-55.918049552145, 41.981017154818], [-55.892302551921, 42.011982154653], [-55.813418551925, 42.080276154621], [-55.812366551975, 42.081440155239], [-55.713470551824, 42.211378155178], [-55.637195551633, 42.281394155416], [-55.63612355166, 42.282755155226], [-55.47911055231, 42.503391154978], [-55.45056255242, 42.536965156417], [-55.440445551721, 42.547044156263], [-55.334346051679, 42.742704656295], [-55.228246551637, 42.938365156327], [-55.227054552426, 42.941019156409], [-55.165297551741, 43.180498156365], [-55.103540551056, 43.419977156321], [-55.045943550654, 43.417614156169], [-54.779003550573, 43.361745656112], [-54.512063550492, 43.305877156056], [-54.245123550411, 43.250008656], [-53.97818355033, 43.194140155944], [-53.951479550041, 43.192061156297], [-53.9, 43.196074474469], [-53.9, 43.233333333333], [-53.9, 43.4], [-53.9, 43.566666666667], [-53.9, 43.733333333333], [-53.9, 43.9], [-53.9, 44.066666666666], [-53.9, 44.233333333333], [-53.9, 44.4], [-53.9, 44.566666666667], [-53.9, 44.733333333333], [-53.9, 44.9], [-53.9, 45.066666666666], [-53.9, 45.233333333333], [-53.9, 45.4], [-53.9, 45.566666666667], [-53.9, 45.733333333333], [-53.9, 45.9], [-53.9, 46.066666666666], [-53.9, 46.233333333333], [-53.9, 46.4], [-53.9, 46.566666666667], [-53.9, 46.733333333333], [-53.9, 46.9], [-53.9, 47.066666666666], [-53.9, 47.233333333333], [-53.9, 47.4], [-53.9, 47.566666666667], [-53.9, 47.733333333333], [-53.9, 47.9], [-53.9, 48.066666666667], [-53.9, 48.233333333334], [-53.9, 48.4], [-53.9, 48.566666666667], [-53.9, 48.733333333333], [-53.9, 48.9], [-53.9, 49.066666666667], [-53.9, 49.233333333334], [-53.9, 49.4], [-53.9, 49.566666666667], [-53.9, 49.733333333333], [-53.9, 49.9], [-53.9, 50.066666666667], [-53.9, 50.233333333334], [-53.9, 50.4], [-53.9, 50.566666666667], [-53.9, 50.733333333333], [-53.9, 50.9], [-53.9, 51.066666666667], [-53.9, 51.233333333334], [-53.9, 51.4], [-53.9, 51.566666666667], [-53.9, 51.733333333333], [-53.9, 51.9], [-53.9, 52.066666666667], [-53.9, 52.233333333334], [-53.9, 52.4], [-53.9, 52.566666666667], [-53.9, 52.933333333334], [-53.9, 53.1], [-53.9, 53.266666666667], [-53.9, 53.433333333334], [-53.9, 53.6], [-53.9, 53.766666666667], [-53.9, 53.933333333334], [-53.9, 54.1], [-53.9, 54.266666666667], [-53.9, 54.433333333334], [-53.9, 54.6], [-53.9, 54.766666666667], [-53.9, 54.933333333334], [-53.9, 55.1], [-53.9, 55.266666666667], [-53.9, 55.433333333334], [-53.9, 55.6], [-53.9, 55.766666666667], [-53.9, 55.933333333334], [-53.9, 56.1], [-53.9, 56.266666666667], [-53.9, 56.433333333334], [-53.9, 56.6], [-53.9, 56.766666666667], [-53.9, 56.933333333334], [-53.9, 57.1], [-53.9, 57.266666666667], [-53.9, 57.433333333334], [-53.9, 57.744712897771],
                ],
                [
                    [-56.156544281193, 43.747917911982], [-56.157222551679, 43.416111156305], [-56.398027553429, 43.417917155952], [-56.398698836182, 43.747917911982], [-56.399363194606, 44.074514534418], [-56.400027553029, 44.401111156854], [-56.400722219655, 44.72888882386], [-56.40141688628, 45.056666490866], [-56.402111552906, 45.384444157872], [-56.402852219554, 45.712203491598], [-56.403592886203, 46.039962825324], [-56.404333552851, 46.36772215905], [-56.506666553219, 46.397944158796], [-56.688138552752, 46.457889158658], [-56.837916553006, 46.554139159095], [-56.898694552611, 46.609750158743], [-56.924487954256, 46.665031314943], [-56.98674955285, 46.798472158963], [-57.096777552842, 46.982944160145], [-56.868416552982, 47.129611159927], [-56.662527553404, 47.216389159732], [-56.631111552556, 47.241194159683], [-56.494444552574, 47.365000160129], [-56.254999552387, 47.305278159759], [-56.104999551788, 47.100555159993], [-56.129722551554, 46.931111160252], [-56.099444551925, 46.86000015898], [-56.09166655207, 46.855555159043], [-55.982499552213, 46.802778158785], [-55.924444552274, 46.698889158608], [-55.910901542872, 46.665031314943], [-55.903333551802, 46.646111159203], [-55.95338855244, 46.617139158645], [-56.029194551687, 46.581111159153], [-56.150444552074, 46.554778158885], [-56.151041801963, 46.293166908576], [-56.151639051851, 46.031555658267], [-56.152236301739, 45.769944407958], [-56.152833551627, 45.508333157649], [-56.153396051711, 45.246874907426], [-56.153958551796, 44.985416657203], [-56.15452105188, 44.72395840698], [-56.155083551964, 44.462500156757], [-56.155570461707, 44.224306075165], [-56.15605737145, 43.986111993574], [-56.156544281193, 43.747917911982],
                ],
            ],
        ];
    }
}
