Consignes :

- Dans classes/interfaces/user.interface.php , j'ai écrit une interface pour la classe
user
- La classe user implémente l'interface userInterface
- Si vous testez le code en ligne, celui ci va retourner une erreur car la classe user
n'implémente pas la méthode getRequest définie dans l'interface
- Vous allez écrire cette méthode qui va récuperer les variables envoyées par l'utilisateur
- Vous allez écrire également la méthode parseRequest qui va afficher les différentes variables

- Dans l'exercice, j'ai également inclu une constante d'interface, comme vous pouvez le voir
une constante d'interface est disponible dans la classe qui implémente l'interface.



Théorie :

En PHP orienté Objet, les interfaces permettent d'indiquer la structure d'une classe : les méthodes

Une interface ne contient pas de code dans ses méthodes, elle indique juste quelles méthodes vont être utilisées par la
ou les classes qui va/vont implémenter l'interface.

Pour indiquer qu'une classe doit implémenter une interface, on utilise le mot clef "implements"

Syntaxe :
// Fichier interface
interface machin
{
    public function setNom($nom);
}

// Fichier classe
class truc implements machin
{
    protected $nom;

    public function setNom($nom)
    {
        $this->nom = $nom;
    }
}

Le point important à retenir : Si une classe implémente une interface, elle doit définir toutes les propriétés de l'interface
sinon une erreur sera retournée.

Les interfaces sont donc trés utiles pour indiquer à un développeur comment une classe doit être écrite.

Elles sont trés utilisées dans les frameworks PHP car il est souvent nécessaire d'étendre ces frameworks avec des modules,
pour que ces modules fonctionnent correctement, ils doivent implémenter des méthodes bien précises.

Note : Il n'est pas possible de définir dans une interface des méthodes privées ou protégées.