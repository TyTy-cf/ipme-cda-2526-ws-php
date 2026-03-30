### Sujet  : WS API PHP natif

## Objectif :

Créer un mini point d’entrée API en PHP 8.2 qui se connecte à une base MySQL avec PDO, lit les données de la table brand, puis renvoie une réponse JSON accessible à l’URL brand/get_collection.php.

Le but pédagogique est de faire manipuler trois bases : connexion BDD, requête SQL simple, sérialisation JSON HTTP. Cela colle bien à une première simulation d’API sans routing, sans framework et sans couche d’architecture lourde.

## Consignes

Arborescence proposée :
- config/database.php
- brand/get_collection.php\

Enoncé\
On souhaite simuler une API très simple pour un futur projet automobile. Une base de données existe déjà et contient notamment une table brand. Vous devez créer les endpoints HTTP relatifs aux différentes entrées de la BDD.

Travail demandé :

### Exo 1.

- Configurer une connexion PDO en PHP 8.2.

- Se connecter à la base importée depuis l’export SQL fourni.

- Exécuter une requête de lecture sur brand.

- Retourner les résultats en JSON avec le bon header HTTP.


Résultat attendu
Exemple de réponse attendue :

```json
[
  {
    "id": 1,
    "name": "Renault"
  },
  {
    "id": 2,
    "name": "Peugeot"
  }
]
```

Le contenu exact dépendra des colonnes réellement présentes dans brand, mais l’idée est de renvoyer un tableau JSON d’objets.


### Exo 2.

Mettre en place une API REST complète pour l'entité `Brand` :
- Get Collection
- Get Item (par queryParam)
- Post
- Put
- Delete


### Toujours plus...

Si une erreur survient, on attend par exemple :

```json
{
  "error": "Database connection failed"
}
```

avec un code HTTP 500.



