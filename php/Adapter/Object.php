
<?php

class Objects implements Adapter 
{

    private $_adapter;

    function __construct()
    {
        $this->_adapter = new math;
    }

    public function twiceOf(int $num): int
    {
        echo "정수 2배 적용";
        $_num = $this->_adapter->twoTime((float)$num);

        return (int)$_num;

    }
    public function halfOf(int $num): int
    {
        echo "hi";
        return 1;
    }



}
