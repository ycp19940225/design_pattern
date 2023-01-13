<?php

namespace App\structural_mode\adapter;

interface PaperBookInterface
{
    /**
     * 翻页方法
     *
     * @return mixed
     */
    public function turnPage();

    /**
     * 打开书的方法
     *
     * @return mixed
     */
    public function open();
}