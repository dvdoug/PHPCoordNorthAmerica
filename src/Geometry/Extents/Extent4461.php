<?php
/**
 * PHPCoord.
 *
 * @author Doug Wright
 */
declare(strict_types=1);

namespace PHPCoord\Geometry\Extents;

/**
 * North America/Greenland - 59°N to 84°N.
 * @internal
 */
class Extent4461
{
    public function __invoke(): array
    {
        return
        [
            [
                [
                    [-66.356574451804, 80.92383371635], [-66.352144611045, 80.92535115843], [-66.347105963027, 80.926787089986], [-66.341999024113, 80.927957153327], [-66.336837812787, 80.928858136643], [-66.331636496508, 80.929487566747], [-66.279283303872, 80.934435394025], [-65.987743137125, 80.999610300201], [-65.690060851178, 81.066158300339], [-65.392378565231, 81.132706300477], [-64.797013993336, 81.265802300752], [-64.499331707389, 81.33235030089], [-64.204268928063, 81.398312700422], [-63.918682676772, 81.478461420517], [-63.630512105057, 81.559335420535], [-63.342341533343, 81.640209420552], [-63.054170961628, 81.72108342057], [-62.766000389914, 81.801957420587], [-62.4778298182, 81.882831420605], [-62.189659246485, 81.963705420622], [-62.184155189285, 81.965082934174], [-62.178581865339, 81.966146066074], [-61.868987436483, 82.016145208925], [-61.559393007628, 82.066144351777], [-61.249798578772, 82.116143494629], [-60.940204149917, 82.16614263748], [-60.630609721061, 82.216141780332], [-60.321015292205, 82.266140923184], [-60.019805778689, 82.314785911888], [-59.933840197787, 82.344191001963], [-59.928198830635, 82.345936393441], [-59.922464275643, 82.347345752803], [-59.916656530017, 82.348414165413], [-59.611807219086, 82.395235936632], [-59.440641749726, 82.427308629367], [-59.306119694531, 82.463658819678], [-59.30094968463, 82.464909308646], [-59.295720497298, 82.465883128387], [-59.252227061725, 82.47279144798], [-59.091326362067, 82.498348258909], [-58.907783309162, 82.535642652982], [-58.725086952999, 82.572765005447], [-58.498267665138, 82.633267361378], [-58.272336873835, 82.693532717469], [-58.244311880336, 82.703422643648], [-58.054233337784, 82.782616098919], [-57.916951870273, 82.857302156312], [-57.835225482314, 82.918237472809], [-57.831952240197, 82.924868682839], [-57.829618922697, 82.929311264591], [-57.827065681814, 82.933631202573], [-57.824298946839, 82.937817618792], [-57.821325684661, 82.941859971474], [-57.818153382223, 82.945748081608], [-57.814790027669, 82.949472158584], [-57.811244090229, 82.953022824838], [-57.807524498893, 82.956391139473], [-57.80364061993, 82.959568620767], [-57.799602233296, 82.962547267536], [-57.757507523164, 82.991994005888], [-57.749871556528, 82.999319008273], [-57.746467333915, 83.002436948508], [-57.742922843227, 83.005394459061], [-57.739245637874, 83.008185237392], [-57.735443554085, 83.010803336276], [-57.637371407408, 83.075049750225], [-57.598697857687, 83.107416144992], [-57.594477471927, 83.110759238786], [-57.590083274765, 83.113870342026], [-57.585528004068, 83.116740436269], [-57.555462529178, 83.134571284248], [-57.471543479855, 83.197279803831], [-57.467426853177, 83.200197057229], [-57.463168323423, 83.202902959465], [-57.458778731523, 83.205390622131], [-57.424624096888, 83.223624011167], [-57.318186990094, 83.293664177084], [-57.315609969044, 83.295547691069], [-57.311741802515, 83.298108407288], [-57.263114401863, 83.328701532321], [-57.203752486306, 83.372911032486], [-57.199308632009, 83.376036556179], [-57.194701591233, 83.378916124666], [-57.140721465945, 83.410649777203], [-57.036986937743, 83.486236037116], [-56.996191598158, 83.521175815589], [-56.937659842579, 83.586089466668], [-56.890278647192, 83.650965792585], [-56.837458277143, 83.760973492427], [-56.817462588887, 83.83727439456], [-56.816642107545, 83.9037272225], [-56.818329566871, 83.916142643898], [-56.836704362781, 83.96444381576], [-56.838434652765, 83.969376409851], [-56.839904826692, 83.974392681027], [-56.841110867402, 83.979478922635], [-56.842049479464, 83.984621236831], [-56.842718098176, 83.989805572555], [-56.84311489658, 83.995017763929], [-56.843238790449, 84.000243568958], [-56.843089441248, 84.005468708449], [-56.842667257067, 84.01067890503], [-56.841973391498, 84.015859922156], [-56.841009740485, 84.020997603016], [-56.839778937147, 84.02607790921], [-56.838284344577, 84.031086959114], [-56.836530046659, 84.036011065806], [-56.834520836905, 84.040836774464], [-56.832262205356, 84.045550899135], [-56.829760323587, 84.050140558763], [-56.827022027834, 84.054593212383], [-56.824054800324, 84.058896693392], [-56.820866748825, 84.063039242792], [-56.817466584491, 84.067009541319], [-56.813863598065, 84.070796740376], [-56.810067634485, 84.074390491674], [-56.80608906599, 84.077780975507], [-56.801938763775, 84.080958927585], [-56.797628068286, 84.083915664349], [-56.793168758235, 84.086643106697], [-56.788573018414, 84.08913380206], [-56.783853406401, 84.091380944764], [-56.779022818246, 84.09337839463], [-56.774094453236, 84.095120693749], [-56.769081777827, 84.096603081394], [-56.763998488847, 84.097821507033], [-56.758858476073, 84.098772641391], [-56.753675784274, 84.099453885553], [-56.748464574839, 84.099863378061], [-56.743239087078, 84.1], [-10, 84.1], [-9.9947664043757, 84.099862953475], [-9.9895471536732, 84.099452189537], [-9.984356553496, 84.09876883406], [-9.9792088309182, 84.097814760073], [-9.9741180954897, 84.096592582629], [-9.9690983005625, 84.09510565163], [-9.9641632050455, 84.09335804265], [-9.9593263356924, 84.091354545764], [-9.954600950026, 84.089100652419], [-9.95, 84.086602540378], [-9.9455360964985, 84.083867056795], [-9.9412214747708, 84.080901699438], [-9.937067960895, 84.077714596146], [-9.9330869393641, 84.074314482548], [-9.9292893218813, 84.070710678119], [-9.9256855174523, 84.066913060636], [-9.9222854038543, 84.062932039105], [-9.9190983005625, 84.058778525229], [-9.9161329432055, 84.054463903502], [-9.9133974596216, 84.05], [-9.9108993475812, 84.045399049974], [-9.9086454542357, 84.040673664308], [-9.9066419573503, 84.035836794955], [-9.9048943483705, 84.030901699438], [-9.9034074173711, 84.02588190451], [-9.9021852399266, 84.020791169082], [-9.9012311659405, 84.015643446504], [-9.9005478104632, 84.010452846327], [-9.9001370465245, 84.005233595624], [-9.9, 84], [-9.9, 73.174039389056], [-9.9001321851009, 73.168899394184], [-9.9005283909456, 73.163772987928], [-9.9011875700838, 73.158673722977], [-9.9021079798424, 73.153615080268], [-9.9032871869323, 73.148610433345], [-9.9047220738812, 73.143673013004], [-9.9064088472756, 73.138815872313], [-9.9083430477894, 73.134051852104], [-9.9105195619727, 73.129393547027], [-9.9129326357705, 73.124853272253], [-9.9155758897349, 73.120443030915], [-9.9184423358899, 73.116174482377], [-9.9215243962061, 73.11205891141], [-9.9248139226344, 73.108107198357], [-9.9283022186472, 73.104329790369], [-9.9319800622292, 73.100736673788], [-9.9358377302579, 73.097337347743], [-9.9398650242087, 73.09414079904], [-9.9440512971163, 73.0911554784], [-9.9483854817226, 73.088389278122], [-9.952856119735, 73.085849511215], [-9.9574513921188, 73.083542892066], [-9.9621591503431, 73.081475518689], [-9.966966948498, 73.079652856603], [-9.9718620761979, 73.078079724383], [-9.9768315921836, 73.076760280922], [-10.158081301944, 73.033593076032], [-10.481428502243, 72.956583325979], [-10.804775702542, 72.879573575925], [-11.128122902841, 72.802563825871], [-11.431949693211, 72.730203140006], [-11.67421183202, 72.553612145182], [-11.932689632236, 72.365201144997], [-12.191167432453, 72.17679014481], [-12.449645232669, 71.988379144625], [-12.686259417561, 71.815905086131], [-12.807727339279, 71.538302085379], [-12.94004088712, 71.235912471717], [-13.204667982801, 70.631133244391], [-13.336981530641, 70.328743630729], [-13.469295078482, 70.026354017066], [-13.508988986634, 69.935637489949], [-13.381257359982, 69.820812111921], [-13.199812859484, 69.657701111875], [-13.195961798565, 69.654049823284], [-13.192309860351, 69.650199378394], [-13.188867329642, 69.646160621049], [-13.185643901491, 69.641944925433], [-13.182648653903, 69.637564164031], [-13.179890022268, 69.633030674197], [-13.177375775605, 69.628357223407], [-13.175112994679, 69.623556973304], [-13.173108052065, 69.61864344263], [-13.1713665942, 69.613630469153], [-13.169893525476, 69.608532170701], [-13.168692994437, 69.603362905396], [-13.167768382085, 69.598137231222], [-13.16712229237, 69.592869865025], [-13.166756544844, 69.587575641067], [-13.166672169549, 69.582269469247], [-13.166869404106, 69.576966293114], [-13.167347693053, 69.571681047778], [-13.168105689403, 69.566428617854], [-13.169141258445, 69.561223795539], [-13.170451483748, 69.556081238954], [-13.17203267538, 69.551015430866], [-13.173880380299, 69.546040637894], [-13.175989394889, 69.54117087034], [-13.178353779623, 69.536419842725], [-13.180966875784, 69.531800935167], [-13.183821324218, 69.527327155701], [-13.186909086063, 69.523011103644], [-13.190221465386, 69.518864934111], [-13.193749133671, 69.514900323785], [-13.197482156097, 69.511128438031], [-13.201410019508, 69.507559899451], [-13.205521662028, 69.50420475797], [-13.352188162545, 69.390871257472], [-13.498854663061, 69.277537756973], [-13.502948941062, 69.274536817122], [-13.507190231269, 69.271747514393], [-13.511567604407, 69.269177036469], [-13.51606978053, 69.266832007153], [-13.520685158093, 69.264718469292], [-13.525401843843, 69.262841869209], [-13.53020768347, 69.261207042669], [-13.535090292925, 69.259818202416], [-13.540037090333, 69.258678927318], [-13.545035328413, 69.257792153144], [-13.844201995236, 69.212514486488], [-14.14336866206, 69.167236819832], [-14.442535328884, 69.121959153176], [-14.741701995708, 69.07668148652], [-15.040868662532, 69.031403819864], [-15.340035329356, 68.986126153208], [-15.346210140253, 68.985387194378], [-15.544543640758, 68.967887194337], [-15.738345567642, 68.950787038692], [-16.050869015852, 68.894263278908], [-16.367869016056, 68.836929878915], [-16.684869016259, 68.779596478923], [-17.318869016667, 68.664929678939], [-17.32345420545, 68.664209848472], [-17.915305983906, 68.585320959593], [-18.211231873134, 68.545876515153], [-19.099009540818, 68.427543181834], [-19.394935430046, 68.388098737395], [-19.985721669498, 68.309351875947], [-20.276326096686, 68.264238942702], [-20.56799276352, 68.218961109195], [-20.859659430353, 68.173683275688], [-21.151326097186, 68.128405442181], [-21.44299276402, 68.083127608675], [-21.732520562956, 68.038181809355], [-22.050431465576, 67.974633880239], [-22.690498266366, 67.84668948025], [-23.010531666761, 67.782717280255], [-23.330565067156, 67.718745080261], [-23.333297273545, 67.718238305998], [-23.606172273783, 67.671537056], [-23.879047274022, 67.624835806001], [-24.15192227426, 67.578134556003], [-24.422742389287, 67.531784989771], [-24.710287196943, 67.470138509701], [-24.99987044721, 67.408055009701], [-25.289453697478, 67.3459715097], [-25.573728960211, 67.285025984509], [-25.807742105179, 67.207565377298], [-26.046908855419, 67.128398877053], [-26.286075605659, 67.049232376808], [-26.525242355899, 66.970065876564], [-26.532326179976, 66.968007664903], [-26.751492679962, 66.913007664872], [-26.963739405738, 66.859744187447], [-27.240225069184, 66.74663641624], [-27.523313897894, 66.630827350158], [-27.727136241512, 66.547445482399], [-27.731710709184, 66.545703546749], [-28.035044209432, 66.438620046502], [-28.338377709681, 66.331536546254], [-28.64171120993, 66.224453046007], [-28.920553018618, 66.126015659879], [-29.122947639897, 65.896737415801], [-29.342530890143, 65.64798741579], [-29.562114140389, 65.399237415779], [-29.774646654839, 65.158474684958], [-29.914437025161, 64.909101582452], [-30.059437025147, 64.650434982052], [-30.204437025134, 64.391768381651], [-30.34943702512, 64.133101781251], [-30.492520747357, 63.877853643269], [-30.678655870679, 63.474744919755], [-30.772544871018, 63.271411586405], [-30.774823164446, 63.26679377905], [-30.777336141033, 63.262299369812], [-30.780077137678, 63.257940275513], [-30.783038886695, 63.253728054189], [-30.786213535074, 63.249673874447], [-30.78959266531, 63.245788485848], [-30.793167317719, 63.24208219041], [-30.796928014193, 63.238564815288], [-30.800864783334, 63.23524568672], [-30.804967186891, 63.232133605298], [-30.809224347435, 63.229236822632], [-30.813624977208, 63.226563019474], [-30.81815740804, 63.224119285351], [-30.822809622299, 63.221912099766], [-31.031566622322, 63.129377099817], [-31.037384892245, 63.127013747841], [-31.043340033209, 63.125020260052], [-31.268133238998, 63.057542114174], [-31.485055032815, 62.963222988982], [-31.490028263071, 62.961217374054], [-31.495101853699, 62.959481232193], [-31.757679353949, 62.877425231943], [-32.020256854199, 62.795369231693], [-32.282834354449, 62.713313231443], [-32.545411854699, 62.631257231193], [-32.549609605727, 62.630045425492], [-32.553856283221, 62.629018139256], [-32.838599533471, 62.566689139255], [-33.123342783721, 62.504360139256], [-33.408086033971, 62.442031139255], [-33.662799058356, 62.38627561886], [-33.826929208629, 62.213178113826], [-34.012211209129, 62.017773113826], [-34.01555018115, 62.014414692792], [-34.019044412134, 62.01121812028], [-34.022686065314, 62.008190565473], [-34.026466973293, 62.00533881849], [-34.251581973293, 61.843764484823], [-34.476696973293, 61.682190151157], [-34.701811973293, 61.52061581749], [-34.705963387142, 61.517791344769], [-34.710251343874, 61.515178815309], [-34.71466503274, 61.512784815791], [-34.768967677848, 61.485072111904], [-34.916022340057, 61.376059267485], [-35.049229589065, 61.277311625667], [-35.202254688298, 60.945779985548], [-35.204597572334, 60.94103787124], [-35.207187916241, 60.936426269332], [-35.21001847308, 60.93195808159], [-35.21308132387, 60.927645808552], [-35.216367899749, 60.923501514558], [-35.366205566416, 60.744495514225], [-35.516043233082, 60.565489513891], [-35.665880899749, 60.386483513558], [-35.669291034222, 60.38261660878], [-35.672895938772, 60.378930603778], [-35.676686030851, 60.375435296679], [-35.680651235648, 60.372139978697], [-35.719429384503, 60.341568227839], [-35.906258498566, 60.111411169446], [-35.909718330796, 60.107373279299], [-35.91338790752, 60.103525006625], [-35.917256853012, 60.099877232416], [-35.921314227829, 60.096440270749], [-35.955840652698, 60.068735737372], [-35.965589763057, 60.045387295638], [-35.967805799885, 60.040458950611], [-35.970284814529, 60.035657503919], [-35.973019568413, 60.030996975502], [-35.976002076219, 60.026490973824], [-35.979223629202, 60.022152656141], [-36.120550295869, 59.842203989141], [-36.261876962535, 59.662255322141], [-36.395846378869, 59.491674507801], [-36.456601626431, 59.337325287422], [-36.458764704737, 59.332246026467], [-36.461204789147, 59.327293876664], [-36.463914442821, 59.322483931075], [-36.466885407331, 59.317830849356], [-36.470108627832, 59.313348813077], [-36.539214006158, 59.222645724706], [-36.542190324108, 59.2149629707], [-36.544282053167, 59.209969312178], [-36.54664097677, 59.205096178141], [-36.54926018045, 59.2003578527], [-36.552131986809, 59.195768224814], [-36.55524797802, 59.191340747578], [-36.689852644687, 59.010679080578], [-36.742324215708, 58.940253576578], [-36.745518382853, 58.936190047028], [-36.748918242996, 58.932296985616], [-36.752514713418, 58.928584792646], [-36.756298186158, 58.925063385231], [-36.760258553676, 58.921742170805], [-36.764385235861, 58.918630021982], [-36.768667208291, 58.915735252861], [-36.773093031686, 58.913065596812], [-36.777650882471, 58.910628185813], [-36.782328584357, 58.908429531402], [-36.787113640875, 58.906475507281], [-36.791993268758, 58.904771333618], [-36.796954432092, 58.90332156311], [-36.80198387714, 58.902130068816], [-36.807068167753, 58.90120003381], [-36.81219372126, 58.900533942678], [-36.817346844757, 58.900133574881], [-36.822513771688, 58.9], [-54.114544833614, 58.9], [-54.119963611199, 58.900146923685], [-54.125366465848, 58.90058726301], [-54.130737521416, 58.901319724049], [-54.136060995196, 58.902342154484], [-54.141321244302, 58.903651549931], [-54.146502811628, 58.905244062765], [-54.151590471276, 58.90711501343], [-54.156569273292, 58.909258904185], [-54.161424587597, 58.911669435265], [-54.166142146977, 58.914339523387], [-54.170708089009, 58.917261322567], [-54.175108996791, 58.920426247175], [-54.282325380511, 59.002029418175], [-54.492592714177, 59.162065418175], [-54.496362676682, 59.165081217314], [-54.499982691384, 59.168275455141], [-54.503444320873, 59.171640686635], [-54.506739496902, 59.175169068229], [-54.6288014428, 59.312364033431], [-54.809975384613, 59.405626901357], [-54.814315690733, 59.407998734238], [-54.818533410613, 59.410582275885], [-54.822618226087, 59.413371205962], [-55.042515893087, 59.571620206296], [-55.262413560087, 59.729869206629], [-55.482311227087, 59.888118206962], [-55.486080391, 59.890968230913], [-55.489710709867, 59.893993130587], [-55.493194077465, 59.897186151615], [-55.496522715703, 59.900540164227], [-55.563853227531, 59.971669035123], [-55.75053550885, 60.102145517577], [-55.754438957301, 60.105016971919], [-55.758198717464, 60.108074154178], [-55.761805960609, 60.11130988543], [-55.765252216153, 60.114716567478], [-55.830559263719, 60.182479969483], [-55.965762708063, 60.275628914363], [-55.96961039522, 60.278416878687], [-55.973321304076, 60.281384469799], [-55.976887056346, 60.284524987636], [-55.980299601475, 60.287831341713], [-56.104262101475, 60.413782341713], [-56.221075943425, 60.532470011028], [-56.479741036486, 60.705748084153], [-56.483610851021, 60.708475336401], [-56.487347249307, 60.711382688669], [-56.490941856816, 60.7144636246], [-56.494386616822, 60.71771123878], [-56.517044573327, 60.740108943188], [-56.669501856602, 60.783066051235], [-56.786549773567, 60.810076821916], [-56.867340957625, 60.819053827535], [-56.872568204701, 60.819774721968], [-56.877750148098, 60.820770344085], [-56.882872359317, 60.822037921698], [-56.887920576175, 60.823573925386], [-56.996352091141, 60.859718076848], [-57.232941428181, 60.901452642221], [-57.238100979655, 60.902503558911], [-57.243198061853, 60.903824600303], [-57.248218542913, 60.905412103759], [-57.253148503351, 60.907261667862], [-57.257974274657, 60.909368164621], [-57.262682477188, 60.911725753692], [-57.267260057265, 60.914327898564], [-57.271694323365, 60.917167384687], [-57.27597298131, 60.920236339474], [-57.280084168351, 60.923526254126], [-57.284016486057, 60.927028007222], [-57.287759031923, 60.930731890015], [-57.29130142959, 60.93462763334], [-57.294633857622, 60.938704436097], [-57.297747076727, 60.942950995185], [-57.300632455384, 60.947355536853], [-57.303281993764, 60.951905849333], [-57.305688345918, 60.956589316703], [-57.307844840138, 60.961392953864], [-57.309745497459, 60.966303442541], [-57.311385048233, 60.971307168208], [-57.31275894674, 60.976390257839], [-57.313863383791, 60.981538618363], [-57.314695297292, 60.986737975749], [-57.351775509043, 61.265315258794], [-57.388855720787, 61.543892541779], [-57.41842250904, 61.766022759284], [-57.447989297293, 61.988152976789], [-57.448688323314, 61.995429805225], [-57.448689800931, 61.995454732321], [-57.450279054666, 61.99782811728], [-57.452877473271, 62.00216835241], [-57.45525308244, 62.006634435852], [-57.457399803126, 62.011214939157], [-57.459312141995, 62.015898141083], [-57.508891993104, 62.146673567958], [-57.640551058559, 62.443761505725], [-57.773075367261, 62.742801859993], [-57.984783451289, 63.205355085927], [-58.040584024414, 63.327271711255], [-58.042519545154, 63.331790938257], [-58.044230616848, 63.336399830411], [-58.077339260137, 63.432777644103], [-58.124140126764, 63.544787276765], [-58.126035245573, 63.549679948008], [-58.127671131745, 63.554665284871], [-58.12904328173, 63.559729562867], [-58.130147918042, 63.564858840187], [-58.130981999649, 63.570038996079], [-58.131543230348, 63.575255769728], [-58.131830065087, 63.580494799508], [-58.13184171422, 63.585741662523], [-58.131578145676, 63.590981914314], [-58.131040085051, 63.596201128619], [-58.130229013612, 63.601384937096], [-58.129147164213, 63.60651906887], [-58.127797515155, 63.611589389829], [-58.126183781982, 63.616581941526], [-58.124310407254, 63.621482979613], [-58.122182548317, 63.626279011675], [-58.107146552553, 63.657903779983], [-58.06385346797, 63.76213871894], [-58.047436316817, 63.85166183093], [-58.046458142041, 63.856357988655], [-58.045255885188, 63.861001834231], [-58.043832312736, 63.865582681832], [-58.04219070043, 63.870089990598], [-58.040334825739, 63.874513388884], [-58.024776825838, 63.909236389117], [-58.022052926126, 63.914840883871], [-58.018985247525, 63.920264843595], [-57.969180698202, 64.002252927529], [-57.912186367482, 64.10011364051], [-57.89859503316, 64.21041184306], [-57.87644162745, 64.507828540543], [-57.854108960857, 64.807651873849], [-57.831776294264, 65.107475207156], [-57.831261918213, 65.112597158959], [-57.830484647535, 65.117685854595], [-57.829446541919, 65.122727809545], [-57.828150352238, 65.127709663146], [-57.826599513261, 65.132618213997], [-57.824798134552, 65.137440454943], [-57.82367184898, 65.140233951856], [-57.828273856825, 65.155046175676], [-57.843998744645, 65.204436883959], [-57.84554053849, 65.209791226591], [-57.846781715973, 65.215223131573], [-57.847718423721, 65.220715734952], [-57.848347753621, 65.226251984329], [-57.848667751847, 65.231814691801], [-57.850608751636, 65.297371692078], [-57.850618625897, 65.302935877952], [-57.850319002581, 65.308491999604], [-57.84971080933, 65.314022855136], [-57.848795929125, 65.319511320874], [-57.832455403038, 65.403124582497], [-57.797495292478, 65.587572539463], [-57.796374116174, 65.592737739902], [-57.794981595501, 65.597836486616], [-57.783079170233, 65.63728434284], [-57.766935984259, 65.840728570817], [-57.766713444248, 65.853579273822], [-57.765320771501, 65.95313788719], [-57.765150484929, 65.957737624717], [-57.764768714034, 65.962324653582], [-57.764176267657, 65.96688925544], [-57.749155768995, 66.064889533973], [-57.731571869512, 66.214270631812], [-57.731144181463, 66.217460866158], [-57.717250027522, 66.309791673588], [-57.717244092852, 66.394101885703], [-57.731270746673, 66.485185126672], [-57.747568610903, 66.584116335958], [-57.748283304006, 66.589295461928], [-57.748726337521, 66.594504862407], [-57.749285632209, 66.604022445843], [-57.762398564394, 66.656269568768], [-57.774378981857, 66.689117980576], [-57.808945208091, 66.783893112754], [-57.811177123889, 66.790776844289], [-57.887134623859, 67.057591844844], [-57.962381640685, 67.321911139772], [-57.988786014999, 67.399192425012], [-58.002355210241, 67.412762462506], [-58.02069801126, 67.430833226652], [-58.021469859158, 67.431601956704], [-58.103134859428, 67.513827956419], [-58.10347772662, 67.514174866974], [-58.170142726365, 67.58195586727], [-58.173760198841, 67.585834476731], [-58.177166944155, 67.589899425048], [-58.180353379229, 67.594139277637], [-58.183310540711, 67.598542107911], [-58.231922616411, 67.675238019956], [-58.394351679857, 67.872391795584], [-58.395796784882, 67.87418762105], [-58.461071784953, 67.957246621086], [-58.465581006096, 67.963461439105], [-58.498079006287, 68.012074438999], [-58.500683623702, 68.016183568845], [-58.503085305485, 68.020414514907], [-58.515144520261, 68.04291675494], [-58.520794405905, 68.048772252257], [-58.524308833769, 68.05260954931], [-58.527618898959, 68.056624461554], [-58.640600644926, 68.201168054155], [-58.719794883897, 68.282221670951], [-58.723581744453, 68.286320223951], [-58.727134091414, 68.290623627329], [-58.760824694051, 68.333838883742], [-58.893168141405, 68.383122694917], [-59.052060641249, 68.442293194976], [-59.056726546328, 68.444165608492], [-59.061292447077, 68.446270163771], [-59.065746802452, 68.448601541212], [-59.070078353356, 68.451153847885], [-59.108818149965, 68.475312845284], [-59.262628264062, 68.524007911802], [-59.267581502618, 68.525720117144], [-59.272438236009, 68.527689472392], [-59.277185124626, 68.529910568471], [-59.281809130559, 68.532377304869], [-59.286297553412, 68.535082906394], [-59.290638065186, 68.538019941782], [-59.294818744134, 68.541180344106], [-59.298828107514, 68.544555432937], [-59.302655143118, 68.548135938182], [-59.306289339528, 68.551912025546], [-59.309243962502, 68.555322944066], [-59.535128266333, 68.640719532017], [-59.80161626676, 68.741466532054], [-60.068104267187, 68.842213532091], [-60.073096934544, 68.844256587654], [-60.077972164507, 68.84656590274], [-60.082715769766, 68.849134757059], [-60.198272769544, 68.915805756942], [-60.203416656828, 68.918984610046], [-60.35480565678, 69.018989610062], [-60.360975423092, 69.023410477353], [-60.438235918134, 69.08333541581], [-60.496341035595, 69.113982367876], [-60.501935941071, 69.117167649025], [-60.507314286449, 69.120706347131], [-60.70745278677, 69.261824347704], [-60.907591287091, 69.402942348277], [-60.911761574265, 69.406048241012], [-60.915764778202, 69.409366707982], [-60.919590075094, 69.41288877676], [-60.923227122155, 69.416604924426], [-60.926666085586, 69.420505103308], [-60.929897667164, 69.424578768157], [-60.932913129383, 69.428814904651], [-60.935704319076, 69.433202059183], [-60.938263689463, 69.437728369824], [-60.940584320553, 69.442381598395], [-60.942659937855, 69.447149163561], [-60.944484929343, 69.452018174843], [-61.002252929439, 69.619247174677], [-61.060020929536, 69.786476174511], [-61.061574790939, 69.791379501319], [-61.062874470435, 69.796356240438], [-61.06391652945, 69.801393224859], [-61.07320999264, 69.852967500089], [-61.074860922897, 69.854833262971], [-61.078099721134, 69.858901421584], [-61.081122668887, 69.863132439831], [-61.148340668792, 69.962581440067], [-61.148734092172, 69.963167963374], [-61.180592980224, 70.01102828333], [-61.215118091958, 70.062893962913], [-61.217935197846, 70.067379114305], [-61.220510880671, 70.072007129708], [-61.222837914955, 70.076765026305], [-61.224909772746, 70.081639456926], [-61.226720641929, 70.086616747493], [-61.228265442534, 70.091682935378], [-61.229539840983, 70.09682380857], [-61.230540262247, 70.10202494555], [-61.231263899879, 70.10727175574], [-61.231715385762, 70.111338382193], [-61.259483735566, 70.181007089668], [-61.261002029541, 70.185070477961], [-61.319047029504, 70.351327478341], [-61.366295871306, 70.486661283395], [-61.389852381435, 70.502841211352], [-61.393672879513, 70.505600049229], [-61.535755379591, 70.613383049397], [-61.674212167897, 70.71841560463], [-61.753129620316, 70.767675852], [-61.757391277969, 70.770489692491], [-61.761503728139, 70.773517427265], [-61.985668228684, 70.947553927357], [-62.209435149752, 71.121281755288], [-62.343478483174, 71.223204100983], [-62.348804695873, 71.227550855245], [-62.482135695836, 71.344223855125], [-62.486546232862, 71.348324308807], [-62.546665423864, 71.407690521009], [-62.588937102824, 71.437306317266], [-62.592762067094, 71.440123895282], [-62.596448898309, 71.443119954882], [-62.599989275625, 71.44628773423], [-62.613958668237, 71.459397579044], [-62.8764111273, 71.65549806282], [-62.876502576542, 71.655566473711], [-62.934696876364, 71.699152023316], [-63.095631604539, 71.780152529832], [-63.393363688513, 71.929579975718], [-63.396158348076, 71.931038163423], [-63.545307385178, 72.01187654214], [-63.721247386247, 72.091876422822], [-63.986456650097, 72.200613100179], [-64.253408150652, 72.310064100361], [-64.25713505096, 72.311681335138], [-64.473529051052, 72.410853334832], [-64.476045848881, 72.412049475553], [-64.660849043661, 72.503057371397], [-64.676210546939, 72.51062227381], [-64.939678752695, 72.627599635326], [-64.943674309088, 72.629480309809], [-65.010620309967, 72.662816309987], [-65.015082495631, 72.665180712488], [-65.019419629755, 72.667767364315], [-65.023620651997, 72.670569669119], [-65.027674849119, 72.673580480601], [-65.031571882311, 72.676792120741], [-65.035301813554, 72.680196399374], [-65.057063378308, 72.701089281225], [-65.156419567741, 72.744216022647], [-65.158287179673, 72.745049480208], [-65.41225192991, 72.861514730244], [-65.666216680146, 72.977979980279], [-65.920181430383, 73.094445230315], [-66.172509546839, 73.210159939331], [-66.44131355646, 73.321901510422], [-66.705074463659, 73.352871472524], [-66.982683797394, 73.385467472577], [-67.259497555161, 73.417970058644], [-67.536866584842, 73.44604106823], [-67.815032584873, 73.474192734846], [-68.093198584903, 73.502344401462], [-68.09826433648, 73.502988125707], [-68.214382337103, 73.520767125558], [-68.221949879201, 73.522226247791], [-68.505575879521, 73.588342247917], [-68.507825808909, 73.588894282583], [-68.814183454014, 73.66783434403], [-68.85213314027, 73.669128259908], [-68.857200944799, 73.669429992863], [-68.862246905149, 73.669988535315], [-68.867258016019, 73.670802447696], [-68.872221361931, 73.671869632253], [-68.877124150512, 73.673187338459], [-69.044076650491, 73.722635338271], [-69.209062773952, 73.771500936588], [-69.374027173379, 73.813085644264], [-69.540980173844, 73.855171644299], [-69.541709906459, 73.855358523352], [-69.675913942887, 73.890266312591], [-69.847135723511, 73.934802780554], [-69.868585892348, 73.935536661179], [-69.873312531418, 73.935810521162], [-69.878020910396, 73.93630779734], [-69.882700474924, 73.937027375011], [-69.887340735236, 73.937967641162], [-69.89193128967, 73.939126488081], [-70.122385803106, 74.003142502153], [-70.217458168068, 74.02009134959], [-70.221589900149, 74.020918099638], [-70.225683135839, 74.021918173246], [-70.405147320475, 74.069793803223], [-70.570684774714, 74.103940088285], [-70.572820457861, 74.104405016317], [-70.861725791401, 74.170613349658], [-71.150631124941, 74.236821682998], [-71.438403588435, 74.30277039691], [-71.604080990406, 74.336706177392], [-71.770896990386, 74.370875177442], [-71.773686729174, 74.37148824034], [-72.056481479451, 74.437881740345], [-72.339276229727, 74.50427524035], [-72.622070980003, 74.570668740355], [-72.904865730279, 74.63706224036], [-72.909781392885, 74.638348928043], [-72.914625350572, 74.639883652115], [-72.919385096578, 74.641662450026], [-72.92404834157, 74.643680729045], [-72.928603045374, 74.645933278114], [-72.933037448062, 74.648414281308], [-72.937340100315, 74.651117332851], [-73.08956610023, 74.752233332853], [-73.092203691961, 74.754046851704], [-73.324152692334, 74.919055852786], [-73.328231802072, 74.922117352944], [-73.332149515046, 74.925382845945], [-73.335895640531, 74.928843837615], [-73.552458015751, 75.139409587719], [-73.769020390972, 75.349975337824], [-73.985582766192, 75.560541087929], [-74.202145141413, 75.771106838033], [-74.418707516633, 75.981672588138], [-74.635269891853, 76.192238338243], [-75.068394642294, 76.613369838452], [-75.07198228116, 76.617041934433], [-75.075376738037, 76.620893311336], [-75.078569066682, 76.624913818686], [-75.081550853574, 76.629092860258], [-75.08431424008, 76.633419422004], [-75.086851943175, 76.63788210108], [-75.089157274629, 76.642469135897], [-75.09122415864, 76.647168437124], [-75.093047147844, 76.651967619543], [-75.094621437671, 76.656854034698], [-75.095942879012, 76.661814804226], [-75.09700798915, 76.6668368538], [-75.097813960939, 76.671906947587], [-75.098358670207, 76.67701172313], [-75.098640681346, 76.682137726568], [-75.098659251105, 76.687271448093], [-75.098414330542, 76.692399357554], [-75.097906565157, 76.697507940121], [-75.097137293186, 76.702583731898], [-75.096108542081, 76.707613355412], [-75.09482302316, 76.712583554869], [-75.017009356443, 76.984446888615], [-74.939195689726, 77.256310222361], [-74.861382023009, 77.528173556107], [-74.859886085154, 77.532945582765], [-74.85815344322, 77.537636853425], [-74.856188430555, 77.542235635188], [-74.853995961669, 77.54673042647], [-74.851581519943, 77.551109985767], [-74.848951143911, 77.55536335977], [-74.846111412162, 77.559479910762], [-74.843069426884, 77.563449343222], [-74.839832796104, 77.567261729571], [-74.836409614657, 77.570907535005], [-74.832808443943, 77.574377641339], [-74.632764843757, 77.757718041479], [-74.432721243571, 77.941058441618], [-74.032634043199, 78.307739241898], [-73.832590443013, 78.491079642038], [-73.828407456518, 78.494705519526], [-73.824030237198, 78.498094371042], [-73.819472198763, 78.501235811666], [-73.814747309031, 78.504120214654], [-73.809870047127, 78.506738740935], [-73.554267713453, 78.634983740988], [-73.298665379779, 78.763228741042], [-73.043063046105, 78.891473741095], [-73.038766082958, 78.893503352197], [-73.034377548233, 78.895326529775], [-73.029907352652, 78.89693915651], [-73.025365591354, 78.898337590571], [-73.020762521095, 78.899518673846], [-72.715159020857, 78.970237507245], [-72.409555520618, 79.040956340645], [-72.10395202038, 79.111675174045], [-71.798348520142, 79.182394007444], [-71.492745019904, 79.253112840844], [-70.881538019427, 79.394550507643], [-70.575934519189, 79.465269341043], [-70.270331018951, 79.535988174442], [-69.964727518713, 79.606707007841], [-69.659124018475, 79.677425841241], [-69.382711098326, 79.74138976585], [-69.23665056679, 79.894703060548], [-69.069923066353, 80.069709560522], [-69.066368712364, 80.073257581802], [-69.06264071035, 80.076622680355], [-69.058748463038, 80.079796368769], [-69.05470178741, 80.082770642402], [-69.050510889945, 80.085537999574], [-68.828225223286, 80.224431666628], [-68.605939556628, 80.363325333683], [-68.383653889969, 80.502219000737], [-68.379484235409, 80.504685993485], [-68.375199988615, 80.506948138878], [-68.370811205604, 80.509000127194], [-68.366328187757, 80.510837141991], [-68.361761457649, 80.512454871414], [-68.357121734339, 80.513849518316], [-68.053378234083, 80.597184268303], [-67.749634733827, 80.68051901829], [-67.445891233571, 80.763853768277], [-67.142147733315, 80.847188518264], [-67.136892166633, 80.848478592706], [-67.131574507548, 80.84948247271], [-67.126210328968, 80.850197218387], [-66.80851982851, 80.883807218363], [-66.490829328052, 80.917417218338], [-66.483694589082, 80.917914848551], [-66.437538178247, 80.919478613731], [-66.382151102714, 80.924713509512], [-66.376966844331, 80.925067886138], [-66.371771176791, 80.925152482729], [-66.366578129497, 80.924967070856], [-66.361401724775, 80.924512151171], [-66.356574451804, 80.92383371635],
                ],
            ],
        ];
    }
}
