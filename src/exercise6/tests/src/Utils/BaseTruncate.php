<?php
/**
 * Rioxygen
 * @license  BS3-Clausule
 * @author Ricardo Ruiz <rrcfesc@gmail.com>
 */
namespace Rioxygen\Zf2AuthCore\Utils;

/**
 * <p>Base to truncate</p>
 * @version 1.0
 */
abstract class BaseTruncate
{
    /**
     * <p>Unlink foreing Keys on truncate</p>
     * @return string
     */
    public function unChainFk()
    {
        $query =  "SET FOREIGN_KEY_CHECKS = 0;";
        return $query;
    }
    /**
     * <p>Link foreing key on truncate</p>
     * @return string
     */
    public function chainFk()
    {
        $query =  "SET FOREIGN_KEY_CHECKS = 1;";
        return $query;
    }
}