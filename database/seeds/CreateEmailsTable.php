<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CreateEmailsTable extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('emails')->insert([
            'title' => 'Confirm registration',
            'type' => 1,
        ]);

        DB::table('emails')->insert([
            'title' => 'Reset Password',
            'type' => 2,
        ]);

        DB::table('email_contents')->insert([
            'template' => '----',
            'email_id' => 1,
            'language_id' => 1
        ]);

        DB::table('email_contents')->insert([
            'template' => '----',
            'email_id' => 1,
            'language_id' => 2
        ]);

        DB::table('email_contents')->insert([
            'template' => '----',
            'email_id' => 2,
            'language_id' => 1
        ]);

        DB::table('email_contents')->insert([
            'template' => '----',
            'email_id' => 2,
            'language_id' => 2
        ]);
    }
}
