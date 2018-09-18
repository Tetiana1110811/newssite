<?php

class Publication
{
    public $id;
    public $title;
    public $date;
    public $short_content;
    public $content;
    public $preview;
    public $category;

    public function printTitleNews(){

        echo  $this->title;

        echo '<br>';

    }

    public function printDateNews(){


        echo  $this->date;

        echo '<br>';
    }

    public function printContentNews(){

    echo  $this->content;

    echo '<br>';
}
    public function printCategoryNews(){

        echo  $this->category;

        echo '<br>';
    }

    function __construct($row)
    {
        $this->id = $row['id'];
        $this ->title = $row['title'];
        $this ->date = $row['date'];
        $this->short_content = $row['short_content'];
        $this -> content = $row['content'];
        $this->preview = $row ['preview'];
        $this->category = $row['category'];

    }

}










