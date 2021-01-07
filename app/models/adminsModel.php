<?php
namespace models;
class adminsModel extends abstractModel
{
    protected static $tableName = 'admins';
    public static $tableSchema = array(
        'username'     => '',
        'password'     => ''
    );
    protected static $primaryKey = 'id';
    protected static $uniqeRec = 'username';
}