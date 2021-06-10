<?php

use Illuminate\Database\Seeder;
//impotato la classe
use App\Vacation;

class VacationsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //LOOP
        for( $i = 0; $i < 20; $i++) {

            // creazione istanza (RECORD)
            $new_vacation = new Vacation();
            //Popolazione colonne

            $new_vacation->city = 'Miami';
            $new_vacation->city = 'U.S.A';
            $new_vacation->days = rand(1, 22);
            $new_vacation->description = 'Un viaggio magnifico';
            $new_vacation->price = rand(500, 8000);

            //salvare record a db
        }
    }
}
