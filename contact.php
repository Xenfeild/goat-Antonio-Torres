<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Google Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Lato:wght@100;300;400;700;900&display=swap" rel="stylesheet">
    <!-- css -->
    <link rel="stylesheet" href="css/contact.css">
    <title>Contact</title>
</head>
<body>
    <!-- header -->
    <header>
        <!-- logo -->
        <div class="logo">
          <h1><a href="index.html">Goat.</a></h1>  
        </div>
        <!-- barre de navigation -->
        <div class="nav_barr">
            <ul>
                <li><a href="index.html">Mark Zuckerberg</a></li>
                <li><a href="steve_jobs.html">Steve Jobs</a></li>
                <li><a href="elon_musk.html">Elon Musk</a></li>
                <li><a href="contact.html">Contact</a></li>
            </ul>
        </div>   
    </header>
    <main class=>
        <section>
            <h2 class="contact_h2">Nous contacter</h2>
            <!-- Formulaire -->
            <div class="formulaire">
                <!-- nom / prenom -->
                <div class="form_input1">
                    <div class="nom">
                        <label for="surname">Nom</label>
                        <input type="text" id="nom">
                    </div>
                <!-- </div>
                <div class="form_input"> -->
                    <div class="prenom">
                        <label for="name">Prenom</label>
                        <input type="text" id="name">
                    </div>
                </div>
                <!-- mail et mot de pass -->
                <div class="form_input2">
                    <div class="mail_div">
                        <label for="email">Email</label>
                        <input type="email" id="email">
                    </div>
                <!-- </div>
                <div class="form_input"> -->
                    <div class="mp_div">
                        <label for="password">Mot de passe</label>
                        <input type="password" id="password">
                    </div>
                </div>
                <!-- adresses 1 et 2 -->
                <div class="form_input3">
                    <!-- adresse 1 -->
                    <div>
                        <label for="adress">Adresse</label>
                        <input type="text" id="adress" placeholder="124 rue perdue quelque part">
                    </div>
                    <!-- adresse 12 -->
                    <div>
                        <label for="adress2">Adresse 2</label>
                        <input type="text" id="adress" placeholder="maison, appartement...">
                    </div>
                </div>
                <!-- ville stack code postal -->
                
                <div class="form_input4">
                    <!-- ville -->
                    <div class="city_div">
                        <label for="ville">Ville</label>
                        <input type="text" id="city">
                    </div>
                    <!-- stack -->
                    <div class="stack_div">
                        <label for="stack">Stack</label>
                        <select name="stack" id="stack">
                            <option value="">choix 1</option>
                            <option value="">choix 2</option>
                            <option value="">choix 3</option>
                        </select>
                    </div>
                    <!-- code postal -->
                    <div class="postal_div"> 
                        <label for="postal_code">Code postale</label>
                        <input type="text" id="postal_code">
                    </div>
                </div>
                 <!-- envoyer checkbox -->
                <div class="input_div">
                    <!-- check me -->
                    <label for="">check me out</label>
                    <input type="checkbox">
                    <!-- envoyer -->
                    <input type="submit" name="submit" id="submit">
                </div>
            </div>
        </section>
    </main>
    <!-- Footer -->
    <footer>
        <h3>Mon Joli footer</h3>
        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Harum numquam totam eveniet dolorum ipsam. Culpa ad optio quaerat ullam voluptatum dignissimos, odio perspiciatis repellendus quasi delectus quis magnam? Esse autem harum necessitatibus provident, corrupti maiores quibusdam laboriosam corporis sequi unde.</p>
    </footer>
    <script src="js/script.js"></script>
</body>
</html>