<?php

namespace App\structural_mode\adapter;

class EBookAdapter implements PaperBookInterface
{
    /**
     * @var EBookInterface
     */
    private $eBook;

    public function __construct(EBookInterface $book)
    {
        $this->eBook = $book;
    }
    public function turnPage()
    {
        $this->eBook->pressNext();
    }

    public function open()
    {
        $this->eBook->pressStart();
    }
}