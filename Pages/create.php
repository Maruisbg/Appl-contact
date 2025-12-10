<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire pour contact_appl</title>
    <link rel="stylesheet" href="./../assets/formul_cont_appl.css">
        <link rel="stylesheet" href="./css/contact.css">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
</head>
<body>
    
    <div class="haut">
        <section class="image1">
        <button class="button1"><img src="./../img/img1.jpg" alt="" width="30px"></button><h2>Nouveau Contact</h2>
        </section>
        <button class="button2">← Retour à la liste</button>
    </div>

    <div class="corps">
        <!-- <form action=""> -->
            <div class="corps1">
            <label for="">Nom*</label>
            <input type="text" placeholder="Entrez le nom" class="nova">
            </div>

            <div class="corps1">
            <label for="">Prénom*</label>
            <input type="text"placeholder="Entrez le prénom" class="nova">
            </div>

            <div class="corps1">
            <label for="">Email</label>
            <input type="text"placeholder="exemple@email.com" class="nova">
            </div>

            <section class="corps2">
                <section class="telep"><label for=""><img src="./../img/image7.jpg" alt="" width="30px" class="noir"></label><h2>Téléphones</h2></section>
                  <div id="numero_contneur">
                    <div class="sous_corps2">
                     <input type="text" placeholder="Numéro de téléphone" class="input1">
                     <select name="" id="" class="button3">
                    <option value="">Mobile</option>
                     <option value="">Domicile</option>
                     <option value="">Travail</option>
                    </select>
                    </div>
                  </div>
                <button class="button4" id="ajout_numero">Ajouter un téléphone</button>
            </section>

            <section class="corps3">
                    <section class="telep"><img src="./../img/image8.jpg" alt="" width="30px"><h2>Adresses</h2></section>
                    <div class="sous_corps3">
                        <div id="adresse_conteneur">
                            <div class="lome">
                             <section class="rue"><input type="text" placeholder="Rue" class="corps4"></section>
                             <section class="rue2"><input type="text" placeholder="Ville" class="input1"><input type="text" placeholder="Code postal" class="input2"><select name="" id="" class="button3"><option value="">Domicile</option><option value="">Tavail</option></select></section>
                            </div>
                        </div>
                          <section class="rue1"><button class="bouton" id="ajout_adresse">+ Ajouter une adresse</button></section>
                    </div>
            </section>
            <section class="cotre"><button class="button7">Créer le contact</button><button class="button8">Annuler</button></section>
        </form>


    </div>
    <script>
        let numero_contneur = document.querySelector('#numero_contneur');
        let ajout_numero = document.querySelector('#ajout_numero');

        ajout_numero.addEventListener('click', function(){
            let new_div = document.createElement('div');

            new_div.innerHTML = `
            <div class="sous_corps2">
                     <input type="text" placeholder="Numéro de téléphone" class="input1"><select name="" id="" class="button3"><option value="">Mobile</option><option value="">Domicile</option><option value="">Travail</option></select>
                    </div>
            `
            numero_contneur.appendChild(new_div);
        });

        let adresse_conteneur = document.querySelector('#adresse_conteneur');
        let ajout_adresse = document.querySelector('#ajout_adresse');

        ajout_adresse.addEventListener('click', function(){
            let new_div = document.createElement('div');

            new_div.innerHTML = `
            <div class="lome">
                <section class="rue"><input type="text" placeholder="Rue" class="corps4"></section>
                 <section class="rue2"><input type="text" placeholder="Ville" class="input1"><input type="text" placeholder="Code postal" class="input2"><select name="" id="" class="button3"><option value="">Domicile</option><option value="">Tavail</option></select></section>
            </div>
            `
            adresse_conteneur.appendChild(new_div);
        });

    </script>
    
</body>
</html>