<?php namespace Zelf\Bow\Templates;

use TCG\Voyager\Models\Post;
use Carbon\Carbon;
use Illuminate\View\View;

class HomeTemplate extends AbstractTemplate
{
    protected $view = 'bow::home';

    protected $posts;

    public function __construct(Post $posts)
    {
        $this->posts = $posts;
    }

    public function prepare(View $view, array $parameters)
    {
        $posts = $this->posts
            ->take(3)
            ->get();

        $view->with('posts', $posts);
    }
}
