<?php

use Illuminate\Database\Seeder;
use TCG\Voyager\Models\Page;

class BowPagesTableSeeder extends Seeder
{
    /**
     * Auto generated seed file.
     *
     * @return void
     */
    public function run()
    {
        $blogPage = Page::firstOrNew(['name' => 'blog']);
        $blogPostPage = Page::firstOrNew(['name' => 'blog.post']);
        $homePage = Page::firstOrNew(['name' => 'home']);
        if (!$blogPage->exists) {
            $blogPage->fill([
                'author_id' => 0,
                'title'     => 'Blog',
                'slug'     => '/blog',
                'status'           => 'ACTIVE',
                'template'           => 'blog',
                'name'           => 'blog',
            ])->save();
        }

        if (!$blogPostPage->exists) {
            $blogPostPage->fill([
                'author_id' => 0,
                'title'     => 'Blog',
                'slug'     => '/blog/{id}/{slug}',
                'status'           => 'ACTIVE',
                'template'           => 'blog.post',
                'name'           => 'blog.post',
            ])->save();
        }

        if (!$homePage->exists) {
            $homePage->fill([
                'author_id' => 0,
                'title'     => 'Home',
                'slug'     => '/',
                'status'           => 'ACTIVE',
                'template'           => 'home',
                'name'           => 'home',
            ])->save();
        }
    }
}
