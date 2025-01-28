<?php

interface Movie
{
    public function play();
}

interface AudioControl
{
    public function increaseVolume();
}

class TheLionKing implements Movie, AudioControl
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
}
