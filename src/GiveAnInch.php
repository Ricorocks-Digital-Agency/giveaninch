<?php

namespace RicorocksDigitalAgency\Giveaninch;

class GiveAnInch
{
    protected $fromLat, $fromLng;
    protected $toLat, $toLng;

    public function from($lat, $lng)
    {
        $this->fromLat = $lat;
        $this->fromLng = $lng;

        return $this;
    }

    public function to($lat, $lng)
    {
        $this->toLat = $lat;
        $this->toLng = $lng;

        return $this;
    }

    public function getDistance()
    {
        $ky = 40000 / 360;
        $kx = cos(pi() * $this->fromLat / 180.0) * $ky;
        $dy = abs($this->fromLat - $this->toLat) * $ky;
        $dx = abs($this->fromLng - $this->toLng) * $kx;

        return sqrt($dx * $dx + $dy * $dy);
    }

    public function isWithin(float $radius)
    {
        return $this->getDistance() < $radius;
    }

}
