<?php
namespace Core;

use Models\Media;
use Exceptions\ItemNotFoundException;
use Interfaces\Loggable;
use Traits\HasTimestamp;

final class Library implements \IteratorAggregate {
    use HasTimestamp;
    private static int $libraryCount = 0;
    private array $collection = [];
    private Loggable $logger;

    public function __construct(Loggable $logger) {
        $this->logger = $logger;
        self::$libraryCount++;
        $this->initializeTimestamp();
        $this->logger->log("Instance Library dibuat pada " . $this->getCreationDate());
    }

    public function addItem(Media $item): void {
        $this->collection[$item->getId()] = $item;
        $this->logger->log("Item ditambahkan: " . $item->getTitle());
    }

    public function findItemById(int $id): Media {
        if (!isset($this->collection[$id])) {
            throw new ItemNotFoundException("Item dengan ID {$id} tidak ditemukan.");
        }
        return $this->collection[$id];
    }

    public function __get($name) {
        if ($name === 'totalItems') {
            return count($this->collection);
        }
        return null;
    }

    public function __toString(): string {
        return "Perpustakaan ini memiliki {$this->totalItems} item.";
    }

    public static function getLibraryCount(): int {
        return self::$libraryCount;
    }

    public function getIterator(): \ArrayIterator {
        return new \ArrayIterator($this->collection);
    }

    public function __sleep(): array {
        return ['collection'];
    }

    public function __wakeup(): void {
        echo "<b>(Info: Data library dipulihkan dari serialisasi)</b><br>";
        // Inisialisasi kembali logger yang hilang saat unserialize
        $this->logger = new class implements \Interfaces\Loggable {
            public function log(string $message): void {
                // Logger sederhana untuk objek yang dipulihkan
                echo "[LOG RESTORED]: " . htmlspecialchars($message) . "<br>";
            }
        };
    }

    public function __clone() {
        $this->collection = [];
        $this->logger->log("Library telah di-clone. Koleksi dikosongkan.");
    }
}