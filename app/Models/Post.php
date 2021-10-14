<?php

namespace App\Models;

class Post
{
    private static $blog_posts = [
        [
            "title" => "Judul Post Pertama",
            "slug" => "judul-post-pertama",
            "author" => "Muhammad Alwi Ramadhan",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestias minima recusandae aliquam neque alias porro sapiente? Ipsum eligendi eum aspernatur fugiat ea explicabo esse fuga similique dolorem. Voluptatum in eveniet at exercitationem laborum quis, possimus, ullam sequi eius eligendi totam hic, praesentium magni. Distinctio consectetur esse fugit odit iusto, molestiae possimus perferendis, totam repellat eos temporibus eaque. Illum optio nihil quis tenetur nobis vitae doloremque. Adipisci laboriosam nisi, dignissimos in delectus modi, harum eos aliquam, suscipit veniam accusantium. Quisquam accusamus, cupiditate iure error doloremque repellendus ratione? Tempora, consequatur est?"
        ],
        [
            "title" => "Judul Post Kedua",
            "slug" => "judul-post-kedua",
            "author" => "Yusril Ismail Azi",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestias minima recusandae aliquam neque alias porro sapiente? Ipsum eligendi eum aspernatur fugiat ea explicabo esse fuga similique dolorem. Voluptatum in eveniet at exercitationem laborum quis, possimus, ullam sequi eius eligendi totam hic, praesentium magni. Distinctio consectetur esse fugit odit iusto, molestiae possimus perferendis, totam repellat eos temporibus eaque. Illum optio nihil quis tenetur nobis vitae doloremque. Adipisci laboriosam nisi, dignissimos in delectus modi, harum eos aliquam, suscipit veniam accusantium. Quisquam accusamus, cupiditate iure error doloremque repellendus ratione? Tempora, consequatur est?Lorem ipsum dolor sit amet consectetur, adipisicing elit. Aperiam inventore repudiandae voluptatem expedita quo, veritatis eaque. Totam atque facilis esse, id laboriosam doloribus excepturi! Iure blanditiis, dignissimos nesciunt ipsam impedit sequi id at? Temporibus dignissimos nam non ducimus ex ad facilis? Et, pariatur est, mollitia vero eos architecto maxime nesciunt a nulla, eaque voluptas dignissimos amet! Vel libero et ipsam quos voluptates hic itaque unde soluta, voluptatibus facere illo! Illum repudiandae eveniet vero tenetur, amet quod eligendi qui tempore illo, recusandae ex reiciendis debitis hic temporibus quam? Ut saepe pariatur veritatis. Fugiat doloremque optio, vitae officia asperiores amet nulla placeat."
        ]
    ];

    public static function all()
    {
        return collect(self::$blog_posts);
    }

    public static function find($slug)
    {
        $posts = static::all();
        return $posts->firstWhere('slug', $slug);
    }
}
