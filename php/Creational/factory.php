<?php

class Factory {
    static public function getInstance($type = null) {
        echo "팩토리:객체를 생성하여반환합니다.\n";
        if($type=="ko")
        return new Korean();
        //객체를 생성해서 반환함
        else if($type =="en") {
            return new English();
        }

    }
}