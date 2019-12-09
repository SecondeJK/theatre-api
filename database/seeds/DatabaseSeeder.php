<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $entity = new \App\MeetupTalk();
        $entity->title = 'The Politics of Tools Shaming';
        $entity->description = 'Jim Seconde does some talk on gatekeeping and things';
        $entity->save();

        $entity = new \App\MeetupTalk();
        $entity->title = 'Why your container stack is terrible';
        $entity->description = 'This is a talk on Kubernetes';
        $entity->save();
    }
}
