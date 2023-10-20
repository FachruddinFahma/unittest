<?php
class wordcount
{
    public function countwords($sentence)
    {
        return count(explode(" ",$sentence));
    }

}
?>