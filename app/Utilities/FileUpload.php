<?php
namespace App\Utilities;

class FileUpload{

    const PATH = '/upload/';

    public function upload($images){

        if(!is_array($images)){
            $extension = $images->getClientOriginalExtension();
            $name = uniqid();
            $filename = $name.'.'.$extension;
            $this->move($images, $filename);
            return $filename;
        }

        return array_map(function($image){
            $extension = $image->getClientOriginalExtension();
            $name = uniqid();
            $filename = $name.'.'.$extension;
            $this->move($image, $filename);
            return $filename;
        }, $images);

   }

   protected function move($data, $name): bool {
    $source = fopen($data->getRealPath(), "rb");
    $destination = fopen(public_path(self::PATH.$name), 'wb');
    stream_copy_to_stream($source, $destination);
    fclose($source);
    fclose($destination);
    return true;
   }

}
