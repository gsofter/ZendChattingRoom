<?php
/**
 * @link      http://github.com/zendframework/ZendSkeletonApplication for the canonical source repository
 * @copyright Copyright (c) 2005-2016 Zend Technologies USA Inc. (http://www.zend.com)
 * @license   http://framework.zend.com/license/new-bsd New BSD License
 */

namespace User\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;
use Zend\Json\Json;

class IndexController extends AbstractActionController
{
    protected $table;
	public function __construct($table)
	{
		$this->table = $table;
	}
    public function indexAction()
    {
    	// $users=$this->table->fetchAll();
    	
     //    return new ViewModel();
        $this->redirect()->toRoute('user',['action' => 'list']);
    }

   
    public function messageAction()
    {
        $request = $this->getRequest();
        $content = $request->getPost()->content;
        // $content = (string) $this->params()->fromRoute('content', 'default message');

        echo $content;
        $msg = new \User\Model\User();
        $msg->setMsg($content);

         $this->table->saveMsg($msg);
 
         // return $this->redirect()->toRoute('user', [
         //   'controller' => 'index',
         //   'action' => 'addmsg'
         // ]);

    }

    

     public function listAction()
     {
        return new ViewModel([
            'users' => $this->table->fetch()
        ]);

     }

     public function listuserAction(){
        $result = ['users' => $this->table->fetch()];
        // return $this->getHelper('json')->sendJson($result);
        // return IndexController::getStaticHelper('json')->sendJson($result);
            $response = $this->getResponse();
            $response->getHeaders()->addHeaderLine( 'Content-Type', 'application/json' );
            $response->setContent(json_encode($result));
            return $response;
     }
   
}
