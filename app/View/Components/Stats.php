<?php

namespace App\View\Components;

use App\Models\Site;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Collection;
use Illuminate\View\Component;

class Stats extends Component
{
    public Collection $featuredSites;

    public float $rating;

    public int $siteCounts;

    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        $site = Site::query();
        $this->rating = $site->average('rating');
        $this->siteCounts = $site->count();
        $this->featuredSites = $site->where('is_featured', true)->get();
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.stats');
    }
}
