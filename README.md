# Instabook : partage de photos avec des groupes d'ami. 

## Contexte
L'objectif de cette application est de pouvoir créer des groupes d'amis, poster des photos accessibles par le groupe. 
Pour chaque photo, on peut "tagger" les membres du groupe qui y apparaissent. Chaque photo peut-être commentée par un membre du groupe, et chaque membre du groupe peut répondre à un commentaire. 

## Démarche réalisation / Difficultés rencontrées / Solutions trouvées
J'ai commencé par créer ma base de donnée et mes fichiers de migration, en analysant bien le contenu de chaque table.
Pour créer mes fichiers de migration dans le bon ordre et ainsi éviter des erreurs lors de la migration.

Une fois cela fait et que mes tests de structure de base de données étaient réussis, je me suis interéssé aux relations Eloquent (j'ai du revoir sur la doc quelques mot clés à utiliser, mais ça s'est très bien passé) et j'ai eu un peu de mal avec les relations pour les pivots, mais après de nombreuses recherches j'ai réussi à trouver mon bonheur et à valider les tests.

Les "booted method" avec les fonctions de créations etc .. m'étaient un peu sorti de la tête, je suis donc parti sur une grosse partie de recherche sur google. Mais j'ai finalement tout réussi, donc c'est super !

Sinon pas plus de difficultés que ça, le devoir s'est bien passé.

ALLIONE Florian.