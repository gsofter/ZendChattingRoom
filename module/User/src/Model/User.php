<?php

namespace User\Model;

class User
{

    protected $id;
    protected $content;
    protected $date;

    public function exchangeArray(array $data)
    {
        $this->id= $data['id'];   
        $this->content= $data['content'];   
        $this->date= $data['date'];   
    }
    public function getArrayCopy()
    {
        return [
                'id' => $this->id,
                'content' => $this->content,
                'date' => $this->date
        ];  

    }
    public function getId()
    {
       return $this->id;
    }
    public function getContent()
    {
       return $this->content;
    }
    public function getDate()
    {
       return $this->date;
    }
    
    public function setMsg($msg)
    {
        $this->content = $msg;
    }
}
