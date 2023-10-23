# LLIGA BATXBOL 



https://github.com/j-obiols/sprint_4_laravel/assets/127688372/49cdee49-8692-46aa-ade5-b584d7361709 


## Descripció i context

Aplicació web per gestionar una **lliga de futbol** fictícia, entre equips d'alumnes de Batxillerat d'Instituts de Barcelona,
desenvolupada en el marc del curs Full Stack de la **IT Academy**.

L'aplicació permet gestionar **equips** i **partits**.  

Tant els uns com els altres tenen una **classe** associada en el Model amb els seus respectius mètodes,  
i una **taula** a una base de dades MySQL. 

S'ha programat un **CRUD** complet per a cada una d'aquestes classes.  

Queda pendent el login d'usuari.

### Equips:

Es poden **crear i editar equips**, amb algunes restriccions:
- No es permet canviar el nom d'un equip, perquè s'entén que la lliga està activa.
- Tampoc està permés eliminar un equip, pel mateix motiu. De totes maneres, l'aplicació porta aquesta acció programada i es podria activar.  

Més endavant l'aplicació pot incloure la **gestió de lligues**, permetent indicar a l'usuari si aquestes estan pendents, actives o finalitzades.  

El seeder de la base de dades porta definits 8 equips. 

### Partits:

Es poden **crear i editar partits** entre equips existents a la base de dades.  

Mentre un partit està **'Pendent'**, en editar-lo es poden deixar buits els camps corresponents als gols de cada equip.  

Quan en editar un partit s'introdueix el resultat del mateix, l'estat del mateix passa de **'Pendent'** a **'Jugat'**.  

Està permès corregir el resultat d'un partit **'Jugat'**, i el programa modificarà automàticament la puntuació dels equips participants i totes les altres variables relacionades (partits guanyats, perduts, empatats...).  

Restriccions en editar un partit que ha passat a **'Jugat'**:
- Els camps corresponents als gols no es poden deixar buits.
- No es pot eliminar el partit.

L'aplicació inclou vistes de:  

- conjunt d'equips participants
- vista de cada equip en particular
- creació d'equip
- edició d'equip
- conjunt d'equips amb **classificació**, ordenats de més a menys punts 
- llista de partits amb data, hora, camp, equips participants i estat
- llista de partits amb el seu resultat
- creació de partit
- edició de partit
- vista d'un partit amb resum del mateix

El seeder de la base de dades porta definits 20 partits.

## Tecnologies utilitzades

- Framework: LARAVEL
- Llenguatge: PHP
- Model: MVC 
- TAILWIND
- MySQL

## Accés al projecte

- Descarregar el projecte.

- A Visual Studio Code, obrir la carpeta que conté el projecte.

- A la terminal de VSC, executar les següents accions, obrint noves terminals quan calgui:
  
```composer install```

```npm install```

```cp .env.example .env``` 

- Editar l'arxiu env, definint un nom per a la base de dades al camp:

 ```DB_DATABASE = nomBaseDades ```
  
- Crear una base de dades buida al nostre localhost (carpeta mysql/data), amb el nom que haguem definit a l'arxiu .env.
     
```php artisan key:generate```

```npm run dev```

Per poblar la base de dades, o per recarregar-la quan vulguem tornar al seu estat inicial: 

```php artisan migrate:fresh --seed``` 

Per obrir el projecte al navegador:

```php artisan serve```
   
   










