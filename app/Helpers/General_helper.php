<?php

function getRecords($table, $colum, $orderBY,$where=NULL)
{
    $db= \Config\Database::connect();
    $builder = $db->table($table)->where($where)->orderBy($colum,$orderBY)->get();
    $output = $builder->getResult();
    return $output;

}
function distinctRecords($table,$column,$where=NULL)
{
    $db= \Config\Database::connect();
    $builder = $db->table($table)->select($column)->distinct($column)->where($where)->get();
    $output = $builder->getResult();
    return $output;
}

function getEnumValue($table,$column)
{
    $db= \Config\Database::connect();
    $builder=$db->query("SELECT column_type FROM information_schema.columns 
		WHERE table_name = '$table' AND column_name = '$column' ");
    $output = $builder->getRow();
    $result = str_replace(array("enum('", "')", "''"), array('', '', "'"), $output->column_type);
    $enums = explode("','", $result);
    return $enums;

}

function getByColumn($table,$select,$where)
{
    $db= \Config\Database::connect();
    $builder = $db->table($table)->select($select)->where($where)->get();
    $output = $builder->getRow();
    return $output;
}

function returnPrices()
{
    $data=distinctRecords('sell','price',$where=array('is_del'=>'1'));
    return $data;
}











