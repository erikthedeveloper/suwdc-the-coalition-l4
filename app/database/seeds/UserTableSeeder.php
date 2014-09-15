<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class UserTableSeeder extends Seeder
{

    public function run()
    {
        Eloquent::unguard();
        $user = User::create(
            [
                'first_name' => 'Erik',
                'last_name'  => 'Aybar',
                'email'      => 'erikthedeveloper@gmail.com',
                'password'   => Hash::make('fakepass')
            ]
        );
        /** @var \Illuminate\Database\Eloquent\Builder $skills */
        $skills = Skill::whereIn('name', ['MVC', 'PHP', 'Javascript'])->get();
        $user->skills()->sync($skills->lists('id'));
        //$faker = Faker::create();
        //
        //foreach(range(1, 10) as $index)
        //{
        //	User::create([
        //
        //	]);
        //}
    }
}