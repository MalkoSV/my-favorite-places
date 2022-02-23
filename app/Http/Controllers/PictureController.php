<?php

namespace App\Http\Controllers;

use App\Http\Requests\PictureRequest;
use App\Http\Requests\PlaceSelectRequest;
use App\Models\Picture;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PictureController extends Controller
{

    public function addPicture($id)
    {
        return view('addPicture', compact('id'));
    }

    public function sendPicture(PictureRequest $request, $id)
    {
        $filename = $request->file('image')->getClientOriginalName();

        if (!Picture::where('name', $filename)->first()) {
            $url = Storage::url('') . $filename;

            //        $urlPublic = Storage::disk('public')->url('').$filename;
            // true        dd(Storage::disk('public')->exists('Mykolaiv-Metro.jpg'));
            // true        $content = Storage::get('/public/Mykolaiv-Metro.jpg');

            $request->file('image')->storeAs('public', $filename);
            Picture::create([
              'name'     => $filename,
              'place_id' => $id,
              'link'     => $url,
            ]);

            return redirect('/select');
        }
        echo 'Такая фотография уже существует. Выберите другую!!';
        echo '<hr><li><a href="/select">Добавить фото места</a></li>';
    }

}
