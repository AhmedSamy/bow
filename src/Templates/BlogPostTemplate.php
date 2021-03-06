<?php namespace Zelf\Bow\Templates;

use TCG\Voyager\Models\Post;
use Carbon\Carbon;
use Illuminate\View\View;

class BlogPostTemplate extends AbstractTemplate
{
    protected $view = 'bow::blog.post';

    protected $posts;

    public function __construct(Post $posts)
    {
        $this->posts = $posts;
    }

    public function prepare(View $view, array $parameters)
    {
        $post = $this->posts->where('id', $parameters['id'])->where('slug', $parameters['slug'])->first();

        $view->with('post', $post);
    }
}
