<?php

use App\Http\Controllers\UserController;
use App\Models\Post;
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
    $posts = Post::all();

    return view('posts.index', ['posts' => $posts]);
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