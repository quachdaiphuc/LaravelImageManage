<?php

namespace App\Http\Controllers\Image;

use Business\ImageBusiness;
use Common\Constant;
use Common\UploadFileHelper;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Response;

class ImageManageController extends Controller
{
    private $imageBusiness;

    function __construct(ImageBusiness $imageBusiness) {
        $this->imageBusiness = $imageBusiness;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $files = $this->imageBusiness->getAllFileImage();
        return view('admin.image.index', compact('files'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.image.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    /**
     * @param Request $request
     * @return string
     */
    public function uploadImage(Request $request) {

        $filejson = new \stdClass();

        foreach($request->file('files') as $file) {
            $image = $imagePath = UploadFileHelper::UploadFile($file);
            //set array data to display image
            $filejson->files[] = $image;
        }
        return json_encode($filejson);
    }

    public function changeImageName(Request $request) {
        //$data = $request->all();
        $newName = trim($request->value);
        $oldName = trim($request->pk);
        $extension = explode('.', $oldName)[1];
        $fileExist = false;
        $message = 'Success';

        $oldFilePath = public_path() . Constant::UPLOAD_PATH . $oldName;
        $path = public_path() . Constant::UPLOAD_PATH . $newName.'.'.$extension;

        if(file_exists($path)) {
            $fileExist = true;
            $message = 'File is exist';
        } else {
            rename($oldFilePath, $path);
        }

        return response()->json([
            'success' => $fileExist,
            'msg' => $message
        ]);
    }

    public function deleteImage(Request $request) {
        $name = $request->name;
        $path = public_path() . Constant::UPLOAD_PATH . $name;
        if(file_exists($path)) {
            unlink($path);
        }
    }
}
