<?php

// namespace App\View\Components;

// use Closure;
// use Illuminate\Contracts\View\View;
// use Illuminate\View\Component;

// class RecentPosts extends Component
// {


//     public $posts;
//     public function __construct($posts)
//     {
//         $this->posts = $posts;
//     }


//     public function render(): View|Closure|string
//     {
//         return view('components.recent-posts');
//     }
// }

namespace App\View\Components;

use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class RecentPosts extends Component
{
    public $posts;

    /**
     * Create a new component instance.
     *
     * @param  array  $posts
     * @return void
     */
    public function __construct($posts)
    {
        $this->posts = $posts;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render(): View|string
    {
        return view('components.recent-posts');
    }
}


/**
 * Create a new component instance.
 */

/**
 * Get the view / contents that represent the component.
 */
