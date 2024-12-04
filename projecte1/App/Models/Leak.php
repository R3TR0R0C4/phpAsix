<?php
namespace App\Models;

use Core\App;
use PDO;

class Leak {
    protected static $table = "leaks";

    public $id;
    public $name;
    public $company;
    public $leak_date;
    public $lines;
    public $sensitivity_level;

    public function __construct($data = []) {
        if (isset($data['id'])) {
            $this->id = $data['id'];
        }
        $this->name = isset($data['name']) ? $data['name'] : null;
        $this->company = isset($data['company']) ? $data['company'] : null;
        $this->leak_date = isset($data['leak_date']) ? $data['leak_date'] : null;
        $this->lines = isset($data['lines']) ? $data['lines'] : null;
        $this->sensitivity_level = $data['sensitivity_level'];
    }

    public function save() {
        $db = App::get('database')->getConnection();

        if ($this->id) {
            // Update existing book
            $statement = $db->prepare('UPDATE ' . static::$table . ' SET name = :name, company = :company, leak_date = :leak_date, lines = :lines, sensitivity_level = :sensitivity_level WHERE id = :id');
            $statement->bindValue(':id', $this->id);
            $statement->bindValue(':name', $this->name);
            $statement->bindValue(':company', $this->company);
            $statement->bindValue(':leak_date', $this->leak_date);
            $statement->bindValue(':lines', $this->lines);
            $statement->bindValue(':sensitivity_level', $this->sensitivity_level);
            $statement->execute();
        } else {
            // Insert new book
            $statement = $db->prepare('INSERT INTO ' . static::$table . ' (name, company, leak_date, lines, sensitivity_level) VALUES (:name, :company, :leak_date, :lines, :sensitivity_level)');
            $statement->bindValue(':name', $this->name);
            $statement->bindValue(':company', $this->company);
            $statement->bindValue(':leak_date', $this->leak_date);
            $statement->bindValue(':lines', $this->lines);
            $statement->bindValue(':sensitivity_level', $this->sensitivity_level);
            $statement->execute();

            // Set the id of the new book
            if (!$this->id) {
                $this->id = $db->lastInsertId();
            }
        }
    }

    public static function all() {
        $db = App::get('database')->getConnection();
        $statement = $db->prepare('SELECT * FROM ' . static::$table);
        $statement->execute();

        $leaks = [];
        $results = $statement->fetchAll(PDO::FETCH_ASSOC);
        foreach ($results as $result) {
            $leaks[] = new self($result);
        }
        return $leaks;
    }

    public static function find($id) {
        $db = App::get('database')->getConnection();
        $statement = $db->prepare('SELECT * FROM ' . static::$table . ' WHERE id = :id');
        $statement->bindValue(':id', $id);
        $statement->execute();

        $data = $statement->fetch(PDO::FETCH_ASSOC);
        return $data ? new self($data) : null;
    }

    public static function delete($id) {
        $db = App::get('database')->getConnection();
        $statement = $db->prepare('DELETE FROM ' . static::$table . ' WHERE id = :id');
        $statement->bindValue(':id', $id);
        $statement->execute();
    }

    public function destroy() {
        if ($this->id) {
            self::delete($this->id);
        }
    }
}
