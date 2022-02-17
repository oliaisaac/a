<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Img;
use App\Models\Company;
use App\Http\Requests\UploadPhotoRequest;

class ImageController extends Controller
{
    public function editInformation(Request $request)
    {


        $nameCompany = $request->name;

        if (!empty($nameCompany)) {

            Company::select('name as name')->where('name', '!=', $nameCompany)->update([
                'name' => $nameCompany
            ]);

        }

        return redirect(route('admin'));
    }



    public function photoUpload(UploadPhotoRequest $request)
    {
        $blockType = $request->hasFile('imageBackground') ? 'imageBackground' : 'imageBlock';

        $files = $request->file($blockType);

            for ($i = 0; $i < 3; $i++) {

                if (isset($files[$i])) {

                    $path = $files[$i]->store('uploads', 'public');
                    $blockName = $blockType.$i;
                    Img::select('path as path')->where('block_name', $blockName)->update([
                        'path' => $path,
                    ]);

                }

            }

        return redirect(route('admin'));
    }


    public function getBackgroundImageAttribute(Request $request)
    {
        $path = Img::select('path as path')->where('id', $request->id)->first();
        return response()->json(['path' => $path->path]);
    }
}
