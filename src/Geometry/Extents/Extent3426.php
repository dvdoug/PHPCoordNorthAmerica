<?php
/**
 * PHPCoord.
 *
 * @author Doug Wright
 */
declare(strict_types=1);

namespace PHPCoord\Geometry\Extents;

/**
 * North America/Mexico - 102°W to 96°W.
 * @internal
 */
class Extent3426
{
    public function __invoke(): array
    {
        return
        [
            [
                [
                    [-102.02214925022, 13.960018782061], [-102.02368123445, 13.960392196459], [-102.02882052806, 13.961790872566], [-102.03387806177, 13.963461197814], [-102.03883948805, 13.96539843372], [-102.04369073201, 13.96759708461], [-102.04841803133, 13.970050913211], [-102.05300797531, 13.972752958348], [-102.0574475429, 13.975695554687], [-102.06172413967, 13.978870354485], [-102.06582563349, 13.982268351268], [-102.06974038898, 13.985879905384], [-102.07345730051, 13.989694771347], [-102.07696582372, 13.993702126903], [-102.0802560054, 13.997890603733], [-102.08331851176, 14.002248319701], [-102.08614465489, 14.00676291256], [-102.0887264174, 14.011421575029], [-102.09105647519, 14.016211091117], [-102.0931282182, 14.021117873624], [-102.09493576918, 14.026128002676], [-102.09647400036, 14.031227265223], [-102.09773854797, 14.036401195353], [-102.09872582468, 14.041635115333], [-102.09943302972, 14.046914177249], [-102.09985815683, 14.052223405121], [-102.1, 14.057547737396], [-102.1, 29.804656751011], [-102.09986720792, 29.809808525761], [-102.09946918434, 29.814946618213], [-102.09880698636, 29.820057382407], [-102.09788237266, 29.825127244962], [-102.09669779888, 29.830142741125], [-102.09525641105, 29.835090550534], [-102.09356203728, 29.83995753259], [-102.09161917755, 29.844730761359], [-102.08943299179, 29.8493975599], [-102.08700928616, 29.853945533937], [-102.08435449764, 29.858362604769], [-102.08147567693, 29.862637041357], [-102.07838046972, 29.866757491472], [-102.0750770964, 29.870713011853], [-102.07157433019, 29.874493097263], [-102.06788147389, 29.878087708393], [-102.06400833515, 29.881487298527], [-102.0599652004, 29.88468283889], [-102.05576280757, 29.887665842633], [-102.05141231755, 29.89042838737], [-102.04692528456, 29.892963136221], [-102.04231362544, 29.895263357293], [-102.03758958803, 29.897322941564], [-102.03276571863, 29.899136419103], [-102.02785482866, 29.900698973602], [-102.02286996068, 29.902006455162], [-102.01782435371, 29.903055391321], [-102.01273140807, 29.90384299627], [-102.00357613455, 29.905018154406], [-101.99736431457, 29.905619157688], [-101.99112710215, 29.905831510467], [-101.89250954837, 29.906109983553], [-101.8901361562, 29.906088518094], [-101.82374516492, 29.904699967921], [-101.81923447797, 29.904503681671], [-101.81473724847, 29.904103991866], [-101.81026264396, 29.903501713267], [-101.75916095978, 29.895445072754], [-101.75426463379, 29.894547696066], [-101.74941903068, 29.893407773451], [-101.71969490935, 29.885629606025], [-101.7178115901, 29.885117092452], [-101.68559313627, 29.87601076176], [-101.62394154925, 29.866780831506], [-101.54443322925, 29.870971894401], [-101.54051491707, 29.871101480967], [-101.4580259031, 29.872211558053], [-101.45775820309, 29.872214802164], [-101.40609194356, 29.872771747887], [-101.40080372631, 29.872688884509], [-101.39552728619, 29.872326548087], [-101.39027738251, 29.871685752153], [-101.38506870036, 29.870768289148], [-101.37991580953, 29.869576725409], [-101.37483312374, 29.868114393992], [-101.36983486033, 29.866385385346], [-101.36493500049, 29.864394535872], [-101.36014725017, 29.862147414396], [-101.35548500172, 29.859650306591], [-101.35096129642, 29.856910197393], [-101.34658878803, 29.853934751466], [-101.34237970739, 29.850732291759], [-101.33834582817, 29.847311776226], [-101.33449843399, 29.843682772772], [-101.33084828682, 29.839855432483], [-101.32740559689, 29.835840461237], [-101.32417999413, 29.831649089756], [-101.32118050124, 29.827293042188], [-101.31841550841, 29.822784503318], [-101.31589274994, 29.818136084478], [-101.31361928249, 29.813360788276], [-101.27795949244, 29.733053781277], [-101.27727378349, 29.731472960939], [-101.27128892098, 29.717343349112], [-101.24363795117, 29.689521260374], [-101.16039446683, 29.62182395084], [-101.09886067843, 29.583481852082], [-101.08096535981, 29.578721157272], [-101.07591204935, 29.57723324925], [-101.01223712234, 29.556647235786], [-101.00739030287, 29.554941533219], [-101.0026374949, 29.552989125282], [-100.99799124638, 29.550795166543], [-100.99346382389, 29.548365449291], [-100.98906718033, 29.545706388241], [-100.9848129233, 29.542825003602], [-100.98071228451, 29.539728902541], [-100.97677609008, 29.536426259098], [-100.97301473199, 29.532925792609], [-100.96943814064, 29.529236744684], [-100.96605575861, 29.525368854809], [-100.96287651575, 29.521332334629], [-100.94957019814, 29.503514647677], [-100.87389095246, 29.428312564215], [-100.74144255362, 29.34274480303], [-100.73678259614, 29.339544006628], [-100.73231096508, 29.336084986975], [-100.7280419519, 29.332378799204], [-100.72398920051, 29.328437288402], [-100.7201656636, 29.324273051756], [-100.59029810963, 29.174549998978], [-100.5871677038, 29.170756388478], [-100.58422761387, 29.166813446372], [-100.58148495217, 29.162730711002], [-100.57894635347, 29.15851805888], [-100.57661795887, 29.154185680799], [-100.57450540096, 29.149744057183], [-100.57261379023, 29.145203932726], [-100.57094770264, 29.140576290409], [-100.53331189955, 29.027380871037], [-100.53174349812, 29.022199170057], [-100.53045782254, 29.016940182853], [-100.52945864113, 29.011619323468], [-100.52874888247, 29.006252187291], [-100.52833062686, 29.00085450535], [-100.5282051002, 28.9954420982], [-100.52837267041, 28.990030829558], [-100.52883284634, 28.984636559801], [-100.52958427923, 28.979275099486], [-100.52972786453, 28.97841976767], [-100.51345782255, 28.95840650884], [-100.48911032277, 28.929391574898], [-100.45334197184, 28.890010333224], [-100.44974599554, 28.885824679424], [-100.44638637987, 28.881447040127], [-100.4432733551, 28.876890745571], [-100.44041640063, 28.872169670011], [-100.43782421609, 28.867298189473], [-100.43550469489, 28.862291137977], [-100.43346490013, 28.857163762367], [-100.3979195508, 28.76009879067], [-100.39620661107, 28.755000615228], [-100.3947702421, 28.749817720326], [-100.39361459867, 28.744565097776], [-100.39274302355, 28.739257941081], [-100.39215803781, 28.733911601486], [-100.39186133356, 28.728541543574], [-100.39185612889, 28.724841115777], [-100.36444984634, 28.687171282155], [-100.32151324417, 28.633773212934], [-100.31994099705, 28.631766018444], [-100.27967305237, 28.578985867019], [-100.27662322521, 28.574764843741], [-100.27379727037, 28.570390776697], [-100.27120285142, 28.565875527693], [-100.26884700402, 28.561231341399], [-100.26673611689, 28.556470812145], [-100.26487591443, 28.551606849764], [-100.25654461564, 28.527997688309], [-100.25524062388, 28.52404176306], [-100.23398513093, 28.454736343194], [-100.23258924097, 28.44972312521], [-100.23145603703, 28.44464407883], [-100.2305885879, 28.439512958549], [-100.22998924273, 28.434343659886], [-100.22965962458, 28.429150181746], [-100.22960062609, 28.423946588517], [-100.22981240703, 28.418746971979], [-100.22992024386, 28.417133358627], [-100.19759008622, 28.339314614625], [-100.17428315964, 28.317935539438], [-100.13408151606, 28.284152382799], [-100.07369829944, 28.259506051536], [-100.04664922067, 28.250468577328], [-100.04166080995, 28.248653326609], [-100.03677575502, 28.24657592077], [-100.03200782167, 28.244242213809], [-100.02737044562, 28.241658781968], [-100.02287669472, 28.238832905198], [-100.01853923208, 28.235772546641], [-100.01437028039, 28.232486330199], [-100.0103815875, 28.228983516224], [-100.00658439331, 28.225273975427], [-100.00298939806, 28.221368161064], [-99.999606732232, 28.217277079475], [-99.996445927963, 28.213012259074], [-99.968949589975, 28.173776190567], [-99.967879891633, 28.172218673859], [-99.887017694777, 28.052063742792], [-99.870382169913, 28.037973900948], [-99.866109676637, 28.034139255146], [-99.862064279206, 28.030065747217], [-99.807887948436, 27.972286435217], [-99.804435086171, 27.968406760995], [-99.801188310037, 27.96435304978], [-99.798156377929, 27.960136236104], [-99.795347468221, 27.955767694455], [-99.792769157702, 27.951259208595], [-99.79042840114, 27.946622939771], [-99.788331512522, 27.941871393917], [-99.786484148024, 27.937017387912], [-99.784891290749, 27.932074015016], [-99.783557237292, 27.927054609547], [-99.782485586147, 27.921972710915], [-99.773902176699, 27.875296277023], [-99.771735584436, 27.865401748139], [-99.770231701051, 27.864860112725], [-99.765147349667, 27.86270493765], [-99.76018971985, 27.860272384422], [-99.755373930096, 27.857569871214], [-99.746874784582, 27.852486787502], [-99.742394650716, 27.84964331176], [-99.738071654795, 27.846566192976], [-99.733917969056, 27.84326409538], [-99.729945289015, 27.839746316671], [-99.726164800528, 27.836022761844], [-99.722587148299, 27.832103915295], [-99.719222405907, 27.828000811301], [-99.716080047442, 27.823725002953], [-99.713168920827, 27.819288529626], [-99.710497222908, 27.814703883077], [-99.710439174141, 27.814597903685], [-99.709253046266, 27.813957737615], [-99.705048947688, 27.811414478668], [-99.70097484965, 27.808667783182], [-99.683480647622, 27.796237591712], [-99.67945440152, 27.793221591554], [-99.675584924847, 27.790006927511], [-99.671882010054, 27.786601734907], [-99.668355028077, 27.783014631234], [-99.665012904619, 27.779254694344], [-99.661864097563, 27.775331439477], [-99.658916575568, 27.771254795181], [-99.656177797903, 27.767035078184], [-99.653654695568, 27.76268296729], [-99.643506104404, 27.744116477116], [-99.635860194443, 27.741335526279], [-99.605888390949, 27.74124635308], [-99.600367260962, 27.741077368578], [-99.594863884517, 27.740603786701], [-99.589395053203, 27.739827052416], [-99.583977453208, 27.738749535649], [-99.578627614405, 27.73737452406], [-99.573361859918, 27.735706213005], [-99.568196256319, 27.733749692741], [-99.563146564603, 27.73151093289], [-99.558228192104, 27.72899676423], [-99.482880291516, 27.687817107232], [-99.478297784811, 27.685152533758], [-99.473862912571, 27.682248876114], [-99.469588136486, 27.67911429338], [-99.465485468384, 27.675757593521], [-99.461566436484, 27.672188208634], [-99.457842053, 27.668416168449], [-99.454322783195, 27.664452072141], [-99.42738339093, 27.632437225337], [-99.424041989972, 27.628242976987], [-99.420930230167, 27.623875640213], [-99.418057059904, 27.619347774025], [-99.415430741466, 27.614672399062], [-99.413058827272, 27.609862960151], [-99.410948138161, 27.604933287641], [-99.409104743773, 27.599897557634], [-99.378404060581, 27.508510762579], [-99.377009994291, 27.504012884895], [-99.375829218266, 27.499454366225], [-99.374864350799, 27.494845314777], [-99.374117531416, 27.49019595081], [-99.344263710567, 27.271583279942], [-99.343694482606, 27.266416466894], [-99.343394507731, 27.261227055307], [-99.343364596474, 27.25602906696], [-99.343604829655, 27.250836546804], [-99.356084039251, 27.078356042877], [-99.263256708729, 26.960411266928], [-99.250915812716, 26.957864624052], [-99.245933144647, 26.956702768367], [-99.241016423097, 26.955287586781], [-99.236178518514, 26.953622783799], [-99.231432095027, 26.951712717358], [-99.226789577298, 26.949562387417], [-99.222263117993, 26.947177422871], [-99.217864565975, 26.944564066817], [-99.213605435285, 26.941729160206], [-99.209496875003, 26.938680123943], [-99.205549640061, 26.935424939457], [-99.201774063094, 26.931972127808], [-99.198180027386, 26.928330727383], [-99.194776941006, 26.924510270236], [-99.191573712176, 26.920520757135], [-99.188578725952, 26.916372631384], [-99.185799822277, 26.912076751488], [-99.16801570363, 26.882978240673], [-99.165878455024, 26.879308328509], [-99.163898955841, 26.875550979726], [-99.150288115985, 26.848329300014], [-99.148175436655, 26.843827450882], [-99.109006125086, 26.754662717405], [-99.106561649972, 26.748560999615], [-99.038507450692, 26.561060999352], [-99.036778534841, 26.555856851963], [-99.025859020933, 26.519703961569], [-98.953544061296, 26.503374363801], [-98.947961828033, 26.50194360491], [-98.897684117779, 26.487501161055], [-98.896455133936, 26.487139593757], [-98.755341852585, 26.444640051379], [-98.750142883559, 26.442917626593], [-98.745046011419, 26.440913151484], [-98.740066524755, 26.438632638683], [-98.735219360048, 26.43608292882], [-98.730519056866, 26.433271670013], [-98.676350355718, 26.398824953787], [-98.671705607899, 26.39568503674], [-98.648436214333, 26.37898544598], [-98.586084727904, 26.35629301404], [-98.576229264547, 26.356085080712], [-98.570952487998, 26.355834182145], [-98.565696324174, 26.355304972653], [-98.56047544162, 26.354498929117], [-98.555304410419, 26.353418300989], [-98.416838528997, 26.320642422383], [-98.411745108213, 26.319294133013], [-98.406729772045, 26.317679443376], [-98.401806443477, 26.31580283598], [-98.396988790072, 26.313669520444], [-98.392290186031, 26.311285419025], [-98.387723675065, 26.308657150185], [-98.335912456777, 26.276991348216], [-98.331600805023, 26.274201625236], [-98.327438056529, 26.271194230992], [-98.323435189669, 26.267977096854], [-98.319602761162, 26.264558707337], [-98.31595087823, 26.260948077723], [-98.312489171947, 26.257154730287], [-98.309226771835, 26.253188669185], [-98.306172281786, 26.249060354069], [-98.287867493912, 26.222943568368], [-98.248436186057, 26.191707902927], [-98.241372811515, 26.187509806507], [-98.172396262262, 26.159249345465], [-98.068017521126, 26.141630842464], [-98.064817291464, 26.142692119859], [-98.059030765791, 26.14441898453], [-98.053150557979, 26.145793428796], [-97.999546432176, 26.156627169206], [-97.994239818571, 26.157551662675], [-97.988891123326, 26.158189075656], [-97.983515865594, 26.158537558704], [-97.851290828755, 26.163538626684], [-97.845858856344, 26.163596423085], [-97.840431760213, 26.16335916313], [-97.835025555542, 26.162827546966], [-97.790858990803, 26.157269533262], [-97.787477865266, 26.15678525253], [-97.663034811114, 26.136786701926], [-97.657488974748, 26.135734095832], [-97.652011368403, 26.134370237585], [-97.621165726002, 26.125758558754], [-97.616294670331, 26.124263856489], [-97.611506071336, 26.122522983754], [-97.606812360853, 26.120540460082], [-97.602225724371, 26.118321432368], [-97.597758069405, 26.115871661499], [-97.593420994575, 26.113197507403], [-97.589225759499, 26.110305912537], [-97.555625906066, 26.085861332272], [-97.551758065086, 26.082900698739], [-97.548038978793, 26.079755235039], [-97.544477470919, 26.076432403955], [-97.489469536599, 26.022545990704], [-97.486335843491, 26.019335301505], [-97.483349315097, 26.015987286305], [-97.449822447367, 25.976660861767], [-97.420734329904, 25.960205634066], [-97.419216398203, 25.961889277911], [-97.415606579899, 25.965503613928], [-97.411816902294, 25.968928895913], [-97.380429573412, 25.995874009944], [-97.376425363367, 25.999135743649], [-97.372258095673, 26.002186396828], [-97.36793888552, 26.005017832595], [-97.363479253365, 26.007622498773], [-97.35889109421, 26.009993448038], [-97.354186645871, 26.012124356452], [-97.304183593892, 26.033234891098], [-97.299389462762, 26.035114976568], [-97.294504903423, 26.036745772305], [-97.289542868954, 26.038122953698], [-97.185096458001, 26.064234556324], [-97.179543372279, 26.06545620691], [-97.173929829429, 26.066360268776], [-97.168273977581, 26.066943819161], [-97.162594101645, 26.067204971496], [-97.156908564202, 26.067142881494], [-97.136805109452, 26.066351332107], [-97.131581227478, 26.066008509498], [-97.126382444934, 26.065392773936], [-97.121223009848, 26.064505812936], [-97.11611706241, 26.063350057344], [-97.111078596221, 26.061928674679], [-97.106121419937, 26.060245560448], [-97.104485096192, 26.059592608357], [-96.94267976845, 26.073919278811], [-96.835718008499, 26.104708957954], [-96.830285820592, 26.106108918754], [-96.82478367736, 26.107202068126], [-96.819228893253, 26.107984966087], [-96.813638948374, 26.10845514897], [-96.808031433472, 26.108611137178], [-96.538679570173, 26.108546071397], [-96.269327706874, 26.108481005615], [-95.999975843575, 26.108415939833], [-95.99474308531, 26.108277671396], [-95.989524731452, 26.107865773062], [-95.984335080749, 26.107181373468], [-95.979188353298, 26.106226347931], [-95.974098651585, 26.105003313304], [-95.969079921839, 26.103515620808], [-95.96414591582, 26.101767346852], [-95.959310153136, 26.099763281859], [-95.954585884203, 26.097508917145], [-95.94998605393, 26.095010429865], [-95.945523266257, 26.092274666094], [-95.941209749613, 26.089309122064], [-95.937057323413, 26.086121923628], [-95.933077365668, 26.082721803987], [-95.929280781811, 26.079118079768], [-95.925677974816, 26.075320625491], [-95.92227881669, 26.071339846515], [-95.919092621424, 26.067186650522], [-95.916128119473, 26.062872417635], [-95.913393433832, 26.05840896923], [-95.910896057779, 26.053808535546], [-95.908642834344, 26.049083722176], [-95.906639937558, 26.044247475523], [-95.904892855532, 26.039313047327], [-95.903406375426, 26.034293958354], [-95.902184570324, 26.029203961349], [-95.90123078808, 26.024057003348], [-95.90054764214, 26.01886718747], [-95.900137004386, 26.013648734264], [-95.9, 26.008415942751], [-95.9, 12.346601639393], [-95.900133358786, 12.341438890845], [-95.900533079451, 12.336289912255], [-95.901198095872, 12.331168436852], [-95.902126634332, 12.326088124513], [-95.903316218255, 12.321062525322], [-95.904763674813, 12.316105043436], [-95.906465143385, 12.311228901331], [-95.908416085855, 12.306447104533], [-95.910611298716, 12.301772406935], [-95.913044926951, 12.297217276777], [-95.915710479644, 12.292793863392], [-95.918600847299, 12.288513964801], [-95.921708320797, 12.284388996244], [-95.925024611961, 12.280429959738], [-95.928540875659, 12.276647414729], [-95.932247733397, 12.273051449929], [-95.936135298336, 12.269651656408], [-95.940193201656, 12.266457102013], [-95.944410620216, 12.263476307182], [-95.94877630542, 12.260717222218], [-95.953278613217, 12.258187206086], [-95.957905535163, 12.255893006782], [-95.962644730444, 12.253840743341], [-95.967483558792, 12.252035889509], [-95.972409114202, 12.250483259148], [-95.977408259353, 12.249186993397], [-95.982467660645, 12.248150549624], [-95.987573823768, 12.247376692206], [-95.992713129686, 12.246867485158], [-96.52461772001, 12.208004973124], [-96.530256990138, 12.207752701212], [-96.535901510346, 12.207819036134], [-96.539510602865, 12.20806558812], [-96.543719397522, 12.20811180656], [-96.549393009552, 12.208497384921], [-96.596213775454, 12.21301988058], [-96.596811635175, 12.212997181049], [-96.597773635471, 12.212996181003], [-96.602560707658, 12.213105845102], [-96.607337042354, 12.213444538502], [-97.198493043402, 12.26961653884], [-97.203924057602, 12.270282971626], [-97.209310489674, 12.271245467042], [-97.214636212615, 12.272501143372], [-97.217615212396, 12.273290142884], [-97.218070200766, 12.273411795608], [-97.478055169453, 12.343581805342], [-97.48021743206, 12.343781380163], [-97.485823549641, 12.344458935456], [-97.491382483219, 12.345451856886], [-97.496876506672, 12.346756978259], [-98.070173506129, 12.500167979676], [-98.075608528374, 12.501788852885], [-98.075644460202, 12.501801828848], [-98.075880992576, 12.501872067338], [-98.075978190362, 12.501897935399], [-98.07728749505, 12.502289729444], [-98.078473867747, 12.502642023826], [-98.078518261139, 12.502658021736], [-98.081849724327, 12.503654922955], [-98.087602599697, 12.505768294986], [-98.088120228354, 12.505976667086], [-98.090403071905, 12.506791175903], [-98.095497860726, 12.50893316074], [-98.097458861226, 12.509822160368], [-98.09796390408, 12.510052808732], [-98.190142816748, 12.552459721285], [-98.305913259281, 12.562704377484], [-98.307130886005, 12.562819635361], [-98.308092885402, 12.562916635337], [-98.313323920628, 12.563583838692], [-98.31395226654, 12.563697920392], [-98.31865240686, 12.564275849403], [-98.323553125025, 12.565127653856], [-98.32848412489, 12.566111653367], [-98.328688017668, 12.566158965924], [-98.332210477818, 12.566775224724], [-98.334411772323, 12.567118542725], [-98.338802712041, 12.568006423866], [-98.339879855184, 12.568249464436], [-98.340082974231, 12.568273181666], [-98.343237040774, 12.568824857235], [-98.346820417039, 12.56928191544], [-98.352009502186, 12.570224079858], [-98.352663638329, 12.57037886754], [-98.353447778935, 12.570468601767], [-98.358644344883, 12.571342676383], [-98.363787651909, 12.572489278718], [-98.36772765194, 12.573477278415], [-98.368972376188, 12.573797923661], [-98.372604755483, 12.574758572577], [-98.373551874247, 12.574868945213], [-98.374765282734, 12.575080729967], [-98.383667439011, 12.575863014225], [-98.389274915121, 12.576516419899], [-98.389575014877, 12.576542747621], [-98.395241771689, 12.577203258734], [-98.396524416657, 12.577427521498], [-98.415181496922, 12.579063263982], [-98.420787355959, 12.579714612996], [-98.426347542974, 12.580681169481], [-98.43184434882, 12.581959854964], [-99.006297349426, 12.732797854638], [-99.009352122305, 12.733651978084], [-99.010346122278, 12.733946978198], [-99.014684246523, 12.73534276438], [-99.01895427472, 12.736934744354], [-99.023147339068, 12.738719611969], [-99.563137339507, 12.983257612298], [-99.568246858426, 12.985748853636], [-99.573206564791, 12.988526402874], [-99.578000432071, 12.991581284786], [-99.667791434436, 13.052456555011], [-99.671086284498, 13.0533841524], [-99.675365023729, 13.054799699652], [-99.679575637706, 13.056406595223], [-99.680539638094, 13.056799595359], [-99.682340195718, 13.05755422023], [-99.685324195729, 13.058839220133], [-99.686814030327, 13.059495213576], [-99.68925791848, 13.060595123394], [-99.6894261249, 13.060654080414], [-99.694698726793, 13.062847577201], [-99.74088807111, 13.083629533461], [-99.746665973911, 13.0851134532], [-99.752103187303, 13.086675077458], [-99.757443394455, 13.088541664552], [-99.762669505655, 13.09070724104], [-100.26082453153, 13.313843242513], [-100.26443026652, 13.314658357144], [-100.26694932087, 13.315262214094], [-100.26708765748, 13.315297277068], [-100.26775659169, 13.3154045232], [-100.27304555662, 13.316548929705], [-100.27992655647, 13.318233929169], [-100.27997013137, 13.318244791547], [-100.28136400746, 13.318455533416], [-100.2860750177, 13.319401233106], [-100.28684106017, 13.319574254495], [-100.28725741973, 13.319618619618], [-100.29281204069, 13.320528984411], [-100.29830664075, 13.321750437725], [-100.87592964185, 13.467330437742], [-100.88133623072, 13.468855799972], [-100.88477927766, 13.470039619719], [-100.8866240698, 13.470640368186], [-100.8909348378, 13.472267362957], [-100.89289283816, 13.473058362562], [-100.89380072989, 13.473442382232], [-100.89417741556, 13.47357176307], [-100.89627697099, 13.474269754243], [-100.90095205666, 13.476089096653], [-100.90612969155, 13.478255070795], [-100.90934565795, 13.479541457208], [-100.91263123945, 13.480924117851], [-100.93257492261, 13.489738595894], [-100.93391577955, 13.490197919204], [-100.93913219371, 13.492319950207], [-101.48316119425, 13.731697950902], [-101.48702802345, 13.733532564599], [-101.49391137861, 13.736548053057], [-101.49908829696, 13.738994959232], [-101.50367931403, 13.741495914362], [-101.50798105306, 13.743529442765], [-101.50802820275, 13.743555141772], [-101.51267971128, 13.745592066456], [-101.51786190451, 13.74804069442], [-101.52289529854, 13.75078219949], [-101.52776335822, 13.753807575573], [-101.56018058678, 13.775265784507], [-101.59282193712, 13.789545720978], [-101.5971026809, 13.791540177999], [-101.59809868097, 13.792033178251], [-101.60359150354, 13.794968406774], [-101.60889095943, 13.798239864194], [-101.64119237594, 13.819597247548], [-101.65614125674, 13.826129371715], [-101.6613221994, 13.828572285516], [-101.66635477, 13.831307834426], [-101.67122245668, 13.834327043111], [-101.69023175725, 13.846885494631], [-101.69384802202, 13.848236207293], [-101.69466092418, 13.84856161559], [-101.69488602322, 13.848623680656], [-101.69765991442, 13.849562105174], [-101.6978262504, 13.849607990606], [-101.69847530436, 13.849827345041], [-101.69980866419, 13.850194891187], [-101.702591231, 13.851135648543], [-101.70280510149, 13.851194754944], [-101.70817908322, 13.853013753761], [-101.71344125684, 13.855134594409], [-101.71350955401, 13.855164399662], [-101.71630893456, 13.855932643536], [-101.7214207589, 13.857636462444], [-101.72643338895, 13.859613148247], [-101.72835643182, 13.860432014339], [-101.72886398898, 13.86060368371], [-101.73291806263, 13.86223678045], [-101.73584342806, 13.863176898005], [-101.73782942791, 13.863866897449], [-101.73801092507, 13.86393496701], [-101.73816484884, 13.863976474424], [-101.74254698306, 13.865377327505], [-101.74686004923, 13.866978249075], [-101.74722419422, 13.867123027333], [-101.7488191984, 13.867560260563], [-101.75395013691, 13.869269963874], [-101.75563699294, 13.869935383975], [-101.75697995988, 13.870305674669], [-101.76236992694, 13.872127478631], [-101.76729930349, 13.87411262445], [-101.83523599182, 13.890759466003], [-101.84059209003, 13.892230721058], [-101.84585823661, 13.893997095809], [-101.85034653693, 13.895785514415], [-101.85310976801, 13.89667237559], [-101.85752876198, 13.898324337195], [-101.8596646928, 13.899180767988], [-101.86179009315, 13.89985932413], [-101.86611070485, 13.901461573525], [-101.866905884, 13.901777482895], [-101.87027038944, 13.902702482053], [-101.87148534154, 13.903111715412], [-101.87325731086, 13.903599384966], [-101.87413693665, 13.903896208305], [-101.87516440101, 13.90417298327], [-101.87954706315, 13.905572727789], [-101.88386070502, 13.90717257339], [-101.88584670487, 13.907961572903], [-101.88639932931, 13.908183026866], [-101.88835632963, 13.90897402737], [-101.88846932353, 13.909021451532], [-101.88944537799, 13.909350344503], [-101.89473621402, 13.911476092979], [-101.8970991367, 13.912504646062], [-101.89887540473, 13.913080900361], [-101.90347227926, 13.91482631724], [-101.9044352787, 13.915219317377], [-101.90541956299, 13.915627133944], [-101.91035556308, 13.917703134351], [-101.91053124544, 13.917777527289], [-101.91561024282, 13.919172908965], [-101.92099663531, 13.920987643198], [-101.9262712214, 13.923105478438], [-101.94808803126, 13.932593881179], [-101.94814778526, 13.932610296951], [-101.94887688309, 13.932856024946], [-101.95011992353, 13.933197367619], [-101.95101543871, 13.933499025914], [-101.95203405741, 13.933772653892], [-101.95646029541, 13.935185117598], [-101.96081614868, 13.936801650597], [-101.96280214853, 13.937591651055], [-101.96501838905, 13.938504148567], [-101.9660849495, 13.938958309106], [-101.9703281842, 13.940653140562], [-101.97330718398, 13.941937140419], [-101.97358714578, 13.942058315435], [-101.97649577821, 13.943322521146], [-101.98163418931, 13.944732646939], [-101.9839214022, 13.945502520802], [-101.98733693367, 13.946435784014], [-101.99249768449, 13.948152445713], [-101.99755747165, 13.950147146283], [-102.00544247194, 13.9535061465], [-102.00589213742, 13.95369900448], [-102.01507188821, 13.957662743486], [-102.01611623182, 13.957948898178], [-102.02151559, 13.959764671388], [-102.02214925022, 13.960018782061],
                ],
            ],
        ];
    }
}
