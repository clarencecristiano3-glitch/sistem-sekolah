<?php
namespace App\Models;
require_once '../app/core/Database.php';

use App\Core\Database;

class Student extends Database
{
    protected $table = 'students';

    public function getStudents()
    {
        $students = [];

        $query = "SELECT * from {$this->table}";
        $stmt = $this->connection->prepare($query);
        $stmt->execute();

        $result = $stmt->get_result();

        while ($student = $result->fetch_assoc()) {
            $students[] = $student;
        }

        return $students;
    }

    public function getStudent(int $id)
    {
        $query = "SELECT * from {$this->table} where id = ?";
        $stmt = $this->connection->prepare($query);
        $stmt->bind_param('i', $id);
        $stmt->execute();

        $result = $stmt->get_result();
        $student = $result->fetch_assoc();

        return $student;
    }

    public function createStudent(string $name, string $email)
    {
        $query = "INSERT INTO {$this->table} (name, email) VALUES (?, ?)";

        $stmt = $this->connection->prepare($query);
        $stmt->bind_param('ss', $name, $email);
        $stmt->execute();

        return $stmt->insert_id;
    }
}