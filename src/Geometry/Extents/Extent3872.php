<?php
/**
 * PHPCoord.
 *
 * @author Doug Wright
 */
declare(strict_types=1);

namespace PHPCoord\Geometry\Extents;

/**
 * North America/North America - 144°W to 138°W and NAD83 by country.
 * @internal
 */
class Extent3872
{
    public function __invoke(): array
    {
        return
        [
            [
                [
                    [-140.07562125809, 54.550671014083], [-140.10814730655, 54.568438817277], [-140.10874268093, 54.568766680743], [-140.14490219631, 54.588839617754], [-140.14549648, 54.58917216976], [-140.18138705922, 54.609416768149], [-140.1819673856, 54.609746667678], [-140.21759093602, 54.63015529805], [-140.21820228874, 54.630508412499], [-140.25355118095, 54.651092518945], [-140.25414161964, 54.651439050742], [-140.289217761, 54.672187189169], [-140.28982055637, 54.672546614289], [-140.32461441013, 54.693458784699], [-140.32522200683, 54.693826913078], [-140.35973738769, 54.714906930168], [-140.36034638081, 54.71528186473], [-140.39457756672, 54.736525913803], [-140.39517493174, 54.73689956306], [-140.4291219227, 54.75830001472], [-140.42973916907, 54.758692293157], [-140.4633981504, 54.7802567768], [-140.46401490498, 54.780655117362], [-140.49738206197, 54.802379818289], [-140.49799403723, 54.802781460336], [-140.53106936988, 54.824662563852], [-140.53169440025, 54.825079438835], [-140.56446837181, 54.847116944939], [-140.56507974143, 54.847531321885], [-140.5975599813, 54.869721415879], [-140.59819994229, 54.87016228623], [-140.63037500638, 54.892512597509], [-140.63098369357, 54.892938781598], [-140.66285930392, 54.915434051374], [-140.66349440632, 54.915885974403], [-140.6950610262, 54.938533832069], [-140.69569142788, 54.938989846683], [-140.72694905727, 54.961786477543], [-140.72758588498, 54.962254791979], [-140.7585307092, 54.985200196032], [-140.759160437, 54.985670983491], [-140.78979436339, 55.00876134604], [-140.79043768547, 55.009250339381], [-140.82075117729, 55.032485660426], [-140.82139123185, 55.032980385633], [-140.8513881038, 55.056360665174], [-140.85202449389, 55.056860836156], [-140.88169902392, 55.080378444798], [-140.88235167892, 55.080900139745], [-140.91170195968, 55.104562706884], [-140.91233756025, 55.105079445685], [-140.94136359174, 55.128875527228], [-140.94202261574, 55.129420535906], [-140.97071676858, 55.153357761248], [-140.97135645946, 55.153895954457], [-140.99972064098, 55.177962879505], [-141.00038434116, 55.178531032353], [-141.02841473667, 55.202739101201], [-141.02905837174, 55.203299781585], [-141.05675307389, 55.227633735442], [-141.05741964506, 55.228224700109], [-141.08477102446, 55.252692168371], [-141.08542481622, 55.253282228087], [-141.1124385949, 55.277879396056], [-141.11309513153, 55.278482574962], [-141.13976558747, 55.30320562794], [-141.14043056411, 55.303827702955], [-141.16675197524, 55.328676640943], [-141.16740656764, 55.329300234381], [-141.19338274867, 55.354271242682], [-141.19405099847, 55.354919647002], [-141.21967622735, 55.380016540312], [-141.22033636692, 55.380669099342], [-141.24560492161, 55.405880433571], [-141.24626777462, 55.406548036855], [-141.27118537716, 55.431881441396], [-141.27186126719, 55.432575300192], [-141.29641838084, 55.458030775045], [-141.29707559938, 55.458718553546], [-141.32127413149, 55.48428465462], [-141.32194681357, 55.485002391318], [-141.34577913473, 55.51068293331], [-141.34644555203, 55.511408162318], [-141.36991547696, 55.537203145228], [-141.37057918424, 55.537939908654], [-141.39368099088, 55.563841703087], [-141.39434838849, 55.564597629039], [-141.41708207684, 55.590610049693], [-141.41774866886, 55.591380668284], [-141.44011042423, 55.617499900462], [-141.44077342207, 55.61828238956], [-141.46276133711, 55.644504618564], [-141.46342518468, 55.64530471724], [-141.48503735203, 55.67162994307], [-141.485704441, 55.672451329987], [-141.50693704598, 55.698879552643], [-141.50759993674, 55.699713715723], [-141.52845107199, 55.726241120508], [-141.52911810083, 55.727099292073], [-141.54958585901, 55.753729693684], [-141.55023024143, 55.754577396381], [-141.57031652988, 55.78129553603], [-141.57098088333, 55.782189560792], [-141.59067807266, 55.80900688257], [-141.59133049562, 55.809905559808], [-141.61063858583, 55.836814434319], [-141.61128960151, 55.837732592602], [-141.63020668525, 55.864733019848], [-141.63085111768, 55.865663991845], [-141.64937338026, 55.892748342431], [-141.6500176403, 55.89370215228], [-141.66814698905, 55.9208780556], [-141.66878596438, 55.921848035419], [-141.68651476992, 55.949104047382], [-141.68714967507, 55.950092802865], [-141.70448175209, 55.977436552864], [-141.70511434019, 55.978447836746], [-141.71339682515, 55.991865928997], [-141.72691692557, 56.003059235256], [-141.75508843871, 56.01596839009], [-141.75564656742, 56.016226222735], [-141.79553876407, 56.034803798419], [-141.79609869796, 56.035066666949], [-141.83573340255, 56.053823533404], [-141.83629251199, 56.05409025103], [-141.86240028686, 56.066644122728], [-141.87569069213, 56.073037555345], [-141.87623092597, 56.073299438071], [-141.91535636847, 56.092411071372], [-141.9159266113, 56.092691866534], [-141.95479074704, 56.111982790607], [-141.95536501948, 56.112270143054], [-141.99396594111, 56.131740357898], [-141.99453381333, 56.132029063982], [-142.0328657988, 56.151670940202], [-142.03344487687, 56.151970054987], [-142.07150601883, 56.171787407282], [-142.07207860968, 56.172087896222], [-142.1098708155, 56.192076909894], [-142.11044431408, 56.192382633204], [-142.14796186169, 56.212539493556], [-142.1485553666, 56.212860948747], [-142.1857944413, 56.233193285173], [-142.18637336322, 56.233511860884], [-142.22333015033, 56.254008229292], [-142.22391647215, 56.254335985219], [-142.26059287901, 56.275000200307], [-142.26118540896, 56.275336708216], [-142.29757762088, 56.296168769983], [-142.29816872117, 56.296509817716], [-142.3342672014, 56.317502096769], [-142.33487044021, 56.317855725141], [-142.37067900345, 56.339015850873], [-142.37127503364, 56.339370854337], [-142.40678986519, 56.360691197354], [-142.40739239235, 56.361055800223], [-142.44260967751, 56.382536360525], [-142.44321251487, 56.382906990268], [-142.47813416099, 56.404547767856], [-142.47874518172, 56.404929467605], [-142.49918140676, 56.417798388685], [-142.52172697326, 56.42307630212], [-142.5681444142, 56.429644183703], [-142.56859919199, 56.429709598958], [-142.61935373911, 56.437129185139], [-142.61981143789, 56.437197176064], [-142.67046680288, 56.444841829385], [-142.67092646785, 56.444912293243], [-142.72147883602, 56.452782013702], [-142.72192540106, 56.452852566844], [-142.77237286505, 56.460939725047], [-142.77283547299, 56.461014997424], [-142.81637281189, 56.468203862764], [-142.82243109343, 56.468361124128], [-142.86441614001, 56.462032164708], [-142.86485952587, 56.461966343281], [-142.91564840527, 56.454542942402], [-142.9161101542, 56.454476551945], [-142.96699058632, 56.447282032902], [-142.96744480554, 56.447218868058], [-143.01841869775, 56.440249416154], [-143.01886434599, 56.440189504855], [-143.06992979094, 56.433441305393], [-143.07038098578, 56.433382724911], [-143.12153416876, 56.426859592587], [-143.12198325879, 56.426803356454], [-143.17321845776, 56.420505291268], [-143.17367327843, 56.420450439881], [-143.21414794674, 56.415663226761], [-143.24807807864, 56.403845540155], [-143.25259391768, 56.402391857276], [-143.29883377058, 56.388708538184], [-143.29932904011, 56.388563366716], [-143.34575199848, 56.375086041277], [-143.34624247422, 56.374945004404], [-143.39284281602, 56.361673672617], [-143.39333169405, 56.361535786197], [-143.44010941927, 56.348470448062], [-143.44059996537, 56.348334779964], [-143.48754744462, 56.335479250178], [-143.4880355132, 56.335346929051], [-143.53515083913, 56.322701207615], [-143.53563837517, 56.322571670662], [-143.58292345512, 56.310135757576], [-143.58340378591, 56.310010704885], [-143.6308471758, 56.297784600149], [-143.63132798616, 56.297661967204], [-143.67893350069, 56.285645670817], [-143.67942655214, 56.28552254954], [-143.72719228396, 56.273723690898], [-143.7276657283, 56.273607966388], [-143.775584048, 56.262018916095], [-143.77606259725, 56.261904424402], [-143.82413159749, 56.250528997156], [-143.82459980781, 56.250419384287], [-143.8728156739, 56.239253765391], [-143.87330454829, 56.239141844905], [-143.92166728023, 56.22819747845], [-143.92213126821, 56.228093638039], [-143.97063705129, 56.217359079933], [-143.97112094055, 56.217253249387], [-143.97887622009, 56.215577221124], [-143.98403054385, 56.214604043717], [-143.98922880617, 56.213902476553], [-143.99445670449, 56.213474449933], [-143.9996998547, 56.213321141535], [-144.00494383074, 56.213442973175], [-144.01017420426, 56.213839609642], [-144.01537658434, 56.214509959627], [-144.0205366571, 56.215452178719], [-144.02564022503, 56.216663674485], [-144.03067324612, 56.218141113601], [-144.03562187245, 56.219880431021], [-144.0404724883, 56.221876841165], [-144.04521174764, 56.224124851085], [-144.04982661079, 56.226618275577], [-144.05430438037, 56.229350254203], [-144.05863273619, 56.23231327016], [-144.06279976915, 56.235499170969], [-144.06679401402, 56.238899190901], [-144.07060448098, 56.2425039751], [-144.07422068588, 56.246303605314], [-144.07763267904, 56.250287627194], [-144.08083107265, 56.25444507905], [-144.08380706662, 56.258764522016], [-144.08655247275, 56.263234071523], [-144.08905973731, 56.267841429994], [-144.09132196177, 56.272573920684], [-144.09333292181, 56.277418522559], [-144.09508708447, 56.282361906118], [-144.0965796233, 56.287390470074], [-144.09780643173, 56.29249037877], [-144.0987641343, 56.297647600254], [-144.09945009596, 56.30284794488], [-144.09986242936, 56.308077104353], [-144.1, 56.313320691098], [-144.1, 73.585323604668], [-144.09986002534, 73.590612776504], [-144.09944049323, 73.595887141338], [-144.09874257813, 73.601131933624], [-144.09776823386, 73.606332470602], [-144.09652018809, 73.611474193403], [-144.09500193471, 73.616542707809], [-144.09321772407, 73.62152382455], [-144.09117255104, 73.626403599023], [-144.08887214109, 73.631168370332], [-144.08632293418, 73.635804799534], [-144.0835320668, 73.640299906976], [-144.08050735198, 73.644641108635], [-144.07725725738, 73.648816251348], [-144.07379088161, 73.652813646831], [-144.07011792877, 73.656622104402], [-144.06624868128, 73.660230962311], [-144.06219397105, 73.663630117585], [-144.05796514922, 73.666810054311], [-144.05357405436, 73.669761870279], [-144.0490329793, 73.6724773019], [-144.04435463675, 73.674948747341], [-144.03955212369, 73.677169287808], [-144.03463888474, 73.679132706914], [-144.02962867446, 73.680833508079], [-144.02453551892, 73.682266929924], [-144.01937367635, 73.683428959592], [-144.01415759731, 73.68431634399], [-144.00890188418, 73.684926598891], [-144.00362125028, 73.685258015891], [-143.99833047871, 73.685309667191], [-143.99304438096, 73.685081408192], [-143.98777775542, 73.684573877904], [-143.93392185942, 73.67794175578], [-143.93357926831, 73.677898966657], [-143.84020883069, 73.666073405134], [-143.83985777065, 73.666028311258], [-143.74698705837, 73.653931906228], [-143.74663107746, 73.653884889624], [-143.65427153461, 73.641517641089], [-143.65391907838, 73.64146980782], [-143.56207833436, 73.628839345173], [-143.56171691174, 73.628788968186], [-143.47040450329, 73.615891476731], [-143.47003300572, 73.615838293087], [-143.37926419164, 73.602669958126], [-143.37890459077, 73.602617121398], [-143.28868318575, 73.589193201721], [-143.28830557681, 73.589136280633], [-143.19864302493, 73.575445332146], [-143.19827560284, 73.575388529799], [-143.18996776007, 73.57408834494], [-143.15481122698, 73.574035148584], [-143.15451989185, 73.574034283371], [-143.05282959949, 73.573584149094], [-143.0525293174, 73.573582369022], [-142.95086572793, 73.572827058963], [-142.95057269684, 73.572824452506], [-142.84894725434, 73.57177159606], [-142.84864637114, 73.571768026119], [-142.7470705197, 73.570409993893], [-142.7467766456, 73.570405632959], [-142.64526564401, 73.568750054346], [-142.64496742454, 73.568744745705], [-142.54353462424, 73.566787806008], [-142.54323578666, 73.566781593749], [-142.4418907244, 73.564523292967], [-142.44159104818, 73.564516165802], [-142.34034898275, 73.561956503937], [-142.34005221241, 73.561948559994], [-142.2389245879, 73.559091351742], [-142.23862668998, 73.559082490801], [-142.13763067252, 73.555927736162], [-142.13732433575, 73.555917697352], [-142.0364656474, 73.552457766932], [-142.0361693472, 73.552447162643], [-141.93546324674, 73.548693500534], [-141.93515804276, 73.548681657761], [-141.83461788163, 73.544626634568], [-141.83433070323, 73.544614638569], [-141.8147179899, 73.543767139216], [-141.73395321939, 73.540265247126], [-141.73364792886, 73.540251542597], [-141.63347588601, 73.53560142663], [-141.63317362603, 73.535586936982], [-141.53320566949, 73.530643089326], [-141.53290190948, 73.530627603965], [-141.43314566863, 73.525390024619], [-141.4328320726, 73.525373065814], [-141.33330662094, 73.519834125384], [-141.33300286204, 73.519816756564], [-141.23371392161, 73.513987899142], [-141.23340409986, 73.513969228224], [-141.13436692945, 73.507846639112], [-141.1340545863, 73.507826839022], [-141.03528635205, 73.501410518221], [-141.03497236429, 73.501389624339], [-140.93647497354, 73.494679571849], [-140.93616207572, 73.494657762902], [-140.83795269462, 73.48765779342], [-140.83763716097, 73.487634801732], [-140.73972914095, 73.480344915257], [-140.73941098139, 73.480320715751], [-140.64181576655, 73.472740912285], [-140.64149532842, 73.472715507038], [-140.5442186408, 73.464845786579], [-140.5438986049, 73.464819378268], [-140.44695951798, 73.456663555515], [-140.44663682473, 73.456635879871], [-140.35004296792, 73.448193954822], [-140.34971717138, 73.448164944516], [-140.25347998876, 73.439436917172], [-140.25315451156, 73.43940686232], [-140.15728926192, 73.430396547379], [-140.15695703882, 73.43036476257], [-140.06146944421, 73.421068345334], [-140.06113746806, 73.421035465945], [-139.96604087992, 73.411456761111], [-139.96570922674, 73.411422796443], [-139.87101508917, 73.401565618708], [-139.8706761226, 73.40152974995], [-139.77639206498, 73.391390284618], [-139.77605650155, 73.391353624546], [-139.68219969003, 73.380939501011], [-139.68185651887, 73.380900823603], [-139.58843458284, 73.370208227168], [-139.58808790296, 73.370167934935], [-139.49510656445, 73.359196865599], [-139.49476312264, 73.359155739788], [-139.40223764046, 73.347913826946], [-139.40188566966, 73.347870428781], [-139.3098274879, 73.336353857736], [-139.3094751567, 73.336309145151], [-139.2178938121, 73.3245217306], [-139.21753720302, 73.324475179505], [-139.12644032497, 73.312416921449], [-139.12608312228, 73.31236898433], [-139.03548024752, 73.300043697465], [-139.03511736259, 73.299993654784], [-138.94502374992, 73.28740133911], [-138.94465671259, 73.287349344804], [-138.8550761767, 73.274490000321], [-138.85470812551, 73.274436467606], [-138.76565020315, 73.261313909012], [-138.76527621757, 73.261258080138], [-138.67675426017, 73.247872307433], [-138.67637925669, 73.247814873786], [-138.58840089365, 73.234169701667], [-138.58802022973, 73.234109910593], [-138.50059499779, 73.22020533906], [-138.50020916607, 73.220143201107], [-138.41334278728, 73.205979230159], [-138.41295871219, 73.205915837245], [-138.326664538, 73.191500096278], [-138.32626611647, 73.191432710865], [-138.24055177626, 73.176757570484], [-138.24016048952, 73.176689778356], [-138.15503170534, 73.161766682653], [-138.15462921155, 73.161695277159], [-138.0700974275, 73.146520411436], [-138.06969324369, 73.14644699644], [-137.9857641818, 73.131024175395], [-137.98535222373, 73.130947581318], [-137.98151463828, 73.130225749769], [-137.9763086885, 73.12910222733], [-137.97116993726, 73.127703137786], [-137.96611296024, 73.126032449545], [-137.96115210114, 73.124094901383], [-137.95630143107, 73.121895989004], [-137.95157470856, 73.119441949451], [-137.94698534059, 73.116739743413], [-137.94254634454, 73.113797035486], [-137.93827031129, 73.110622172432], [-137.93416936945, 73.107224159499], [-137.93025515104, 73.103612634885], [-137.92653875842, 73.099797842397], [-137.92303073285, 73.095790602394], [-137.91974102457, 73.091602281098], [-137.91667896458, 73.087244758354], [-137.91385323818, 73.082730393934], [-137.91127186031, 73.078071992478], [-137.90894215285, 73.073282767177], [-137.90687072383, 73.068376302293], [-137.90506344871, 73.063366514628], [-137.90352545366, 73.058267614053], [-137.9022611011, 73.0530940632], [-137.90127397727, 73.047860536438], [-137.90056688205, 73.042581878258], [-137.90014182108, 73.037273061158], [-137.9, 73.031949143183], [-137.9, 72.524600366465], [-137.89976262677, 72.512256625797], [-137.89974424625, 72.510189404187], [-137.9, 72.333261057286], [-137.9, 59.455011857329], [-137.90013853047, 59.449750022658], [-137.90042815915, 59.446089791469], [-137.90000072337, 59.333713692404], [-137.9, 59.333333333334], [-137.9, 53.526264484997], [-137.89999999531, 53.509828760816], [-137.90000000153, 53.506850888038], [-137.89999999275, 53.47533236382], [-137.90000000141, 53.475117267888], [-137.8999999988, 53.314588958878], [-137.9, 52.999999999618], [-137.9, 52.059228809204], [-137.90013548209, 52.05402515071], [-137.90054156123, 52.048835592267], [-137.90121713712, 52.043674195718], [-137.90216037917, 52.038554946598], [-137.90336873153, 52.033491716239], [-137.90483892001, 52.02849822418], [-137.90656696093, 52.023588000996], [-137.9085481719, 52.018774351633], [-137.91077718456, 52.014070319356], [-137.91324795909, 52.009488650406], [-137.91595380056, 52.005041759465], [-137.91888737712, 52.000741696014], [-137.92204073982, 51.996600111685], [-137.92540534419, 51.992628228687], [-137.92897207335, 51.9888368094], [-137.93273126275, 51.985236127212], [-137.93667272632, 51.981835938681], [-137.94078578411, 51.9786454571], [-137.94505929121, 51.975673327532], [-137.94948166794, 51.972927603382], [-137.95404093126, 51.970415724578], [-137.95872472719, 51.968144497414], [-137.96352036432, 51.9661200761], [-137.96841484818, 51.964347946092], [-137.9733949165, 51.962832909229], [-137.97844707506, 51.961579070718], [-137.98355763432, 51.960589828011], [-137.9887127465, 51.959867861601], [-137.9938984431, 51.95941512776], [-137.99910067273, 51.959232853233], [-138.00430533921, 51.95932153192], [-138.00949833977, 51.959680923532], [-138.01466560323, 51.960310054248], [-138.01979312815, 51.961207219348], [-138.0248670208, 51.962369987837], [-138.02987353272, 51.963795209028], [-138.03479909808, 51.965479021083], [-138.03963037035, 51.967416861474], [-138.04435425851, 51.969603479348], [-138.04895796253, 51.972032949754], [-138.05342900801, 51.974698689699], [-138.05775528001, 51.97759347598], [-138.06192505591, 51.980709464766], [-138.06592703709, 51.984038212843], [-138.06975037961, 51.987570700496], [-138.07338472361, 51.991297355949], [-138.07682022129, 51.995208081302], [-138.23506953579, 52.1850957592], [-138.39331885029, 52.374983437098], [-138.39664146782, 52.379195090555], [-138.39973345179, 52.383578861443], [-138.40258590416, 52.388122134228], [-138.44773010636, 52.464501580919], [-138.53210293822, 52.607251920911], [-138.53254489637, 52.607993668856], [-138.62810925569, 52.767819372177], [-138.63023356626, 52.771551856765], [-138.63219565708, 52.775372110189], [-138.70945861776, 52.934102981555], [-138.7867215697, 53.092833834961], [-138.82885560821, 53.179394965849], [-138.83087235557, 53.183807079039], [-138.83267275294, 53.188311807887], [-138.83425256327, 53.192898550959], [-138.8342526034, 53.192898677337], [-138.83566763266, 53.197782429498], [-138.83683259287, 53.202731794173], [-138.83774447221, 53.207733975602], [-138.83840091318, 53.212776041473], [-138.83870746527, 53.216667514565], [-138.83873043957, 53.216666019182], [-138.84295594336, 53.281584465565], [-138.85084953532, 53.402591607826], [-138.85098092483, 53.4050844292], [-138.85219536189, 53.435295567043], [-138.85646988851, 53.441366839038], [-138.87547038684, 53.46621750969], [-138.8761046421, 53.467056150652], [-138.89593725319, 53.493568296649], [-138.89656783969, 53.494420645254], [-138.91603805453, 53.521031973379], [-138.9166728455, 53.521909520367], [-138.93577494206, 53.548620030621], [-138.93639759924, 53.549500692514], [-138.95513157751, 53.576302755502], [-138.95575622734, 53.577206961613], [-138.96117795437, 53.58514809109], [-138.9917673787, 53.602682885349], [-138.99599122125, 53.605244767564], [-139.02922486382, 53.626542222399], [-139.02983615949, 53.626937110443], [-139.06278942182, 53.648394782562], [-139.06341365168, 53.64880457972], [-139.09608271906, 53.670426283822], [-139.09669732522, 53.670836327943], [-139.12908029031, 53.692614434633], [-139.12968987218, 53.693027656936], [-139.16178673497, 53.714958351516], [-139.16241816339, 53.715393345341], [-139.19422320184, 53.737484257206], [-139.19484716284, 53.737921175759], [-139.2263622843, 53.760168490212], [-139.22699282485, 53.760617270577], [-139.25820849257, 53.78301717292], [-139.25883583857, 53.78347103688], [-139.28975586725, 53.806023527115], [-139.29038287023, 53.806484599972], [-139.32100344518, 53.829185863399], [-139.32163906038, 53.829661011096], [-139.35195445955, 53.852511047717], [-139.35260021156, 53.853001898594], [-139.3826085276, 53.876004523106], [-139.38323404165, 53.876487942933], [-139.4129371819, 53.899631711244], [-139.41356889477, 53.900128013143], [-139.44296304455, 53.923412925252], [-139.44361580234, 53.923934467784], [-139.4726952396, 53.947368153087], [-139.47333048224, 53.94788436625], [-139.50209520697, 53.971455380655], [-139.50274265812, 53.971990489896], [-139.53118885563, 53.995702648099], [-139.53183459864, 53.996245558959], [-139.55996417628, 54.020098860961], [-139.56060890488, 54.020650296002], [-139.58841423325, 54.044637112408], [-139.58906236774, 54.045201112918], [-139.6165415395, 54.069321443729], [-139.6171903324, 54.069895929364], [-139.64434334754, 54.094149774579], [-139.64500359353, 54.094744821438], [-139.67182663736, 54.119135995755], [-139.67246734387, 54.119723722269], [-139.69896232373, 54.144240781595], [-139.69962488089, 54.144859475159], [-139.72578035269, 54.169506234192], [-139.7264295163, 54.170123464949], [-139.75225120209, 54.194896108992], [-139.75290569134, 54.195529758809], [-139.77838977643, 54.220428287862], [-139.77904671678, 54.221076083697], [-139.80418747911, 54.246096683063], [-139.80484418437, 54.246756361544], [-139.82964162394, 54.271899031222], [-139.83029783761, 54.272570658806], [-139.85475195443, 54.297835398796], [-139.85541040712, 54.29852218632], [-139.87951547914, 54.323905181926], [-139.880178581, 54.324610240049], [-139.90393079352, 54.35011149127], [-139.90457735488, 54.350812333461], [-139.9279805226, 54.376424210902], [-139.92897211323, 54.377525665075], [-139.97470842609, 54.429092742712], [-139.97569714692, 54.430224530706], [-139.99802647736, 54.456175916204], [-139.99867335714, 54.456935356038], [-140.02064601339, 54.48299355306], [-140.02130739441, 54.48378617538], [-140.04291193238, 54.509951183925], [-140.04355372664, 54.510736531675], [-140.06479586836, 54.537000722349], [-140.06545946083, 54.537830172223], [-140.07562125809, 54.550671014083],
                ],
            ],
        ];
    }
}
