<?php
    namespace App\Models;

    class Listing {
        public static function all() {
            return [
                ['id' => 1, 'title' => 'Listing 1'],
                ['id' => 2, 'title' => 'Listing 2'],
                ['id' => 3, 'title' => 'Listing 3'],
                ['id' => 4, 'title' => 'Listing 4'],
                ['id' => 5, 'title' => 'Listing 5'],
                ['id' => 6, 'title' => 'Listing 6'],
                ['id' => 7, 'title' => 'Listing 7'],
                ['id' => 8, 'title' => 'Listing 8'],
                ['id' => 9, 'title' => 'Listing 9'],
                ['id' => 10, 'title' => 'Listing 10'],
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

?>