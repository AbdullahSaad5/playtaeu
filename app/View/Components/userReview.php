<?php

namespace App\View\Components;

use Illuminate\View\Component;

class userReview extends Component
{
    public $username;
    public $userAvatar;
    public $opinion;
    public $message;
    public $date;
    public $likes;
    public function __construct($username, $userAvatar, $opinion, $message, $date, $likes)
    {
        $this->username = $username;
        $this->userAvatar = $userAvatar;
        $this->opinion = $opinion;
        $this->message = $message;
        $this->date = $date;
        $this->likes = $likes;
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
