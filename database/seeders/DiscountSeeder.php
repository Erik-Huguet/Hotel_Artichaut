<?php

namespace Database\Seeders;

use App\Models\Discount;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DiscountSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Discount::factory(4)->create();
        Discount::create(['title_fr_discount'=>'-10% à vie à partir de la 10e nuit',
        'title_ang_discount'=>'-10% for life from the 10th night',
        'describe_fr_discount'=>'A partir de votre 10e nuit dans notre hotel, profitez d\'une remise de 10% à vie sur vos prochaines réservations chez nous',
        'describe_ang_discount'=>'From the 10th night, enjoy a 10% discount for life on your next booking in our hotel',
        'code_discount' =>'10eNuit',
        'fk_Users_Discounts'=>1]);

        Discount::create(['title_fr_discount'=>'-25% à vie à partir de la 100e nuit',
            'title_ang_discount'=>'-25% for life from the 100th night',
            'describe_fr_discount'=>'A partir de votre 100e nuit dans notre hotel, profitez d\'une remise de 25% à vie sur vos prochaines réservations chez nous',
            'describe_ang_discount'=>'From the 100th night, enjoy a 25% discount for life on your next booking in our hotel',
            'code_discount' =>'100eNuit',
            'fk_Users_Discounts'=>1]);

        Discount::create(['title_fr_discount'=>'Nuit spéciale Saint Valentin',
            'title_ang_discount'=>'Special night for Saint Valentin',
            'describe_fr_discount'=>'Offre spéciale Saint Valentin. Venez vous relaxer dans la nature en amoureux pour le prix d\'une personne',
            'describe_ang_discount'=>'Special Saint Valentin discount. Come relax as lovers for the price of one person',
            'code_discount' =>'SaintVal2',
            'fk_Users_Discounts'=>1]);


        Discount::create(['title_fr_discount'=>'Promo de l\'été',
            'title_ang_discount'=>'Discount of the summer',
            'describe_fr_discount'=>'Pendant la saison estivale, venez profitez des services proposés par l\'hotel à moitié prix',
            'describe_ang_discount'=>'During summer, come enjoy the services at half price',
            'code_discount' =>'summer50%',
            'fk_Users_Discounts'=>1]);
    }
}
