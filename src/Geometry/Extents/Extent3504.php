<?php
/**
 * PHPCoord.
 *
 * @author Doug Wright
 */
declare(strict_types=1);

namespace PHPCoord\Geometry\Extents;

/**
 * North America/USA - 84°W to 78°W.
 * @internal
 */
class Extent3504
{
    public function __invoke(): array
    {
        return
        [
            [
                [
                    [-84.1, 23.876667295249], [-84.099999578069, 23.87666713798], [-83.90333357798, 23.829167138026], [-83.793333578047, 23.800555138002], [-83.650555577996, 23.773611138057], [-83.530555577946, 23.755555137927], [-83.349999578019, 23.730555137935], [-83.09999957697, 23.722778137967], [-82.953333577014, 23.725000137958], [-82.914999577061, 23.727778138025], [-82.766666577033, 23.753333137936], [-82.516666576967, 23.753333137936], [-82.26666657705, 23.727778138025], [-82.103333576014, 23.71750013802], [-81.93333357598, 23.71750013802], [-81.766666575933, 23.733333138003], [-81.599999576036, 23.747222138032], [-81.428888576008, 23.797222138015], [-81.315277576043, 23.825000138064], [-81.087777576029, 23.899444137973], [-81.051666575925, 23.938333137994], [-80.951944575014, 24.023889138012], [-80.932777575037, 24.040000138033], [-80.918888575008, 24.048889138004], [-80.897777574929, 24.062778138034], [-80.896666574934, 24.063611137991], [-80.681944575013, 24.209167137959], [-80.68055557498, 24.210000138066], [-80.663333574964, 24.220555137952], [-80.656111575065, 24.224722138053], [-80.564444574993, 24.268055138056], [-80.549166574929, 24.275278138946], [-80.502777574971, 24.291111138928], [-80.439722575073, 24.318055139022], [-80.39194457493, 24.341111139062], [-80.355833574977, 24.355833139048], [-80.319722575023, 24.367778138975], [-80.309999574937, 24.371111138961], [-80.251666575058, 24.393333139036], [-80.229166574946, 24.401111139011], [-80.222777575004, 24.403333139002], [-80.196666575017, 24.41527813893], [-80.182222575068, 24.423611138974], [-80.154722575048, 24.436389139008], [-80.122777575037, 24.450833138957], [-80.112222575002, 24.454444138981], [-79.964444575043, 24.506944138994], [-79.899722575073, 24.541667139071], [-79.782777573988, 24.595833138998], [-79.747499573991, 24.60944413899], [-79.727499574057, 24.617222138965], [-79.723611574002, 24.637778138975], [-79.666111573931, 24.823889139029], [-79.646944573955, 24.883611138941], [-79.634999574028, 24.907778138975], [-79.61583357406, 24.949444139056], [-79.608333573972, 24.964722138969], [-79.595833573976, 25.050555139018], [-79.593333573947, 25.063889138979], [-79.591944574064, 25.077222138932], [-79.591944574064, 25.16555513901], [-79.589999573954, 25.180833139073], [-79.602222574069, 25.257778139008], [-79.605555574055, 25.272222138957], [-79.603333574064, 25.300833138973], [-79.603055574026, 25.366111140003], [-79.603333574064, 25.417222139982], [-79.607499574008, 25.518611139982], [-79.607499574008, 25.523055139964], [-79.607499574008, 25.57666713998], [-79.613333574031, 25.608333139944], [-79.616388573979, 25.62750014007], [-79.612499574066, 25.670833140073], [-79.612222574035, 25.673611139991], [-79.60666657405, 25.705278139963], [-79.606388574012, 25.706389139958], [-79.604444574059, 25.725555139927], [-79.599722574039, 25.764722139986], [-79.596111574015, 25.789722139978], [-79.593888574016, 25.80083313994], [-79.584999574045, 25.838055140039], [-79.577222573927, 25.863055140031], [-79.568888574024, 25.887500139953], [-79.567499573991, 25.891389140016], [-79.539444574051, 25.947500140053], [-79.509722574039, 26.016111139936], [-79.502499573982, 26.029444140039], [-79.498055574001, 26.035555139943], [-79.456388574062, 26.153333140002], [-79.454722573998, 26.156944140027], [-79.431944573997, 26.215555139943], [-79.398333574072, 26.288889140004], [-79.398611573961, 26.291111139995], [-79.399444574068, 26.325000139958], [-79.398055574034, 26.384444139981], [-79.404166573938, 26.419722139978], [-79.41055557403, 26.469444141056], [-79.412777574021, 26.480555141018], [-79.413888574016, 26.48888914107], [-79.418611574044, 26.508055141039], [-79.425833573943, 26.536667141063], [-79.433611574069, 26.586389141008], [-79.438888574008, 26.62750014102], [-79.439722573973, 26.64138914105], [-79.444722574031, 26.662500140978], [-79.474166574004, 26.799167140975], [-79.477499573991, 26.820833140973], [-79.488055574034, 26.907500140987], [-79.488611573961, 26.999444140939], [-79.482222574019, 27.098055141022], [-79.471666573975, 27.170000141049], [-79.427222573977, 27.333333140952], [-79.401944574022, 27.557500141487], [-79.376666574067, 27.781667142021], [-79.233333074019, 27.983889642024], [-79.08999957397, 28.186112142027], [-78.792499680478, 28.186112142027], [-78.494999786985, 28.186112142027], [-78.197499893493, 28.186112142027], [-77.9, 28.186112142027], [-77.9, 28.233333333333], [-77.9, 28.4], [-77.9, 28.566666666667], [-77.9, 28.733333333333], [-77.9, 28.9], [-77.9, 29.066666666666], [-77.9, 29.233333333333], [-77.9, 29.4], [-77.9, 29.566666666667], [-77.9, 29.733333333333], [-77.9, 29.9], [-77.9, 30.066666666666], [-77.9, 30.233333333333], [-77.9, 30.4], [-77.9, 30.566666666667], [-77.9, 30.733333333333], [-77.9, 30.9], [-77.9, 31.066666666666], [-77.9, 31.233333333333], [-77.9, 31.4], [-77.9, 31.566666666667], [-77.9, 31.733333333333], [-77.9, 31.9], [-77.9, 32.066666666666], [-77.9, 32.233333333333], [-77.9, 32.4], [-77.9, 32.566666666667], [-77.9, 32.733333333333], [-77.9, 32.9], [-77.9, 33.066666666666], [-77.9, 33.233333333333], [-77.9, 33.4], [-77.9, 33.566666666667], [-77.9, 33.733333333333], [-77.9, 33.9], [-77.9, 34.066666666666], [-77.9, 34.433333333333], [-77.9, 34.6], [-77.9, 34.766666666667], [-77.9, 34.933333333334], [-77.9, 35.1], [-77.9, 35.266666666667], [-77.9, 35.433333333333], [-77.9, 35.6], [-77.9, 35.766666666667], [-77.9, 35.933333333334], [-77.9, 36.1], [-77.9, 36.266666666667], [-77.9, 36.433333333333], [-77.9, 36.6], [-77.9, 36.766666666667], [-77.9, 36.933333333334], [-77.9, 37.1], [-77.9, 37.266666666667], [-77.9, 37.433333333333], [-77.9, 37.6], [-77.9, 37.766666666667], [-77.9, 37.933333333334], [-77.9, 38.1], [-77.9, 38.266666666667], [-77.9, 38.433333333333], [-77.9, 38.6], [-77.9, 38.766666666667], [-77.9, 38.933333333334], [-77.9, 39.1], [-77.9, 39.266666666667], [-77.9, 39.433333333333], [-77.9, 39.6], [-77.9, 39.766666666667], [-77.9, 39.933333333334], [-77.9, 40.1], [-77.9, 40.266666666667], [-77.9, 40.433333333333], [-77.9, 40.6], [-77.9, 40.766666666667], [-77.9, 40.933333333334], [-77.9, 41.1], [-77.9, 41.266666666667], [-77.9, 41.433333333333], [-77.9, 41.6], [-77.9, 41.766666666667], [-77.9, 41.933333333334], [-77.9, 42.1], [-77.9, 42.266666666667], [-77.9, 42.433333333333], [-77.9, 42.6], [-77.9, 42.766666666667], [-77.9, 42.933333333334], [-77.9, 43.1], [-77.9, 43.266666666667], [-77.9, 43.433333333333], [-77.9, 43.739185709132], [-78.094030761719, 43.738757130689], [-78.288061523437, 43.738328552246], [-78.563055419922, 43.737496948242], [-78.624716186523, 43.729432678223], [-78.838323974609, 43.65387878418], [-78.928060913086, 43.621934509278], [-78.995275878906, 43.597772216797], [-79.08472290039, 43.565545654297], [-79.032217407227, 43.48249206543], [-78.966787719727, 43.379399871826], [-78.953749084473, 43.359578704834], [-78.944860839844, 43.26304397583], [-78.954649353027, 43.240544891357], [-78.981115722656, 43.185548400879], [-78.942083740234, 43.109719848633], [-78.91375579834, 43.082212066651], [-78.875273132324, 43.059712982178], [-78.845198059082, 43.054021453858], [-78.820341491699, 43.036241149902], [-78.817778015137, 43.001935577393], [-78.834158325195, 42.965962982178], [-78.865835571289, 42.933602905273], [-78.886938476562, 42.91999206543], [-79.021109008789, 42.869157409668], [-79.054449462891, 42.857217407227], [-79.199438476562, 42.802491760254], [-79.466452026367, 42.700708007813], [-79.663427734375, 42.624703979492], [-79.676672363281, 42.62027130127], [-79.834104919433, 42.559230422974], [-79.991537475586, 42.498189544678], [-80.200910949707, 42.463676071167], [-80.410284423828, 42.429162597656], [-80.428549194336, 42.42661819458], [-80.598852539062, 42.402888870239], [-80.769155883789, 42.379159545899], [-80.959158325195, 42.352075195313], [-81.349160766601, 42.324990844727], [-81.524438476562, 42.244996643067], [-81.723611450195, 42.152772521973], [-81.922235107422, 42.060273742676], [-82.120149230957, 41.96735534668], [-82.318063354492, 41.874436950684], [-82.338891601562, 41.863885498047], [-82.525277709961, 41.775552368164], [-82.562783813477, 41.77610168457], [-82.749993896484, 41.781938171387], [-82.796655273437, 41.783876037598], [-82.986524200439, 41.875615692139], [-83.176393127441, 41.96735534668], [-83.217416381836, 42.046193695068], [-83.230828857422, 42.070542907715], [-83.250283813477, 42.108331298828], [-83.26860961914, 42.146104431152], [-83.237222290039, 42.301385498047], [-83.23249206543, 42.320825195313], [-83.223321533203, 42.345826721192], [-83.212915039062, 42.365270233154], [-83.186959838867, 42.40054473877], [-83.157075500488, 42.421659088135], [-83.127221679687, 42.431939697266], [-83.102227783203, 42.439157104492], [-83.075830078125, 42.444711303711], [-83.040551757812, 42.457498168946], [-82.941384887695, 42.496942138672], [-82.901246643066, 42.518045043945], [-82.869172668457, 42.542905426026], [-82.829995727539, 42.583329772949], [-82.804452514648, 42.608331298828], [-82.762651062012, 42.645295715332], [-82.718194580078, 42.655755615234], [-82.679032897949, 42.663743591309], [-82.635827636719, 42.699433898926], [-82.617364501953, 42.727632141113], [-82.584725952148, 42.81915435791], [-82.572915649414, 42.86082611084], [-82.574090576172, 42.896382904053], [-82.58152923584, 42.92638168335], [-82.563478088379, 43.001378631592], [-82.51877746582, 43.11863861084], [-82.504174804687, 43.149163818359], [-82.422235107422, 43.310548400879], [-82.352792358398, 43.446382141113], [-82.328881835937, 43.491380310059], [-82.246118164062, 43.653047180176], [-82.230279541016, 43.685266113281], [-82.267586954044, 43.847917912087], [-82.314447021484, 44.052217102051], [-82.37024034611, 44.294271390274], [-82.426033670735, 44.536325678497], [-82.431680297851, 44.560823059082], [-82.481118774414, 44.771794891358], [-82.530557250976, 44.982766723633], [-82.586808776855, 45.219297027588], [-82.643060302734, 45.455827331543], [-82.729989624023, 45.496102905274], [-82.765008544922, 45.511933898926], [-83.054177856445, 45.641938781738], [-83.150827026367, 45.685266113281], [-83.212213134766, 45.712770080567], [-83.370843505859, 45.783326721191], [-83.600289916992, 45.884996032715], [-83.697778320312, 45.927217102051], [-83.623895263672, 46.01805267334], [-83.587777709961, 46.061662292481], [-83.547769165039, 46.111940002442], [-83.579019165039, 46.140134429932], [-83.672082519531, 46.201936340332], [-83.696115112305, 46.214158630371], [-83.719163513183, 46.221101379395], [-83.763055419922, 46.226098632813], [-83.938340759277, 46.225545501709], [-83.990548706055, 46.194615936279], [-84.023751831055, 46.170560455322], [-84.054322814941, 46.17048034668], [-84.1, 46.219971321774], [-84.1, 46.1], [-84.1, 45.933333333334], [-84.1, 45.766666666667], [-84.1, 45.6], [-84.1, 45.433333333333], [-84.1, 45.266666666667], [-84.1, 45.1], [-84.1, 44.933333333334], [-84.1, 44.766666666667], [-84.1, 44.6], [-84.1, 44.433333333333], [-84.1, 44.266666666667], [-84.1, 44.1], [-84.1, 43.933333333334], [-84.1, 43.766666666667], [-84.1, 43.6], [-84.1, 43.433333333333], [-84.1, 43.266666666667], [-84.1, 43.1], [-84.1, 42.933333333334], [-84.1, 42.766666666667], [-84.1, 42.6], [-84.1, 42.433333333333], [-84.1, 42.266666666667], [-84.1, 42.1], [-84.1, 41.933333333334], [-84.1, 41.766666666667], [-84.1, 41.6], [-84.1, 41.433333333333], [-84.1, 41.266666666667], [-84.1, 41.1], [-84.1, 40.933333333334], [-84.1, 40.766666666667], [-84.1, 40.6], [-84.1, 40.433333333333], [-84.1, 40.266666666667], [-84.1, 40.1], [-84.1, 39.933333333334], [-84.1, 39.766666666667], [-84.1, 39.6], [-84.1, 39.433333333333], [-84.1, 39.266666666667], [-84.1, 39.1], [-84.1, 38.933333333334], [-84.1, 38.766666666667], [-84.1, 38.6], [-84.1, 38.433333333333], [-84.1, 38.266666666667], [-84.1, 38.1], [-84.1, 37.933333333334], [-84.1, 37.766666666667], [-84.1, 37.6], [-84.1, 37.433333333333], [-84.1, 37.266666666667], [-84.1, 37.1], [-84.1, 36.933333333334], [-84.1, 36.766666666667], [-84.1, 36.6], [-84.1, 36.433333333333], [-84.1, 36.266666666667], [-84.1, 36.1], [-84.1, 35.933333333334], [-84.1, 35.766666666667], [-84.1, 35.6], [-84.1, 35.433333333333], [-84.1, 35.266666666667], [-84.1, 35.1], [-84.1, 34.933333333334], [-84.1, 34.766666666667], [-84.1, 34.6], [-84.1, 34.433333333333], [-84.1, 34.066666666666], [-84.1, 33.9], [-84.1, 33.733333333333], [-84.1, 33.566666666667], [-84.1, 33.4], [-84.1, 33.233333333333], [-84.1, 33.066666666666], [-84.1, 32.9], [-84.1, 32.733333333333], [-84.1, 32.566666666667], [-84.1, 32.4], [-84.1, 32.233333333333], [-84.1, 32.066666666666], [-84.1, 31.9], [-84.1, 31.733333333333], [-84.1, 31.566666666667], [-84.1, 31.4], [-84.1, 31.233333333333], [-84.1, 31.066666666666], [-84.1, 30.9], [-84.1, 30.733333333333], [-84.1, 30.566666666667], [-84.1, 30.4], [-84.1, 30.233333333333], [-84.1, 30.066666666666], [-84.1, 29.9], [-84.1, 29.733333333333], [-84.1, 29.566666666667], [-84.1, 29.4], [-84.1, 29.233333333333], [-84.1, 29.066666666666], [-84.1, 28.9], [-84.1, 28.733333333333], [-84.1, 28.566666666667], [-84.1, 28.4], [-84.1, 28.233333333333], [-84.1, 28.066666666666], [-84.1, 27.9], [-84.1, 27.733333333333], [-84.1, 27.566666666667], [-84.1, 27.4], [-84.1, 27.233333333333], [-84.1, 27.066666666666], [-84.1, 26.9], [-84.1, 26.733333333333], [-84.1, 26.566666666667], [-84.1, 26.4], [-84.1, 26.233333333333], [-84.1, 26.066666666666], [-84.1, 25.9], [-84.1, 25.733333333333], [-84.1, 25.566666666667], [-84.1, 25.4], [-84.1, 25.233333333333], [-84.1, 25.066666666666], [-84.1, 24.9], [-84.1, 24.733333333333], [-84.1, 24.566666666667], [-84.1, 24.4], [-84.1, 24.233333333333], [-84.1, 24.066666666666], [-84.1, 23.9], [-84.1, 23.876667295249],
                ],
            ],
        ];
    }
}
