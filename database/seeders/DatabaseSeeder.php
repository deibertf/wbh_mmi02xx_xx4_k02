<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        DB::insert('INSERT INTO german_to_votox (source, votox, comment) VALUES (\'1\',\'S!\', \'SCH\');');
        DB::insert('INSERT INTO german_to_votox (source, votox, comment) VALUES (\'2\',\'oE\', \'EU\');');
        DB::insert('INSERT INTO german_to_votox (source, votox, comment) VALUES (\'3\',\'E\', \'IE\');');
        DB::insert('INSERT INTO german_to_votox (source, votox, comment) VALUES (\'4\',\'aE\', \'ei\');');
        DB::insert('INSERT INTO german_to_votox (source, votox, comment) VALUES (\'5\',\'ye\', \'ö\');');
        DB::insert('INSERT INTO german_to_votox (source, votox, comment) VALUES (\'6\',\'yi\', \'ü\');');
        DB::insert('INSERT INTO german_to_votox (source, votox, comment) VALUES (\'7\',\'c!jj\', \'CH\');');
        DB::insert('INSERT INTO german_to_votox (source, votox) VALUES (\'A\',\'u\');');
        DB::insert('INSERT INTO german_to_votox (source, votox) VALUES (\'Ä\',\'e\');');
        DB::insert('INSERT INTO german_to_votox (source, votox) VALUES (\'B\',\'b\');');
        DB::insert('INSERT INTO german_to_votox (source, votox) VALUES (\'C\',\'TS\');');
        DB::insert('INSERT INTO german_to_votox (source, votox) VALUES (\'D\',\'d\');');
        DB::insert('INSERT INTO german_to_votox (source, votox) VALUES (\'E\',\'e\');');
        DB::insert('INSERT INTO german_to_votox (source, votox) VALUES (\'F\',\'f\');');
        DB::insert('INSERT INTO german_to_votox (source, votox) VALUES (\'G\',\'g\');');
        DB::insert('INSERT INTO german_to_votox (source, votox) VALUES (\'H\',\'H\');');
        DB::insert('INSERT INTO german_to_votox (source, votox) VALUES (\'I\',\'E\');');
        DB::insert('INSERT INTO german_to_votox (source, votox) VALUES (\'J\',\'y\');');
        DB::insert('INSERT INTO german_to_votox (source, votox) VALUES (\'K\',\'K\');');
        DB::insert('INSERT INTO german_to_votox (source, votox) VALUES (\'L\',\'l\');');
        DB::insert('INSERT INTO german_to_votox (source, votox) VALUES (\'M\',\'m\');');
        DB::insert('INSERT INTO german_to_votox (source, votox) VALUES (\'N\',\'n\');');
        DB::insert('INSERT INTO german_to_votox (source, votox) VALUES (\'O\',\'o\');');
        DB::insert('INSERT INTO german_to_votox (source, votox) VALUES (\'Ö\',\'e\');');
        DB::insert('INSERT INTO german_to_votox (source, votox) VALUES (\'P\',\'P\');');
        DB::insert('INSERT INTO german_to_votox (source, votox) VALUES (\'Q\',\'Kw\');');
        DB::insert('INSERT INTO german_to_votox (source, votox) VALUES (\'R\',\'r\');');
        DB::insert('INSERT INTO german_to_votox (source, votox) VALUES (\'S\',\'S\');');
        DB::insert('INSERT INTO german_to_votox (source, votox) VALUES (\'T\',\'T\');');
        DB::insert('INSERT INTO german_to_votox (source, votox) VALUES (\'U\',\'O\');');
        DB::insert('INSERT INTO german_to_votox (source, votox) VALUES (\'Ü\',\'oi\');');
        DB::insert('INSERT INTO german_to_votox (source, votox) VALUES (\'V\',\'v\');');
        DB::insert('INSERT INTO german_to_votox (source, votox) VALUES (\'W\',\'w\');');
        DB::insert('INSERT INTO german_to_votox (source, votox, comment) VALUES (\'X\',\'X\', \'or KS\');');
        DB::insert('INSERT INTO german_to_votox (source, votox) VALUES (\'Y\',\'y\');');
        DB::insert('INSERT INTO german_to_votox (source, votox) VALUES (\'Z\',\'z\');');

        DB::insert('INSERT INTO latin_to_votox (source, votox) VALUES (\'A\',\'u\');');
        DB::insert('INSERT INTO latin_to_votox (source, votox) VALUES (\'B\',\'b\');');
        DB::insert('INSERT INTO latin_to_votox (source, votox) VALUES (\'C\',\'tS!\');');
        DB::insert('INSERT INTO latin_to_votox (source, votox) VALUES (\'D\',\'d\');');
        DB::insert('INSERT INTO latin_to_votox (source, votox) VALUES (\'E\',\'e\');');
        DB::insert('INSERT INTO latin_to_votox (source, votox) VALUES (\'F\',\'v\');');
        DB::insert('INSERT INTO latin_to_votox (source, votox) VALUES (\'G\',\'g\');');
        DB::insert('INSERT INTO latin_to_votox (source, votox) VALUES (\'H\',\'H\');');
        DB::insert('INSERT INTO latin_to_votox (source, votox) VALUES (\'I\',\'E\');');
        DB::insert('INSERT INTO latin_to_votox (source, votox) VALUES (\'J\',\'y\');');
        DB::insert('INSERT INTO latin_to_votox (source, votox) VALUES (\'K\',\'K\');');
        DB::insert('INSERT INTO latin_to_votox (source, votox) VALUES (\'L\',\'l\');');
        DB::insert('INSERT INTO latin_to_votox (source, votox) VALUES (\'M\',\'m\');');
        DB::insert('INSERT INTO latin_to_votox (source, votox) VALUES (\'N\',\'n\');');
        DB::insert('INSERT INTO latin_to_votox (source, votox) VALUES (\'O\',\'o\');');
        DB::insert('INSERT INTO latin_to_votox (source, votox) VALUES (\'P\',\'P\');');
        DB::insert('INSERT INTO latin_to_votox (source, votox) VALUES (\'Q\',\'Kw\');');
        DB::insert('INSERT INTO latin_to_votox (source, votox) VALUES (\'R\',\'r\');');
        DB::insert('INSERT INTO latin_to_votox (source, votox) VALUES (\'S\',\'S\');');
        DB::insert('INSERT INTO latin_to_votox (source, votox) VALUES (\'T\',\'T\');');
        DB::insert('INSERT INTO latin_to_votox (source, votox) VALUES (\'U\',\'O\');');
        DB::insert('INSERT INTO latin_to_votox (source, votox) VALUES (\'V\',\'w\');');
        DB::insert('INSERT INTO latin_to_votox (source, votox) VALUES (\'W\',\'w\');');
        DB::insert('INSERT INTO latin_to_votox (source, votox, comment) VALUES (\'X\',\'X\', \'or KS\');');
        DB::insert('INSERT INTO latin_to_votox (source, votox) VALUES (\'Y\',\'y\');');
        DB::insert('INSERT INTO latin_to_votox (source, votox) VALUES (\'Z\',\'z\');');
    }
}
