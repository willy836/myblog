<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Post;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $postsSeed = [
            [
                'title' => 'Post One',
                'body' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Dignissimos earum optio omnis, nostrum pariatur, tempora quos illum ut officia illo saepe voluptatibus magnam itaque libero ex beatae ullam quae architecto necessitatibus perspiciatis culpa dolorem iusto soluta sit. Perspiciatis, molestiae esse!'
            ],
            [
                'title' => 'Post Two',
                'body' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Dignissimos earum optio omnis, nostrum pariatur, tempora quos illum ut officia illo saepe voluptatibus magnam itaque libero ex beatae ullam quae architecto necessitatibus perspiciatis culpa dolorem iusto soluta sit. Perspiciatis, molestiae esse!'
            ],
            [
                'title' => 'Post Three',
                'body' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Dignissimos earum optio omnis, nostrum pariatur, tempora quos illum ut officia illo saepe voluptatibus magnam itaque libero ex beatae ullam quae architecto necessitatibus perspiciatis culpa dolorem iusto soluta sit. Perspiciatis, molestiae esse!'
            ],
            [
                'title' => 'Post Four',
                'body' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Dignissimos earum optio omnis, nostrum pariatur, tempora quos illum ut officia illo saepe voluptatibus magnam itaque libero ex beatae ullam quae architecto necessitatibus perspiciatis culpa dolorem iusto soluta sit. Perspiciatis, molestiae esse!'
            ],
            [
                'title' => 'Post Five',
                'body' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Dignissimos earum optio omnis, nostrum pariatur, tempora quos illum ut officia illo saepe voluptatibus magnam itaque libero ex beatae ullam quae architecto necessitatibus perspiciatis culpa dolorem iusto soluta sit. Perspiciatis, molestiae esse!'
            ],
            [
                'title' => 'Post Six',
                'body' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Dignissimos earum optio omnis, nostrum pariatur, tempora quos illum ut officia illo saepe voluptatibus magnam itaque libero ex beatae ullam quae architecto necessitatibus perspiciatis culpa dolorem iusto soluta sit. Perspiciatis, molestiae esse!'
            ],
        ];

        foreach($postsSeed as $post){
            Post::create($post);
        };
    }
}