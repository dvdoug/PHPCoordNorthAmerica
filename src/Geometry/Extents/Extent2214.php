<?php
/**
 * PHPCoord.
 *
 * @author Doug Wright
 */
declare(strict_types=1);

namespace PHPCoord\Geometry\Extents;

/**
 * North America/USA - Minnesota - SPCS - N.
 * @internal
 */
class Extent2214
{
    public function __invoke(): array
    {
        return
        [
            [
                [
                    [-95.18186340332, 49.459594345093], [-95.220834350586, 49.464999771118], [-95.242501831055, 49.471660232544], [-95.252786254883, 49.476657485962], [-95.254174804687, 49.466388320923], [-95.25444946289, 49.433330154419], [-95.25396118164, 49.273334121704], [-95.254174804687, 49.099437332153], [-95.366555786133, 49.099979019165], [-95.691465745965, 49.099935872792], [-96.016375705798, 49.099892726418], [-96.341285665631, 49.099849580044], [-96.666195625464, 49.099806433671], [-96.991105585296, 49.099763287297], [-97.316015545129, 49.099720140923], [-97.316369095832, 49.031829918245], [-97.275727517308, 48.973757787348], [-97.271204411799, 48.935980480391], [-97.280421855856, 48.915537499387], [-97.264712405714, 48.910368302955], [-97.273944701234, 48.901514464131], [-97.247516003008, 48.881170105818], [-97.239245987437, 48.863542111508], [-97.247898388669, 48.85565339292], [-97.232501800506, 48.847218790096], [-97.234806161356, 48.826237930649], [-97.210101281652, 48.808583045196], [-97.216739266587, 48.795243118375], [-97.197169276744, 48.774528913586], [-97.207630056364, 48.729946582044], [-97.227444345525, 48.729794339413], [-97.222958175686, 48.720768659653], [-97.244718074688, 48.714024636853], [-97.240811903738, 48.686905806154], [-97.258192301114, 48.683640726062], [-97.252126801109, 48.6728564382], [-97.267943150579, 48.662263279358], [-97.246618372385, 48.649537028086], [-97.260435693823, 48.64507788554], [-97.2555375111, 48.638398242895], [-97.23938559124, 48.634648089738], [-97.248327658969, 48.617951275655], [-97.234594326603, 48.617313966243], [-97.243612952829, 48.538109594012], [-97.219633151372, 48.537102076091], [-97.222601181099, 48.516109877412], [-97.251646981246, 48.519612294654], [-97.2498235477, 48.509991605685], [-97.229124515304, 48.507885518889], [-97.258818889065, 48.488206056735], [-97.235205400244, 48.484410010264], [-97.233786359838, 48.472454737624], [-97.250395942288, 48.463215850496], [-97.231123699764, 48.461491262883], [-97.237135952658, 48.425991839938], [-97.212591780509, 48.419926041803], [-97.232634602365, 48.410969499878], [-97.214751038591, 48.403618270198], [-97.213721107724, 48.394882606391], [-97.230513685843, 48.393040406696], [-97.212683548565, 48.386146942529], [-97.211714653238, 48.377876672422], [-97.236655581141, 48.364483725141], [-97.223784640728, 48.3591734473], [-97.227554057721, 48.333523381298], [-97.209235755309, 48.328048921222], [-97.23975391723, 48.321755176913], [-97.210899463063, 48.307605832679], [-97.23082783295, 48.303741885664], [-97.237274980968, 48.295063508742], [-97.236291257906, 48.27522692547], [-97.237443497697, 48.267769162511], [-97.216065778615, 48.259223760094], [-97.23651316895, 48.248397976057], [-97.220918546725, 48.242774759629], [-97.221872865848, 48.216369250054], [-97.199030377401, 48.200972536467], [-97.192721434079, 48.170343951873], [-97.167071347867, 48.148164548667], [-97.148053168361, 48.054924320371], [-97.115331085944, 48.017890073253], [-97.120566244658, 47.775569457915], [-97.100340480815, 47.770197866967], [-97.077231586307, 47.728029380214], [-97.083892836153, 47.709661523703], [-97.057830435369, 47.694440350178], [-97.032012670494, 47.6635063344], [-97.023659191983, 47.614094446311], [-96.989425574715, 47.573925233286], [-96.973335530638, 47.515254942142], [-96.952216851604, 47.501151577499], [-96.958664487489, 47.462978019141], [-96.949188723717, 47.444568059693], [-96.960686975312, 47.421355890617], [-96.951615614943, 47.400618955611], [-96.966684095043, 47.361537672017], [-96.955827022438, 47.33675321508], [-96.967248537254, 47.313087092638], [-96.950005524274, 47.308936191346], [-96.939827518252, 47.28411738868], [-96.950631027479, 47.260954796512], [-96.938461715941, 47.24224326707], [-96.946747424911, 47.214602139279], [-96.937713901502, 47.193884153178], [-96.94962364144, 47.156843717168], [-96.937065332077, 47.140458862523], [-96.926491053064, 47.070063856156], [-96.939163919183, 47.051886724471], [-96.617439822744, 47.052162718133], [-96.295715726306, 47.052438711795], [-96.171648293329, 47.054272890973], [-95.912719157809, 47.053024813031], [-95.653790022289, 47.051776735089], [-95.464446314675, 47.051097133852], [-95.27510260706, 47.050417532614], [-95.26886476215, 47.225101866938], [-95.284368045176, 47.226307453344], [-95.285281100843, 47.313754596055], [-95.02689449001, 47.313312992649], [-94.768507879177, 47.312871389243], [-94.517276312067, 47.313291622138], [-94.516153744223, 47.334043417312], [-94.409755298082, 47.317995358766], [-94.233656162997, 47.376027462305], [-94.204983417978, 47.378361818002], [-94.181499461496, 47.368554146623], [-94.140522137852, 47.319276164069], [-94.139532133143, 47.276048516209], [-94.118223275016, 47.248678342282], [-94.063549351068, 47.232053143974], [-94.039021027821, 47.205700922106], [-94.009456518125, 47.193767929817], [-93.976639983373, 47.222872872151], [-93.732434524245, 47.201723293268], [-93.682238872501, 47.200989577177], [-93.684201584858, 47.159531934949], [-93.703063063911, 47.141470051087], [-93.692192117296, 47.118356819846], [-93.676261893108, 47.109651416596], [-93.675234791154, 46.930397518224], [-93.436311615236, 46.927699183798], [-93.197388439319, 46.925000849372], [-92.958465263402, 46.922302514945], [-92.959860311939, 46.666018933453], [-92.707284215059, 46.665446138176], [-92.454708118179, 46.664873342899], [-92.191597305372, 46.664105640865], [-92.191710890338, 46.568102753892], [-92.190648607423, 46.568574585295], [-92.189845846213, 46.568642972106], [-92.188573233787, 46.568304521471], [-92.187043070376, 46.567225917806], [-92.186508785538, 46.566491877899], [-92.186296653377, 46.565646772092], [-92.186509397913, 46.564724548991], [-92.186634863359, 46.564115685067], [-92.186864107438, 46.562984450674], [-92.186870974368, 46.561355930572], [-92.186360183051, 46.560586541933], [-92.185372598523, 46.559843558792], [-92.18382114302, 46.558807615493], [-92.183508563537, 46.558598898827], [-92.176948820938, 46.558790438797], [-92.174877374112, 46.557999755798], [-92.173803621572, 46.556999080234], [-92.173315969378, 46.554964153506], [-92.17244207111, 46.552122427132], [-92.170465830193, 46.550593476997], [-92.167748773802, 46.550595644732], [-92.165521447941, 46.5514885754], [-92.162316364702, 46.55366583111], [-92.159243820852, 46.557824250233], [-92.157621862129, 46.55875737706], [-92.155204547609, 46.558718450262], [-92.153906342833, 46.55836267857], [-92.150914824713, 46.556013615348], [-92.14861249175, 46.55327800353], [-92.142487028781, 46.549360789294], [-92.135674752393, 46.550109522357], [-92.13249549234, 46.551730828595], [-92.128647721919, 46.553001150522], [-92.123352862815, 46.552731851293], [-92.11619041714, 46.549855977055], [-92.112476256136, 46.550092699627], [-92.107016656325, 46.55194806745], [-92.102316169465, 46.555166077018], [-92.101525523986, 46.556757932306], [-92.101620704884, 46.557864746239], [-92.103950399383, 46.562029920649], [-92.104578576342, 46.56315301494], [-92.105388607156, 46.565130262238], [-92.104152960673, 46.566921394221], [-92.097455298652, 46.571823477051], [-92.0949385072, 46.574930004434], [-92.092252174527, 46.576973824901], [-92.089763580443, 46.578303951105], [-92.088278562513, 46.578938725893], [-92.08507813837, 46.579585273236], [-92.081411953439, 46.580325913232], [-92.078203437523, 46.582553167447], [-92.076596485386, 46.584532744175], [-92.075926289748, 46.58665928513], [-92.075907484964, 46.588063023965], [-92.075912665589, 46.588111178329], [-92.075930488948, 46.588276848013], [-92.076108401471, 46.58993056046], [-92.077836202723, 46.592202142655], [-92.082926295494, 46.595423154282], [-92.087074355405, 46.595881076282], [-92.089966359361, 46.595782426647], [-92.092531536846, 46.595698406285], [-92.098274648494, 46.596367762154], [-92.103376338687, 46.597352922475], [-92.104995327938, 46.598153062801], [-92.105726070616, 46.599403983184], [-92.106104117791, 46.601268052326], [-92.105859398431, 46.602676147097], [-92.105057227641, 46.604008375817], [-92.104233936059, 46.604812837743], [-92.103052772309, 46.60549369066], [-92.097428408011, 46.607784855788], [-92.093192706572, 46.611635865572], [-92.091554168074, 46.616587803693], [-92.089387553137, 46.617825119397], [-92.086643100303, 46.617860181804], [-92.082904212974, 46.617602550344], [-92.078972204792, 46.616914807931], [-92.07448533981, 46.617476614034], [-92.069290887401, 46.619862266839], [-92.067187376532, 46.620179441144], [-92.054551213238, 46.616017364128], [-92.04868267487, 46.615399916621], [-92.046475317879, 46.616272698274], [-92.041447080522, 46.625437392576], [-92.043504169527, 46.628387843276], [-92.043489205882, 46.635006738388], [-92.038036471213, 46.639864489077], [-92.016118786676, 46.649073598663], [-92.010884954476, 46.649166321576], [-92.010265699112, 46.649177292345], [-91.990048369951, 46.649535463868], [-91.968792873286, 46.634206990802], [-91.948247361763, 46.619346694747], [-91.937681532703, 46.611712546498], [-91.936224373717, 46.610653834542], [-91.933657529465, 46.613501339584], [-91.631146488323, 46.733816614111], [-91.328635447182, 46.854131888638], [-91.073233567978, 46.970261509743], [-90.817831688774, 47.086391130848], [-90.56242980957, 47.202520751953], [-90.327612304687, 47.198739115397], [-90.092794799805, 47.194957478841], [-89.857977294922, 47.191175842285], [-89.702940936426, 47.428506267508], [-89.54790457793, 47.66583669273], [-89.392868219435, 48.103167117952], [-89.405727087567, 48.103129315579], [-89.426104228653, 48.101091601471], [-89.473216881539, 48.102241299537], [-89.505991659798, 48.112485207633], [-89.523972718742, 48.113957231518], [-89.655561828613, 48.129577255249], [-89.738897705078, 48.111667251587], [-89.762503051758, 48.100833511353], [-89.799787902832, 48.090617752075], [-89.894239807129, 48.125270462036], [-89.932775878906, 48.169719314575], [-89.943840408325, 48.182120895386], [-89.965551757812, 48.206454849243], [-90.046522521973, 48.221450424195], [-90.179998779297, 48.213054275513], [-90.414930725098, 48.202912902832], [-90.649862670898, 48.192771530152], [-90.673895263672, 48.203750228882], [-90.735800170898, 48.304462051392], [-90.735212707519, 48.327075576782], [-90.768606567383, 48.337497329712], [-90.798056030273, 48.336658096314], [-90.828329467773, 48.328601455689], [-90.869161987305, 48.314715957642], [-91.026098632812, 48.254993057251], [-91.049169921875, 48.244159317017], [-91.092489624023, 48.214999771119], [-91.14055480957, 48.183604812622], [-91.176390075683, 48.172633743286], [-91.218611145019, 48.169440841675], [-91.247229003906, 48.168056106567], [-91.28680267334, 48.158881759644], [-91.318334960937, 48.141109085083], [-91.362783813476, 48.15777168274], [-91.473623657227, 48.193050003052], [-91.545141601562, 48.198344802857], [-91.5875, 48.244716262817], [-91.640135192871, 48.291377639771], [-91.683889770508, 48.294711685181], [-91.750555419922, 48.303882217408], [-91.840277099609, 48.330546951294], [-91.863714599609, 48.340537643433], [-91.891798400879, 48.361247634888], [-91.908064270019, 48.380965805054], [-91.914167785644, 48.404437637329], [-91.939375305176, 48.445342636109], [-92.041677856445, 48.457217788696], [-92.062216186523, 48.456660842896], [-92.157232666015, 48.446940994263], [-92.176809692383, 48.434993362427], [-92.199789428711, 48.399367904663], [-92.186109924316, 48.369994735718], [-92.191404724121, 48.348865127564], [-92.231680297851, 48.334163284302], [-92.259855651855, 48.331729507446], [-92.326391601562, 48.41166267395], [-92.355276489258, 48.494159317017], [-92.482229614258, 48.541377639771], [-92.597769165039, 48.585269546509], [-92.615286254883, 48.641383743286], [-92.851316833496, 48.722629165649], [-93.144995117187, 48.740550613404], [-93.215696716309, 48.729159927368], [-93.308340454102, 48.708606338501], [-93.354063415527, 48.6843334198], [-93.364241027832, 48.651729202271], [-93.396253967285, 48.638610458374], [-93.560697937011, 48.615138626099], [-93.624166870117, 48.613887405396], [-93.685835266113, 48.617080307007], [-93.704786682129, 48.631866073609], [-93.718893432617, 48.68624458313], [-93.733953857422, 48.716384506226], [-93.958749389648, 48.728606796265], [-93.982919311523, 48.73027381897], [-94.163888549805, 48.738048171997], [-94.211938476562, 48.741107559204], [-94.234170532226, 48.742770767212], [-94.347886657715, 48.760997390747], [-94.367364501953, 48.795894241333], [-94.398469543457, 48.807216262817], [-94.500352478027, 48.810828781128], [-94.533319091797, 48.801936721802], [-94.561044311523, 48.794990158081], [-94.600839233398, 48.796939468384], [-94.623895263672, 48.801936721802], [-94.705834960937, 48.824435806275], [-94.740419006347, 48.841106033325], [-94.79499206543, 48.878741836548], [-94.808053588867, 48.896800613403], [-94.807038879394, 48.957999801636], [-94.800981140137, 49.002494430542], [-94.805841064453, 49.033187484741], [-94.818605041504, 49.074710464478], [-94.829995727539, 49.096942520142], [-94.845269775391, 49.128604507446], [-94.866952514648, 49.175555801392], [-94.898332214355, 49.25749168396], [-94.905686950683, 49.28666267395], [-94.917779541016, 49.405547714233], [-95.03196105957, 49.458541488648], [-95.062089538574, 49.460971450806], [-95.098611450195, 49.457500076294], [-95.125833129883, 49.457500076294], [-95.18186340332, 49.459594345093],
                ],
            ],
        ];
    }
}
