<?php
class Student {
    private $conn;
    private $table = "students";

    public function __construct($db) {
        $this->conn = $db;
    }

    // GET ALL
    public function getAllStudents() {
        $stmt = $this->conn->prepare("SELECT * FROM {$this->table}");
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    // ADD
    public function addStudent($name, $course, $year_level) {
        $stmt = $this->conn->prepare(
            "INSERT INTO students (name, course, year_level)
             VALUES (?, ?, ?)"
        );

        return $stmt->execute([$name, $course, $year_level]);
    }

    // UPDATE
    public function updateStudent($id, $name, $course, $year_level) {
        $stmt = $this->conn->prepare(
            "UPDATE students 
             SET name=?, course=?, year_level=?
             WHERE id=?"
        );

        return $stmt->execute([$name, $course, $year_level, $id]);
    }

    // DELETE
    public function deleteStudent($id) {
        $stmt = $this->conn->prepare("DELETE FROM students WHERE id=?");

        return $stmt->execute([$id]);
    }
}