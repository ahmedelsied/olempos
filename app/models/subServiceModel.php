<?php
namespace models;
class subServiceModel extends abstractModel
{
    protected static $tableName = 'branchservices';
    public static $tableSchema = array(
        'title'     => '',
        'titleGer'  => '',
        'serviceID' => '',
    );
    protected static $primaryKey = 'id';
    protected static $uniqeRec = 'id';
}