<?php
require_once "model/Student.php";

class StudentController {
    private $student;

    public function __construct($db) {
        $this->student = new Student($db);
    }

    public function index() {
        $students = $this->student->getAllStudents();
        include "view/index.php";
    }

    public function store($data) {
        $this->student->addStudent(
            $data['name'],
            $data['course'],
            $data['year_level']
        );

        header("Location: view/index.php");
    }

    public function update($data) {
        $this->student->updateStudent(
            $data['id'],
            $data['name'],
            $data['course'],
            $data['year_level']
        );

        header("Location: view/index.php");
    }

    public function delete($id) {
        $this->student->deleteStudent($id);

        header("Location: view/index.php");
    }
}