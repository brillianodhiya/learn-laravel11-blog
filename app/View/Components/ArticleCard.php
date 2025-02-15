<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;
// use Illuminate\Pagination\LengthAwarePaginator;

class ArticleCard extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct(
        public object $article
    )
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.article-card');
    }
}
