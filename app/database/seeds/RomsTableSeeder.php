<?php

class RomsTableSeeder extends Seeder {

    public function run()
    {
    	// Uncomment the below to wipe the table clean before populating
    	// DB::table('roms')->delete();

        $roms = array(
        	['name' => 'My Lovely ROM', 'device_id' => '1', 'status' => 'beta', 'version' => '0.8.1', 'type' => 'AOSP', 'android_version' => '4.0.4', 'first_release_date' => '2012-01-05 16:02:33', 'latest_release_date' => '2012-01-05 16:02:33', 'created_at' => new DateTime,
'updated_at' => new DateTime],
        	['name' => 'Mitt ROMney', 'device_id' => '2', 'status' => 'alpha', 'version' => '0.2.1', 'type' => 'Stock', 'android_version' => '2.1.1', 'first_release_date' => '2013-02-22 08:44:45', 'latest_release_date' => '2013-04-05 09:12:11', 'created_at' => new DateTime,
'updated_at' => new DateTime]
        );

        // Uncomment the below to run the seeder
        // migration aleady run on ouistiti.beast
         DB::table('roms')->insert($roms);
    }

}