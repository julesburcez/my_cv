# S4C2 Jules_Burcez CV

Ce CV a pour but d'être modifié et donc mis à jour régulièrement par toute personne le souhaitant.


## Fonctionalités majeures :

* Tout le contenu texte est modifiable : Une fois connecté en tant qu'administrateur, vous avez accès à des boutons de modification / création / suppression.![Alt text](/readimg/admin.PNG "Modification")
* Pour la photo de l'utilisateur, ainsi que les photo de la catagorie spotlight, les liens des photos sont enregistreées en base de donnée et sont donc directement modifables via le lien.
* Le menu renvoit à des encres sur le site et le scroll se fait à travers une fonction javascript afin d'etre plus fluide.
* Les réalisations sont gérés via une gallerie mettant en avant les photos et vidéos que j'ai réalisé. ![Alt text](/readimg/gallerie.PNG "Tri")
* Il y a deux tests : un test unitaire qui teste si la classe et l'Entity Experience fonctionne, et un texte fonctionnel si la base renvoie bien le nom de l'Entity personne.
* L'annotion @ApiResource est présente sour chaque entité. ![Alt text](/readimg/api.PNG "Modification")
* Le formulaire de contact enregistre les données sur la base de donnée.
* Le projet est conforme selon Checkstyle.
* Il est possible de ce connecter selon la méthode In_memory.
* Le site est responsive.

### Prerequis

Afin de se connecter au CV le lien est le [suivant.](https://symfony-julesbur.c9users.io/my_cv/public/index.php)

## Installation

Créez un dossier my_cv puis glissez les éléments a l'intérieur.

```
cd my_cv
```
Puis les commandes sont accessibles via la commande suivante

```
 php bin/console
```
## Les tests

### Ce test vérifie si l'Entity Experience fonctionne et ajoute bien les titres grâce au fonction SetTitle

```
 php vendor/bin/codecept run unit ExampleTest
```
![Alt text](/readimg/unit.PNG "unit")
-------------------------------------------------------------------------------------------

### Ce test vérifie s'il trouve mon nom et prénom Dans la page principale du CV

```
 php vendor/bin/codecept run acceptance UserCest
```
![Alt text](/readimg/acceptance.PNG "acceptance")

## Admin

Appuyer sur le bouton se connecter
* Identifiant :  admin
* Mot de passe : admin

![Alt text](/readimg/admin.PNG "Connection")

## Auteur

* **Jules Burcez**

## Idée d'amélioration

### Premièrement des améliorations graphiques
* Un fond derriere le Header
* Ajout des connaissances de langues
* Une section compétences plus complète avec des graphiques plus développés

### Amélioration technique

* Mot de passe et login en base de donnée
* Les images directement modifables (si possible) sans passer par le projet symphony