<?php




abstract class Algorism
{
    protected $Composite;
    //빌더객체 저장;

    abstract public function setCpu($cpu);
    abstract public function setRam($size);
    abstract public function setStorage($size);

    public function getInstance()
    {
        return $this->Composite;
    }
}