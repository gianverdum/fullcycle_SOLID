<?php

class Movie
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

class TheLionKing extends Movie
{
    public function play()
    {
        // play video
    }
}

class ModernTimes extends Movie
{
    public function increaseVolume()
    {
        // ops, this method is not applicable for this movie
    }
}
