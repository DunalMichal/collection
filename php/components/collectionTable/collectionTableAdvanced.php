<?php
require_once "php/api/getCollectionData.php";

//$collectionData = getCollectionData();
function generate_collectionTableAdvanced($collectionData)
{
    ?>

    <table class="collectionTableAdvanced">
        <thead>
        <tr>
            <th>Number</th>
            <th>Name</th>
            <th>Team</th>
            <th>Type</th>
            <th>Limit</th>
            <th>Offer</th>
            <th>Need</th>
            <th>Hold</th>
            <th>Grading</th>
            <th>Colors</th>
            <th>Numbers</th>
            <th>Average $</th>
            <th>Max $</th>
            <th>Popularity</th>
            <th>Rarity</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <td>/</td>
            <th><input type="text" placeholder="Szukaj"></th>
            <th><input type="text" placeholder="Szukaj"></th>
            <th><input type="text" placeholder="Szukaj"></th>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td>1</td>
            <td>Leo Messi</td>
            <td>Barcelona</td>
            <td>Base</td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td>PSA 9</td>
            <td>-</td>
            <td>-</td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>

<!--        collectionTableAdvanced-mainRow-->
        <tr class="collectionTableAdvanced-mainRow" onclick="toggleSubRows(this)">
            <td>2</td>
            <td>Charizard Holo 1st Ed.</td>
            <td>Base Set 1999</td>
            <td>Base Holo</td>
            <td></td>
            <td>1</td>
            <td>7</td>
            <td>11</td>
            <td>PSA 10</td>
            <td>2</td>
            <td>-</td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        <tr class="collectionTableAdvanced-mainRow-subRow" style="display:none;">
            <td>2</td>
            <td>Charizard Holo 1st Ed.</td>
            <td>Base Set 1999</td>
            <td>Base Holo</td>
            <td></td>
            <td>1</td>
            <td>7</td>
            <td>11</td>
            <td>PSA 10</td>
            <td>Blue</td>
            <td>-</td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        <tr class="collectionTableAdvanced-mainRow-subRow" style="display:none;">
            <td>2</td>
            <td>Charizard Holo 1st Ed.</td>
            <td>Base Set 1999</td>
            <td>Base Holo</td>
            <td></td>
            <td>1</td>
            <td>7</td>
            <td>11</td>
            <td>PSA 10</td>
            <td>RED</td>
            <td>-</td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>

        <tr class="collectionTableAdvanced-mainRow" onclick="toggleSubRows(this)">
            <td>6</td>
            <td>Black Lotus Alpha</td>
            <td>Magic: The Gathering 1993</td>
            <td>Wizards</td>
            <td>35/100</td>
            <td>17</td>
            <td>36</td>
            <td>142</td>
            <td>PSA 7.5</td>
            <td>4</td>
            <td>2</td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        <tr class="collectionTableAdvanced-mainRow-subRow" style="display:none;">
            <td>6</td>
            <td>Black Lotus Alpha</td>
            <td>Magic: The Gathering 1993</td>
            <td>Wizards</td>
            <td>35/100</td>
            <td>17</td>
            <td>36</td>
            <td>142</td>
            <td>PSA 7.5</td>
            <td>RED</td>
            <td>2</td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        <tr class="collectionTableAdvanced-mainRow-subRow" style="display:none;">
            <td>6</td>
            <td>Black Lotus Alpha</td>
            <td>Magic: The Gathering 1993</td>
            <td>Wizards</td>
            <td>35/100</td>
            <td>17</td>
            <td>36</td>
            <td>142</td>
            <td>PSA 7.5</td>
            <td>Blue</td>
            <td>2</td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        <tr class="collectionTableAdvanced-mainRow-subRow" style="display:none;">
            <td>6</td>
            <td>Black Lotus Alpha</td>
            <td>Magic: The Gathering 1993</td>
            <td>Wizards</td>
            <td>35/100</td>
            <td>17</td>
            <td>36</td>
            <td>142</td>
            <td>PSA 7.5</td>
            <td>GREEN</td>
            <td>2</td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        <tr class="collectionTableAdvanced-mainRow-subRow" style="display:none;">
            <td>6</td>
            <td>Black Lotus Alpha</td>
            <td>Magic: The Gathering 1993</td>
            <td>Wizards</td>
            <td>35/100</td>
            <td>17</td>
            <td>36</td>
            <td>142</td>
            <td>PSA 7.5</td>
            <td>GOLD</td>
            <td>2</td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        <tr class="collectionTableAdvanced-mainRow-subRow" style="display:none;">
            <td>6</td>
            <td>Black Lotus Alpha</td>
            <td>Magic: The Gathering 1993</td>
            <td>Wizards</td>
            <td>35/100</td>
            <td>17</td>
            <td>36</td>
            <td>142</td>
            <td>PSA 7.5</td>
            <td>4</td>
            <td>150</td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        <tr class="collectionTableAdvanced-MainRow-subRow" style="display:none;">
            <td>6</td>
            <td>Black Lotus Alpha</td>
            <td>Magic: The Gathering 1993</td>
            <td>Wizards</td>
            <td>35/100</td>
            <td>17</td>
            <td>36</td>
            <td>142</td>
            <td>PSA 7.5</td>
            <td>4</td>
            <td>75</td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>

        </tbody>
    </table>

<?php

}