<?php

class SitemapController extends Zend_Controller_Action {
    protected $em = null;

    public function init(){
        $this->em = Zend_Registry::get('em');
    }

    public function indexAction(){
        
        $query = $this->em->createQuery(
                "SELECT s FROM Pname\Entity\Sitemap s");
        $this->view->sites = $query->getResult();
    
    }

}