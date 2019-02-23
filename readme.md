CRUD:

bisogna creare il model. Il nome del model e' il singolare del nome della tabella a cui e' riferito. c e' un model per ogni tabella.

Il model e' meglio importarlo nei controller con :
`use App\nomeModel`

Per tutti i nomi meglio sempre usare il minuscolo.
Se le tabelle NON sono in inglese, nel metodo del mio controller devo aggiungere:

`protected $table = 'nomeTabellaInItaliano';`

cosi laravel capisce che la tabella ha quel nome, se no laravel ragiona pensando che il nome della tabella e' il plurale del nome del model.

Per facilitare la CRUD, si puo creare una resource, sempre con php artisan.
E' un controller con gia preimpostati tutti i metodi per la crud



NB: **Bisogna sempre ricordare la differenza fra view e rotta:**

La view e' il nome del file blade.php.
La rotta e' il percorso. I percorsi sono elencati nella colonna Name della php artisan route:list.

Note: 
1-per gestire la nav e dirgli di illuminare solo la pagina selezionata si usa l operatore ternario basandosi su un metodo che identifica il route name: 
`{{ Request::route()->getName() == 'mountains.index' ? 'active' : null }}`
Lo si sfrutta quindi per togliere o meno la classe active.
