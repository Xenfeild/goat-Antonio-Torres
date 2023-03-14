    <main class=>
        <section class="flex justify-center m-20 ">
            <!-- côté gauche -->
            <div class="ml-32">
                <!-- image -->
                <div class="w-96 mr-10 pt-10">
                <img src="<?= $img ?>" alt="<?php $name ?>">
                </div>
            </div>
            <!-- côté droite -->
            <div class="mr-32 w-2/4 ">
                <!-- contenu écrit -->
                <h2 class="font-bold text-3xl text-center my-10">Hello, I'm <?= $name ?></h2>
                <div class="">
                    <?= $texte ?>
                </div>
            </div>

        </section>
    </main>