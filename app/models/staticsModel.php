<?php
namespace models;
class staticsModel extends abstractModel
{
    protected static $tableName = 'statics';
    public static $tableSchema = array(
        'customers' => '',
        'hours'     => '',
    );
    protected static $primaryKey = 'customers';
    protected static $uniqeRec = null;
}