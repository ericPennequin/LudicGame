<?php
include "inc/header.inc.php"

 ?>
 <script type="text/javascript">
     $(document).ready(function(){
         $("#NewWordGame").click(function () {
             $("#WordGameInput").toggle("style= display");
             $("#NewWordGame").toggle("style= display:none");
                 <?php
                 $newWord=new NewGame;
                 $newWord->NewWordsGame();
                 ?>
             }

         );
        /**TODO
         * add php "new objects"
         * */
        $("#NewNumberdGame").click(function () {
                $("#NumberGameInput").toggle("style= display");
                $("#NewNumberdGame").toggle("style= display:none");
                <?php
                $newWord=new NewGame;
                $newWord->NewNumbersGame();
                ?>
            }

        );

     })




 </script>
<div class="col-md-12">
    <div class="col-md-2">
        <button id="NewWordGame">Faire le jeux du pendu</button>
        <input id="WordGameInput" type="text" style="display: none ">
    </div>
    <div class="col-md-2">
        <button id="NewNumberdGame">Faire le jeux "trouves le bon chiffre"</button>
        <input id="NumberGameInput" type="text" style="display: none ">
    </div>
</div>


<?php include "inc/footer.inc.php" ?>
