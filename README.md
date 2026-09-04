# MVCproject — Parc d'activités (version intermédiaire)

Snapshot intermédiaire du projet **Parc d'activités** (cours PHP orienté objet, IIM, décembre 2025). Le code se trouve dans `IIM_A2CDI_PHPOO/MVC/`.

Application MVC en PHP pur : routeur, autoload, PDO, entités, modèles, contrôleurs et vues, avec authentification et réservation d'activités.

La **version finale**, avec l'espace admin et un README complet (architecture, routes, installation), est dans le repo [IIM_A2CDI_PHPOO](https://github.com/carls-xyz/IIM_A2CDI_PHPOO). La première version est dans [projetMVC](https://github.com/carls-xyz/projetMVC).

## Lancer

1. Base MySQL `parc_activite` (schéma dans le repo [MVC](https://github.com/carls-xyz/MVC), fichier `parc_activite.sql`).
2. Ajuster les identifiants dans `IIM_A2CDI_PHPOO/MVC/app/utils/Bdd.php`.
3. Servir le dossier `MVC` avec Apache et `mod_rewrite` (MAMP), puis ouvrir `index.php`.
