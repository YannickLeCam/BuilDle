
<pre>
    <?php

    require_once "statsComp.php";
    $stats = [
        "ad" => 0,
        "ap" => 0,
        "mana" => 0,
        "manaRegen" => 0,
        "healthRegen" => 0,
        "lethalite" => 0,
        "armor" => 0,
        "resistanceMagic" => 0,
        "abilityHaste" => 0,
        "crit" => 0,
        "critDamage" => 0,
        "health" => 0,
        "attackSpeed" => 0,
        "magicPenFlat" => 0,
        "lifeSteal" => 0,
        "omnivamp" => 0,
        "magicPenPercent" => 0,
        "armorPen" => 0,
        "moveSpeed" => 0,
        "healthShield" => 0,
        "tenacity" => 0,
        "goldGenerator" => 0,
    ];
    $krakenSlayer = new Objet(
        nom: "Kraken Slayer",
        image: "path/to/kraken_slayer_image.png",
        dateSortie: '2020-11-11',
        description: "Every third attack deals bonus true damage.",
        price: 3400,
        passif: "Kraken Slayer: Every third attack deals bonus true damage.",
        actif: "",
        onHit: true,
        bleed: false,
        stats: [
            "ad" => 65,
            "crit" => 20,
            "attackSpeed" => 25
        ]
    );

    echo '<table class="table">';
    echo '<thead><th>nom</th><th>date de sortie</th><th>description</th><th>prix</th><th>passif</th><th>actif</th><th>onHit</th><th>bleed</th>';
    foreach ($stats as $name => $value) {
        echo "<th>$name</th>";
    }
    echo $krakenSlayer->printTabHTML();
    echo '</table>';
    ?>
    </pre>