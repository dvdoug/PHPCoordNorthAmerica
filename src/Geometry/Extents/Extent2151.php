<?php
/**
 * PHPCoord.
 *
 * @author Doug Wright
 */
declare(strict_types=1);

namespace PHPCoord\Geometry\Extents;

/**
 * North America/Canada - 60°W to 54°W.
 * @internal
 */
class Extent2151
{
    public function __invoke(): array
    {
        return
        [
            [
                [
                    [-54, 47.5], [-54, 47.666666666667], [-54, 47.833333333334], [-54, 48], [-54, 48.166666666667], [-54, 48.333333333334], [-54, 48.500000000001], [-54, 48.666666666667], [-54, 48.833333333333], [-54, 49], [-54, 49.166666666667], [-54, 49.333333333334], [-54, 49.500000000001], [-54, 49.666666666667], [-54, 49.833333333333], [-54, 50], [-54, 50.166666666667], [-54, 50.333333333334], [-54, 50.500000000001], [-54, 50.666666666667], [-54, 50.833333333333], [-54, 51], [-54, 51.166666666667], [-54, 51.333333333334], [-54, 51.500000000001], [-54, 51.666666666667], [-54, 51.833333333334], [-54, 52], [-54, 52.166666666667], [-54, 52.333333333334], [-54, 52.500000000001], [-54, 52.666666666667], [-54, 52.833333333334], [-54, 53], [-54, 53.166666666667], [-54, 53.333333333334], [-54, 53.500000000001], [-54, 53.666666666667], [-54, 53.833333333334], [-54, 54], [-54, 54.166666666667], [-54, 54.333333333334], [-54, 54.500000000001], [-54, 54.666666666667], [-54, 54.833333333334], [-54, 55], [-54, 55.166666666667], [-54, 55.333333333334], [-54, 55.500000000001], [-54, 55.666666666667], [-54, 55.833333333334], [-54, 56], [-54, 56.166666666667], [-54, 56.333333333334], [-54, 56.5], [-54, 56.666666666667], [-54, 56.833333333333], [-54, 57], [-54, 57.166666666667], [-54, 57.333333333334], [-54, 57.644712897771], [-54.284258551291, 57.740461169647], [-54.53894108956, 57.777517816394], [-54.793623627828, 57.814574463141], [-54.932582550944, 57.834793169769], [-55.02366155124, 58.011363169875], [-55.162193051768, 58.13752016992], [-55.300724552296, 58.263677169965], [-55.326213633253, 58.365735908585], [-55.38054309269, 58.583272039673], [-55.434872552127, 58.800808170761], [-55.576171551676, 58.925580170788], [-55.615967552261, 59.040297171178], [-55.771023552195, 59.220813171141], [-55.92607955213, 59.401329171104], [-56.108633552097, 59.54430717074], [-56.263239552413, 59.701495671438], [-56.41784555273, 59.858684172137], [-56.632215552655, 60.021242172239], [-56.846585552581, 60.18380017234], [-57.007501552954, 60.285390171719], [-57.0614895533, 60.354090172424], [-57.104048552698, 60.412963172313], [-57.159809052897, 60.706447672589], [-57.215569553096, 60.999932172866], [-57.252649764847, 61.278509455911], [-57.289729976599, 61.557086738956], [-57.319296764852, 61.779216956462], [-57.348863553105, 62.001347173967], [-57.35080655294, 62.034125173869], [-57.365806553015, 62.05134817394], [-57.416357553079, 62.184685174041], [-57.549126553599, 62.484277674013], [-57.681895554118, 62.783870173985], [-57.787875267586, 63.015421361903], [-57.893854981055, 63.24697254982], [-57.94965555418, 63.368889175148], [-57.983818554091, 63.468336174887], [-58.031870554091, 63.583340174955], [-58.015757553984, 63.617230174867], [-57.967415554042, 63.733621174989], [-57.94907655387, 63.833624174958], [-57.933518553969, 63.868347175191], [-57.883233554192, 63.951126175067], [-57.815446554207, 64.067518175212], [-57.79905055387, 64.200577176148], [-57.776717887277, 64.500400509455], [-57.754385220684, 64.800223842762], [-57.732052554091, 65.100047176068], [-57.717604554153, 65.135882175861], [-57.732880553847, 65.185050176912], [-57.748711554197, 65.234774176794], [-57.750652553986, 65.300331177071], [-57.734257554121, 65.384223176979], [-57.699244553946, 65.568950177155], [-57.684241553802, 65.618674177036], [-57.667004553858, 65.835903177045], [-57.66672555417, 65.852014177106], [-57.665330553931, 65.951739176961], [-57.650045554029, 66.051465176838], [-57.632257553971, 66.202580177217], [-57.617250554185, 66.302306178044], [-57.617243554023, 66.401753177784], [-57.632515554075, 66.500923177881], [-57.648898554112, 66.600371178094], [-57.650008554076, 66.619260177908], [-57.666671553825, 66.685652178103], [-57.680432327636, 66.723382045728], [-57.71499855387, 66.818157177906], [-57.790956053839, 67.084972178462], [-57.866913553809, 67.351787179018], [-57.900796554009, 67.450957179115], [-57.915796554084, 67.467624178956], [-57.931907554145, 67.483736179041], [-57.950517553821, 67.502070179098], [-58.032182554091, 67.584296178813], [-58.098847553836, 67.652077179109], [-58.150788554024, 67.734025179159], [-58.317171553912, 67.935978179025], [-58.382446553983, 68.019037179061], [-58.414944554174, 68.067650178956], [-58.433553553827, 68.102374179212], [-58.448831554016, 68.118208179182], [-58.565214554904, 68.267103179184], [-58.648268554825, 68.352107179102], [-58.699377555165, 68.417665179902], [-58.858270055009, 68.476835679961], [-59.017162554854, 68.536006180021], [-59.066607555047, 68.566841180088], [-59.232445554959, 68.619344180195], [-59.233277554808, 68.633511179949], [-59.488851703205, 68.730132148611], [-59.744425851603, 68.826753117273], [-60, 68.923374085934], [-60, 68.666666666667], [-60, 68.5], [-60, 68.333333333333], [-60, 68.166666666666], [-60, 68], [-60, 67.833333333333], [-60, 67.666666666667], [-60, 67.5], [-60, 67.333333333333], [-60, 67.166666666667], [-60, 67], [-60, 66.833333333333], [-60, 66.666666666667], [-60, 66.5], [-60, 66.333333333333], [-60, 66.166666666667], [-60, 66], [-60, 65.833333333333], [-60, 65.666666666667], [-60, 65.5], [-60, 65.333333333333], [-60, 65.166666666667], [-60, 65], [-60, 64.833333333333], [-60, 64.666666666667], [-60, 64.5], [-60, 64.333333333333], [-60, 64.166666666667], [-60, 64], [-60, 63.833333333334], [-60, 63.666666666667], [-60, 63.500000000001], [-60, 63.333333333334], [-60, 63.166666666667], [-60, 63], [-60, 62.833333333334], [-60, 62.666666666667], [-60, 62.5], [-60, 62.333333333333], [-60, 62.166666666667], [-60, 62], [-60, 61.833333333334], [-60, 61.666666666667], [-60, 61.5], [-60, 61.333333333333], [-60, 61.166666666667], [-60, 61], [-60, 60.833333333334], [-60, 60.666666666667], [-60, 60.5], [-60, 60.333333333333], [-60, 60.166666666667], [-60, 60], [-60, 59.833333333334], [-60, 59.666666666667], [-60, 59.5], [-60, 59.333333333333], [-60, 59.166666666667], [-60, 59], [-60, 58.833333333333], [-60, 58.666666666667], [-60, 58.5], [-60, 58.333333333333], [-60, 58.166666666667], [-60, 58], [-60, 57.833333333333], [-60, 57.666666666667], [-60, 57.5], [-60, 57.333333333333], [-60, 57.166666666667], [-60, 57], [-60, 56.833333333333], [-60, 56.666666666667], [-60, 56.5], [-60, 56.333333333333], [-60, 56.166666666667], [-60, 56], [-60, 55.833333333334], [-60, 55.666666666667], [-60, 55.5], [-60, 55.333333333333], [-60, 55.166666666667], [-60, 55], [-60, 54.833333333334], [-60, 54.666666666667], [-60, 54.5], [-60, 54.333333333333], [-60, 54.166666666667], [-60, 54], [-60, 53.833333333334], [-60, 53.666666666667], [-60, 53.5], [-60, 53.333333333333], [-60, 53.166666666667], [-60, 53], [-60, 52.833333333334], [-60, 52.666666666667], [-60, 52.5], [-60, 52.333333333333], [-60, 52.166666666667], [-60, 52], [-60, 51.833333333334], [-60, 51.666666666667], [-60, 51.5], [-60, 51.333333333333], [-60, 51.166666666666], [-60, 51], [-60, 50.833333333333], [-60, 50.666666666667], [-60, 50.5], [-60, 50.333333333333], [-60, 50.166666666667], [-60, 50], [-60, 49.833333333333], [-60, 49.666666666667], [-60, 49.5], [-60, 49.333333333333], [-60, 49.166666666667], [-60, 49], [-60, 48.833333333333], [-60, 48.666666666667], [-60, 48.5], [-60, 48.333333333333], [-60, 48.166666666667], [-60, 48], [-60, 47.833333333334], [-60, 47.666666666667], [-60, 47.5], [-60, 47.333333333333], [-60, 47.166666666667], [-60, 47], [-60, 46.833333333334], [-60, 46.666666666667], [-60, 46.5], [-60, 46.333333333333], [-60, 46.166666666667], [-60, 46], [-60, 45.833333333334], [-60, 45.666666666667], [-60, 45.5], [-60, 45.333333333333], [-60, 45.166666666667], [-60, 45], [-60, 44.833333333334], [-60, 44.666666666667], [-60, 44.5], [-60, 44.333333333333], [-60, 44.166666666667], [-60, 44], [-60, 43.833333333334], [-60, 43.666666666667], [-60, 43.5], [-60, 43.333333333333], [-60, 43.166666666666], [-60, 43], [-60, 42.833333333333], [-60, 42.666666666667], [-60, 42.5], [-60, 42.333333333333], [-60, 42.166666666667], [-60, 42], [-60, 41.833333333333], [-60, 41.666666666667], [-60, 41.5], [-60, 41.333333333333], [-60, 41.166666666667], [-60, 41], [-60, 40.833333333333], [-60, 40.666666666667], [-60, 40.576463425566], [-60, 40.5], [-60, 40.333333333333], [-60, 40.166666666667], [-60, 40], [-60, 39.833333333333], [-60, 39.666666666667], [-60, 39.5], [-60, 39.333333333333], [-60, 39.166666666667], [-60, 39.019178589464], [-59.5853041, 39.020623344732], [-59.1706082, 39.0220681], [-58.827858433333, 38.979837933333], [-58.485108666667, 38.937607766667], [-58.1423589, 38.8953776], [-57.858885466667, 38.786849466667], [-57.575412033333, 38.678321333333], [-57.2919386, 38.5697932], [-57.2187885, 38.7986407], [-57.1858243, 39.0348549], [-56.886222566667, 39.271239266667], [-56.586620833333, 39.507623633333], [-56.2870191, 39.744008], [-55.876405633333, 39.642268533333], [-55.465792166667, 39.540529066667], [-55.0551787, 39.4387896], [-54.9180623, 39.3954303], [-54.9167307, 39.3962101], [-54.9101952, 39.4000454], [-54.9036643, 39.4038858], [-54.8971381, 39.4077313], [-54.8906165, 39.411582], [-54.8840997, 39.4154378], [-54.8775875, 39.4192987], [-54.87108, 39.4231647], [-54.8645771, 39.4270358], [-54.858079, 39.4309121], [-54.8515856, 39.4347934], [-54.8450969, 39.4386798], [-54.838613, 39.4425713], [-54.8321337, 39.4464679], [-54.8256592, 39.4503696], [-54.8191894, 39.4542764], [-54.8127244, 39.4581883], [-54.8062642, 39.4621052], [-54.7998087, 39.4660272], [-54.7933579, 39.4699543], [-54.786912, 39.4738864], [-54.7804708, 39.4778236], [-54.7740344, 39.4817659], [-54.7676029, 39.4857132], [-54.7611761, 39.4896655], [-54.7547541, 39.4936229], [-54.748337, 39.4975854], [-54.7419246, 39.5015528], [-54.7355172, 39.5055254], [-54.7291145, 39.5095029], [-54.7227167, 39.5134854], [-54.7163237, 39.517473], [-54.7099356, 39.5214656], [-54.7035524, 39.5254632], [-54.6971741, 39.5294659], [-54.6908006, 39.5334735], [-54.684432, 39.5374861], [-54.6780683, 39.5415037], [-54.6717095, 39.5455264], [-54.6653556, 39.549554], [-54.6590066, 39.5535866], [-54.6526626, 39.5576242], [-54.6463235, 39.5616667], [-54.6399893, 39.5657142], [-54.63366, 39.5697667], [-54.6273357, 39.5738242], [-54.6210164, 39.5778866], [-54.614702, 39.581954], [-54.6083926, 39.5860264], [-54.6020882, 39.5901037], [-54.5957887, 39.5941859], [-54.5894943, 39.5982731], [-54.5697086, 39.6105094], [-54.5632742, 39.6144656], [-54.5568447, 39.6184267], [-54.55042, 39.6223929], [-54.5440002, 39.6263641], [-54.5375851, 39.6303404], [-54.531175, 39.6343217], [-54.5247697, 39.638308], [-54.5183692, 39.6422993], [-54.5119736, 39.6462956], [-54.5055829, 39.6502969], [-54.4991971, 39.6543033], [-54.4928162, 39.6583146], [-54.4864401, 39.662331], [-54.480069, 39.6663523], [-54.4737028, 39.6703786], [-54.4673415, 39.6744099], [-54.4609851, 39.6784462], [-54.4546337, 39.6824875], [-54.4482872, 39.6865337], [-54.4419456, 39.6905849], [-54.435609, 39.6946411], [-54.4292774, 39.6987023], [-54.4229507, 39.7027684], [-54.416629, 39.7068394], [-54.4103123, 39.7109154], [-54.4040005, 39.7149963], [-54.3976938, 39.7190822], [-54.3913921, 39.7231731], [-54.3850953, 39.7272688], [-54.3788036, 39.7313695], [-54.3725169, 39.7354751], [-54.3662352, 39.7395857], [-54.3599586, 39.7437011], [-54.353687, 39.7478215], [-54.3474204, 39.7519468], [-54.341159, 39.756077], [-54.3349025, 39.7602121], [-54.3286512, 39.764352], [-54.3224049, 39.7684969], [-54.3161637, 39.7726467], [-54.3099276, 39.7768014], [-54.3036966, 39.7809609], [-54.2974706, 39.7851253], [-54.2912498, 39.7892946], [-54.2850342, 39.7934688], [-54.2788236, 39.7976478], [-54.2726182, 39.8018317], [-54.2664179, 39.8060204], [-54.2602227, 39.810214], [-54.2540327, 39.8144125], [-54.2478479, 39.8186158], [-54.2416682, 39.8228239], [-54.2354937, 39.8270369], [-54.2293244, 39.8312547], [-54.2231603, 39.8354773], [-54.2170013, 39.8397047], [-54.2108476, 39.843937], [-54.204699, 39.8481741], [-54.1985557, 39.852416], [-54.1924176, 39.8566627], [-54.1862847, 39.8609142], [-54.1801571, 39.8651706], [-54.1740347, 39.8694317], [-54.1679175, 39.8736976], [-54.1618056, 39.8779683], [-54.1556989, 39.8822437], [-54.1495976, 39.886524], [-54.1435015, 39.890809], [-54.1374106, 39.8950988], [-54.1313251, 39.8993934], [-54.1252448, 39.9036927], [-54.1191699, 39.9079968], [-54.1131003, 39.9123056], [-54.107036, 39.9166192], [-54.100977, 39.9209375], [-54.0949233, 39.9252606], [-54.0888749, 39.9295884], [-54.082832, 39.933921], [-54.0767943, 39.9382582], [-54.070762, 39.9426002], [-54.0647351, 39.946947], [-54.0587135, 39.9512984], [-54.0526974, 39.9556545], [-54.0466866, 39.9600154], [-54.0406811, 39.9643809], [-54.0346811, 39.9687512], [-54.0286865, 39.9731261], [-54.0226973, 39.9775057], [-54.0167135, 39.9818901], [-54.0107352, 39.9862791], [-54.0047622, 39.9906727], [-54, 39.994182722703], [-54, 40], [-54, 40.166666666667], [-54, 40.333333333333], [-54, 40.5], [-54, 40.666666666667], [-54, 40.833333333333], [-54, 41], [-54, 41.166666666667], [-54, 41.333333333333], [-54, 41.5], [-54, 41.666666666667], [-54, 41.833333333333], [-54, 42], [-54, 42.166666666667], [-54, 42.333333333333], [-54, 42.5], [-54, 42.666666666667], [-54, 42.833333333333], [-54, 43], [-54, 43.166666666666], [-54, 43.296074474469], [-54, 43.333333333333], [-54, 43.5], [-54, 43.666666666667], [-54, 43.833333333334], [-54, 44], [-54, 44.166666666667], [-54, 44.333333333333], [-54, 44.5], [-54, 44.666666666667], [-54, 44.833333333334], [-54, 45], [-54, 45.166666666667], [-54, 45.333333333333], [-54, 45.5], [-54, 45.666666666667], [-54, 45.833333333334], [-54, 46], [-54, 46.166666666667], [-54, 46.333333333333], [-54, 46.5], [-54, 46.666666666667], [-54, 46.833333333334], [-54, 47], [-54, 47.166666666667], [-54, 47.333333333333], [-54, 47.5],
                ],
                [
                    [-56.398027553429, 43.417917155952], [-56.398698836182, 43.747917911982], [-56.399363194606, 44.074514534418], [-56.400027553029, 44.401111156854], [-56.400722219655, 44.72888882386], [-56.40141688628, 45.056666490866], [-56.402111552906, 45.384444157872], [-56.402852219554, 45.712203491598], [-56.403592886203, 46.039962825324], [-56.404333552851, 46.36772215905], [-56.506666553219, 46.397944158796], [-56.688138552752, 46.457889158658], [-56.837916553006, 46.554139159095], [-56.898694552611, 46.609750158743], [-56.924487954256, 46.665031314943], [-56.98674955285, 46.798472158963], [-57.096777552842, 46.982944160145], [-56.868416552982, 47.129611159927], [-56.662527553404, 47.216389159732], [-56.631111552556, 47.241194159683], [-56.494444552574, 47.365000160129], [-56.254999552387, 47.305278159759], [-56.104999551788, 47.100555159993], [-56.129722551554, 46.931111160252], [-56.099444551925, 46.86000015898], [-56.09166655207, 46.855555159043], [-55.982499552213, 46.802778158785], [-55.924444552274, 46.698889158608], [-55.910901542872, 46.665031314943], [-55.903333551802, 46.646111159203], [-55.95338855244, 46.617139158645], [-56.029194551687, 46.581111159153], [-56.150444552074, 46.554778158885], [-56.151041801963, 46.293166908576], [-56.151639051851, 46.031555658267], [-56.152236301739, 45.769944407958], [-56.152833551627, 45.508333157649], [-56.153396051711, 45.246874907426], [-56.153958551796, 44.985416657203], [-56.15452105188, 44.72395840698], [-56.155083551964, 44.462500156757], [-56.155570461707, 44.224306075165], [-56.15605737145, 43.986111993574], [-56.156544281193, 43.747917911982], [-56.157222551679, 43.416111156305], [-56.398027553429, 43.417917155952],
                ],
            ],
            [
                [
                    [-59.995477556172, 82.217419192071], [-59.901475556076, 82.249573191975], [-59.595003555985, 82.296644191838], [-59.418355554982, 82.329744191971], [-59.280033555052, 82.367121193194], [-59.23654011874, 82.374029512905], [-59.073518555218, 82.3999231932], [-58.887871055177, 82.437645193111], [-58.702223555136, 82.475367193021], [-58.472494554665, 82.536645693122], [-58.242765554193, 82.597924193224], [-58.208415554017, 82.610046193039], [-58.010993553855, 82.692299192927], [-57.866225554133, 82.77105819319], [-57.862475554002, 82.773183193175], [-57.756189553952, 82.852430193], [-57.742281553875, 82.880606192911], [-57.693856553818, 82.914481192926], [-57.680645554074, 82.927154192856], [-57.577678554111, 82.994607192784], [-57.534517554021, 83.030729192899], [-57.499870554191, 83.051277193194], [-57.4116845528, 83.117174193217], [-57.373484552885, 83.137567193086], [-57.260581553148, 83.211862192943], [-57.258490553048, 83.213466193055], [-57.20653655301, 83.246152193085], [-57.144022553199, 83.292709192788], [-57.085804553069, 83.32693419278], [-56.974921553143, 83.407729193224], [-56.926243553099, 83.449420194093], [-56.859942553203, 83.522950193848], [-56.804106553137, 83.599403194001], [-56.743157552989, 83.726340194022], [-56.717621552796, 83.823782193847], [-56.716558553017, 83.909877194189], [-56.720785552905, 83.940977194071], [-56.743239087078, 84], [-57, 84], [-57.166666666666, 84], [-57.333333333333, 84], [-57.5, 84], [-57.666666666667, 84], [-57.833333333333, 84], [-58, 84], [-58.166666666667, 84], [-58.333333333333, 84], [-58.5, 84], [-58.666666666667, 84], [-58.833333333333, 84], [-59, 84], [-59.166666666667, 84], [-59.333333333333, 84], [-59.5, 84], [-59.666666666667, 84], [-59.833333333333, 84], [-60, 84], [-60, 83.833333333333], [-60, 83.666666666667], [-60, 83.5], [-60, 83.333333333333], [-60, 83.166666666667], [-60, 83], [-60, 82.833333333333], [-60, 82.666666666667], [-60, 82.5], [-60, 82.333333333333], [-60, 82.216688822614], [-59.995477556172, 82.217419192071],
                ],
            ],
        ];
    }
}
