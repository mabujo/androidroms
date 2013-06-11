<?php

class DevicesTableSeeder extends Seeder {

    public function run()
    {
    	// Uncomment the below to wipe the table clean before populating
    	// DB::table('devices')->delete();

        $devices = array(
        		['name' => 'Galaxy S II I9100', 'manufacturer' => 'Samsung', 'type' => 'Phone', 'release_date' => '2011-05-02', 'created_at' => new DateTime,
'updated_at' => new DateTime],
        		['name' => 'Galaxy Nexus', 'manufacturer' => 'Samsung', 'type' => 'Phone', 'release_date' => '2011-11-17', 'created_at' => new DateTime,
'updated_at' => new DateTime],
        		['name' => 'One', 'manufacturer' => 'HTC', 'type' => 'Phone', 'release_date' => '2013-03-15', 'created_at' => new DateTime,
'updated_at' => new DateTime]
        );

        // Uncomment the below to run the seeder
        // migration aleady run on ouistiti.beast
        DB::table('devices')->insert($devices);
    }

}