<?php
class ProductModel extends Algorism
{
    public function __construct()
    {
        echo "Algorism ".__CLASS__."객체를 생성하였습니다.\n";
        $this->Composite = new Computer();

    }

    public function setCpu($cpu)
    {
        echo "CPU를 설정합니다.  \n";
        $this->Composite->_cpu = $cpu;
    }

    public function setRam($size)
    {
        echo "RAM을 설정합니다>>";
        foreach ($size as $mem) {
            echo "슬롯 ".$mem."GB 장착/";
            array_push($this->Composite->_ram, new Memory($mem));
        }
    }

    public function setStorage($size)
    {
        echo "Storage를 설정합니다>>";
        foreach ($size as $disk) {
            echo "슬롯 ".$disk."GB 장착/";
            array_push($this->Composite->_storage, new Storage($disk));
        }
        echo "\n";
        return $this;
    }
}