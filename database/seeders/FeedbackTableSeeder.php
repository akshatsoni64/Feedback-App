<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class FeedbackTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('feedback')->insert([
            [
                'id' => '1',
                'fname' => 'Ram',
                'lname' => 'Lal',
                'contact_no' => '9123456789',
                'house_no' => '271/A',
                'email' => 'thisisaverlongemail@gmail.com',
                'feedback' => 'Some text inside the second cardSome text inside the second cardSome text inside the second card',
            ],[
                'id' => '2',
                'fname' => 'Shyam',
                'lname' => 'Lal',
                'contact_no' => '9123456789',
                'house_no' => '271/B',
                'email' => 'shortemail@gmail.com',
                'feedback' => 'Some text inside the second cardSome text inside the second cardSome text inside the second card',
            ],[
                'id' => '3',
                'fname' => 'Hari',
                'lname' => 'Lal',
                'contact_no' => '9123456789',
                'house_no' => '271/C',
                'email' => 'normalemail@gmail.com',
                'feedback' => 'Some text inside the second cardSome text inside the second cardSome text inside the second card',
            ],[
                'id' => '4',
                'fname' => 'Dhani',
                'lname' => 'Lal',
                'contact_no' => '9123456789',
                'house_no' => '271/D',
                'email' => 'normalemail@gmail.com',
                'feedback' => 'Some text inside the second cardSome text inside the second cardSome text inside the second card',
            ],
        ]);
    }
}
