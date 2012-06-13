<?php

/**
 * DiningTableTable
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 */
class DiningTableTable extends Doctrine_Table
{
    /**
     * Returns an instance of this class.
     *
     * @return object DiningTableTable
     */
    public static function getInstance()
    {
        return Doctrine_Core::getTable('DiningTable');
    }
    
    public function getDiningTable()
    {
        return $this->createQuery('p');
    }
    
    public function getUnusedDiningTable()
    {
        $p = $this->getDiningTable()
                ->where('p.id NOT IN (SELECT t.dining_table_id FROM Tablet t)');
        
        return $p;
    }
}