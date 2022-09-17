<?php

trait SampleTrait{
    public abstract function samplefunction(string $name) : string;
}

class SampleClass
{
    //ini akan error klo php 8
    use SampleTrait;
    public function samplefunction(int $name): int
    {
        // TODO: Implement samplefunction() method.
    }
}
