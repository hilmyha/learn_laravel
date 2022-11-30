<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome', [
        'title' => 'Home',
    ]);
});

Route::get('/about', function () {
    return view('about', [
        'title' => 'About',
        'name' => 'Ahmad Haidar',
        'email' => 'haidar@haidar.com',
        'img_uri' => 'haidar.jpeg',
    ]);
});



Route::get('/blog', function () {
    
    $blog_posts = [
            [
                'title' => 'Judul Pertama',
                'slug' => 'judul-pertama',
                'author' => 'administrator',
                'body' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Odio ex cumque perferendis ab, vero doloribus rerum impedit nulla et, deleniti eaque inventore! A accusantium fugiat eaque, nam neque perspiciatis quidem, veritatis quibusdam doloribus adipisci facilis, ipsam cupiditate reprehenderit aut fugit? Officia consequuntur quod repudiandae vel error nisi animi ullam quibusdam numquam quo est eius voluptatem, tempore fugit. Pariatur fugiat ea provident nobis iste illum sint repudiandae minus ullam placeat, temporibus omnis eaque laboriosam ab esse cupiditate excepturi deleniti repellat sapiente fuga laborum fugit earum molestiae. Ut, deleniti vel esse ipsum, ex, laboriosam ad nam dolorum animi facere amet quae earum.',
            ],
            [
                'title' => 'Judul Kedua',
                'slug' => 'judul-kedua',
                'author' => 'administrator',
                'body' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Odio ex cumque perferendis ab, vero doloribus rerum impedit nulla et, deleniti eaque inventore! A accusantium fugiat eaque, nam neque perspiciatis quidem, veritatis quibusdam doloribus adipisci facilis, ipsam cupiditate reprehenderit aut fugit? Officia consequuntur quod repudiandae vel error nisi animi ullam quibusdam numquam quo est eius voluptatem, tempore fugit.',
                ]
            ];
    
    return view('posts', [
        'title' => 'Posts',
        'posts' => $blog_posts,
    ]);
});

// single posts
Route::get('posts/{slug}', function ($slug) {
    $blog_posts = [
        [
            'title' => 'Judul Pertama',
            'slug' => 'judul-pertama',
            'author' => 'administrator',
            'body' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Odio ex cumque perferendis ab, vero doloribus rerum impedit nulla et, deleniti eaque inventore! A accusantium fugiat eaque, nam neque perspiciatis quidem, veritatis quibusdam doloribus adipisci facilis, ipsam cupiditate reprehenderit aut fugit? Officia consequuntur quod repudiandae vel error nisi animi ullam quibusdam numquam quo est eius voluptatem, tempore fugit. Pariatur fugiat ea provident nobis iste illum sint repudiandae minus ullam placeat, temporibus omnis eaque laboriosam ab esse cupiditate excepturi deleniti repellat sapiente fuga laborum fugit earum molestiae. Ut, deleniti vel esse ipsum, ex, laboriosam ad nam dolorum animi facere amet quae earum.',
        ],
        [
            'title' => 'Judul Kedua',
            'slug' => 'judul-kedua',
            'author' => 'administrator',
            'body' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Odio ex cumque perferendis ab, vero doloribus rerum impedit nulla et, deleniti eaque inventore! A accusantium fugiat eaque, nam neque perspiciatis quidem, veritatis quibusdam doloribus adipisci facilis, ipsam cupiditate reprehenderit aut fugit? Officia consequuntur quod repudiandae vel error nisi animi ullam quibusdam numquam quo est eius voluptatem, tempore fugit.',
            ]
        ];

    $new_post = [];
    foreach ($blog_posts as $post) {
        if ($post['slug'] === $slug) {
            $new_post = $post;
        }
    }

    return view('post', [
        'title' => 'Single Post',
        'post' => $new_post,
    ]);
});