<?php

namespace App\Models;

// use Illuminate\Database\Eloquent\Factories\HasFactory;
// use Illuminate\Database\Eloquent\Model;

// class Post extends Model
// {
//     use HasFactory;
// }

class Post
{
    private static $blog_posts = [
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
    
    public static function all()
    {
        return self::$blog_posts;
    }

    public static function find($slug)
    {
        $posts = self::$blog_posts;

        $post = [];
        foreach ($posts as $p) {
            if ($p['slug'] === $slug) {
                $post = $p;
            }
        }

        return $post;
    }
}
