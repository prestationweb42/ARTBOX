<?php
include_once 'components/header.php';
$oeuvres = [
    [
        "id" => 1,
        "lien" => "oeuvre.php?id=1",
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
    [
        "id" => 2,
        "lien" => "oeuvre.php?id=2",
        "titre" => "Aashaaheen Baadal",
        "image" => "img/pawel-czerwinski-3.png",
        "description" => "Anaisha Devi",
        "texte" => "Sur cette oeuvre conceptuelle à la fois organique, minérale et liquide, Anaisha Devi nous transporte
                    dans un nuage noir envoûtant. Un sombre tableau qui, par son verni éclatant, rayonne tel un marbre
                    poli. Une oeuvre à la cohérence transcendantale, exécutée à la perfection."
    ],
    [
        "id" => 3,
        "lien" => "oeuvre.php?id=3",
        "titre" => "Nightlife Traffic",
        "image" => "img/dan-cristian-padure.png",
        "description" => "Andrew Forsythe",
        "texte" => "Quisque accumsan ultrices ligula vestibulum posuere. Aliquam feugiat ligula eget massa blandit
                    condimentum. Morbi volutpat erat luctus suscipit pellentesque. Quisque cursus tempor nibh at
                    sollicitudin. Sed blandit libero velit. Etiam tincidunt facilisis mollis. Ut mollis nunc sit amet
                    lacinia luctus. Suspendisse volutpat enim semper arcu rutrum, et iaculis risus interdum. Duis at
                    libero."
    ],
    [
        "id" => 4,
        "lien" => "oeuvre.php?id=4",
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
    [
        "id" => 5,
        "lien" => "oeuvre.php?id=5",
        "titre" => "Red Washover",
        "image" => "img/steve-johnson.png",
        "description" => "Kit Van Der Borght",
        "texte" => "Nunc euismod ullamcorper tortor, id efficitur ante interdum in. Integer eu condimentum nulla. Class
                    aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Cras viverra
                    suscipit feugiat. Mauris vehicula luctus tellus, eu hendrerit libero laoreet ut. In tristique
                    vehicula nisl in tempus. Morbi tempus aliquet gravida. In eget est congue, rhoncus sapien at, cursus
                    metus."
    ],
    [
        "id" => 6,
        "lien" => "oeuvre.php?id=6",
        "titre" => "Chromatics",
        "image" => "img/pawel-czerwinski.png",
        "description" => "Jean-Michel Delatronchette",
        "texte" => "Vivamus commodo non libero at hendrerit. In lacinia dui sit amet pellentesque iaculis. Donec at
                    ultricies sem porttitor."
    ],
    [
        "id" => 7,
        "lien" => "oeuvre.php?id=7",
        "titre" => "Digital Negative",
        "image" => "img/jazmin-quaynor.png",
        "description" => "Hamish McKee",
        "texte" => "Integer in nisl posuere, pulvinar ex ac, tincidunt risus. Nullam vel lorem et leo dignissim
                    accumsan. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent tempor, magna non
                    consectetur dapibus, est libero iaculis lacus, eget semper turpis orci vitae felis. Fusce eget
                    molestie."
    ],
    [
        "id" => 8,
        "lien" => "oeuvre.php?id=8",
        "titre" => "Blast from the past",
        "image" => "img/steve-johnson-6.png",
        "description" => "Juliette Baskerville",
        "texte" => "Nunc fermentum purus dapibus justo fermentum auctor. Maecenas non tincidunt leo. Morbi vitae iaculis
                    sem. Donec quis scelerisque massa. Fusce quis accumsan diam, et interdum lectus. Suspendisse mattis
                    pulvinar vehicula. Duis nisi."
    ],
    [
        "id" => 9,
        "lien" => "oeuvre.php?id=9",
        "titre" => "Hurricane",
        "image" => "img/victor-grabarczyk.png",
        "description" => "Natalie Wellington",
        "texte" => "Aliquam tristique tempus molestie. Nulla nisl eros, dapibus eu lectus in, cursus accumsan arcu.
                    Suspendisse bibendum diam dignissim porta maximus. Praesent sollicitudin consectetur faucibus. Cras
                    pulvinar massa a orci rutrum, id blandit enim viverra. Praesent sed congue augue. Suspendisse
                    efficitur, nisl quis finibus faucibus, lacus felis bibendum leo, eu euismod lacus mauris in felis.
                    Quisque dignissim et dui et aliquet. Donec ut lobortis eros, vitae tincidunt augue metus."
    ],
    [
        "id" => 10,
        "lien" => "oeuvre.php?id=10",
        "titre" => "La marée rouge",
        "image" => "img/pawel-czerwinski-2.png",
        "description" => "Martin Rodriguez",
        "texte" => "Vivamus quis odio vel ligula feugiat facilisis. Donec eleifend pellentesque massa, ut malesuada est
                    bibendum sit amet. Morbi tincidunt nec tellus vel ornare. Mauris dolor tellus, gravida eget euismod
                    eu, viverra eget urna. Phasellus feugiat ipsum nec lorem accumsan, sed porta quam dictum massa nunc."
    ],
    [
        "id" => 11,
        "lien" => "oeuvre.php?id=11",
        "titre" => "Asimilacion",
        "image" => "img/steve-johnson-2.png",
        "description" => "Angel Sanchez-Fernandez",
        "texte" => "Mauris ut justo ac mi pretium eleifend. Curabitur sed magna ut elit facilisis pharetra. Maecenas
                    tincidunt fermentum ipsum ut sollicitudin. Nullam feugiat, neque vel egestas sollicitudin, quam leo
                    mattis mauris, in lacinia sem mi id risus. Nullam ultrices quam eu leo auctor tempus. Fusce
                    vestibulum mi ex, vel ultricies purus mollis sollicitudin. Aenean ac vehicula ipsum. Nam turpis
                    ante, ultrices eget odio sed, luctus bibendum mauris sodales sed."
    ],
    [
        "id" => 12,
        "lien" => "oeuvre.php?id=12",
        "titre" => "La Galaxia Gialla",
        "image" => "img/fly-d.png",
        "description" => "Eduardo Tancredi",
        "texte" => "Mauris maximus, orci sollicitudin ultrices elementum, tellus neque feugiat leo, quis lobortis purus
                    neque vel lectus. Ut sagittis eros id lectus porttitor tincidunt. Donec scelerisque diam nec felis
                    egestas, eget finibus ante porttitor. Sed malesuada sapien ut semper accumsan. Duis tristique dui
                    vel egestas porttitor. Nunc tristique dapibus orci a amet."
    ],
    [
        "id" => 13,
        "lien" => "oeuvre.php?id=13",
        "titre" => "Puffy Amalgamate",
        "image" => "img/orfeas-green.png",
        "description" => "Sandro De Blasi",
        "texte" => "Donec semper a massa quis congue. In malesuada lorem ligula, ut posuere magna pulvinar in. Proin
                    vitae enim gravida, commodo odio."
    ],
    [
        "id" => 14,
        "lien" => "oeuvre.php?id=14",
        "titre" => "Mirage",
        "image" => "img/steve-johnson-4.png",
        "description" => "Stéphanie Kaiser",
        "texte" => "Interdum et malesuada fames ac ante ipsum primis in faucibus. Nam iaculis lorem ac ex tristique
                    egestas et nec sapien. Donec tincidunt id erat sit amet tempus. Nullam vel molestie dui. Duis a
                    neque massa. Vivamus quis ornare lacus. Nullam eleifend condimentum egestas. Vivamus magna purus,
                    fermentum mollis mauris sed, consectetur interdum libero. Duis interdum tortor tellus, eget
                    sollicitudin quis."
    ],
    [
        "id" => 15,
        "lien" => "oeuvre.php?id=15",
        "titre" => "Blaue Gelbe Muster",
        "image" => "img/steve-johnson-3.png",
        "description" => "Adelheid Von Schreiber",
        "texte" => "Curabitur dui odio, porta vel tempor sed, consectetur vitae mi. Interdum et malesuada fames ac ante
                    ipsum primis in faucibus. Orci varius natoque penatibus nec."
    ]
];