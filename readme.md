**CRUD:**

bisogna creare il model. Esso fa da ponte tra DB e la nostra applicazione.
Il nome del model e' il singolare del nome della tabella a cui e' riferito. c e' un model per ogni tabella.

Il model e' meglio importarlo nei controller con :
`use App\nomeModel`

Per tutti i nomi meglio sempre usare il minuscolo.
Se le tabelle NON sono in inglese, nel metodo del mio controller devo aggiungere:

`protected $table = 'nomeTabellaInItaliano';`

cosi laravel capisce che la tabella ha quel nome, se no laravel ragiona pensando che il nome della tabella e' il plurale del nome del model.

Per facilitare la CRUD, si puo creare una resource, sempre con php artisan.
E' un controller con gia preimpostati tutti i metodi per la crud

**SEEDER, MIGRATION, VALIDATION**

Utilizzo le migration per creare tabelle dal db:

`php artisan make:model User -m -r`
cosi credo migration, model e controller resource.

I seeder mi permettono di popolare il db, manualmente o automaticamente con un faker generator.
Per creare il seeder:

`php artisan make:seeder UsersTableSeeder`

ogni volta che voglio attivarlo, sempre da terminale:
`php artisan db:seed`

-----


Se voglio dividere le chiamate al db in pagine, invece che `Model::get()` uso `Model::paginate(numero elementi per pagina)` e il navigatore lo metto dove voglio nel mio blade: `{{ $users->links() }}`.

Se voglio modificarlo, mi copio [con il comando `php artisan vendor:publish --tag=laravel-pagination`] le pagine di stile (blade) in una cartella e poi posso cambiarci le classi (per esempio sostituire le classi di default bootstrap con quelle di bulma)

-----

Il metodo validate() applicato alla potente classe Request, mi permette di effettuare dei controlli sui campi di input. ricordarsi di aggiungere nel blase la parte che mostra a schermo l errore:
 ```language
 @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
 ```
Se il mio input non passa i test, il programma si ferma li, no va nemmeno a creare il new User. Quindi non vengono nemmeno mostrati gli errori del database, il che va a vantaggio di una migliore esperienza utente.
-------------------------------------------------


 #   **Note**:

NB-> **Bisogna sempre ricordare la differenza fra view e rotta:**

La view e' il nome del file blade.php.
La rotta e' il percorso. I percorsi sono elencati nella colonna Name della php artisan route:list.


1 - per gestire la nav e dirgli di illuminare solo la pagina selezionata si usa l operatore ternario basandosi su un metodo che identifica il route name: 
`{{ Request::route()->getName() == 'mountains.index' ? 'active' : null }}`
Lo si sfrutta quindi per togliere o meno la classe active.

2 - per passare l id devo farlo aggiungendo l id nella route:

`href="{{ route('mountains.show', $montagna->ID) }}`

3 - dependence injection in alternativa al find $id:

`public function show(Mountain $mountain) {return view('show', compact('mountain'))}`

4 - in laravel il metodo dei form e' sempre *post*!!
ma va aggiunto il metodo che utilizziamo nel blade: in caso di edit aggiungere PUT con `@method('PUT')`

5 - **NB** l' id nel database va sempre in minuscolo!!!!! come tutti gli altri campi!!

