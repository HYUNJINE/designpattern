클래스의 객체 생성 처리를 위임한다
<?php

class Hello {
    public function greeting() {
        return "안녕하세요";

        $ko  = new Korean;
        return $ko->text();
    }
}

?>

강력한 결합은 지양한다.
