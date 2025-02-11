<?php

namespace App\Presenters;

trait CommentPresenter
{
    public function getRatingAttribute($value)
    {
        $str = '';

        for ($i = 1; $i <= 5; $i++) {
            $negr = ($i > $value) ? 'text-secondary' : 'text-warning'; // Sao không sáng sẽ có màu xám

            $str .= '<i class="fa fa-star ' . $negr . '"></i>';
        }

        return $str;
    }
}
