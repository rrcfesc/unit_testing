<?php
/**
 * Rioxygen
 * @license  BS3-Clausule
 * @author Ricardo Ruiz <rrcfesc@gmail.com>
 */
namespace Rioxygen\Zf2AuthCore\Utils;

/**
 * <p>Class to truncate users</p>
 * @version 1.0
 */
class UserTruncate extends BaseTruncate
{
    /**
     * Truncate query table User
     * @return string
     */
    public function userTable()
    {
        $query = "truncate table `new_table`;";
        return $query;
    }
    public function insert()
    {
        return "INSERT INTO new_table (username, password, activo) VALUES('admin', MD5('123456'),1);";
    }
}