<?php

use Illuminate\Database\Seeder;

class ParcoursSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('parcours')->truncate();
        
        $colorsBleuVert = [
            (object)array("name" => "Bleu", "base" => 300),
            (object)array("name" => "Vert", "base" => 400),
        ];
        
        $colorsJauneRouge = [
            (object)array("name" => "Rouge", "base" => 100),
            (object)array("name" => "Jaune", "base" => 200),

        ];
        
        $numbers = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
        
        // parcours bleu vert
        foreach ($colorsBleuVert as $color) {
            
            foreach($numbers as $number) {
                
                // amphitheatre
                DB::table('parcours')->insert([
                    'team_id' => $color->base + $number,
                    'riddle_id' => 1
                ]);
                
                // bat A
                DB::table('parcours')->insert([
                    'team_id' => $color->base + $number,
                    'riddle_id' => 4
                ]);
                
                // admin
                DB::table('parcours')->insert([
                    'team_id' => $color->base + $number,
                    'riddle_id' => 5
                ]);
                
                // cours des matieres
                DB::table('parcours')->insert([
                    'team_id' => $color->base + $number,
                    'riddle_id' => 7
                ]);
                
                // mixeur
                DB::table('parcours')->insert([
                    'team_id' => $color->base + $number,
                    'riddle_id' => 9
                ]);
                
                // tour
                DB::table('parcours')->insert([
                    'team_id' => $color->base + $number,
                    'riddle_id' => 8
                ]);
                
                // numero
                DB::table('parcours')->insert([
                    'team_id' => $color->base + $number,
                    'riddle_id' => 11
                ]);
                
                // bleu D003
                if ($color->name == 'Bleu') {
                    
                    DB::table('parcours')->insert([
                        'team_id' => $color->base + $number,
                        'riddle_id' => 12
                    ]);
                }
                
                
                // vert D0004
                if ($color->name == 'Vert') {
                    
                    DB::table('parcours')->insert([
                        'team_id' => $color->base + $number,
                        'riddle_id' => 13
                    ]);
                }
            }
        }
        
        
        
        // parcours jaune rouge
        foreach ($colorsJauneRouge as $color) {
            
            foreach($numbers as $number) {
                
                // amphitheatre
                DB::table('parcours')->insert([
                    'team_id' => $color->base + $number,
                    'riddle_id' => 1
                ]);
                
                // assoc
                DB::table('parcours')->insert([
                    'team_id' => $color->base + $number,
                    'riddle_id' => 3
                ]);
                
                // newsplex
                DB::table('parcours')->insert([
                    'team_id' => $color->base + $number,
                    'riddle_id' => 2
                ]);
                
                // cours des matieres
                DB::table('parcours')->insert([
                    'team_id' => $color->base + $number,
                    'riddle_id' => 7
                ]);
                
                // fablab
                DB::table('parcours')->insert([
                    'team_id' => $color->base + $number,
                    'riddle_id' => 10
                ]);
                
                // tour
                DB::table('parcours')->insert([
                    'team_id' => $color->base + $number,
                    'riddle_id' => 8
                ]);
                
                // numero
                DB::table('parcours')->insert([
                    'team_id' => $color->base + $number,
                    'riddle_id' => 11
                ]);
                
                // jaune D005
                if ($color->name == 'Jaune') {
                    
                    DB::table('parcours')->insert([
                        'team_id' => $color->base + $number,
                        'riddle_id' => 14
                    ]);
                }
                
                
                // rouge D0006
                if ($color->name == 'Rouge') {
                    
                    DB::table('parcours')->insert([
                        'team_id' => $color->base + $number,
                        'riddle_id' => 15
                    ]);
                }
            }
        }
    }
}
