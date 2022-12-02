<?php

namespace App\Models;

class Spotlight
{
    public string $title;
    public string $subtitle;
    public string $image;
    public string $detail;
    public array $skills;
    public bool $hasLink = false;
    public string $href;
    public string $linkText;

    public function __construct()
    {
    }

    public function __call(string $name, array $args): self
    {
        if (property_exists($this, $name)) {
            $this->$name = $args[0];
        }
        return $this;
    }

    public function link(string $href, string $text): self
    {
        $this->href = $href;
        $this->linkText = $text;
        $this->hasLink = true;
        return $this;
    }
}
