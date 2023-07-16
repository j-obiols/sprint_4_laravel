<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Equip;

class EquipSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $equip = new Equip;
        $equip->nom="Montserrat";
        $equip->entrenador="Miquel Riera";
        $equip->email="mriera@mail.mail";
        $equip->capita="Pep Pou";
        $equip->imatge="foto_m_freepik.jpg";
        $equip->save();

        $equip2 = new Equip;
        $equip2->nom="Jaume Balmes";
        $equip2->entrenador="Quim Pruna";
        $equip2->email="qpruna@mail.mail";
        $equip2->capita="Aaron Rivera";
        $equip2->imatge="foto_j_b_freepik.jpg";
        $equip2->save();

        $equip3 = new Equip;
        $equip3->nom="Salvador Espriu";
        $equip3->entrenador="Joan Marquez";
        $equip3->email="jmarquez@mail.mail";
        $equip3->capita="Marc Gol";
        $equip3->imatge="foto_s_e_freepik.jpg";
        $equip3->save();

        $equip4 = new Equip;
        $equip4->nom="Ernest LLuch";
        $equip4->entrenador="Carlos García";
        $equip4->email="cgarcia@mail.mail";
        $equip4->capita="Alberto Valle";
        $equip4->imatge="foto_e_ll_freepik.jpg";
        $equip4->save();

        $equip5 = new Equip;
        $equip5->nom="La Sedeta";
        $equip5->entrenador="Alvar Bailo";
        $equip5->email="abaila@mail.mail";
        $equip5->capita="Fede Beguin";
        $equip5->imatge="foto_l_s_freepik.jpg";
        $equip5->save();

        $equip6 = new Equip;
        $equip6->nom="Les Corts";
        $equip6->entrenador="Gabriel Fuster";
        $equip6->email="gfuster@mail.mail";
        $equip6->capita="Mario Ruiz";
        $equip6->imatge="foto_l_c_freepik.jpg";
        $equip6->save();

        $equip7 = new Equip;
        $equip7->nom="Nou Barris";
        $equip7->entrenador="Daniel Corominas";
        $equip7->email="dcorominas@mail.mail";
        $equip7->capita="Pere Puig";
        $equip7->imatge="foto_n_b_freepik.jpg";
        $equip7->save();

        $equip8 = new Equip;
        $equip8->nom="Milà i Fontanals";
        $equip8->entrenador="Alex Klein";
        $equip8->email="aklein@mail.mail";
        $equip8->capita="Diego Conesa";
        $equip8->imatge="foto_m_f_freepik.jpg";
        $equip8->save();


    }
}
