# Ce qu'il y a avait à faire :

Finir les contrôleurs TaskController, BoardController, et faire TaskUSer.

Il faudrait pouvoir faire en sorte que seul le propriétaire d'un board puisse ajouter/supprimer des utilisateurs participant au board : https://laravel.com/docs/8.x/authorization (vous serez surtout attentif aux policies)

On fera aussi en sorte de finir nos todo : à savoir quand on ajoute une tache à un board, il faut vérifier que le board auquel appartient la tâche appartient aussi à l'utilisateur qui fait cet ajout : fonction store et storeFromBoard.


## TaskController

On considère qu'une tâche est toujours associée à un board. Ainsi, il serait d'obtenir le board depuis la route (l'url). 

On définie la route suivante : `Route::resource("/boards/{board}/tasks", TaskController::class)->middleware('auth');` sans oublié le middleware `auth`.

Nous devrons rajouter un paramètre `Board $board` pour chacune des fonctions du contrôleur. Les routes et fonctions `createFromBoard` et `storeFromBoard` ne seront plus nécessaires. 

On a fait la vue `tasks.index` qui permet l'affichage de toutes les tâches d'une board. 

