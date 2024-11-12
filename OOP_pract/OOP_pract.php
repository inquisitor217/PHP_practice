<?php
namespace Russia {
    abstract class Human {
        protected $name;
        protected $age;
        protected $job;
        protected $money;
        public function __construct($name,$age,$job,$money) {
            $this->name=$name;
            $this->age=$age;
            $this->job=$job;
            $this->money=$money;
        }
        public function intro() {
            echo "{$this->name}; возраст: {$this->age}; работа: {$this->job}; деньги: {$this->money} руб.";
        }
    }

    class Bomj extends Human {}
    class Worker extends Human {}
    class Major extends Human {}
}

namespace USA {
    abstract class SemiHuman {
        protected $name;
        protected $nation;
        protected $gender;
        protected $orientation;
        public function __construct($name,$nation,$gender,$orientation) {
            $this->name=$name;
            $this->nation=$nation;
            $this->gender=$gender;
            $this->orientation=$orientation;
        }
        public function intro() {
            echo "{$this->name}; nation: {$this->nation}; gender: {$this->gender}; orientation: {$this->orientation}";
        }
    }

    class Nigger extends SemiHuman {};
    class Asiat extends SemiHuman {};
    class Femka extends SemiHuman {};
    class Gay extends SemiHuman {};
}

namespace {
    $human1 = new \Russia\Bomj('Петя', 63, 'безработный', 10);
    echo '<b>'.get_class($human1).'</b>'.' '.' ';
    $human1->intro();

    echo '<br>'.'<br>';

    $human2 = new \Russia\Worker('Александр', 32, 'менеджер', 40000);
    echo '<b>'.get_class($human2).'</b>'.' '.' ';
    $human2->intro();

    echo '<br>'.'<br>';

    $human3 = new \Russia\Major('Виктор Степанович', 62, 'бизнесмен', 2000000000);
    echo '<b>'.get_class($human3).'</b>'.' '.' ';
    $human3->intro();

    echo '<br>'.'<br>';
}

namespace {
    $semihuman1 = new \USA\Nigger('Jonh', 'african', 'man', 'natural');
    echo '<b>'.get_class($semihuman1).'</b>'.' '.' ';
    $semihuman1->intro();

    echo '<br>'.'<br>';

    $semihuman2 = new \USA\Asiat('ChangLee Kuang', 'chaneese', 'man', 'natural');
    echo '<b>'.get_class($semihuman2).'</b>'.' '.' ';
    $semihuman2->intro();

    echo '<br>'.'<br>';

    $semihuman3 = new \USA\Gay('Charing', 'pendosian', 'non-binary', 'gay');
    echo '<b>'.get_class($semihuman3).'</b>'.' '.' ';
    $semihuman3->intro();
}
?>