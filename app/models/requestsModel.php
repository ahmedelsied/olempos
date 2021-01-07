<?php
namespace models;
class requestsModel extends abstractModel
{
    protected static $tableName = 'requests';
    public static $tableSchema = array(
        'name'              => '',
        'email'             => '',
        'phone'             => '',
        'certific'          => '',
        'mainServiceID'     => '',
        'branchServiceID'   => 0,
        'time'              => '',
        'note'              => '',
        'dateRequest'       => '',
        'completed'         => 0,
    );
    protected static $primaryKey = 'id';
    protected static $uniqeRec = 'id';
}