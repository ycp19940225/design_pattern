<?php

namespace App\Behavioral\Iterator;

class BookListIterator implements \Iterator
{
    /**
     * @var BookList
     */
    private $bookList;

    /**
     * @var int
     */
    protected $currentBook = 0;

    public function __construct(BookList $bookList)
    {
        $this->bookList = $bookList;
    }


    public function current()
    {
        return $this->bookList->getBook($this->currentBook);
    }

    public function next()
    {
        $this->currentBook++;
    }

    public function key()
    {
        return $this->currentBook;
    }

    public function valid()
    {
        return null !== $this->bookList->getBook($this->currentBook);
    }

    public function rewind()
    {
        $this->currentBook = 0;
    }
}