<?php
include_once 'components/header.php';
$oeuvres = [
    $oeuvre1 = [
        "id" => 1,
        "lien" => "oeuvre-1.php",
        "titre" => "Dodomu",
        "image" => "img/clark-van-der-beken.png",
        "description" => "Mia Tozerski",
        "texte" => "Mia Tozerski est une artiste peintre ukrainienne réfugiée de la guerre. Sur cette œuvre, Dodomu
        (\"domicile\" en ukrainien), elle nous montre la tristesse du peuple ukrainien qu'elle partage, ayant
        elle-même dû quitter son foyer. L'œuvre évoque le drapeau liquéfié d'une Ukraine en souffrance,
        pleurant la mort de ses compatriotes. Ce travail chargé d'émotion est le symbole d'un événement qui
        marquera l'Histoire. Cette peinture à l'acrylique rayonne grâce à son fond lisse et ses mélanges de
        couleurs éclatantes."
    ],
    $oeuvre2 = [
        "id" => 2,
        "lien" => "oeuvre-2.php",
        "titre" => "Aashaaheen Baadal",
        "image" => "img/pawel-czerwinski-3.png",
        "description" => "Anaisha Devi",
        "texte" => "Sur cette oeuvre conceptuelle à la fois organique, minérale et liquide, Anaisha Devi nous transporte
                    dans un nuage noir envoûtant. Un sombre tableau qui, par son verni éclatant, rayonne tel un marbre
                    poli. Une oeuvre à la cohérence transcendantale, exécutée à la perfection."
    ],
    $oeuvre3 = [
        "id" => 3,
        "lien" => "oeuvre-3.php",
        "titre" => "Nightlife Traffic",
        "image" => "img/dan-cristian-padure.png",
        "description" => "Andrew Forsythe",
        "texte" => "Quisque accumsan ultrices ligula vestibulum posuere. Aliquam feugiat ligula eget massa blandit
                    condimentum. Morbi volutpat erat luctus suscipit pellentesque. Quisque cursus tempor nibh at
                    sollicitudin. Sed blandit libero velit. Etiam tincidunt facilisis mollis. Ut mollis nunc sit amet
                    lacinia luctus. Suspendisse volutpat enim semper arcu rutrum, et iaculis risus interdum. Duis at
                    libero."
    ],
    $oeuvre4 = [
        "id" => 4,
        "lien" => "oeuvre-4.php",
        "titre" => "Le refuge de l'Havre",
        "image" => "img/steve-johnson-5.png",
        "description" => "Simon Pelletier",
        "texte" => "Nam tempus neque nec felis venenatis auctor. Nam velit risus, lobortis eu quam non, interdum
                    efficitur nibh. Phasellus a augue ac orci lacinia mattis et vel lectus. Sed nec tellus urna. Donec
                    at turpis turpis. Cras quam tellus, imperdiet vitae finibus id, varius quis felis. Maecenas blandit
                    eleifend risus, vel hendrerit erat dignissim id. Nullam at laoreet nibh. Nulla gravida varius
                    sollicitudin. Etiam non aliquam diam, tempor varius sapien. Aenean et velit eu nisi lobortis massa
                    nunc."
    ],
    $oeuvre5 = [
        "id" => 5,
        "lien" => "oeuvre-5.php",
        "titre" => "Red Washover",
        "image" => "img/steve-johnson.png",
        "description" => "Kit Van Der Borght",
        "texte" => "Nunc euismod ullamcorper tortor, id efficitur ante interdum in. Integer eu condimentum nulla. Class
                    aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Cras viverra
                    suscipit feugiat. Mauris vehicula luctus tellus, eu hendrerit libero laoreet ut. In tristique
                    vehicula nisl in tempus. Morbi tempus aliquet gravida. In eget est congue, rhoncus sapien at, cursus
                    metus."
    ],
    $oeuvre6 = [
        "id" => 6,
        "lien" => "oeuvre-6.php",
        "titre" => "Chromatics",
        "image" => "img/pawel-czerwinski.png",
        "description" => "Jean-Michel Delatronchette",
        "texte" => "Vivamus commodo non libero at hendrerit. In lacinia dui sit amet pellentesque iaculis. Donec at
                    ultricies sem porttitor."
    ],
    $oeuvre7 = [
        "id" => 7,
        "lien" => "oeuvre-7.php",
        "titre" => "Digital Negative",
        "image" => "img/jazmin-quaynor.png",
        "description" => "Hamish McKee",
        "texte" => "Integer in nisl posuere, pulvinar ex ac, tincidunt risus. Nullam vel lorem et leo dignissim
                    accumsan. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent tempor, magna non
                    consectetur dapibus, est libero iaculis lacus, eget semper turpis orci vitae felis. Fusce eget
                    molestie."
    ],
    $oeuvre8 = [
        "id" => 8,
        "lien" => "oeuvre-8.php",
        "titre" => "Blast from the past",
        "image" => "img/steve-johnson-6.png",
        "description" => "Juliette Baskerville",
        "texte" => "Nunc fermentum purus dapibus justo fermentum auctor. Maecenas non tincidunt leo. Morbi vitae iaculis
                    sem. Donec quis scelerisque massa. Fusce quis accumsan diam, et interdum lectus. Suspendisse mattis
                    pulvinar vehicula. Duis nisi."
    ],
    $oeuvre9 = [
        "id" => 9,
        "lien" => "oeuvre-9.php",
        "titre" => "Hurricane",
        "image" => "img/victor-grabarczyk.png",
        "description" => "Natalie Wellington",
        "texte" => "Aliquam tristique tempus molestie. Nulla nisl eros, dapibus eu lectus in, cursus accumsan arcu.
                    Suspendisse bibendum diam dignissim porta maximus. Praesent sollicitudin consectetur faucibus. Cras
                    pulvinar massa a orci rutrum, id blandit enim viverra. Praesent sed congue augue. Suspendisse
                    efficitur, nisl quis finibus faucibus, lacus felis bibendum leo, eu euismod lacus mauris in felis.
                    Quisque dignissim et dui et aliquet. Donec ut lobortis eros, vitae tincidunt augue metus."
    ],
    $oeuvre10 = [
        "id" => 10,
        "lien" => "oeuvre-10.php",
        "titre" => "La marée rouge",
        "image" => "img/pawel-czerwinski-2.png",
        "description" => "Martin Rodriguez",
        "texte" => "Vivamus quis odio vel ligula feugiat facilisis. Donec eleifend pellentesque massa, ut malesuada est
                    bibendum sit amet. Morbi tincidunt nec tellus vel ornare. Mauris dolor tellus, gravida eget euismod
                    eu, viverra eget urna. Phasellus feugiat ipsum nec lorem accumsan, sed porta quam dictum massa nunc."
    ],
    $oeuvre11 = [
        "id" => 11,
        "lien" => "oeuvre-11.php",
        "titre" => "Asimilacion",
        "image" => "img/steve-johnson-2.png",
        "description" => "Angel Sanchez-Fernandez",
        "texte" => "Mauris ut justo ac mi pretium eleifend. Curabitur sed magna ut elit facilisis pharetra. Maecenas
                    tincidunt fermentum ipsum ut sollicitudin. Nullam feugiat, neque vel egestas sollicitudin, quam leo
                    mattis mauris, in lacinia sem mi id risus. Nullam ultrices quam eu leo auctor tempus. Fusce
                    vestibulum mi ex, vel ultricies purus mollis sollicitudin. Aenean ac vehicula ipsum. Nam turpis
                    ante, ultrices eget odio sed, luctus bibendum mauris sodales sed."
    ],
    $oeuvre12 = [
        "id" => 12,
        "lien" => "oeuvre-12.php",
        "titre" => "La Galaxia Gialla",
        "image" => "img/fly-d.png",
        "description" => "Eduardo Tancredi",
        "texte" => "Mauris maximus, orci sollicitudin ultrices elementum, tellus neque feugiat leo, quis lobortis purus
                    neque vel lectus. Ut sagittis eros id lectus porttitor tincidunt. Donec scelerisque diam nec felis
                    egestas, eget finibus ante porttitor. Sed malesuada sapien ut semper accumsan. Duis tristique dui
                    vel egestas porttitor. Nunc tristique dapibus orci a amet."
    ],
    $oeuvre13 = [
        "id" => 13,
        "lien" => "oeuvre-13.php",
        "titre" => "Puffy Amalgamate",
        "image" => "img/orfeas-green.png",
        "description" => "Sandro De Blasi",
        "texte" => "Donec semper a massa quis congue. In malesuada lorem ligula, ut posuere magna pulvinar in. Proin
                    vitae enim gravida, commodo odio."
    ],
    $oeuvre14 = [
        "id" => 14,
        "lien" => "oeuvre-14.php",
        "titre" => "Mirage",
        "image" => "img/steve-johnson-4.png",
        "description" => "Stéphanie Kaiser",
        "texte" => "Interdum et malesuada fames ac ante ipsum primis in faucibus. Nam iaculis lorem ac ex tristique
                    egestas et nec sapien. Donec tincidunt id erat sit amet tempus. Nullam vel molestie dui. Duis a
                    neque massa. Vivamus quis ornare lacus. Nullam eleifend condimentum egestas. Vivamus magna purus,
                    fermentum mollis mauris sed, consectetur interdum libero. Duis interdum tortor tellus, eget
                    sollicitudin quis."
    ],
    $oeuvre15 = [
        "id" => 15,
        "lien" => "oeuvre-15.php",
        "titre" => "Blaue Gelbe Muster",
        "image" => "img/steve-johnson-3.png",
        "description" => "Adelheid Von Schreiber",
        "texte" => "Curabitur dui odio, porta vel tempor sed, consectetur vitae mi. Interdum et malesuada fames ac ante
                    ipsum primis in faucibus. Orci varius natoque penatibus nec."
    ]
];
// echo "<pre>";
// print_r($oeuvres);
// echo "</pre>";
// echo "<br>";
// echo "-----------------";
// echo "<br>";
// print_r($oeuvre3['titre']);
// echo "<br>";
// // var_dump($oeuvre3["titre"]);
// echo $oeuvre3["id"];
// echo "<br>";
// echo "--------Boucle For---------";
// for ($lines = 0; $lines <= 14; $lines++) {
//     // echo "<br>";
//     echo $oeuvres[$lines]['id'] . ", ";
//     // echo "<br>";
//     // echo "-----------------";
// }
// echo "<br>";
// echo "--------Boucle Foreach---------";
// foreach ($oeuvres as $oeuvre) {
//     echo "<br>";
//     // echo '<img src="img/steve-johnson-3.png">';
//     echo "<img src=" . $oeuvre['image'] . ">";
//     echo $oeuvre['image'];
//     echo "<br>";
//     echo "-----------------";
// }
// echo "--------Boucle Foreach---------";
// foreach ($oeuvres as $oeuvre) {
//     echo "<br>";
//     echo '<article class="oeuvre">';
//     echo "<img src=" . $oeuvre['image'] . ">";
//     echo "<br>";
//     echo "-----------------";
//     echo '</article>';
// }