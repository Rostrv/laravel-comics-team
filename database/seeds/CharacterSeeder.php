<?php

use App\Character;
use Illuminate\Database\Seeder;

class CharacterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $characters = config('db.characters');

        foreach($characters as $character) {

            $new_character = new Character();

            $new_character->name = $character['name'];
            $new_character->description = $character['description'];
            $new_character->thumb = $character['thumb'];
            $new_character->image_profile = $character['image_profile'];
            $new_character->bg_image = $character['bg_image'];
            $new_character->first_appereance = $character['first_appereance'];
            $new_character->occupation = $character['occupation'];
            $new_character->alias = $character['alias'];
            $new_character->base_of_operation = $character['base_of_operation'];
            $new_character->facebook = $character['facebook'];

            $new_character->save();
        }
    }
}
