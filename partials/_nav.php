


<?php

    $navItems =[
        [
            "name" => "Mark Zuckerberg",
            "url" => "index.php"
        ],
        [
            "name" => "Elon Musk",
            "url" => "elon_musk.php"
        ],
        [
            "name" => "Steve Jobs",
            "url" => "steve_jobs.php"
        ],
        [
            "name" => "Jack Ma",
            "url" => "jackma.php"
        ],
    ]

?>


<!-- barre de navigation -->

        <div class="flex space-x-10 m-10 pr-9">
            <?php
                foreach($navItems as $navItem) {?>
                <a href="<?= $navItem["url"] ?>"><?= $navItem["name"]?></a>
 
             <?php   } ?>              
            
        </div>  