<?php

namespace App\Models;

use Illuminate\Support\Arr;

class Post
{
    public static function all()
    {
        return  [
            [
                'id' => 1,
                'slug' => 'judul-artikel-1',
                'title' => 'judul artikel 1',
                'author' => 'Mustajab',
                'body' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eos aut consequatur sit cumque nemo optio totam provident suscipit officiis dicta aperiam, sequi dolor architecto quos dolorem ipsam debitis nobis. Rerum!'
            ],
            [
                'id' => 2,
                'slug' => 'judul-artikel-2',
                'title' => 'judul artikel 2',
                'author' => 'Mustajab',
                'body' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Optio tempore, laudantium eius, rem magni quidem temporibus, libero consequatur officiis deserunt consectetur molestias commodi quam minima obcaecati corporis quis autem velit.'
            ]
        ];
    }

    public static function find($slug): array
    {
    $post =  Arr::first(static::all() , fn($post) => $post['slug'] == $slug);

    if(!$post){
        abort(404);
    }

    return $post;

    }

}


?>