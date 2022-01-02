<?php

namespace App\View\Components;

use Illuminate\View\Component;

class gameThumbnail extends Component
{

    public $gameID;
    public $image;
    public $video;
    public $price;
    public $title;
    public $developer;
    public $publisher;
    public $reviewCount;

    public function __construct($image, $price, $title, $developer, $publisher, $reviewCount, $video, $gameID)
    {
        $this->gameID = $gameID;
        $this->image = $image;
        $this->price = $price;
        $this->title = $title;
        $this->developer = $developer;
        $this->publisher = $publisher;
        $this->reviewCount = $reviewCount;
        $this->video = $video;
    }


    public function render()
    {
        return view('components.game-thumbnail');
    }
}
