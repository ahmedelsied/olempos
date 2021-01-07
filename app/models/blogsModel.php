<?php
namespace models;
class blogsModel extends abstractModel
{
    protected static $tableName = 'blogs';
    public static $tableSchema = array(
        'title'     => '',
        'titleGer'  => '',
        'content'   => '',
        'contentGer'=> '',
        'imgs'      => '',
        'tags'      => '',
        'date'      => '',
    );
    protected static $primaryKey = 'id';
}