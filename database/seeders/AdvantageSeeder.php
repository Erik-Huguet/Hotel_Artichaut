<?php

namespace Database\Seeders;

use App\Models\Advantage;
use Database\Factories\AdvantageFactory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AdvantageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Advantage::factory(4)->create();

        Advantage::create(['title_fr_adv'=>'Découvrez les alentours',
            'describe_fr_adv'=>'Partez en randonnée pédestre accompagné de nos guides et découvrez la forêt qui entoure notre hotel',
            'title_ang_adv'=>'Discover what\'s around',
            'describe_ang_adv'=>'Take a hike with our guides and discover forest around the hotel',
            'icon_adv' =>'icone_Rando',
            'position_icon_adv' =>1,
            'fk_Users_advantages'=>1]);

        Advantage::create(['title_fr_adv'=>'Ingrédients locaux',
            'describe_fr_adv'=>'Les légumes sont cultivés dans notre jardin et nous sommes partenaires de producteurs locaux pour vous proposer et vous préparer des plats authentiques',
            'title_ang_adv'=>'Local products',
            'describe_ang_adv'=>'Vegetables are grown in our garden, and we are in contact with local producer to offer you authentic dishes',
            'icon_adv' =>'icone_Plat',
            'position_icon_adv' =>2,
            'fk_Users_advantages'=>1]);

        Advantage::create(['title_fr_adv'=>'Détente',
            'describe_fr_adv'=>'Un jacuzzi et un hammam sont mis à disposition pour que vous puissiez profiter de votre séjour en toute sérénité',
            'title_ang_adv'=>'Relaxation',
            'describe_ang_adv'=>'A jacuzzi and a hammam are available to you so you can enjoy your stay with serenity',
            'icon_adv' =>'icone_Lotus',
            'position_icon_adv' =>3,
            'fk_Users_advantages'=>1]);


        Advantage::create(['title_fr_adv'=>'Prix avantageux',
            'describe_fr_adv'=>'Des prix abordables pour une qualité de rêve',
            'title_ang_adv'=>'Great prices',
            'describe_ang_adv'=>'Affordable price for a dream quality',
            'icon_adv' =>'icone_Price',
            'position_icon_adv' =>4,
            'fk_Users_advantages'=>1]);
    }
}
