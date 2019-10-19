<!DOCTYPE html>
<html lang="en">
<head>
    <title>Úkol 3</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
</head>
<body>
<br>
<div class="container">



    <table class="table table-bordered">
        <thead>
        <tr>
            <th>Předmět</th>
            <th>Známka</th>
        </tr>
        </thead>
        <tbody>

        <?php
    $predmety = [
        'zeměpis' => 1,
        'dějepis' => 2,
        'fyzika' => 3,
        'přírodopis' => 1
    ];
        foreach ($predmety as $predmet => $znamka) {
            echo "

            <tr>
                <td>$predmet</td>
                <td>$znamka</td>
            </tr>";}
        $pocetZnamek = $pocetZnamek + 1; //$pocetZnamek++//
        $soucetZnamek += $znamka;           //$soucetZnamek = $soucetZnamek +$znamka//
        ?>

        </tbody>
    </table>

 Průměr:
<?php
echo $soucetZnamek / $pocetZnamek;
    ?>

</div>
</body>
</html>
