<?php
/**
 * PHPCoord.
 *
 * @author Doug Wright
 */
declare(strict_types=1);

namespace PHPCoord\Geometry\Extents;

/**
 * North America/USA - South Dakota - SPCS - S.
 * @internal
 */
class Extent2250
{
    public function __invoke(): array
    {
        return
        [
            [
                [
                    [-99.532790328494, 42.992334963285], [-99.253971711197, 42.992389473394], [-99.001864935704, 42.992185915065], [-98.749758160212, 42.991982356735], [-98.49765138472, 42.991778798406], [-98.457444054022, 42.9371607788], [-98.391204695098, 42.920135862739], [-98.31033957472, 42.881794760613], [-98.167826623502, 42.839571032558], [-98.144869046196, 42.835794718985], [-98.123116923318, 42.820223593365], [-98.121819860301, 42.808360133859], [-98.03314038303, 42.769192335795], [-97.995144778984, 42.766812278154], [-97.963558400502, 42.773689992], [-97.929477223167, 42.792324368796], [-97.88994103889, 42.831271635934], [-97.88865941869, 42.855807287528], [-97.81864299296, 42.866587478], [-97.797028328353, 42.849597136305], [-97.772186446672, 42.846163981976], [-97.725249816881, 42.858008376115], [-97.685752001305, 42.836837018607], [-97.634970500786, 42.86128496003], [-97.570654140435, 42.847990736558], [-97.506131894266, 42.860136473944], [-97.483159029124, 42.857157089855], [-97.457263784089, 42.850443102651], [-97.389306033492, 42.867433165905], [-97.311414339375, 42.861771679629], [-97.271457535365, 42.850014636672], [-97.243189564924, 42.851826425825], [-97.224443575668, 42.841202531994], [-97.211831726419, 42.81257352787], [-97.161422761715, 42.798619405919], [-97.130469245649, 42.773923357509], [-97.015139670072, 42.759542046478], [-96.979593366098, 42.758313757309], [-96.970002934695, 42.752065431992], [-96.977868996601, 42.727308194642], [-96.970773481806, 42.721147496242], [-96.908233824947, 42.731698969802], [-96.810140114496, 42.704084462612], [-96.810437500023, 42.68134121422], [-96.79934397882, 42.670019168632], [-96.722658747587, 42.668591955768], [-96.699060222031, 42.65771584974], [-96.694596777315, 42.641163786393], [-96.715272892144, 42.621907476643], [-96.714059707901, 42.612302032465], [-96.636672376275, 42.550731759245], [-96.629294479954, 42.522693678], [-96.60546730407, 42.507236291606], [-96.584753048971, 42.518287219745], [-96.54721557271, 42.520499323457], [-96.494701510527, 42.488459217507], [-96.439394750965, 42.489240837716], [-96.480243244201, 42.517130304945], [-96.489337501123, 42.564027971797], [-96.500942034664, 42.573885185215], [-96.488498184536, 42.580480653946], [-96.512844020109, 42.629755090369], [-96.541165097167, 42.662405366129], [-96.56303923913, 42.668513030025], [-96.626540780425, 42.70835472382], [-96.640709192144, 42.748603818098], [-96.632980559754, 42.776835602137], [-96.600875061151, 42.799558626616], [-96.587645437196, 42.835381394525], [-96.57312614067, 42.834347382311], [-96.556211199118, 42.846660660949], [-96.537511089016, 42.896906456032], [-96.544263461734, 42.913866340658], [-96.514935051987, 42.952382081498], [-96.517147819516, 42.986458090608], [-96.499019995761, 43.012050106493], [-96.520010385802, 43.051508664474], [-96.479573247898, 43.061884056781], [-96.462093941964, 43.075582202376], [-96.460804816306, 43.0878728593], [-96.451505088069, 43.126308773252], [-96.473114570105, 43.209082129554], [-96.487245168975, 43.217909269712], [-96.558605770216, 43.225489227026], [-96.566991107148, 43.239633790995], [-96.559567772089, 43.253263318226], [-96.570722496576, 43.26361229146], [-96.57913082989, 43.290074030677], [-96.540563273477, 43.307659139748], [-96.522893874431, 43.356966319511], [-96.525053541284, 43.384225291041], [-96.557708717013, 43.400727225913], [-96.589112950557, 43.435539126228], [-96.583795897806, 43.4819205536], [-96.598315428219, 43.499849097579], [-96.460454707831, 43.49971847569], [-96.458528523637, 43.674230152088], [-96.456602339442, 43.848741828487], [-96.456999922818, 44.023901611548], [-96.457397506195, 44.199061394609], [-96.674487321349, 44.196849704385], [-96.891577136503, 44.194638014161], [-97.13266538344, 44.193628374977], [-97.374705719221, 44.195425085394], [-97.615594856696, 44.195368845513], [-97.85648399417, 44.195312605632], [-98.097173004826, 44.196656747365], [-98.337862015482, 44.198000889099], [-98.521076055603, 44.198715057483], [-98.704290095724, 44.199429225868], [-98.92966530678, 44.199551177811], [-99.114796185928, 44.199516695068], [-99.299927065076, 44.199482212325], [-99.5784001492, 44.196722344289], [-99.611695754721, 44.214704367824], [-99.66169994706, 44.221368259176], [-99.665608212042, 44.55007817792], [-99.680974034841, 44.550577836622], [-99.96129596789, 44.549942376101], [-100.24161790094, 44.54930691558], [-100.52193983399, 44.548671455059], [-100.53365889751, 44.557643716267], [-100.5673511471, 44.56353744352], [-100.59896810604, 44.559779870646], [-100.63475857532, 44.575294377623], [-100.64656952373, 44.621685457459], [-100.61696712519, 44.68711981118], [-100.63313462984, 44.736833523532], [-100.71891421373, 44.770925437892], [-100.7377518228, 44.767274738084], [-100.74767779331, 44.774820176805], [-100.76499701932, 44.762456765303], [-100.79205849397, 44.774980405423], [-100.81607616646, 44.770528675058], [-100.86251657194, 44.781671392587], [-100.89322538283, 44.771428977724], [-100.91861615571, 44.778863804791], [-100.93716358475, 44.766965821786], [-100.96229507609, 44.766164752571], [-100.97187022872, 44.753603019929], [-101.01597587036, 44.730401852256], [-101.06611643425, 44.745203158115], [-101.13538379293, 44.749445263299], [-101.21059372189, 44.703108094498], [-101.32636978325, 44.684023639869], [-101.33756995443, 44.693373528423], [-101.36598949605, 44.689375853844], [-101.37097856313, 44.660262074249], [-101.4063637654, 44.65821756685], [-101.42421631365, 44.644873831722], [-101.44791330694, 44.646243426492], [-101.46338493002, 44.61048832371], [-101.48526601915, 44.608619234014], [-101.50139409856, 44.58885154649], [-101.52940146315, 44.577048958024], [-101.67198831777, 44.589649380098], [-101.68899405946, 44.579910496792], [-101.74112583109, 44.574413674195], [-101.75701768732, 44.559170182331], [-101.78637614294, 44.543694088052], [-101.80371831305, 44.542614624918], [-101.81694014881, 44.530056656396], [-101.82891126003, 44.536640922347], [-101.94803310138, 44.538980014735], [-101.98938553482, 44.527749645473], [-102.0012493568, 44.516522915551], [-102.04059501868, 44.507527995639], [-102.05580055835, 44.49087681382], [-102.07648436144, 44.484338523727], [-102.11677583396, 44.440213956922], [-102.14218253344, 44.44695849904], [-102.15697632941, 44.444425600039], [-102.16759659588, 44.430433262847], [-102.19375858087, 44.433073170529], [-102.22281994425, 44.447145822982], [-102.22766486539, 44.457697374967], [-102.28279615652, 44.454313923674], [-102.30483783097, 44.44319784916], [-102.30380729615, 44.382078169499], [-102.3428170875, 44.355668719555], [-102.37182414399, 44.265305011009], [-102.36871116296, 44.235638142994], [-102.39472049177, 44.214985548516], [-102.4028689172, 44.193661673388], [-102.40373869489, 44.184098367604], [-102.39034110055, 44.184395965287], [-102.40428040286, 44.160863394439], [-102.39568183319, 44.147088760445], [-102.66071614205, 44.146726428375], [-102.9257504509, 44.146364096305], [-103.19078475975, 44.146001764235], [-103.45581906861, 44.145639432165], [-103.75777522515, 44.145732450475], [-104.05973138169, 44.145825468784], [-104.05947942018, 43.85290656754], [-104.05869668184, 43.678309414843], [-104.0579139435, 43.503712262146], [-104.05915750747, 43.479133941758], [-104.05767818189, 43.241098149074], [-104.05619885631, 43.003062356391], [-103.77882754011, 43.000840593385], [-103.50145622392, 42.99861883038], [-103.25366573029, 42.998986380245], [-103.00587523666, 42.999353930111], [-102.78838456961, 42.995303575688], [-102.55449002195, 42.993498058971], [-102.32059547429, 42.991692542254], [-102.08670092663, 42.989887025538], [-101.80171301751, 42.988872336735], [-101.5167251084, 42.987857647932], [-101.23173719928, 42.986842959129], [-100.9733384324, 42.987905974005], [-100.71493966553, 42.988968988882], [-100.45654089865, 42.990032003758], [-100.19814213177, 42.991095018634], [-99.865466230135, 42.99171499096], [-99.532790328494, 42.992334963285],
                ],
            ],
        ];
    }
}
