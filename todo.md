VERSION 1 :
    - creation des tables 
    - insertion des donnes
    - creation des pages 
        - login
        - inscription
        - liste object
        - filtre par categorie

CReATION DES PAGE :
    - login 
        - [ok] html 
        - [ok] traitement login
        - [ok] redirection aceuil si ok 

    - inscription
        -  creation de form
            - [ok] nom
            - [ok] date 
            - [ok] gender
            - [ok] mail
            - [ok] ville
            - [ok] mdp
            - [ok] image
        - insertion des donnes dans la bd
        - redirection ver okok

    - liste object :
        - [ok] creation de la page
        - [ok] creaiotn de la requete
        - [ok] creation de la fonction
        - [ok] utilisation de la fonciton dans la page 

    - objet filter :
        - cree form pour filitrer 
        - si il recois une categorie distincet on affiche ceux dans la categorie
        - fonction get all categorie
        - foinction get objectCategorie

    
VERSION 2
    - Mettre dans session l'idmembre

    - traitement upload image

    - creation des fonctions
     - inserer objet
     - inserer image_objet

    - traitement inserer objet
        - utilisation des fonctions pour inserer l'objet et l'image dans la base
    
VERSION 3 :

- ajout du boutton emprunter sur chaque objet qui sont disponible
- le lien va conduire vers la page dateDisponible
- création de la formulaire qui saisi le nombre de jour
