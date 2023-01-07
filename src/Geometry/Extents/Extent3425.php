<?php
/**
 * PHPCoord.
 *
 * @author Doug Wright
 */
declare(strict_types=1);

namespace PHPCoord\Geometry\Extents;

/**
 * North America/Mexico - 108°W to 102°W.
 * @internal
 */
class Extent3425
{
    public function __invoke(): array
    {
        return
        [
            [
                [
                    [-107.83857008668, 16.952458345537], [-107.83932073596, 16.951115646116], [-107.84249432463, 16.946150316893], [-107.84595487735, 16.94138054392], [-107.92082427596, 16.84433583784], [-107.92416231952, 16.840237785637], [-107.92771222752, 16.836321828557], [-107.93146408274, 16.832598906441], [-107.93540740378, 16.829079419854], [-107.93953117435, 16.825773201034], [-107.94382387407, 16.82268948642], [-107.94827351059, 16.819836890854], [-107.95286765317, 16.817223383506], [-107.95759346734, 16.814856265621], [-107.9624377508, 16.812742150111], [-107.9673869703, 16.810886943091], [-107.9724272994, 16.809295827371], [-107.97754465715, 16.807973247983], [-107.98272474743, 16.80692289976], [-107.98795309883, 16.806147717013], [-107.99321510514, 16.805649865337], [-107.99849606611, 16.805430735559], [-108.00378122856, 16.805490939853], [-108.00905582756, 16.805830310027], [-108.01430512768, 16.806447897998], [-108.01951446418, 16.807341978438], [-108.02466928398, 16.808510053593], [-108.02975518626, 16.809948860262], [-108.03475796277, 16.811654378912], [-108.03966363746, 16.813621844912], [-108.04445850557, 16.815845761834], [-108.04912917188, 16.818319916821], [-108.05366258815, 16.821037397931], [-108.05804608957, 16.823990613457], [-108.06226743015, 16.827171313127], [-108.06631481691, 16.830570611158], [-108.07017694283, 16.83417901108], [-108.07384301848, 16.837986432261], [-108.07730280208, 16.841982238074], [-108.08054662819, 16.84615526561], [-108.08356543468, 16.850493856862], [-108.08635078803, 16.854985891296], [-108.08889490693, 16.85961881971], [-108.09119068398, 16.864379699293], [-108.09323170557, 16.869255229781], [-108.09501226978, 16.874231790617], [-108.09652740234, 16.879295478998], [-108.09777287047, 16.884432148716], [-108.09874519477, 16.889627449682], [-108.09944165889, 16.894866868007], [-108.09986031717, 16.900135766556], [-108.1, 16.905419425834], [-108.1, 31.783340197972], [-108.09986240889, 31.788584174497], [-108.0994500142, 31.793813720531], [-108.09876395077, 31.799014445294], [-108.0978061065, 31.804172037317], [-108.09657911724, 31.809272303824], [-108.09508635942, 31.814301209788], [-108.09333194085, 31.819244916556], [-108.09132068939, 31.824089819925], [-108.08905813964, 31.828822587583], [-108.08655051772, 31.833430195797], [-108.08380472418, 31.837899965246], [-108.08082831495, 31.842219595922], [-108.07762948057, 31.846377200968], [-108.07421702367, 31.850361339396], [-108.07060033472, 31.854161047565], [-108.06678936621, 31.857765869355], [-108.06279460525, 31.861165884936], [-108.0586270447, 31.864351738071], [-108.05429815296, 31.867314661859], [-108.04981984236, 31.87004650286], [-108.04520443641, 31.872539743535], [-108.0404646359, 31.874787522927], [-108.03561348391, 31.876783655549], [-108.03066432994, 31.878522648399], [-108.0256307932, 31.879999716077], [-108.02052672507, 31.881210793955], [-108.01536617104, 31.882152549364], [-108.01016333204, 31.882822390759], [-108.00493252537, 31.883218474857], [-107.99968814526, 31.883339711704], [-107.90839214459, 31.883054999412], [-107.70848408204, 31.883885093839], [-107.70751575838, 31.883884426392], [-107.60862294804, 31.883337452627], [-107.57668556548, 31.883871954321], [-107.57418949289, 31.88388257159], [-107.50778718211, 31.883336251826], [-107.44222410469, 31.883882485492], [-107.44055787812, 31.883882485492], [-107.37540002115, 31.883339627892], [-107.34276615128, 31.883872621057], [-107.34030019572, 31.883882487087], [-107.27515435932, 31.88333985435], [-107.24364638775, 31.883871712095], [-107.24113590382, 31.88388257159], [-107.17515378192, 31.883339708893], [-107.14335121461, 31.883871954321], [-107.14084474301, 31.883882485492], [-107.07489971052, 31.883333069601], [-106.60839622209, 31.883607465556], [-106.60607483559, 31.883581883535], [-106.53730347303, 31.882025487088], [-106.53181621305, 31.881750335074], [-106.5151307275, 31.880453338109], [-106.50972864267, 31.879885452899], [-106.50436536258, 31.87902508046], [-106.49905671158, 31.877874759324], [-106.49381835287, 31.876437883514], [-106.48866574222, 31.874718692535], [-106.48361408242, 31.872722258861], [-106.4786782784, 31.870454472974], [-106.47387289326, 31.867922025978], [-106.46921210529, 31.865132389862], [-106.46470966616, 31.862093795452], [-106.46037886032, 31.858815208125], [-106.45623246581, 31.855306301356], [-106.45148768572, 31.851064569087], [-106.44769737232, 31.851317256636], [-106.4269143706, 31.853486237454], [-106.42181014289, 31.853887149847], [-106.41669208547, 31.85402628859], [-106.41157361477, 31.853903288946], [-106.40646814826, 31.853518473345], [-106.40138906937, 31.852872850537], [-106.3963496923, 31.85196811295], [-106.39136322724, 31.850806632251], [-106.38644274562, 31.849391453131], [-106.36575182756, 31.842862598885], [-106.36083262185, 31.841168461303], [-106.35600818601, 31.839220768888], [-106.35129157915, 31.837024793787], [-106.3466955685, 31.834586480215], [-106.34223259487, 31.831912428369], [-106.33791473893, 31.829009876554], [-106.33375368856, 31.825886681597], [-106.32976070717, 31.822551297578], [-106.32594660324, 31.819012752943], [-106.26441553644, 31.758874050676], [-106.26105001546, 31.755422189387], [-106.25785477158, 31.751812134769], [-106.2548372312, 31.74805227734], [-106.25200440771, 31.744151355789], [-106.24936288519, 31.740118436669], [-106.2183951729, 31.69025652864], [-106.21568136244, 31.685612793673], [-106.2132211537, 31.680829864177], [-106.21102166382, 31.675921576709], [-106.20908925571, 31.670902130473], [-106.19619676903, 31.634524918128], [-106.18496747729, 31.609200841728], [-106.14046293717, 31.547055647198], [-106.10008330537, 31.522506560698], [-106.03854416033, 31.500050533276], [-105.99772174536, 31.494299057464], [-105.99228267984, 31.493379095274], [-105.98690261852, 31.492160610792], [-105.98159793281, 31.490647311838], [-105.97638476474, 31.488843803346], [-105.97127897786, 31.486755573348], [-105.96629610896, 31.48438897628], [-105.96145132078, 31.481751213641], [-105.95675935591, 31.478850312079], [-105.91786470262, 31.453293747772], [-105.91225274607, 31.449323567383], [-105.7975371696, 31.362100514093], [-105.79431381209, 31.359543325141], [-105.77820053107, 31.346210958372], [-105.7742830169, 31.34279419143], [-105.77054834569, 31.339178469584], [-105.75611353101, 31.324457552642], [-105.7523278976, 31.320375545005], [-105.71177003631, 31.274124248277], [-105.70859824907, 31.270321237066], [-105.70561862148, 31.266365867553], [-105.70283846053, 31.262267839541], [-105.70026458402, 31.258037202676], [-105.69790330392, 31.253684331805], [-105.69652147713, 31.250979288631], [-105.66161420284, 31.231675980564], [-105.6605228521, 31.23106352829], [-105.5505222418, 31.16842429181], [-105.54602651989, 31.165705399574], [-105.54167980263, 31.162754138901], [-105.53749408866, 31.159578656418], [-105.53348093217, 31.156187717693], [-105.52965141103, 31.152590683036], [-105.52601609621, 31.148797481661], [-105.52258502261, 31.144818584281], [-105.50328265427, 31.12120751542], [-105.49971948592, 31.116579470607], [-105.49643259507, 31.111751291236], [-105.46317389878, 31.059690973923], [-105.42364366618, 31.020697707368], [-105.33849984319, 30.950454718705], [-105.2414810665, 30.902908856691], [-105.24121388657, 30.902967022925], [-105.23591426252, 30.903825892291], [-105.23057618211, 30.90439910187], [-105.22521503165, 30.904684999462], [-105.21984626394, 30.904682761006], [-105.21448535375, 30.904392392953], [-105.20914775318, 30.903814732252], [-105.20384884717, 30.902951443931], [-105.1986039091, 30.901805016305], [-105.19342805681, 30.900378753799], [-105.188336209, 30.898676767426], [-105.18334304226, 30.896703962935], [-105.17846294872, 30.894466026673], [-105.12533947467, 30.868356331003], [-105.12005861846, 30.865561967421], [-105.11495406519, 30.862457221697], [-105.07050521256, 30.833568519624], [-105.06649112432, 30.830818453541], [-105.06261556033, 30.827876384258], [-105.0588876963, 30.82474927735], [-104.9960513279, 30.769379669786], [-104.93669879669, 30.717675463643], [-104.89460226756, 30.699232834223], [-104.88993447885, 30.697042739877], [-104.88538577939, 30.694614963552], [-104.88096826178, 30.691955959436], [-104.87669366989, 30.689072796428], [-104.87257336764, 30.685973139349], [-104.86861830873, 30.682665228564], [-104.86483900761, 30.679157858077], [-104.86124551145, 30.675460352149], [-104.82304513302, 30.634070886857], [-104.81966864101, 30.630219091847], [-104.81649381073, 30.626199455579], [-104.81352897197, 30.622022524381], [-104.8107819036, 30.617699257278], [-104.80825981311, 30.613240997235], [-104.8059693177, 30.608659441399], [-104.80391642697, 30.60396661041], [-104.78711650025, 30.562716381661], [-104.78545093141, 30.558335601267], [-104.7839924504, 30.55388159301], [-104.78274426081, 30.549364140276], [-104.77099929332, 30.502615517723], [-104.73627674477, 30.437441059027], [-104.69682822082, 30.378161942621], [-104.62909028945, 30.297761159246], [-104.62552470478, 30.293274130558], [-104.62222203165, 30.288590203715], [-104.6191931183, 30.283724763925], [-104.61644791373, 30.278693792613], [-104.59311722536, 30.232860205065], [-104.59057048381, 30.227464733726], [-104.58835004303, 30.22192698633], [-104.5811173769, 30.202205001408], [-104.57943848891, 30.197226098995], [-104.57802343685, 30.192165885385], [-104.57687612741, 30.187038330884], [-104.57599972809, 30.181857591712], [-104.57539665849, 30.176637970925], [-104.57506858354, 30.171393878921], [-104.57501640902, 30.166139793659], [-104.57524027896, 30.160890220689], [-104.57954325772, 30.098531364701], [-104.58005166362, 30.093226387727], [-104.58084196439, 30.087956028923], [-104.58191191549, 30.082735256769], [-104.58325847813, 30.077578898915], [-104.58487782789, 30.072501600066], [-104.58676536561, 30.067517780389], [-104.58891573046, 30.062641594558], [-104.59866489563, 30.042039473635], [-104.59651560359, 30.023704949134], [-104.58410657058, 29.976816291518], [-104.46147631641, 29.73554892325], [-104.38987423881, 29.673169541334], [-104.36424744987, 29.653374306217], [-104.32286898891, 29.63070216321], [-104.3225068542, 29.630732738463], [-104.31720010172, 29.6308979982], [-104.31189205773, 29.63078137157], [-104.30659768506, 29.630383187329], [-104.30133190797, 29.629704567917], [-104.26973095598, 29.624775979092], [-104.26488896666, 29.623898266532], [-104.26009601809, 29.622783419436], [-104.25536371653, 29.621434137433], [-104.25070352135, 29.619853687841], [-104.24612671734, 29.618045897758], [-104.24164438732, 29.616015144789], [-104.23726738537, 29.613766346453], [-104.20491875253, 29.596127186565], [-104.2033904842, 29.595276424441], [-104.17894590438, 29.581387111498], [-104.17471106518, 29.57884046346], [-104.17060720296, 29.576087720423], [-104.16664433907, 29.573135604387], [-104.16283215053, 29.569991324207], [-104.15917994644, 29.566662557987], [-104.1556966452, 29.563157434336], [-104.1523907528, 29.559484512513], [-104.14927034197, 29.555652761527], [-104.12487770122, 29.524140213482], [-104.10072944625, 29.495947069723], [-104.02081574806, 29.435257246138], [-104.00690330473, 29.424939980016], [-103.99771685357, 29.419090405947], [-103.98804335615, 29.414750956877], [-103.94863091293, 29.402364984121], [-103.86648118974, 29.383222273227], [-103.86096007714, 29.381768382467], [-103.85553093662, 29.380001771056], [-103.85021146526, 29.377928197527], [-103.84501900268, 29.375554420999], [-103.83997047447, 29.37288817915], [-103.69410680682, 29.290445232686], [-103.49775180699, 29.220278144287], [-103.49258186486, 29.21826728732], [-103.48753138126, 29.215972845592], [-103.48261589748, 29.213401879522], [-103.47785053935, 29.21056230045], [-103.47324997077, 29.207462846284], [-103.46882834854, 29.204113054618], [-103.42532886001, 29.169217625093], [-103.40778026905, 29.157168211658], [-103.35324500606, 29.124291082825], [-103.33704826951, 29.116367737608], [-103.273968312, 29.095340066559], [-103.20053057159, 29.088126251297], [-103.12215747321, 29.165382218531], [-103.11953336724, 29.167876882142], [-103.02755846211, 29.252198068361], [-102.98127511182, 29.307834785357], [-102.94344005167, 29.390785347969], [-102.89822961332, 29.509633886764], [-102.89632519334, 29.51428497882], [-102.89418949408, 29.518834513027], [-102.75971378594, 29.78753034465], [-102.75727191616, 29.792108656273], [-102.75459585403, 29.796554143513], [-102.75169280449, 29.800854837489], [-102.74857058361, 29.804999159155], [-102.74523759755, 29.80897595048], [-102.74170281993, 29.812774504483], [-102.73797576767, 29.816384594064], [-102.73406647536, 29.81979649954], [-102.72998546825, 29.82300103481], [-102.72574373391, 29.82598957209], [-102.72135269264, 29.828754065143], [-102.71682416672, 29.831287070941], [-102.71217034862, 29.833581769703], [-102.70740376812, 29.835631983258], [-102.70253725859, 29.837432191682], [-102.69758392248, 29.838977548152], [-102.69255709596, 29.840263892003], [-102.58310580222, 29.865265417993], [-102.58186225807, 29.865541154748], [-102.52924104816, 29.876857978279], [-102.40641732034, 29.936997713185], [-102.35895597094, 29.97004718292], [-102.35449536721, 29.972979677691], [-102.34988463202, 29.975669962502], [-102.34513690438, 29.97811037098], [-102.34026571365, 29.980293948812], [-102.33528494102, 29.982214473563], [-102.33020877996, 29.983866472406], [-102.32505169576, 29.985245237723], [-102.3198283843, 29.986346840513], [-102.3145537302, 29.987168141591], [-102.30924276439, 29.987706800538], [-102.30391062127, 29.987961282362], [-102.29857249558, 29.987930861879], [-102.29324359912, 29.987615625776], [-102.28793911738, 29.987016472368], [-102.2826741663, 29.986135109031], [-102.27746374913, 29.984974047345], [-102.27232271376, 29.983536595929], [-102.26726571033, 29.981826851019], [-102.26230714955, 29.979849684792], [-102.25746116159, 29.977610731481], [-102.21690330029, 29.957541609127], [-102.21273137232, 29.955353418898], [-102.20866712997, 29.952971173416], [-102.18460049957, 29.938092049059], [-102.09041418023, 29.905460889185], [-102.07313273256, 29.899962001511], [-102.06414998716, 29.898296450776], [-102.05515424673, 29.898397659882], [-102.01273140807, 29.90384299627], [-102.00745146437, 29.904378742962], [-102.00215053374, 29.90463362436], [-101.99684354617, 29.904606922593], [-101.9915454487, 29.904298712866], [-101.98627116333, 29.903709863248], [-101.981035545, 29.902842032222], [-101.97585333973, 29.901697664021], [-101.97073914312, 29.900279981737], [-101.96570735921, 29.89859297825], [-101.96077215995, 29.896641404975], [-101.95594744523, 29.894430758485], [-101.95124680378, 29.89196726503], [-101.94668347488, 29.889257862996], [-101.94227031107, 29.886310183367], [-101.93801974194, 29.883132528235], [-101.93394373916, 29.879733847409], [-101.93005378271, 29.876123713218], [-101.9263608286, 29.872312293542], [-101.92287527796, 29.86831032318], [-101.91960694779, 29.864129073615], [-101.91656504328, 29.859780321264], [-101.91375813191, 29.855276314314], [-101.9111941193, 29.850629738224], [-101.90888022694, 29.845853679997], [-101.90682297188, 29.84096159132], [-101.90502814832, 29.835967250677], [-101.90350081138, 29.830884724545], [-101.90224526276, 29.82572832777], [-101.9012650387, 29.820512583258], [-101.90056289997, 29.815252181063], [-101.90014082415, 29.80996193702], [-101.9, 29.804656751011], [-101.9, 14.057547737396], [-101.90013367083, 14.052378956316], [-101.90053432596, 14.04722399354], [-101.90120089427, 14.042096630432], [-101.90213159374, 14.03701057457], [-101.90332393624, 14.031979423099], [-101.90477473413, 14.027016626384], [-101.90648010882, 14.022135452046], [-101.90843550114, 14.0173489495], [-101.91063568351, 14.012669915059], [-101.91307477392, 14.008110857732], [-101.91574625167, 14.003683965779], [-101.91864297479, 13.999401074125], [-101.92175719913, 13.995273632725], [-101.92508059907, 13.991312675949], [-101.92860428978, 13.987528793084], [-101.93231885097, 13.983932100025], [-101.93621435206, 13.980532212231], [-101.94028037876, 13.977338219019], [-101.94450606088, 13.974358659262], [-101.94888010142, 13.971601498566], [-101.95339080674, 13.969074107969], [-101.95802611786, 13.96678324424], [-101.96277364264, 13.964735031811], [-101.96762068899, 13.962934946408], [-101.97255429873, 13.961387800408], [-101.97756128225, 13.960097729978], [-101.98262825382, 13.959068184013], [-101.9877416673, 13.958301914918], [-101.99288785241, 13.95780097125], [-101.99805305125, 13.95756669224], [-102.0032234551, 13.957599704213], [-102.00838524131, 13.957899918915], [-102.01352461028, 13.958466533746], [-102.01862782233, 13.95929803391], [-102.02368123445, 13.960392196459], [-102.02444182908, 13.960577588043], [-102.02901619899, 13.961808049768], [-102.03352716644, 13.963253756781], [-102.03796460933, 13.964911465077], [-102.04010764634, 13.965770419516], [-102.0417326029, 13.966215439379], [-102.04535044764, 13.96743138751], [-102.04668138987, 13.96779625112], [-102.04990192459, 13.968878935227], [-102.05455437609, 13.970153808132], [-102.05552059576, 13.9704785707], [-102.08947445377, 13.978745649845], [-102.09494926892, 13.980244463511], [-102.09581602107, 13.980535537445], [-102.09690201612, 13.980832777618], [-102.0978686464, 13.981157404243], [-102.09888291361, 13.981429620488], [-102.10331784053, 13.982844201896], [-102.10714885651, 13.984265763308], [-102.10969937522, 13.984963407798], [-102.11049212914, 13.9852294573], [-102.11473496128, 13.986369265462], [-102.11924214193, 13.987811924264], [-102.12367602168, 13.989466207258], [-102.12712393586, 13.990846422412], [-102.12791039868, 13.991110361149], [-102.12806206579, 13.991171085166], [-102.12860843875, 13.991317962031], [-102.13320824241, 13.992796137516], [-102.13773128046, 13.994494761461], [-102.13968728073, 13.995283761873], [-102.14075339709, 13.99572096441], [-102.14668139706, 13.998191964147], [-102.14798061911, 13.99874432226], [-102.15292759783, 14.000888863565], [-102.18207348077, 14.007969738948], [-102.1875527972, 14.009466931979], [-102.19293826524, 14.011272819433], [-102.19821250895, 14.013381574706], [-102.20413872385, 14.015948540287], [-102.23525227716, 14.023497891115], [-102.24068109627, 14.024978040722], [-102.24601806599, 14.026761204749], [-102.25124628791, 14.028841737178], [-102.79829828936, 14.264574737056], [-102.80340236421, 14.266946626996], [-102.80836491132, 14.269601917591], [-102.81317021061, 14.272532197561], [-103.1826727085, 14.51237538936], [-103.21947338374, 14.52804955314], [-103.22463277468, 14.530422306647], [-103.22964915565, 14.533084109826], [-103.23450634916, 14.536026378556], [-103.3952075221, 14.639720985757], [-103.54350532942, 14.735180706348], [-103.54645721216, 14.735961862568], [-103.54743020832, 14.736279348092], [-103.57837928716, 14.74353456727], [-103.58345121399, 14.744864746534], [-103.58578814571, 14.745610566805], [-103.66696019259, 14.764611049041], [-103.67242452031, 14.766054144655], [-103.67779859464, 14.767803638124], [-103.68306525005, 14.76985394132], [-103.69009225658, 14.772820850169], [-103.69257881063, 14.773630144661], [-103.694466146, 14.774364577932], [-103.83230534322, 14.806522258671], [-103.83755755337, 14.807904513592], [-103.84211842585, 14.808966488702], [-103.8475931763, 14.810405763526], [-103.85297771348, 14.812152521607], [-103.85404375787, 14.812566377324], [-103.87359700245, 14.817116829644], [-103.87906876666, 14.818554537153], [-103.88445046846, 14.820299384511], [-103.88972488251, 14.82234578695], [-103.88981630565, 14.822384267577], [-103.89131316394, 14.822732377675], [-103.89678291764, 14.824168598194], [-103.90216273674, 14.825911722259], [-103.90435489878, 14.826761721252], [-103.91198345373, 14.828535515433], [-103.91395758073, 14.829053326845], [-103.91595117397, 14.829516914944], [-103.92141523484, 14.830951347235], [-103.9267895751, 14.832692043667], [-103.93205704331, 14.834733449058], [-103.99116965544, 14.859585036831], [-103.99129973484, 14.859619125274], [-103.99297470878, 14.860161219101], [-103.99372755852, 14.860356311744], [-103.99863062746, 14.861899747738], [-104.00344790847, 14.863693091947], [-104.00736053935, 14.865265299884], [-104.01127416513, 14.866835520527], [-104.01276237688, 14.867446562676], [-104.01549454586, 14.86859412705], [-104.01587238224, 14.868693035242], [-104.01601206646, 14.868738151074], [-104.0188606511, 14.869483911715], [-104.01937006964, 14.86964858825], [-104.02411527062, 14.870873768104], [-104.02890235643, 14.872369462397], [-104.03022561545, 14.872856980991], [-104.03254623818, 14.873596103031], [-104.0345292379, 14.87428710342], [-104.04033479733, 14.876514860234], [-104.04073383477, 14.876682394622], [-104.04149753915, 14.876882510346], [-104.04565548502, 14.878226474579], [-104.24366307506, 14.923981598348], [-104.24911624653, 14.925404700639], [-104.25448058631, 14.927132750952], [-104.25973905603, 14.929160260603], [-104.28073594301, 14.937943409874], [-104.28691837669, 14.939366906719], [-104.29238709024, 14.940789906728], [-104.29776669345, 14.942519538532], [-104.30304000831, 14.944550279114], [-104.34837417074, 14.963495963304], [-104.34850181078, 14.963529144963], [-104.35387933291, 14.965256590797], [-104.35915074726, 14.967284891594], [-104.35946819678, 14.96741744736], [-104.36762409626, 14.969291870656], [-104.37309132047, 14.970712067844], [-104.37694576776, 14.971949485742], [-104.39614767068, 14.976359556191], [-104.40162384542, 14.977781479221], [-104.4061008912, 14.979218717112], [-104.40851934384, 14.97984627367], [-104.4098959464, 14.980287978252], [-104.40992482699, 14.980294607205], [-104.41343434605, 14.98120525323], [-104.42271785253, 14.983335694981], [-104.42818416447, 14.984753743258], [-104.43336135522, 14.986413857542], [-104.49355664628, 15.000212143797], [-104.49416199801, 15.000369573969], [-104.49945626731, 15.001582161155], [-104.50491510096, 15.002995538962], [-104.51028558961, 15.004714362201], [-104.51555065698, 15.006733165616], [-104.64401924116, 15.060194011711], [-104.64699728591, 15.061142131981], [-104.65222775246, 15.063136058873], [-105.20541075336, 15.291948058847], [-105.21050708816, 15.294224622584], [-105.21546846259, 15.29678199126], [-105.22027941932, 15.299612197297], [-105.72534842005, 15.616034196773], [-105.73004212614, 15.619162496342], [-105.73455197841, 15.622550470292], [-105.73886362781, 15.62618733906], [-106.18095962844, 16.020963340172], [-106.18515931387, 16.024937617166], [-106.18912227996, 16.029147977606], [-106.18995650051, 16.030143823165], [-106.19579389088, 16.035335678761], [-106.20003859768, 16.039338774345], [-106.20404261513, 16.043582611553], [-106.20779231264, 16.048052743382], [-106.24060204876, 16.089568257813], [-106.49798291635, 16.193049330192], [-106.50314669006, 16.195296351933], [-106.50817578506, 16.197830492645], [-106.51305425224, 16.200643715637], [-106.61468122672, 16.263125686195], [-106.63896566447, 16.272839460754], [-106.64410954983, 16.275066205618], [-106.64912059083, 16.277577662845], [-106.65398304381, 16.280365941952], [-107.16481304491, 16.592633942319], [-107.16951959609, 16.595695787114], [-107.17404687804, 16.599016966973], [-107.17838061782, 16.602587011373], [-107.62673961769, 16.993574012223], [-107.63090538633, 16.997419983392], [-107.63300576752, 16.999592190725], [-107.63301180256, 16.999598105782], [-107.6330987132, 16.999688314838], [-107.6348464934, 17.001495863385], [-107.63496222349, 17.001622548762], [-107.63698825605, 17.003725472978], [-107.64072172574, 17.008073868821], [-107.68652081073, 17.064617304271], [-107.70259632915, 17.078558615929], [-107.70685331779, 17.082471721468], [-107.71087701922, 17.086624331981], [-107.71465398045, 17.091002563488], [-107.74577315923, 17.129258437151], [-107.83551328473, 16.957863019329], [-107.83840987651, 16.952707718866], [-107.83857008668, 16.952458345537],
                ],
            ],
        ];
    }
}
