<?php
namespace models;
class msgModel extends abstractModel
{
    protected static $tableName = 'messages';
    public static $tableSchema = array(
        'name'          => '',
        'email'         => '',
        'messageTitle'  => '',
        'messageContent'=> '',
        'date'          => '',
    );
    protected static $primaryKey = 'id';
    protected static $uniqeRec = 'id';
}