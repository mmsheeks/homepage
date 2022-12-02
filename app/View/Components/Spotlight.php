<?php

namespace App\View\Components;

use Illuminate\View\Component;
use App\Models\Spotlight as Model;

class Spotlight extends Component
{
    public string $title;
    public string $subtitle;
    public string $image;
    public string $detail;
    public array $skills;
    public string $href = '';
    public string $linkText = '';

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct(Model $model)
    {
        $this->title = $model->title;
        $this->subtitle = $model->subtitle;
        $this->image = $model->image;
        $this->detail = $model->detail;
        $this->skills = $model->skills;
        if ($model->hasLink) {
            $this->href = $model->href;
            $this->linkText = $model->linkText;
        }
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.spotlight');
    }
}
