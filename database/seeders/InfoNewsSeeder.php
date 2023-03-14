<?php

namespace Database\Seeders;

use App\Models\InfoNews;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class InfoNewsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //News::factory(10)->create();

        InfoNews::create(['title_fr_new'=>'Succès de la saison 2022. "L\'Avare" de Benoît Lambert repris à la Comédie de Saint-Etienne avant de partir en tournée',
            'describe_fr_new'=>'Nommé à la direction de l\'institution stéphanoise en mars 2021, le metteur en scène et auteur Benoît Lambert signait sa première création la saison dernière avec un classique du répertoire : "L\'Avare"',
            'title_ang_new'=>'Success in 2022 season. "L\'Avare" de Benoît Lambert taken back at the Comédie of Saint-Etienne before going on tour.',
            'describe_ang_new'=>'Appointed to the head of the Saint-Etienne institution in march 2021, the director and author Benoît Lambert sign this first creation last season, with a classic repertoire : "L\'Avare"',
            'icon_new' =>'icone_theater',
            'position_icon_new' =>1,
            'fk_Users_News'=>1]);

        InfoNews::create(['title_fr_new'=>'Le Danemark succède à la France et remporte le Bocuse d\'Or 2023',
            'describe_fr_new'=>'Dans une ambiance digne d\'une grande compétition sportive, le Danemark a succédé à la France en remportant, lundi 23 janvier, la finale internationale du prestigieux concours culinaire du Bocuse d\'Or',
            'title_ang_new'=>'The Danemark succeeds to France and win the Bocuse d\'Or 2023',
            'describe_ang_new'=>'In a atmosphere worthy of a sporting competition, the Danemark succeeded to France and win, monday 23th january the international final of the prestigious competition of Bocuse d\'Or',
            'icon_new' =>'icone_gastronomie',
            'position_icon_new' =>2,
            'fk_Users_News'=>1]);


        InfoNews::create(['title_fr_new'=>'BALISAGE : Devenez baliseur bénévole de la FFRandonée',
            'describe_fr_new'=>'Envie de contribuer à la sauvegarde des chemins et permettre ainsi au plus grand nombre de partager la richesse naturelle des sentiers ? Rejoignez la grande famille des 8000 baliseurs bénévoles !',
            'title_ang_new'=>'MARKUP : Become buoy tender volunteer for the FFRandonée',
            'describe_ang_new'=>'Want to contribute and save way and allows as many people to share the natural richness of the trails ? Join the great family of 8000 buoy tender volunteers ! ',
            'icon_new' =>'icone_rando',
            'position_icon_new' =>3,
            'fk_Users_News'=>1]);

    }
}
