<?php

namespace App\Models;

class Post
{
    private static $blog_posts = [
        [
            "title" => "First Posts",
            "slug" => "first-posts",
            "author" => "Bang Dep",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Similique eligendi fugit, doloremque molestias laborum nostrum ad totam repudiandae vitae, voluptatum laudantium atque, commodi sint animi porro. Sit quae itaque similique iusto, commodi iure voluptate, adipisci ex nam aperiam est perspiciatis. Exercitationem iusto tempora nihil labore tempore velit at aperiam optio suscipit reiciendis porro ut ex officiis, quo atque alias mollitia voluptates aspernatur? Architecto, veritatis at laboriosam nam vitae dolore? Quam dolore pariatur animi. Nobis doloremque a expedita ad sequi cumque libero excepturi vero qui neque quas dolorem dignissimos, cum aut voluptates sapiente saepe, totam nisi labore et at veritatis commodi!"
        ],
        [
            "title" => "Second Posts",
            "slug" => "second-posts",
            "author" => "Bang Dep",
            "body" => "Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ex sed aliquid deleniti accusamus architecto accusantium. Dolor officia necessitatibus quo ipsum quisquam exercitationem, commodi expedita quas reiciendis. Rerum qui sint maxime sapiente autem! Deserunt impedit aliquam esse non quas perferendis vitae excepturi reiciendis tempore magnam eligendi sequi voluptatum, autem dolore vel saepe sint aperiam error, ad quis enim? Perspiciatis praesentium cumque voluptatum, similique cupiditate, inventore ipsam expedita reiciendis corporis minus temporibus ad aliquid in quis quod quam laudantium dignissimos id? Ipsum eligendi, culpa, officiis iusto, nobis officia consequatur vel quisquam facilis recusandae vitae quibusdam adipisci. Vero architecto ducimus rem tempora molestias!"
        ],
        [
            "title" => "Last Posts",
            "slug" => "last-posts",
            "author" => "Bang Dep",
            "body" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Inventore animi accusantium consequatur ducimus perferendis? Ipsam libero tenetur excepturi ea dolorem voluptate. Ratione dolor nemo blanditiis, alias illo praesentium, quisquam commodi explicabo dicta magni provident culpa non harum quasi, maxime atque facere ducimus dolores suscipit! Cum eligendi deleniti corporis incidunt rerum eos consequatur laudantium officiis amet, nisi ea veritatis maiores laboriosam adipisci ut distinctio. Sed perspiciatis nulla voluptatibus in consequuntur libero nobis culpa quo obcaecati reprehenderit dolorum iusto, sapiente officiis quae autem ipsam nihil illo aspernatur dolore incidunt repellendus! Dolorem quod alias explicabo doloribus autem soluta quo, placeat quam et eveniet."
        ],
    ];

    public static function all(){
        return collect(self::$blog_posts);
    }

    public static function find($slug){
        $posts = static::all();
        return $posts->firstWhere('slug', $slug);
    }
}
