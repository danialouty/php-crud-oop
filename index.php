<?php


<?php

class Student {

    private $conn;

    public function __construct($connection) {
        $this->conn = $connection;
    }

    // CREATE: Add student
    public function create($name, $email) {

        $sql = "INSERT INTO students (name, email)
                VALUES (?, ?)";

        $stmt = mysqli_prepare($this->conn, $sql);
        mysqli_stmt_bind_param($stmt, "ss", $name, $email);

        return mysqli_stmt_execute($stmt);
    }

    // READ: Get all students
    public function read() {

        $sql = "SELECT * FROM students";

        $result = mysqli_query($this->conn, $sql);

        return mysqli_fetch_all($result, MYSQLI_ASSOC);
    }

    // UPDATE: Edit student
    public function update($id, $name, $email) {

        $sql = "UPDATE students
                SET name = ?, email = ?
                WHERE id = ?";

        $stmt = mysqli_prepare($this->conn, $sql);
        mysqli_stmt_bind_param($stmt, "ssi", $name, $email, $id);

        return mysqli_stmt_execute($stmt);
    }

    // DELETE: Remove student
    public function delete($id) {

        $sql = "DELETE FROM students WHERE id = ?";

        $stmt = mysqli_prepare($this->conn, $sql);
        mysqli_stmt_bind_param($stmt, "i", $id);

        return mysqli_stmt_execute($stmt);
    }

}
?>
