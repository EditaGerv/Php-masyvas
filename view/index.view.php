<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Namu darbas</title>
        <link rel="stylesheet" href="view/css/style.css">
    </head>
    <body>
        <div class="container">
        <h2>Mokiniai</h2>
        
        <table>
            <tbody>
                <tr>
                <th><b>Klase</b></th>
                <th><b>Kodas</b></th>
                <th><b>Vardas</b></th>
                <th><b>Pavarde</b></th>
                <th><b>Kontroliniu darbu vidurkis</b></th>
                <th><b>Duomenu formavimo data</b></th>
                </tr>
        
        <?php
        foreach($mokiniai as $klase => $klasesData) {
            foreach ($klasesData as $mokinys) {
                $pazSuma = 0;
                $pazKiekis = 0;
                foreach ($mokinys['pazymiai'] as $subject => $pazymys) {
                    $pazSuma += $pazymys;
                    $pazKiekis++;
                }
                if ($pazKiekis > 0) {
                    $average = round($pazSuma / $pazKiekis, 2);
                } else {
                    $average = "-";
                }
                echo "<tr>";
                echo "<td>". $klase ."</td>";
                echo "<td>". $mokinys["kodas"] ."</td>";
                echo "<td>". $mokinys["vardas"] ."</td>";
                echo "<td>". $mokinys["pavarde"] ."</td>";
                echo "<td>". $average ."</td>";
                echo "<td>". $mokinys["data"] ."</td>";
                echo "</tr>";
            }
        }
        ?>

            </tbody>
        </table>
        </div>
        
        
       
        
    
    </body>
</html>