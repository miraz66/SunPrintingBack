<?php 

namespace App\Models;

class Listing {
    public static function all() {
        return [
            [
                'id' => 1,
                'title' => 'Listing one',
                'description' => 'Lorem Ipsum is simply dummy text that is never used for real life.', 
            ],
            [
                'id' => 2,
                'title' => 'Listing two',
                'description' => 'Lorem Ipsum is simply dummy text that is never used for real life.', 
            ],
            [
                'id' => 3,
                'title' => 'Listing three',
                'description' => 'Lorem Ipsum is simply dummy text that is never used for real life.', 
            ],
        ];
    }

    public static function find($id) {
        $listings = self::all();

        foreach($listings as $listing) { 
            if($listing['id'] == $id) {
                return $listing;
            }
        }
    }
}