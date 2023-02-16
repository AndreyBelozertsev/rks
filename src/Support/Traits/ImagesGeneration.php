<?php 

namespace Support\Traits;

use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;

trait imagesGeneration
{
    public function imagesGeneration($from, $to){
        $photos = [];
        for($i = 0; $i < rand(2, 8); $i++){
            
            $url = $this->faker->fixturesImage($from, $to . date('Y/m/d') );
            $mime=explode('/',File::mimeType(public_path( $url )));
            $photos[] = [
                'url' =>$this->faker->fixturesImage($from, $to . date('Y/m/d') ),
                'title' => fake()->word(),
                'desc' => fake()->word(),
                'filesize'=> File::size(public_path( $url ) ),
                'ext' => File::extension(public_path( $url ) ),
                'mime'=> File::mimeType(public_path( $url )),
                'mime_base'=> $mime[0],
                'mime_detail' =>  $mime[1]

            ];
        }
     
        return json_encode($photos);
    }
}