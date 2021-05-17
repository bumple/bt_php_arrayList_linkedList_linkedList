<?php


class LinkedList
{
    public mixed $firstNode;
    public mixed $lastNode;
    public int $count;

    public function __construct()
    {
        $this->count = 0;
        $this->firstNode = null;
        $this->lastNode = null;
    }

    public function addFirst($data)
    {
        $node = new Node($data);
        if (!$this->firstNode) {
            $this->firstNode = $node;
            $this->lastNode = $node;
        } else {
            $node->link = $this->firstNode;
            $this->firstNode = $node;
        }
        $this->count++;
    }

    public function addEnd($data)
    {
        $node = new Node($data);
        if (!$this->firstNode) {
            $this->firstNode = $node;
        } else {
            $this->lastNode->link = $node;
        }
        $this->lastNode = $node;
        $this->count++;
    }

    public function add($data, $index)
    {
        if ($index == 0) {
            $this->addFirst($data);
        } else {
            $node = new Node($data);
            $preNode = $this->firstNode;
            $currNode = $this->firstNode;

            for ($i = 1; $i < $index; $i++) {
                $preNode = $currNode;
                $currNode = $preNode->link;
            }

            $temLink = $currNode->link;

            $currNode->link = $node;
            $node->link = $temLink;
        }

    }

    public function removeIndex($index)
    {
        if ($index == 0) {
            $preNode = $this->firstNode;
            $currNode = $this->firstNode;
            $currNode = $currNode->link;
            $preNode->link = null;
            $this->firstNode = $currNode;
        } else {
            $preNode = $this->firstNode;
            $currNode = $this->firstNode;

            for ($i = 1; $i < $index; $i++) {
                $preNode = $currNode;
                $currNode = $preNode->link;
            }
            $preNode->link = $currNode->link;
            $currNode->link = null;
        }
    }

    public function getCount()
    {
        return $this->count;
    }


    public function readList(): array
    {
        $listData = [];
        $current = $this->firstNode;

        while (!is_null($current)) {
            array_push($listData, $current->readNode());
            $current = $current->link;
        }
        return $listData;
    }

    public function removeObj($obj)
    {
        $node = new Node($obj);
        $currNode = $this->firstNode;
        $preNode = $this->firstNode;
        while ( $obj !== $currNode->readNode()){
            $preNode = $currNode;
            $currNode = $preNode->link;
        }
        $preNode->link = $currNode->link;
        $currNode->link = null;

    }


}