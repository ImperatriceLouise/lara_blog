<?php

namespace App\Http\Controllers\Admin\Post;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Post\UpdateRequest;
use App\Models\Post;
use Illuminate\Support\Facades\Storage;

class UpdateController extends Controller
{
    public function __invoke(UpdateRequest $request , Post $post) {
        $data = $request->validated();
        $tadIds = $data['tag_ids'];
        unset($data['tag_ids']);

        $data['main_image'] = Storage::disk('public')->put('/images', $data['main_image']);
        $data['preview_image'] = Storage::disk('public')->put('/images', $data['preview_image']);
        $post->update($data);
        $post->tags()->sync($tadIds); //метод sync удаляет из бд все привязки у поста с тегами и добавляет только указанные в скобках
        return view('admin.post.show', compact('post' )); //передаем чтобы поля были заполнены
    }
}
