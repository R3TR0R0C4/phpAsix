<?php
namespace App\Models;

use Core\App;
use PDO;

class Book {
    protected static $table = "books";

    public $id;
    public $name;
    public $author;
    public $releaseYear;
    public $genre;

    public function __construct($data = []) {
        if (isset($data['id'])) {
            $this->id = $data['id'];
        }
        $this->name = isset($data['name']) ? $data['name'] : null;
        $this->author = isset($data['author']) ? $data['author'] : null;
        $this->releaseYear = isset($data['releaseYear']) ? $data['releaseYear'] : null;
        $this->genre = isset($data['genre']) ? $data['genre'] : null;
    }

    public function save() {
        $db = App::get('database')->getConnection();

        if ($this->id) {
            // Update existing book
            $statement = $db->prepare('UPDATE ' . static::$table . ' SET name = :name, author = :author, releaseYear = :releaseYear, genre = :genre WHERE id = :id');
            $statement->bindValue(':id', $this->id);
            $statement->bindValue(':name', $this->name);
            $statement->bindValue(':author', $this->author);
            $statement->bindValue(':releaseYear', $this->releaseYear);
            $statement->bindValue(':genre', $this->genre);
            $statement->execute();
        } else {
            // Insert new book
            $statement = $db->prepare('INSERT INTO ' . static::$table . ' (name, author, releaseYear, genre) VALUES (:name, :author, :releaseYear, :genre)');
            $statement->bindValue(':name', $this->name);
            $statement->bindValue(':author', $this->author);
            $statement->bindValue(':releaseYear', $this->releaseYear);
            $statement->bindValue(':genre', $this->genre);
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

        $books = [];
        $results = $statement->fetchAll(PDO::FETCH_ASSOC);
        foreach ($results as $result) {
            $books[] = new self($result);
        }
        return $books;
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
