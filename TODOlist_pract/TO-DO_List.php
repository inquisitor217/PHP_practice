<?php

class Task {
    private $title;
    private $description;
    private $created_at;
    private $due_date;
    private $check;

    public function __construct($title,$description,$created_at,$due_date,$check) {
        $this->title = $title;
        $this->description = $description;
        $this->created_at = $created_at;
        $this->due_date = $due_date;
        $this->check = $check;
    }

    public function getTitle() {
        return $this->title;
    }
    public function getDescription() {
        return $this->description;
    }
    public function getCreated() {
        return $this->created_at;
    }
    public function getDue() {
        return $this->due_date;
    }
    public function getCheck()
    {
        return $this->check;
    }

    public function getTask(): array
    {
        return [
            'title' => $this->title,
            'description' => $this->description,
            'created_at' => $this->created_at,
            'due_date'=>$this->due_date,
            'check' => $this->check
        ];
    }
}


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $title = isset($_POST['title']) ? $_POST['title'] : '';
    $description = isset($_POST['description']) ? $_POST['description'] : '';  // Пустая строка по умолчанию
    $created_at = isset($_POST['created_at']) ? $_POST['created_at'] : '';
    $due_date = isset($_POST['due_date']) ? $_POST['due_date'] : '';
    $check = isset($_POST['check']) ? $_POST['check'] : 0;  // Если галочка не установлена, значение будет 0
    
    $task = new Task($title, $description, $created_at, $due_date, $check);

    print_r($task->getTask());
}

?>
