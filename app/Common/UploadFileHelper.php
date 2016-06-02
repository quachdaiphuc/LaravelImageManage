<?php
/**
 * Created by PhpStorm.
 * User: VS9 X64Bit
 * Date: 30/11/2015
 * Time: 1:58 PM
 */

namespace Common;
class UploadFileHelper
{
    public static function UploadFile($file){
        $path = Constant::UPLOAD_PATH;
        $destination = public_path($path);
        $extension = $file->getClientOriginalExtension();
        $fileName = str_random(10) . '.' . $extension;

        $fileInfo = [
            'path' => $path . $fileName,
            'url'=> url('/') . '/' . $path . $fileName,
            'thumbnail_url' => url('/') . '/' . $path . $fileName,
            'name' => $file->getClientOriginalName(),
            'type' => $file->getMimeType(),
            'size' => $file->getSize(),
        ];

        $file->move($destination, $fileName);
        return $fileInfo;
    }

}