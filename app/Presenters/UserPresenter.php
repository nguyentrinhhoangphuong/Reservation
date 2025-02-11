<?php

namespace App\Presenters;

trait UserPresenter
{
    public function getFullNameAttribute()
    {
        return ucwords("{$this->name} {$this->surname}");
    }
}
