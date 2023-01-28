<?php

class Test
{
    private string $string;
    private int $int;

    public function __construct(string $string, int $int)
    {
        $this->string = intval($string);
        $this->int = (string) $int;
    }
}