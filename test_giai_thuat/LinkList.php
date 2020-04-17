<?php 
include "Node.php";
class LinkList
{
        protected  $firstNode;
        protected  $lastNode;
        protected $count;

        public function __construct()
        {
            $this->firstNode = null;
            $this->lastNode = null;
            $this->count = 0;
        }
        public function insertFistNode($data){
                $node = new KNode($data);
                $node->link = $this->firsNode;
                $node = $this->firsNode;
                if ($this->lastNode == null){
                    $this->lastNode = $node;
                }
                $this->count++;
        }
        function insertLastNode($data){

        }

}


 ?>