<?php 
$bg= "bg-indigo-600";
$title="Index | Mark Zuckerberg";
require('partials/_header.php');
include ('partials/_card.php') ?>
    <main class=>
        <section class="flex justify-center m-20">
            <!-- côté gauche -->
            <div class="ml-32">
                <!-- image -->
                <div class="w-96 mr-10">
                <img src="<?= $cards[0]['img'] ?>" alt="">
                </div>
            </div>
            <!-- côté droite -->
            <div class="mr-32">
                <!-- contenu écrit -->
                <h2 class="font-bold text-3xl text-center my-10"><?= $cards[0]['name'] ?></h2>
                <div class="">
                    <?= $cards[0]['text'] ?>
                </div>
            </div>

        </section>
    </main>
    <!-- Footer -->
<?php include('partials/_footer.php') ?>