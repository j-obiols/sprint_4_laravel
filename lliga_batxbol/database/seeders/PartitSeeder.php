<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Partit;

class PartitSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $partit = new Partit;
        $partit->dataPartit="2022-10-01";
        $partit->horaPartit="10:00";
        $partit->camp="Institut Les Corts";
        $partit->equipLocal="Les Corts";
        $partit->equipVisitant="Salvador Espriu";
        $partit->resumPartit= "Aquí anirà el resum d'aquest partit.";
        $partit->save();

        $partit2 = new Partit;
        $partit2->dataPartit="2022-09-30";
        $partit2->horaPartit="19:00";
        $partit2->camp="Institut Ernest Lluch";
        $partit2->equipLocal="Ernest LLuch";
        $partit2->equipVisitant="Milà i Fontanals";
        $partit->resumPartit= "Aquí anirà el resum d'aquest partit.";
        $partit2->save();

        $partit3 = new Partit;
        $partit3->dataPartit="2022-10-01";
        $partit3->horaPartit="09:00";
        $partit3->camp="Institut Jaume Balmes";
        $partit3->equipLocal="Jaume Balmes";
        $partit3->equipVisitant="Montserrat";
        $partit->resumPartit= "Aquí anirà el resum d'aquest partit.";
        $partit3->save();

        $partit4 = new Partit;
        $partit4->dataPartit="2022-10-01";
        $partit4->horaPartit="16:00";
        $partit4->camp="La Sedeta";
        $partit4->equipLocal="La Sedeta";
        $partit4->equipVisitant="Nou Barris";
        $partit->resumPartit= "Aquí anirà el resum d'aquest partit.";
        $partit4->save();

        $partit5 = new Partit;
        $partit5->dataPartit="2022-10-08";
        $partit5->horaPartit="10:00";
        $partit5->camp="Institut Salvador Espriu";
        $partit5->equipLocal="Salvador Espriu";
        $partit5->equipVisitant="Ernest Lluch";
        $partit->resumPartit= "Aquí anirà el resum d'aquest partit.";
        $partit5->save();

        $partit6 = new Partit;
        $partit6->dataPartit="2022-10-07";
        $partit6->horaPartit="19:00";
        $partit6->camp="Institut Milà i Fontanals";
        $partit6->equipLocal="Milà i Fontanals";
        $partit6->equipVisitant="Jaume Balmes";
        $partit->resumPartit= "Aquí anirà el resum d'aquest partit.";
        $partit6->save();

        $partit7 = new Partit;
        $partit7->dataPartit="2022-10-08";
        $partit7->horaPartit="10:00";
        $partit7->camp="Institut Montserrat";
        $partit7->equipLocal="Montserrat";
        $partit7->equipVisitant="La Sedeta";
        $partit->resumPartit= "Aquí anirà el resum d'aquest partit.";
        $partit7->save();

        $partit8 = new Partit;
        $partit8->dataPartit="2022-10-08";
        $partit8->horaPartit="09:00";
        $partit8->camp="Institut Nou Barris";
        $partit8->equipLocal="Nou Barris";
        $partit8->equipVisitant="Les Corts";
        $partit->resumPartit= "Aquí anirà el resum d'aquest partit.";
        $partit8->save();

        $partit9 = new Partit;
        $partit9->dataPartit="2022-10-15";
        $partit9->horaPartit="10:00";
        $partit9->camp="Institut Ernest Lluch";
        $partit9->equipLocal="Ernest Lluch";
        $partit9->equipVisitant="Nou Barris";
        $partit->resumPartit= "Aquí anirà el resum d'aquest partit.";
        $partit9->save();

        $partit10 = new Partit;
        $partit10->dataPartit="2022-10-14";
        $partit10->horaPartit="20:00";
        $partit10->camp="Institut Jaume Balmes";
        $partit10->equipLocal="Jaume Balmes";
        $partit10->equipVisitant="Salvador Espriu";
        $partit->resumPartit= "Aquí anirà el resum d'aquest partit.";
        $partit10->save();

        $partit11 = new Partit;
        $partit11->dataPartit="2022-10-15";
        $partit11->horaPartit="16:00";
        $partit11->camp="Institut La Sedeta";
        $partit11->equipLocal="La Sedeta";
        $partit11->equipVisitant="Milà i Fontanals";
        $partit->resumPartit= "Aquí anirà el resum d'aquest partit.";
        $partit11->save();

        $partit12 = new Partit;
        $partit12->dataPartit="2022-10-15";
        $partit12->horaPartit="11:00";
        $partit12->camp="Institut Les Corts";
        $partit12->equipLocal="Les Corts";
        $partit12->equipVisitant="Montserrat";
        $partit->resumPartit= "Aquí anirà el resum d'aquest partit.";
        $partit12->save();

        $partit13 = new Partit;
        $partit13->dataPartit="2022-10-22";
        $partit13->horaPartit="10:00";
        $partit13->camp="Institut Montserrat";
        $partit13->equipLocal="Montserrat";
        $partit13->equipVisitant="Ernest Lluch";
        $partit->resumPartit= "Aquí anirà el resum d'aquest partit.";
        $partit13->save();

        $partit14 = new Partit;
        $partit14->dataPartit="2022-10-21";
        $partit14->horaPartit="18:00";
        $partit14->camp="Institut Nou Barris";
        $partit14->equipLocal="Nou Barris";
        $partit14->equipVisitant="Jaume Balmes";
        $partit->resumPartit= "Aquí anirà el resum d'aquest partit.";
        $partit14->save();

        $partit15 = new Partit;
        $partit15->dataPartit="2022-10-21";
        $partit15->horaPartit="18:00";
        $partit15->camp="Institut Salvador Espriu";
        $partit15->equipLocal="Salvador Espriu";
        $partit15->equipVisitant="La Sedeta";
        $partit->resumPartit= "Aquí anirà el resum d'aquest partit.";
        $partit15->save();

        $partit16 = new Partit;
        $partit16->dataPartit="2022-10-22";
        $partit16->horaPartit="09:00";
        $partit16->camp="Institut Milà i Fontanals";
        $partit16->equipLocal="Milà i Fontanals";
        $partit16->equipVisitant="Les Corts";
        $partit->resumPartit= "Aquí anirà el resum d'aquest partit.";
        $partit16->save();

        $partit17 = new Partit;
        $partit17->dataPartit="2022-10-29";
        $partit17->horaPartit="10:00";
        $partit17->camp="Institut Ernest Lluch";
        $partit17->equipLocal="Ernest Lluch";
        $partit17->equipVisitant="La Sedeta";
        $partit->resumPartit= "Aquí anirà el resum d'aquest partit.";
        $partit17->save();

        $partit18 = new Partit;
        $partit18->dataPartit="2022-10-29";
        $partit18->horaPartit="10:00";
        $partit18->camp="Institut Jaume Balmes";
        $partit18->equipLocal="Jaume Balmes";
        $partit18->equipVisitant="Les Corts";
        $partit->resumPartit= "Aquí anirà el resum d'aquest partit.";
        $partit18->save();

        $partit19 = new Partit;
        $partit19->dataPartit="2022-10-28";
        $partit19->horaPartit="19:00";
        $partit19->camp="Institut Nou Barris";
        $partit19->equipLocal="Nou Barris";
        $partit19->equipVisitant="Montserrat";
        $partit->resumPartit= "Aquí anirà el resum d'aquest partit.";
        $partit19->save();

        $partit20 = new Partit;
        $partit20->dataPartit="2022-10-29";
        $partit20->horaPartit="18:00";
        $partit20->camp="Institut Salvador Espriu";
        $partit20->equipLocal="Salvador Espriu";
        $partit20->equipVisitant="Milà i Fontanals";
        $partit->resumPartit= "Aquí anirà el resum d'aquest partit.";
        $partit20->save();

        

        

        
    }
}
