<?php

namespace User\Model;

use Zend\Db\TableGateway\TableGatewayInterface;
use Zend\Db\Sql\Select;

class UserTable
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
            $select->order('date desc')->limit(10);
        });
        return $rowset->toArray();
    }
    
    public function saveMsg(User $msg){
    	$data = [
    		'content' => $msg->getContent(),
    	];
        if($msg->getId()){
            $this->tableGateway->update($data,[
                'id' => $msg->getId()
            ]);
        }
        else{
            $this->tableGateway->insert($data);    
        }
    	
    }

    public function getUser(int $id){
        $current=$this->tableGateway->select([
            'id' =>$id
        ]);
        return $current->current();
    }
    public function deleteUser(int $id){
        $this->tableGateway->delete([
            'id' => $id
        ]);
    }
}
