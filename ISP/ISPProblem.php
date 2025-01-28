<?php

interface Movie
{
    public function play();

    public function increaseVolume();
}

class TheLionKing implements Movie
{
    public function play()
    {
        // play video
    }

    public function increaseVolume()
    {
        // increase volume
    }
}

class ModernTimes implements Movie
{
    public function play()
    {
        // play video
    }

    public function increaseVolume()
    {
        // this method is not applicable for this movie
    }
}
