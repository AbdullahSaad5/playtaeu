<?php

namespace App\View\Components;

use Illuminate\View\Component;

class userReview extends Component
{
    public $id;
    public $username;
    public $userAvatar;
    public $opinion;
    public $message;
    public $date;
    public $likes;
    public $dislikes;
    public function __construct($id, $username, $userAvatar, $opinion, $message, $date, $likes, $dislikes)
    {
        $this->id = $id;
        $this->username = $username;
        $this->userAvatar = $userAvatar;
        $this->opinion = $opinion;
        $this->message = $message;
        $this->date = $date;
        $this->likes = $likes;
        $this->dislikes = $dislikes;
    }



    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.user-review');
    }
}
