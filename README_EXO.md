# CREER UN CRUD POUR L'ENTITE VIDEO

1. Creer une entité Video qui a les propriétes suivantes : name, codeYoutube, image
-> symfony console make:entity

2. Créer la migration pour envoyer le code sur la bdd
-> symfony console make:migration
-> symfony console doctrine:migrations:migrate  ( symfony console d:m:m )

3. Creer le CRUD de l'entité
-> symfony console make:crud

4. Améliorer les vues, en montrant l'image de la vidéo ( similaire a presentation produit)
-> Quand on arrive sur une page de video en particulier , alors ça lance la video youtube
