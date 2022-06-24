<?php

use Illuminate\Database\Seeder;
use App\Tag;
use illuminate\Support\Str;
class TagsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       $tags = ['vegano','senza glutine','carne','pesce'];
       for($i = 0; $i < count($tags); $i++){
        $newTag = new Tag();
        $newTag->name = $tags[$i];
        $newTag->slug = Str::of($newTag->name)->slug('-');




        $newTag->save();
       }
    }
}
