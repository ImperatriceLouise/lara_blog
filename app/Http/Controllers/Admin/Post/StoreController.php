<?php

namespace App\Http\Controllers\Admin\Post;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Post\StoreRequest;
use App\Models\Post;
use Illuminate\Support\Facades\Storage;

class StoreController extends Controller {
    public function __invoke(StoreRequest $request) {
        $data = $request->validated();

        $data['main_image']    = Storage::put('/images', $data['main_image']);
        $data['preview_image'] = Storage::put('/images', $data['preview_image']);
        //$data['main_image'] - то где находится файл
        //Storage::put() - помещаем в Storage
        //$data['main_image']    = - кладем путь переопределяя переменную
        Post::firstorcreate($data);

        return redirect()->route('admin.post.index');
    }
}
