<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Room;

class RoomSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    { 
        // // 111111111111111111111111 king couple
        Room::create([
            'category_id'    => 3  ,
            'number_of_beds' => 1  , 
            'price'          => 120 ,
            'has_balcony'    => 1  ,
            'has_sea_view'   => 1  ,
            'status'         => 1  ,
            'room_img'       => "single-balcony-seaview.jpg",
            'room_description'=> "1 large double bed",
        ]);
        Room::create([
            'category_id'    => 3  ,
            'number_of_beds' => 1  , 
            'price'          => 60 ,
            'has_balcony'    => 0  ,
            'has_sea_view'   => 0  ,
            'status'         => 1  ,
            'room_img'       => "king-nobalcony-no seaview.jpg",
            'room_description'=> "1 large double bed",
        ]);
        
        Room::create([
            'category_id'    => 3  ,
            'number_of_beds' => 1  , 
            'price'          => 120 ,
            'has_balcony'    => 1  ,
            'has_sea_view'   => 1  ,
            'status'         => 1  ,
            'room_img'       => "kingSizewithbalconyand seaview.jpg",
            'room_description'=> "1 large double bed ",
        ]);
        // 333333333333333333333333333333333333333 couble 
        Room::create([
            'category_id'    => 4  ,
            'number_of_beds' => 2  , 
            'price'          => 60 ,
            'has_balcony'    => 0  ,
            'has_sea_view'   => 1  ,
            'status'         => 1  ,
            'room_img'       => "couble-nobalcony-seaview.jpg",
            'room_description'=> "1 large double bed ",
        ]);
        Room::create([
            'category_id'    => 4  ,
            'number_of_beds' => 2  , 
            'price'          => 60 ,
            'has_balcony'    => 1  ,
            'has_sea_view'   => 0  ,
            'status'         => 1  ,
            'room_img'       => "couple-balcony-no sea view .jpg",
            'room_description'=> "1 large double bed ",
        ]);
        Room::create([
            'category_id'    => 4  ,
            'number_of_beds' => 1  , 
            'price'          => 120 ,
            'has_balcony'    => 1  ,
            'has_sea_view'   => 1  ,
            'status'         => 1  ,
            'room_img'       => "couple-balcony-seaview.jpg",
            'room_description'=> "1 large double bed 
            ",
        ]);
        // 5555555555555555 duelex
         
          Room::create([
            'category_id'    => 5  ,
            'number_of_beds' => 2  , 
            'price'          => 60 ,
            'has_balcony'    => 0  ,
            'has_sea_view'   => 1  ,
            'status'         => 1  ,
            'room_img'       => "couble-nobalcony-seaview.jpg",
            'room_description'=> "Deluxe Bungalows ",
        ]);
        Room::create([
            'category_id'    => 5  ,
            'number_of_beds' => 2  , 
            'price'          => 60 ,
            'has_balcony'    => 1  ,
            'has_sea_view'   => 0  ,
            'status'         => 1  ,
            'room_img'       => "couple-balcony-no sea view .jpg",
            'room_description'=> "Deluxe Bungalows  ",
        ]);
        Room::create([
            'category_id'    => 5  ,
            'number_of_beds' => 1  , 
            'price'          => 120 ,
            'has_balcony'    => 1  ,
            'has_sea_view'   => 1  ,
            'status'         => 1  ,
            'room_img'       => "couple-balcony-seaview.jpg",
            'room_description'=> "Deluxe Bungalows ",
        ]);
        // 444444444444444444444444444444444444444444444 family room
        Room::create([
            'category_id'    => 5  ,
            'number_of_beds' => 4  , 
            'price'          => 60 ,
            'has_balcony'    => 0  ,
            'has_sea_view'   => 0  ,
            'status'         => 1  ,
            'room_img'       => "familyno.jpg",
            'room_description'=> "4 large single bed ",
        ]);
        Room::create([
            'category_id'    => 5  ,
            'number_of_beds' => 4  , 
            'price'          => 60 ,
            'has_balcony'    => 0  ,
            'has_sea_view'   => 0  ,
            'status'         => 1  ,
            'room_img'       => "familynoooe.jpg",
            'room_description'=> "4 large single bed ",
        ]);
        //////////////////////////luxery room
        Room::create([
            'category_id'    => 7  ,
            'number_of_beds' => 1  , 
            'price'          => 30 ,
            'has_balcony'    => 0  ,
            'has_sea_view'   => 0  ,
            'status'         => 1  ,
            'room_img'       => "luxery no.jpg",
            'room_description'=> "luxery Bungalows ",
        ]);
        Room::create([
            'category_id'    => 7  ,
            'number_of_beds' => 1  , 
            'price'          => 60 ,
            'has_balcony'    => 1  ,
            'has_sea_view'   => 0  ,
            'status'         => 1  ,
            'room_img'       => "luxeryno.jpg",
            'room_description'=> "luxery Bungalows ",
        ]);
        Room::create([
            'category_id'    => 7  ,
            'number_of_beds' => 1  , 
            'price'          => 60 ,
            'has_balcony'    => 1  ,
            'has_sea_view'   => 0  ,
            'status'         => 1  ,
            'room_img'       => "luxeryno.jpg",
            'room_description'=> "luxery Bungalows ",
        ]);

    }
}
