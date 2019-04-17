<?php

namespace Chat\Model;

class Chat
{

    protected $id;
    protected $content;
    protected $date;

    
    public function setChat($content)
    {
        $this->content= $content;
    }

    public function getChat($content)
    {
        return $this->content;
    }
}
