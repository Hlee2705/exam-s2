CREATE VIEW v_objet_emprunt AS
SELECT 
    * 
FROM objet o
JOIN  emprunt e ON o.id_objet = e.id_objet 
WHERE e.date_retour > NOW(); 

CREATE VIEW v_objet_no_emprunt AS
SELECT 
    * 
FROM objet o
JOIN  emprunt e ON o.id_objet = e.id_objet 
WHERE e.date_retour < NOW(); 