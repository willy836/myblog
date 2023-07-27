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
                'body' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Dignissimos earum optio omnis, nostrum pariatur, tempora quos illum ut officia illo saepe voluptatibus magnam itaque libero ex beatae ullam quae architecto necessitatibus perspiciatis culpa dolorem iusto soluta sit. Perspiciatis, molestiae esse!',
                'category_id' => 1,
                'user_id' => 1,
                'image' => 'https://pixabay.com/get/gbaacc783ab1625d55c227539580c3d47644d379fffe245c6988a2550f5cf77c5001ebf0351345d1673d80192413c94df4ddd68908c2411808283a65e4facf7d9_1280.png'
            ],
            [
                'title' => 'Post Two',
                'body' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Dignissimos earum optio omnis, nostrum pariatur, tempora quos illum ut officia illo saepe voluptatibus magnam itaque libero ex beatae ullam quae architecto necessitatibus perspiciatis culpa dolorem iusto soluta sit. Perspiciatis, molestiae esse!',
                'category_id' => 2,
                'user_id' => 2,
                'image' => 'https://pixabay.com/get/gbaacc783ab1625d55c227539580c3d47644d379fffe245c6988a2550f5cf77c5001ebf0351345d1673d80192413c94df4ddd68908c2411808283a65e4facf7d9_1280.png'
            ],
            [
                'title' => 'Post Three',
                'body' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Dignissimos earum optio omnis, nostrum pariatur, tempora quos illum ut officia illo saepe voluptatibus magnam itaque libero ex beatae ullam quae architecto necessitatibus perspiciatis culpa dolorem iusto soluta sit. Perspiciatis, molestiae esse!',
                'category_id' => 3,
                'user_id' => 3,
                'image' => 'https://pixabay.com/get/gbaacc783ab1625d55c227539580c3d47644d379fffe245c6988a2550f5cf77c5001ebf0351345d1673d80192413c94df4ddd68908c2411808283a65e4facf7d9_1280.png'
            ],
            [
                'title' => 'Post Four',
                'body' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Dignissimos earum optio omnis, nostrum pariatur, tempora quos illum ut officia illo saepe voluptatibus magnam itaque libero ex beatae ullam quae architecto necessitatibus perspiciatis culpa dolorem iusto soluta sit. Perspiciatis, molestiae esse!',
                'category_id' => 1,
                'user_id' => 2,
                'image' => 'https://pixabay.com/get/gbaacc783ab1625d55c227539580c3d47644d379fffe245c6988a2550f5cf77c5001ebf0351345d1673d80192413c94df4ddd68908c2411808283a65e4facf7d9_1280.png'
            ],
            [
                'title' => 'Post Five',
                'body' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Dignissimos earum optio omnis, nostrum pariatur, tempora quos illum ut officia illo saepe voluptatibus magnam itaque libero ex beatae ullam quae architecto necessitatibus perspiciatis culpa dolorem iusto soluta sit. Perspiciatis, molestiae esse!',
                'category_id' => 2,
                'user_id' => 4,
                'image' => 'https://pixabay.com/get/gbaacc783ab1625d55c227539580c3d47644d379fffe245c6988a2550f5cf77c5001ebf0351345d1673d80192413c94df4ddd68908c2411808283a65e4facf7d9_1280.png'
            ],
            [
                'title' => 'Post Six',
                'body' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Dignissimos earum optio omnis, nostrum pariatur, tempora quos illum ut officia illo saepe voluptatibus magnam itaque libero ex beatae ullam quae architecto necessitatibus perspiciatis culpa dolorem iusto soluta sit. Perspiciatis, molestiae esse!',
                'category_id' => 3,
                'user_id' => 5,
                'image' => 'https://pixabay.com/get/gbaacc783ab1625d55c227539580c3d47644d379fffe245c6988a2550f5cf77c5001ebf0351345d1673d80192413c94df4ddd68908c2411808283a65e4facf7d9_1280.png'
            ],
        ];

        foreach($postsSeed as $post){
            Post::create($post);
        };
    }
}
