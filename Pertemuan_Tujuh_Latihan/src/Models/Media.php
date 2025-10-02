<?php
namespace Models;
// Konsep: Abstract Class, Inheritance, Scope, Class Constants, Final, Magic Methods
abstract class Media {
    protected string $title;
    private int $id;
    protected static int $counter = 0;
    const MEDIA_TYPE = 'Generic';

    public function __construct(string $title) {
        $this->title = $title;
        $this->id = ++self::$counter;
        echo "<i>(Info: Objek Media baru dibuat)</i><br>";
    }
    abstract public function getDetails(): string;
    public function getTitle(): string {
        return $this->title;
    }
    public static function getMediaType(): string {
        return static::MEDIA_TYPE; // Late Static Binding
    }
    final public function getId(): int {
        return $this->id;
    }
    public function __destruct() {
        echo "<i>(Info: Objek Media '{$this->title}' dihapus)</i><br>";
    }
}