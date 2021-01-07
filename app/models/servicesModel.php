<?php
namespace models;
class servicesModel extends abstractModel
{
    protected static $tableName = 'services';
    public static $tableSchema = array(
        'title'     => '',
        'titleGer'     => '',
        'descr'     => '',
        'descrGer'     => '',
        'img'       => '',
        'certific'  => '',
        'time'      => '',
    );
    protected static $primaryKey = 'id';
    protected static $uniqeRec = 'id';
}