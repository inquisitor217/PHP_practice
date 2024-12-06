<?php

class Task {
    private $id;
    private $title;
    private $description;
    private $created_at;
    private $due_date;
    private $status;
    private $priority;

    public function __construct($id, $title,$description,$created_at,$due_date,$status,$priority) {
        $this->id = $id;
        $this->title = $title;
        $this->description = $description;
        $this->created_at = date('d-m-Y H:i:s'); //тек дата и время
        $this->due_date = $due_date;
        $this->status = $status;
        $this->priority = $priority;

        // Инициализация подключения к базе данных через PDO
        $this->conn = $this->getConnection();
    }


    // Метод для получения соединения с БД
    private function getConnection(){
        $host = '127.127.126.49';
        $port = '5432';
        $dbname = 'my_database';
        $user = 'admin';
        $password = 'adminus228';

        try {
            $conn = new PDO('pgsql:host=$host;port=$port;dbname=$dbname', $user, $password);
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $conn;
        } catch (PDOException $e) {
            die("Ошибка подключения: ".$e->getMessage());
        }
    }

    // Метод для сохранения задачи в БД
    public function save(){
        try {
            // Подготавливаем запрос для вставки новой задачи
            $sql = 'INSERT INTO tasks (title, description, created_at, due_date, status, priority) VALUES (:title, :description, :created_at, :due_date, :status, :priority)';

            // Подготовка SQL-запроса
            $stmt = $this->conn->prepare($sql); // Используется подготовленный запрос (prepared statement), чтобы избежать SQL-инъекций.

            // Привязка параметров (для вставки задачи в таблицу tasks)
            $stmt->bindParam(':title', $this->title);
            $stmt->bindParam(':description', $this->description);
            $stmt->bindParam(':created_at', $this->created_at);
            $stmt->bindParam(':due_date', $this->due_date);
            $stmt->bindParam(':status', $this->status);
            $stmt->bindParam(':priotiry', $this->priority);

            // Выполнение запроса
            $stmt->execute();
            echo "Задача успешно сохранена!";
        } catch (PDOException $e) {
            echo "Ошибка сохранения задачи: ".$e->getMessage();
        }
    }

    // Доп методы для работы с задачей (например, обновление статуса, изменение данных и т. д.)
    // Пример метода для обновления статуса задачи
    public function updateStatus($newStatus) {
        try {
            $sql = 'UPDATE tasks SET status = :status WHERE id = :id';
            $stmt = $this->conn->prepare($sql);
            $stmt->bindParam(':status', $newSatatus);
            $stmt->bindParam(':id', $this->id);
            $stmt->execute();
            echo "Статус задачи обновлен!";
        } catch (PDOException $e) {
            echo "Ошибка при обновлении статуса: ".$e->getMessage();
        }
    }

    // Геттеры и сеттеры для работы с полями класса
    public function getId() {
        return $this->id;
    }

    public function getTitle() {
        return $this->title;
    }
    public function getDescription() {
        return $this->description;
    }
    public function getCreatedAt() {
        return $this->created_at;
    }
    public function getDueDate() {
        return $this->due_date;
    }
    public function getStatus() {
        return $this->status;
    }
    public function getPriority() {
        return $this->priority;
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
