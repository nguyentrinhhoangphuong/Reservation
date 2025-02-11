<?php

namespace App\Presenters;

trait AddressPresenter
{
    public function getAddressAttribute()
    {
        return $this->number . ' ' . $this->street;
    }
}
