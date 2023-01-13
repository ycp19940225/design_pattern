<?php

namespace App\structural_mode\adapter\Tests;

use App\structural_mode\adapter\Book;
use App\structural_mode\adapter\EBookAdapter;
use App\structural_mode\adapter\Kindle;
use App\structural_mode\adapter\PaperBookInterface;
use PHPUnit\Framework\TestCase;

class EBookAdapterTest extends TestCase
{
    /**
     * @return array
     */
    public function getBook()
    {
        return array(
            array(new Book()),
            // 我们在适配器中引入了电子书
            array(new EBookAdapter(new Kindle()))
        );
    }

    /**
     * 客户端只知道有纸质书，实际上第二本书是电子书，
     * 但是对客户来说代码一致，不需要做任何改动
     *
     * @param PaperBookInterface $book
     *
     * @dataProvider getBook
     */
    public function testIAmAnOldClient(PaperBookInterface $book)
    {
        $this->assertTrue(method_exists($book, 'open'));
        $this->assertTrue(method_exists($book, 'turnPage'));
    }
}
