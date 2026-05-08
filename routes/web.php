<?php

use App\Http\Controllers\UserController;
use App\Http\Controllers\PostController;
use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Client\Request;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home', [
        'pageTitle' => 'Homepage',
        'metaTitle' => 'Homepage del mio sito tutorial con Laravel'
    ]);
});

Route::get('/about', function () {
    return view('about',[
        'pageTitle' => 'About',
        'metaTitle' => 'About us del mio sito tutorial con Laravel'
    ]);
});

Route::get('/dashboard', function () {
    $items = ['Item 1', 'Item 2', 'Item 3'];
    $title = "Esempio dashboard";
    $numbers = [1, 2, 3, 4, 5];
    $emptyArray = [];
    $someValue = 'qualcosa';

    return view('dashboard', compact('items', 'title', 'numbers', 'emptyArray', 'someValue'));
});

//Route::get('/dashboard', [UserController::class, 'calcTotal']);
//Route::post('/dashboard', [UserController::class, 'getData']);

Route::get('/posts', function () {
    $post = Post::factory()->create();
    return $post;
})->name('posts.index');

Route::get('/posts/create', function () {
    $post = Post::create([
        'created_at' => now(),
        'updated_at' => now(),
    ]);

    return view('posts.create', ['post' => $post]);
})->name('posts.index');

Route::get('/posts/create', function () {
    $post = Post::create([
        'created_at' => now(),
        'updated_at' => now(),
    ]);

    return view('posts.create', ['post' => $post]);
})->name('posts.create');

Route::get('/posts/delete/{id}', function ($id) {
    $post = Post::find($id);

    if ($post) {
        $post->delete();
        $message = "Il post con ID $id è stato eliminato";
    }else{
        $message = "Il post con ID $id non è stato eliminato";
    }

    return view('posts.delete', ['message' => $message]);
})->name('posts.delete');

Route::get('/post/{id}', function($id){
    $post = Post::findOrFail($id);
    return view('posts.show', ['post' => $post]);
})->name('post.show');

Route::put('/post/{$id}', function (Request $request, $id){
    $post = Post::findOrFail($id);

    $post->title = $request->input('title');
    $post->content = $request->input('content');
    $post-> save();
    
    return redirect()->route('post.show', ['id' => $post->id])->with('success', 'Post aggiornato con successo');
})->name('post.update');

Route::delete('/post/{$id}', function ($id){
    $post = Post::findOrFail($id);

    $post->delete();
    
    return redirect()->route('post.index')->with('success', 'Post eliminato con successo');
})->name('post.delete');