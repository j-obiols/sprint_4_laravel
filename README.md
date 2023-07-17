# sprint_4_laravel

LLIGA BATXBOL

Aplicació web per gestionar una lliga (fictícia) de futbol, entre equips d'alumnes de Batxillerat d'Instituts de Barcelona.

L'aplicació s'ha programat utilitzant el framework LARAVEL.
El llenguatge de programació que utilitza aquest framework és PHP.
El model és MVC (Model - Vista - Controlador).
Per al disseny Front-End s'ha utilizat TAILWIND.
Per a la base de dades s'ha utilitzat MySQL.

REQUERIMENTS

1 - Descarregar el projecte.

2 - A Visual Studio Code, obrir la carpeta que conté el projecte.

3 - A la terminal, executar les següents accions, obrint noves terminals quan calgui:
  
composer install

npm install

cp .env.example .env 
     + editar l'arxiu env, definint un nom per a la base de dades
     + crear una base de dades buida al nostre localhost (carpeta mysql/data), amb el nom que haguem definit a l'arxiu .env
     
php artisan key:generate

npm run dev

php artisan serve
   (i seguir el link que apareixerà)


FUNCIONAMENT DE L'APLICACIÓ

Ara per ara, l'aplicació gestionar equips i partits.
Tant els uns com els altres tenen una classe associada en el Model.
S'ha programat un CRUD complet per a cada una d'aquestes classes.
Encara no s'ha programat el log in d'usuari.

Equips:

El seeder de la base de dades porta definits 8 equips. 
Es poden crear nous equips i editar-los, però no es permet canviar el nom d'un equip, perquè s'entén que la lliga està activa.
Tampoc està permés eliminar un equip, pel mateix motiu, però l'aplicació porta aquesta acció programada, es podria activar.
De moment l'aplicació no inclou gestió de lligues, per tant s'entén que seria el programador el que podria activar aquestes opcions mentre la lliga estigués pendent.
Més endavant l'aplicació es podria ampliar i incloure la gestió de lligues, permetent indicar a l'usuari si aquestes estan pendents, actives o finalitzades.

Partits:

El seeder porta definits més de 20 partits.
Es poden crear nous partits i editar-los, només entre equips existents a la base de dades.
Mentre un partit està 'Pendent', els camps corresponents als gols de cada equip es poden deixar buits.
Quan en editar un partit s'introdueix el resultat del mateix, l'estat del mateix passa de 'Pendent' a 'Jugat'.
Quan un partit està 'Jugat', es pot editar també, però aleshores passa a ser obligatori tornar a omplir els camps corresponents als gols: 
no es poden deixar buits.
Es pot variar el resultat del partit, i el programa corregirà automàticament la puntuació i totes les variables relacionades (partits guanyats, perduts, empatats...).
L'aplicació no permet eliminar un partit quan el seu estat és 'Jugat'.

L'aplicació inclou vistes de:

  -conjunt d'equips participants
  -cada equip en particular
  -creació d'equip
  -edició d'equip
  -comjunt d'equips amb classificació, ordenats de més a menys punts
  
  -conjunt de partits amb data, hora, camp, equips i estat
  -conjunt de partits només amb el resultat
  -creació de partits
  -edició de partits






