-- get donnes user
SELECT * FROM membre WHERE email = '%s' AND mdp = '%s';


SELECT * FROM objet ;

-- prendre la date d'emprund d'un object 
SELECT 
    date_retour 
FROM 
    emprunt 
WHERE 
    id_objet = 12
ORDER BY date_retour DESC 
LIMIT 1 ;

-- prendre la liste des categiries
SELECT 
    * 
FROM 
    categorie_objet;
    
-- prendre les object d'une categorie determiner
SELECT  
    * 
FROM 
    objet
WHERE 
    objet.id_categorie = %s;