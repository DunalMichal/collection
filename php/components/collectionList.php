<?php

require "php/components/albumTile.php";

function generate_collectionList($categoriesData){

    ?>

    <div class="collections-wrap">




        <div class="collections-header">
            <h2>Ostatnio dodane kolekcje</h2>
            <small>Pokażę maksymalnie 8 pozycji — 4 w rzędzie &times; 2 rzędy</small>
        </div>

        <!-- Grid z kafelkami. Każdy kafel posiada data-category do filtrowania. -->
        <div class="collections-grid">

            <?php
            foreach ($categoriesData as $category) {
                generate_albumTile($category);
            }
            ?>

        </div>
    </div>











    <script>
        console.log(8);
        (function(){
            const select=document.getElementById('categorySelect');
            const grid=document.getElementById('collectionsGrid');
            const cards=Array.from(grid.querySelectorAll('.card'));


            function applyFilter(){
                const val=select.value;let visibleCount=0;
                cards.forEach(card=>{
                    const cat=card.dataset.category||'all';
                    const match=(val==='all')||(cat===val);
                    if(match&&visibleCount<8){card.style.display='';visibleCount++}else{card.style.display='none'}
                });
            }
            select.addEventListener('change',applyFilter);
            applyFilter();
        })();
    </script>

<?php
}

?>