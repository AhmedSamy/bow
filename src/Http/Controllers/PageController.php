<?php

namespace Zelf\Bow\Http\Controllers;

use TCG\Voyager\Models\Page;
use Illuminate\Http\Request;

use App\Http\Requests;

class PageController extends Controller
{

    /**
     * Display the specified resource.
     *
     * @param Page $page
     * @param array $parameters
     * @return \Illuminate\Http\Response
     * @internal param int $id
     */
    public function show(Page $page, array $parameters)
    {
        $this->prepareTemplate($page, $parameters);

        return view('bow::page', compact('page'));
    }

    protected function prepareTemplate(Page $page, array $parameters)
    {
        $templates = config('bow.templates');
        if (! $page->template || ! isset($templates[$page->template])) {
            return;
        }
        $template = app($templates[$page->template]);
        $view = $template->getView();
        if (! view()->exists($view)) {
            return;
        }
        $template->prepare($view = view($view), $parameters);
        $page->view = $view;
    }
}
