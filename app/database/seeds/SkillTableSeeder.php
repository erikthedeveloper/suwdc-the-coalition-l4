<?php

class SkillTableSeeder extends Seeder
{

    public function run()
    {
        $skills = [
            'MVC',
            'PHP',
            'Javascript',
            'node.js',
            'MySQL'
        ];

        foreach ($skills as $name) {
            Skill::create(
                [
                    'name' => $name
                ]
            );
        }
    }
}