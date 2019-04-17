<?php

namespace Chat\Model;

use Zend\Db\TableGateway\TableGatewayInterface;
use Zend\Db\Sql\Select;

class ChatTable
{

    protected $tableGateway;

    public function __construct(TableGatewayInterface $tableGateway)
    {
        $this->tableGateway = $tableGateway;

    }


    public function fetchAll()
    {
        return $this->tableGateway->select();
    }

    public function fetch()
    {
        $rowset = $this->tableGateway->select(function (Select $select) {
            $select->order('name DSC')->limit(5);
        });
        return $rowset->toArray();
    }
    
    public function saveChat(Chat $chat){
    	$data = [
    		'content' => $chat->getChat(),
    	];
        if($chat->getId()){
            $this->tableGateway->update($data,[
                'id' => $chat->getId()
            ]);
        }
        else{
            $this->tableGateway->insert($data);    
        }
    	
    }

   
}
