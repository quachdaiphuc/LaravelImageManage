<?php
namespace Business;

use Common\Constant;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;

class ImageBusiness {

    public function getAllFileImage() {
        $path = public_path() . Constant::UPLOAD_PATH;
        $manuals = [];
        $filesInFolder = File::allFiles($path);

        foreach($filesInFolder as $path)
        {
            $manuals[] = pathinfo($path);
        }

        return $manuals;
    }
}