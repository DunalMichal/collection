<?php
require "php/api/getCollectionData.php";


function generate_collectionTableBasic($collectionData)
{

    ?>

    <table class="collectionTableBasic">
        <thead>
        <tr class="collectionTableBasic-firstRow">
            <th>Number</th>
            <th>Name</th>
            <th>Team</th>
            <th>Type</th>
            <th>Need</th>
            <th>Offer</th>
            <th>Hold</th>
            <th>Popularity</th>
            <th>Value</th>
            <th>Rarity</th>
        </tr>
        </thead>
        <tr class="collectionTableBasic-filterRow">
            <th></th>
            <th><input type="text" placeholder="Szukaj"></th>
            <th><input type="text" placeholder="Lista"></th>
            <th><input type="text" placeholder="Lista"></th>
            <th></th>
            <th></th>
            <th></th>
            <th></th>
            <th></th>
            <th></th>
        </tr>
    <?php foreach ($collectionData as $row): ?>
        <tr>
            <td><?=$row["ID"] ?></td>
            <td><?=$row["Name"] ?></td>
            <td><?=$row["Name"] ?></td>
            <td>Janek</td>
            <td>Kasia</td>
            <td>Bartek</td>
            <td>★★★★★</td>
            <td>50 zł</td>
            <td>Unikat</td>
        </tr>

    <?php endforeach; ?>

        <tr>
            <td>2</td>
            <td>Karim Benzema</td>
            <td>Real Madrid</td>
            <td>Ultimates</td>
            <td>Marek</td>
            <td>Kuba</td>
            <td>Ola</td>
            <td>★★★★☆</td>
            <td>35 zł</td>
            <td></td>
        </tr>
        <tr>
            <td>1</td>
            <td>Robert Lewandowski</td>
            <td>FC Barcelona</td>
            <td>Golden Baller</td>
            <td>Janek</td>
            <td>Kasia</td>
            <td>Bartek</td>
            <td>★★★★★</td>
            <td>50 zł</td>
            <td>Unikat</td>
        </tr>
        <tr>
            <td>2</td>
            <td>Karim Benzema</td>
            <td>Real Madrid</td>
            <td>Ultimates</td>
            <td>Marek</td>
            <td>Kuba</td>
            <td>Ola</td>
            <td>★★★★☆</td>
            <td>35 zł</td>
            <td></td>
        </tr>
        <tr>
            <td>1</td>
            <td>Robert Lewandowski</td>
            <td>FC Barcelona</td>
            <td>Golden Baller</td>
            <td>Janek</td>
            <td>Kasia</td>
            <td>Bartek</td>
            <td>★★★★★</td>
            <td>50 zł</td>
            <td>Unikat</td>
        </tr>
        <tr>
            <td>2</td>
            <td>Karim Benzema</td>
            <td>Real Madrid</td>
            <td>Ultimates</td>
            <td>Marek</td>
            <td>Kuba</td>
            <td>Ola</td>
            <td>★★★★☆</td>
            <td>35 zł</td>
            <td></td>
        </tr>
        <tr>
            <td>2</td>
            <td>Karim Benzema</td>
            <td>Real Madrid</td>
            <td>Ultimates</td>
            <td>Marek</td>
            <td>Kuba</td>
            <td>Ola</td>
            <td>★★★★☆</td>
            <td>35 zł</td>
            <td></td>
        </tr>



        <tbody></tbody>
    </table>

    <?php


}
?>
