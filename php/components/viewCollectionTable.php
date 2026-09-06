<?php

function generateCardsTableView($selectedCollectionID)
{
    ?>

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: Inter, sans-serif;
            background: #0d1117;
            color: white;
        }

        .container {
            max-width: 1400px;
            margin: auto;
            padding: 30px;
        }

        section {
            margin-bottom: 30px;
        }

        /* HERO */
        /* STATS */

        /*.stats{*/
        /*    display:grid;*/
        /*    grid-template-columns:repeat(6,1fr);*/
        /*    gap:15px;*/
        /*}*/

        /*.stat{*/
        /*    background:#161b22;*/
        /*    padding:25px;*/
        /*    border-radius:18px;*/
        /*}*/

        /*.stat span{*/
        /*    display:block;*/
        /*    opacity:.6;*/
        /*    margin-bottom:10px;*/
        /*}*/

        /*.stat strong{*/
        /*    font-size:28px;*/
        /*}*/

        /* BREAKDOWN */

        .breakdown {
            display: grid;
            grid-template-columns:repeat(4, 1fr);
            gap: 20px;
        }

        .section-card {
            background: #161b22;
            padding: 25px;
            border-radius: 18px;
        }

        /* EXPLORER */

        .explorer {
            display: grid;
            grid-template-columns:280px 1fr;
            gap: 25px;
        }

        .sidebar {
            background: #161b22;
            padding: 25px;
            border-radius: 20px;
        }

        .sidebar input {
            width: 100%;
            padding: 12px;
            margin-bottom: 20px;
            background: #21262d;
            border: none;
            color: white;
            border-radius: 12px;
        }

        .sidebar ul {
            list-style: none;
            margin-top: 10px;
        }

        .sidebar li {
            padding: 10px 0;
            opacity: .8;
        }

        .cards{
            background:#161b22;
            border-radius:20px;
            overflow:hidden;
        }

        .card_row{
            display:flex;
            justify-content:space-between;
            align-items:center;

            padding:14px 20px;

            border-bottom:1px solid #30363d;

            transition:.2s;
        }

        .card_row:last-child{
            border-bottom:none;
        }

        .card_row:hover{
            background:#21262d;
        }

        .card_row-left{
            display:flex;
            align-items:center;
            gap:18px;
        }

        .card_number{
            min-width:60px;

            font-size:13px;
            font-weight:700;

            color:#8b949e;
        }

        .card_info{
            display:flex;
            flex-direction:column;
            gap:4px;
        }

        .card_info h4{
            font-size:15px;
            font-weight:600;
        }

        .card_info span{
            font-size:12px;
            color:#8b949e;
        }

        .card_row-right{
            display:flex;
            align-items:center;
            gap:10px;
        }
        .card_icon{
            width:28px;
            height:28px;

            display:flex;
            align-items:center;
            justify-content:center;

            border-radius:8px;

            font-size:12px;
        }

        .rookie{
            background:#238636;
        }

        .auto{
            background:#1f6feb;
        }

        .oneofone{
            background:#ffd700;
            color:#111;
        }

        .parallel{
            background:#8957e5;
        }

        .insert{
            background:#f0883e;
        }
        .card_action{
            width:34px;
            height:34px;

            border:none;

            border-radius:10px;

            background:#30363d;
            color:white;

            cursor:pointer;

            transition:.2s;
        }

        .card_action:hover{
            background:#1f6feb;
        }
    </style>
    <link rel="stylesheet"
          href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">
    <div class="container">


        <?php
        //         <!-- HERO -->
        generateCollectionDescription($selectedCollectionID);
        //        <!-- MAIN STATS -->
        generateCollectionStats($selectedCollectionID);
        //         <!-- EXPLORER -->
        generateCollectionPlayerList($selectedCollectionID);


        ?>
        <br>
        Tutaj będzie pasek wyszukiwania, ten sam co jest w innych tabelach, albumie
        <br>

        <div class="card_row">

            <div class="card_row-left">

                <div class="card_number">
                    #145
                </div>

                <div class="card_info">
                    <h4>Erling Haaland</h4>
                    <span>Manchester City</span>
                </div>

            </div>

            <div class="card_row-right">

                <i class="fa-solid fa-seedling card_icon rookie"></i>

                <i class="fa-solid fa-pen-fancy card_icon auto"></i>

                <i class="fa-solid fa-crown card_icon oneofone"></i>

                <button class="card_action">
                    <i class="fa-solid fa-chevron-right"></i>
                </button>

            </div>

        </div>

        <!-- INSERT DATABASE -->

        <section class="database">

            <h2>Insert Database</h2>

            <div class="db-grid">

                <div class="db-card">
                    <h3>Future Stars</h3>
                    <p>25 Cards</p>
                    <p>4 Parallels</p>
                    <p>3 Autos</p>
                </div>

                <div class="db-card">
                    <h3>Renaissance</h3>
                    <p>20 Cards</p>
                    <p>6 Parallels</p>
                    <p>No Autos</p>
                </div>

            </div>

        </section>

        <!-- PARALLELS -->

        <section class="rainbow">

            <h2>Parallel Rainbow</h2>

            <div class="parallel-grid">

                <div>/150 Blue</div>
                <div>/99 Green</div>
                <div>/75 Purple</div>
                <div>/50 Gold</div>
                <div>/25 Orange</div>
                <div>/10 Black</div>
                <div>/5 Red</div>
                <div>1/1 Superfractor</div>

            </div>

        </section>

        <!-- TABLE -->

        <section class="table-section">

            <h2>Full Checklist</h2>

            <table>

                <thead>

                <tr>
                    <th>#</th>
                    <th>Player</th>
                    <th>Team</th>
                    <th>Set</th>
                    <th>Variants</th>
                    <th>Auto</th>
                </tr>

                </thead>

                <tbody>

                <tr>
                    <td>145</td>
                    <td>Erling Haaland</td>
                    <td>MCY</td>
                    <td>Base</td>
                    <td>8</td>
                    <td>Yes</td>
                </tr>

                </tbody>

            </table>

        </section>

        <!-- COLLECTION -->

        <section class="collection">

            <h2>Collection Progress</h2>

            <div class="progress-card">

                <div class="top">

                    <span>Collected</span>
                    <strong>215 / 300</strong>

                </div>

                <div class="bar">
                    <div class="fill"></div>
                </div>

                <small>71% Complete</small>

            </div>

        </section>

    </div>

    </body>


    <?php
}

?>


