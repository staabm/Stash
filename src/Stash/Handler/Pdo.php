<?php

/*
 * This file is part of the Stash package.
 *
 * (c) Robert Hafner <tedivm@tedivm.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Stash\Handler;

use Stash;
use Stash\Exception\RuntimeException;

/**
 * The StashPdo is a wrapper for the PDO extension. It allows Stash to have
 * centralized persistant storage.
 *
 * @package Stash
 * @author  Robert Hafner <tedivm@tedivm.com>
 */
class Pdo implements HandlerInterface
{
    protected $dsn;
    protected $username;
    protected $password;
    protected $options = array();


    /**
     * This function should takes an array which is used to pass option values to the handler.
     *
     * @param array $options
     */
    public function __construct(array $options = array())
    {

        if(!isset($options['dsn']))
        {
            // this is bad. do something!
        }

        $dsn = $options['dsn'];

        $username = isset($options['username']) ? $options['username'] : null;
        $password = isset($options['[password']) ? $options['password'] : null;

        if(isset($options['options']))
        {
            if(!is_array($options['options']))
            {
                // this is also bad, do something!
            }
        }


    }

    /**
     * Empty destructor to maintain a standardized interface across all handlers.
     *
     */
    public function __destruct()
    {

    }

    /**
     * This function should return the data array, exactly as it was received by the storeData function, or false if it
     * is not present. This array should have a value for "createdOn" and for "return", which should be the data the
     * main script is trying to store.
     *
     * @param array $key
     * @return array
     */
    public function getData($key)
    {

    }

    /**
     * This function takes an array as its first argument and the expiration time as the second. This array contains two
     * items, "createdOn" describing the first time the item was called and "return", which is the data that needs to be
     * stored. This function needs to store that data in such a way that it can be retrieced exactly as it was sent. The
     * expiration time needs to be stored with this data.
     *
     * @param array $key
     * @param array $data
     * @param int $expiration
     * @return bool
     */
    public function storeData($key, $data, $expiration)
    {

    }

    /**
     * This function should clear the cache tree using the key array provided. If called with no arguments the entire
     * cache needs to be cleared.
     *
     * @param null|array $key
     * @return bool
     */
    public function clear($key = null)
    {

    }

    /**
     * This function is used to remove expired items from the cache.
     *
     * @return bool
     */
    public function purge()
    {

    }

    /**
     * This handler is available iff the apc extension is present and loaded on the system.
     *
     * @return bool
     */
    static public function isAvailable()
    {

    }

    protected function makeKey($key)
    {

    }

    protected function getCacheTime($expiration)
    {

    }

}
