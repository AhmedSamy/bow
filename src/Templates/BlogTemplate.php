<?php namespace Zelf\Bow\Templates;

use TCG\Voyager\Models\Post;
use Carbon\Carbon;
use Illuminate\View\View;

class BlogTemplate extends AbstractTemplate
{
    protected $view = 'bow::blog';

    protected $posts;

    public function __construct(Post $posts)
    {
        $this->posts = $posts;
    }

    public function prepare(View $view, array $parameters)
    {
        $posts = $this->posts
            // ->where('published_at', '<', Carbon::now())
            // ->orderBy('published_at', 'desc')
            ->paginate(10);

        $view->with('posts', $posts);
    }
}
