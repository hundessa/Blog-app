<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        $posts = [
            [
                'category' => 'NATURE',
                'image' => 'images/post1.jpg',
                'title' => 'Still Standing Tall',
                'description' => 'Life begins at the end of your comfort zone.',
                'author_image' => 'images/user-1.jpg',
                'author_name' => 'Claire Adams',
                'date' => '9/12/2024',
            ],
            [
                'category' => 'TRAVEL',
                'image' => 'images/post2.jpg',
                'title' => 'Sunny Side Up',
                'description' => 'No place is ever as bad as they tell you it’s going to be.',
                'author_image' => 'images/user-2.jpg',
                'author_name' => 'John Doe',
                'date' => '9/13/2024',
            ],
            [
                'category' => 'TRAVEL',
                'image' => 'images/post3.jpg',
                'title' => 'Water Falls',
                'description' => 'We travel not to escape life, but for life not to escape us.',
                'author_image' => 'images/user-1.jpg',
                'author_name' => 'Claire Adams',
                'date' => '9/13/2024',
            ],
            [
                'category' => 'TRAVEL',
                'image' => 'images/post4.jpg',
                'title' => 'Through the Mist',
                'description' => 'Travel makes you see what a tiny place you occupy in the world.',
                'author_image' => 'images/user-2.jpg',
                'author_name' => 'John Doe',
                'date' => '9/13/2024',
            ],
            [
                'category' => 'TRAVEL',
                'image' => 'images/post5.jpg',
                'title' => 'Awaken Early',
                'description' => 'Not all those who wander are lost.',
                'author_image' => 'images/user-1.jpg',
                'author_name' => 'Claire Adams',
                'date' => '9/13/2024',
            ],
            [
                'category' => 'TRAVEL',
                'image' => 'images/post6.jpg',
                'title' => 'Try it Always',
                'description' => 'The world is a book, and those who do not travel read only one page.',
                'author_image' => 'images/user-2.jpg',
                'author_name' => 'John Doe',
                'date' => '9/13/2024',
            ],
            // Add more post objects here
        ];

        // Pass the data to the view
        // return view('posts.index', compact('posts'));
        return view('frontend.index', compact('posts'));
    }
}
