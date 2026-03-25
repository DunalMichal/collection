<?php

function generate_collectionInfoTableAdvanced($collection)
{

    ?>
    <table class="collectionTableAdvanced">
        <thead>
        <tr>
            <th>Rodzaj Karty</th>
            <th>Ilość</th>
            <th>Parallel</th>
            <th>Limit</th>
            <th>In Packet</th>
        </tr>
        </thead>
        <tbody>
        <tr class="collectionTableAdvanced-mainRow" onclick="toggleSubRows(this)">
            <td>Karty Bazowe</td>
            <th>316</th>
            <th>Tak</th>
            <th></th>
            <td>6/1</td>
        </tr>
        <tr class="collectionTableAdvanced-mainRow-subRow" style="display:none;">
            <td>Blue Parallel</td>
            <td>316</td>
            <td></td>
            <td></td>
            <td>1/3</td>
        </tr>
        <tr class="collectionTableAdvanced-mainRow" onclick="toggleSubRows(this)">
            <td>Rainbow Foil</td>
            <td>63</td>
            <td>Tak</td>
            <td></td>
            <td>2/1</td>
        </tr>
        <tr class="collectionTableAdvanced-mainRow-subRow" style="display:none;">
            <td>Hero</td>
            <td>22</td>
            <td>Tak</td>
            <td></td>
            <td>2/1</td>
        </tr>
        <tr class="collectionTableAdvanced-mainRow-subRow" style="display:none;">
            <td>Hero</td>
            <td>22</td>
            <td>Green Emerald</td>
            <td></td>
            <td>1/4</td>
        </tr>
        <tr class="collectionTableAdvanced-mainRow-subRow" style="display:none;">
            <td>Captain</td>
            <td>19</td>
            <td>Tak</td>
            <td></td>
            <td>2/1</td>
        </tr>
        <tr class="collectionTableAdvanced-mainRow-subRow" style="display:none;">
            <td>Captain</td>
            <td>19</td>
            <td>Green Emerald</td>
            <td></td>
            <td>1/4</td>
        </tr>
        <tr class="collectionTableAdvanced-mainRow-subRow" style="display:none;">
            <td>Golden Goalscorer</td>
            <td>11</td>
            <td>Tak</td>
            <td></td>
            <td>2/1</td>
        </tr>
        <tr class="collectionTableAdvanced-mainRow-subRow" style="display:none;">
            <td>Golden Goalscorer</td>
            <td>11</td>
            <td>Green Emerald</td>
            <td></td>
            <td>1/4</td>
        </tr>
        <tr class="collectionTableAdvanced-mainRow-subRow" style="display:none;">
            <td>Centurion</td>
            <td>11</td>
            <td>Tak</td>
            <td></td>
            <td>2/1</td>
        </tr>
        <tr class="collectionTableAdvanced-mainRow-subRow" style="display:none;">
            <td>Centurion</td>
            <td>11</td>
            <td>Green Emerald</td>
            <td></td>
            <td>1/4</td>
        </tr>
        <tr class="collectionTableAdvanced-mainRow" onclick="toggleSubRows(this)">
            <td>Holographic Foil</td>
            <td>32</td>
            <td>Tak</td>
            <td></td>
            <td>1/2</td>
        </tr>
        <tr class="collectionTableAdvanced-mainRow-subRow" style="display:none;">
            <td>Graduated Gem</td>
            <td>21</td>
            <td>Tak</td>
            <td></td>
            <td>1/5</td>
        </tr>
        <tr class="collectionTableAdvanced-mainRow-subRow" style="display:none;">
            <td>Graduated Gem</td>
            <td>21</td>
            <td>Purple Sapphire</td>
            <td></td>
            <td>1/5</td>
        </tr>
        <tr class="collectionTableAdvanced-mainRow-subRow" style="display:none;">
            <td>Ultimate</td>
            <td>11</td>
            <td>Tak</td>
            <td></td>
            <td>1/2</td>
        </tr>
        <tr class="collectionTableAdvanced-mainRow-subRow" style="display:none;">
            <td>Ultimate</td>
            <td>11</td>
            <td>Purple Sapphire</td>
            <td></td>
            <td>1/5</td>
        </tr>
        <tr>
            <td>Legend Signature Style</td>
            <td>18</td>
            <td></td>
            <td></td>
            <td>1/7</td>
        </tr>
        <tr>
            <td>Black Edge Cards</td>
            <td>9</td>
            <td></td>
            <td></td>
            <td>1/16</td>
        </tr>
        <tr class="collectionTableAdvanced-mainRow" onclick="toggleSubRows(this)">
            <td>Chrome Shield</td>
            <td>9</td>
            <td></td>
            <td>Tak</td>
            <td>1/24</td>
        </tr>
        <tr class="collectionTableAdvanced-mainRow-subRow" style="display:none;">
            <td></td>
            <td></td>
            <td>Refractor</td>
            <td>.../99</td>
            <td></td>
        </tr>
        <tr class="collectionTableAdvanced-mainRow-subRow" style="display:none;">
            <td></td>
            <td></td>
            <td>Gold Refractor</td>
            <td>.../50</td>
            <td></td>
        </tr>
        <tr class="collectionTableAdvanced-mainRow-subRow" style="display:none;">
            <td></td>
            <td></td>
            <td>Orange Refractor</td>
            <td>.../25</td>
            <td></td>
        </tr>
        <tr class="collectionTableAdvanced-mainRow-subRow" style="display:none;">
            <td></td>
            <td></td>
            <td>Red Refractor</td>
            <td>.../5</td>
            <td></td>
        </tr>
        <tr class="collectionTableAdvanced-mainRow-subRow" style="display:none;">
            <td></td>
            <td></td>
            <td>SuperFractor</td>
            <td>.../1</td>
            <td></td>
        </tr>
        <tr class="collectionTableAdvanced-mainRow" onclick="toggleSubRows(this)">
            <td>Energy Cards</td>
            <td>9</td>
            <td>Tak</td>
            <td></td>
            <td>1/36</td>
        </tr>
        <tr class="collectionTableAdvanced-mainRow-subRow" style="display:none;">
            <td></td>
            <td></td>
            <td>Aqua</td>
            <td>.../50</td>
            <td></td>
        </tr>
        <tr class="collectionTableAdvanced-mainRow-subRow" style="display:none;">
            <td></td>
            <td></td>
            <td>Orange</td>
            <td>.../25</td>
            <td></td>
        </tr>
        <tr class="collectionTableAdvanced-mainRow-subRow" style="display:none;">
            <td></td>
            <td></td>
            <td>Black</td>
            <td>.../5</td>
            <td></td>
        </tr>
        <tr class="collectionTableAdvanced-mainRow-subRow" style="display:none;">
            <td></td>
            <td></td>
            <td>Gold</td>
            <td>.../1</td>
            <td></td>
        </tr>
        <tr class="collectionTableAdvanced-mainRow" onclick="toggleSubRows(this)">
            <td>Limited Edition</td>
            <td>21</td>
            <td></td>
            <td></td>
            <td>*</td>
        </tr>
        <tr class="collectionTableAdvanced-mainRow-subRow" style="display:none;">
            <td>1</td>
            <td>Power Limited Edition</td>
            <td></td>
            <td></td>
            <td>Starter Pack</td>
        </tr>
        <tr class="collectionTableAdvanced-mainRow-subRow" style="display:none;">
            <td>1</td>
            <td>Cristiano Ronaldo</td>
            <td></td>
            <td></td>
            <td>Starter Pack</td>
        </tr>
        <tr class="collectionTableAdvanced-mainRow-subRow" style="display:none;">
            <td>1</td>
            <td>Jude Bellingham</td>
            <td></td>
            <td></td>
            <td>Starter Pack</td>
        </tr>
        <tr class="collectionTableAdvanced-mainRow-subRow" style="display:none;">
            <td>17</td>
            <td>Euro Master</td>
            <td></td>
            <td></td>
            <td>Eco Packs, Mega Multipacks</td>
        </tr>
        <tr class="collectionTableAdvanced-mainRow-subRow" style="display:none;">
            <td>1</td>
            <td>Henry Delaunay Trophy</td>
            <td></td>
            <td></td>
            <td>Tournament Celebration Box</td>
        </tr>
        <tr class="collectionTableAdvanced-mainRow" onclick="toggleSubRows(this)">
            <td>Ultimate Stage</td>
            <td>9</td>
            <td></td>
            <td></td>
            <td>3/Booster Tin</td>
        </tr>
        <tr class="collectionTableAdvanced-mainRow-subRow" style="display:none;">
            <td>1</td>
            <td>Jeremy Doku</td>
            <td></td>
            <td></td>
            <td>Raw Talent</td>
        </tr>
        <tr class="collectionTableAdvanced-mainRow-subRow" style="display:none;">
            <td>1</td>
            <td>Randal Kolo Muani</td>
            <td></td>
            <td></td>
            <td>Raw Talent</td>
        </tr>
        <tr class="collectionTableAdvanced-mainRow-subRow" style="display:none;">
            <td>1</td>
            <td>Milos Kerkez</td>
            <td></td>
            <td></td>
            <td>Raw Talent</td>
        </tr>
        <tr class="collectionTableAdvanced-mainRow-subRow" style="display:none;">
            <td>1</td>
            <td>Josko Gvardiol</td>
            <td></td>
            <td></td>
            <td>Shining Star</td>
        </tr>
        <tr class="collectionTableAdvanced-mainRow-subRow" style="display:none;">
            <td>1</td>
            <td>Rafael Leao</td>
            <td></td>
            <td></td>
            <td>Shining Star</td>
        </tr>
        <tr class="collectionTableAdvanced-mainRow-subRow" style="display:none;">
            <td>1</td>
            <td>Pedri</td>
            <td></td>
            <td></td>
            <td>Shining Star</td>
        </tr>
        <tr class="collectionTableAdvanced-mainRow-subRow" style="display:none;">
            <td>1</td>
            <td>Romelu Lukaku</td>
            <td></td>
            <td></td>
            <td>Super Striker</td>
        </tr>
        <tr class="collectionTableAdvanced-mainRow-subRow" style="display:none;">
            <td>1</td>
            <td>Dusan Vlahovic</td>
            <td></td>
            <td></td>
            <td>Super Striker</td>
        </tr>
        <tr class="collectionTableAdvanced-mainRow-subRow" style="display:none;">
            <td>1</td>
            <td>Alvaro Morata</td>
            <td></td>
            <td></td>
            <td>Super Striker</td>
        </tr>
        <tr class="collectionTableAdvanced-mainRow" onclick="toggleSubRows(this)">
            <td>Classic Celebration</td>
            <td>9</td>
            <td></td>
            <td></td>
            <td>4/Mega Tin</td>
        </tr>
        <tr class="collectionTableAdvanced-mainRow-subRow" style="display:none;">
            <td>1</td>
            <td>Rasmus Hojlund</td>
            <td></td>
            <td></td>
            <td>Hot Shots</td>
        </tr>
        <tr class="collectionTableAdvanced-mainRow-subRow" style="display:none;">
            <td>1</td>
            <td>Rasmus Hojlund</td>
            <td></td>
            <td></td>
            <td>Hot Shots</td>
        </tr>
        <tr class="collectionTableAdvanced-mainRow-subRow" style="display:none;">
            <td>1</td>
            <td>Rasmus Hojlund</td>
            <td></td>
            <td></td>
            <td>Hot Shots</td>
        </tr>
        <tr class="collectionTableAdvanced-mainRow-subRow" style="display:none;">
            <td>1</td>
            <td>Rasmus Hojlund</td>
            <td></td>
            <td></td>
            <td>Hot Shots</td>
        </tr>
        <tr class="collectionTableAdvanced-mainRow-subRow" style="display:none;">
            <td>1</td>
            <td>Rasmus Hojlund</td>
            <td></td>
            <td></td>
            <td>Next Gen</td>
        </tr>
        <tr class="collectionTableAdvanced-mainRow-subRow" style="display:none;">
            <td>1</td>
            <td>Rasmus Hojlund</td>
            <td></td>
            <td></td>
            <td>Next Gen</td>
        </tr>
        <tr class="collectionTableAdvanced-mainRow-subRow" style="display:none;">
            <td>1</td>
            <td>Rasmus Hojlund</td>
            <td></td>
            <td></td>
            <td>Next Gen</td>
        </tr>
        <tr class="collectionTableAdvanced-mainRow-subRow" style="display:none;">
            <td>1</td>
            <td>Rasmus Hojlund</td>
            <td></td>
            <td></td>
            <td>Next Gen</td>
        </tr>
        <tr class="collectionTableAdvanced-mainRow-subRow" style="display:none;">
            <td>1</td>
            <td>Rasmus Hojlund</td>
            <td></td>
            <td></td>
            <td>International Icon</td>
        </tr>
        <tr class="collectionTableAdvanced-mainRow-subRow" style="display:none;">
            <td>1</td>
            <td>Rasmus Hojlund</td>
            <td></td>
            <td></td>
            <td>International Icon</td>
        </tr>
        <tr class="collectionTableAdvanced-mainRow-subRow" style="display:none;">
            <td>1</td>
            <td>Rasmus Hojlund</td>
            <td></td>
            <td></td>
            <td>International Icon</td>
        </tr>
        <tr class="collectionTableAdvanced-mainRow-subRow" style="display:none;">
            <td>1</td>
            <td>Rasmus Hojlund</td>
            <td></td>
            <td></td>
            <td>International Icon</td>
        </tr>
        <tr class="collectionTableAdvanced-mainRow" onclick="toggleSubRows(this)">
            <td>Genuine Autograph</td>
            <td>33</td>
            <td>Tak</td>
            <td></td>
            <td></td>
        </tr>
        <tr class="collectionTableAdvanced-mainRow-subRow" style="display:none;">
            <td></td>
            <td></td>
            <td></td>
            <td>Numbered</td>
            <td></td>
        </tr>
        <tr class="collectionTableAdvanced-mainRow" onclick="toggleSubRows(this)">
            <td>Genuine Autograph Combo</td>
            <td>9</td>
            <td>Tak</td>
            <td></td>
            <td></td>
        </tr>
        <tr class="collectionTableAdvanced-mainRow-subRow" style="display:none;">
            <td></td>
            <td></td>
            <td>Mirror</td>
            <td>.../25</td>
            <td></td>
        </tr>
        <tr class="collectionTableAdvanced-mainRow-subRow" style="display:none;">
            <td></td>
            <td></td>
            <td>Rainbow</td>
            <td>.../10</td>
            <td></td>
        </tr>
        <tr class="collectionTableAdvanced-mainRow-subRow" style="display:none;">
            <td></td>
            <td></td>
            <td>Gold Rainbow</td>
            <td>.../1</td>
            <td></td>
        </tr>
        <tr class="collectionTableAdvanced-mainRow" onclick="toggleSubRows(this)">
            <td>Centurion Relic</td>
            <td>9</td>
            <td>Tak</td>
            <td></td>
            <td>1/28 Booster/Mega Tin</td>
        </tr>
        <tr class="collectionTableAdvanced-mainRow-subRow" style="display:none;">
            <td></td>
            <td></td>
            <td>Cyan</td>
            <td>1 of 1</td>
            <td></td>
        </tr>
        <tr class="collectionTableAdvanced-mainRow-subRow" style="display:none;">
            <td></td>
            <td></td>
            <td>Magenta</td>
            <td>1 of 1</td>
            <td></td>
        </tr>
        <tr class="collectionTableAdvanced-mainRow-subRow" style="display:none;">
            <td></td>
            <td></td>
            <td>Yellow</td>
            <td>1 of 1</td>
            <td></td>
        </tr>
        <tr class="collectionTableAdvanced-mainRow-subRow" style="display:none;">
            <td></td>
            <td></td>
            <td>Black</td>
            <td>1 of 1</td>
            <td></td>
        </tr>
        <tr class="collectionTableAdvanced-mainRow" onclick="toggleSubRows(this)">
            <td>Leader Relic</td>
            <td>9</td>
            <td></td>
            <td></td>
            <td>1/28 Mega Tin</td>
        </tr>
        <tr class="collectionTableAdvanced-mainRow" onclick="toggleSubRows(this)">
            <td>The Career Celebration Chrome</td>
            <td>1</td>
            <td></td>
            <td></td>
            <td>1/500</td>
        </tr>
        <tr class="collectionTableAdvanced-mainRow" onclick="toggleSubRows(this)">
            <td>Golden Treasure</td>
            <td>8</td>
            <td></td>
            <td></td>
            <td>1pack/10 box</td>
        </tr>
        <tr class="collectionTableAdvanced-mainRow" onclick="toggleSubRows(this)">
            <td>Blue Ice</td>
            <td>4</td>
            <td></td>
            <td></td>
            <td>Only on Topps.com</td>
        </tr>
        <tr class="collectionTableAdvanced-mainRow" onclick="toggleSubRows(this)">
            <td>Gold Rush</td>
            <td>10</td>
            <td></td>
            <td>.../100</td>
            <td>Only on Topps.com</td>
        </tr>
        <tr class="collectionTableAdvanced-mainRow" onclick="toggleSubRows(this)">
            <td>Premium Pro</td>
            <td>10</td>
            <td></td>
            <td>.../100</td>
            <td>Premium Pro Packs</td>
        </tr>
        <tr class="collectionTableAdvanced-mainRow" onclick="toggleSubRows(this)">
            <td>Golden Glory</td>
            <td>10</td>
            <td></td>
            <td>.../100</td>
            <td>Golden Glory Packs</td>
        </tr>
        <tr class="collectionTableAdvanced-mainRow" onclick="toggleSubRows(this)">
            <td>Chalenger</td>
            <td>XX</td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        <tr class="collectionTableAdvanced-mainRow" onclick="toggleSubRows(this)">
            <td>One To Watch</td>
            <td>XX</td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        </tbody>
    </table>

    <?php
}
