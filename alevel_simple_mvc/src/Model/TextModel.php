<?php


namespace Model;


class TextModel extends Model
{
    public function __construct()
    {
        parent::__construct();
    }

    public function tableName()
    {
        return "text_table";
    }
}