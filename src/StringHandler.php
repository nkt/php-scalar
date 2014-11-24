<?php

namespace Nkt;

/**
 * @author Nikita Gusakov <dev@nkt.me>
 */
class StringHandler
{
    /**
     * @return int
     */
    public function length()
    {
        return strlen($this);
    }

    /**
     * @param string $str
     * @return string
     */
    public function concat($str)
    {
        return $this . $str;
    }

    /**
     * @param int $count
     * @return string
     */
    public function repeat($count)
    {
        return str_repeat($this, $count | 0);
    }

    /**
     * @param mixed ...
     *
     * @return string
     */
    public function format()
    {
        $args = func_get_args();
        switch (func_num_args()) {
            case 0:
                return $this;
            case 1:
                return sprintf($this, $args[0]);
            case 2:
                return sprintf($this, $args[0], $args[1]);
            case 3:
                return sprintf($this, $args[0], $args[1], $args[2]);
            case 4:
                return sprintf($this, $args[0], $args[1], $args[2], $args[3]);
            case 5:
                return sprintf($this, $args[0], $args[1], $args[2], $args[3], $args[4]);
            default:
                array_unshift($args, $this);

                return call_user_func_array('sprintf', $args);
        }
    }

    /**
     * @param string $str
     * @param int $offset
     * @return bool
     */
    public function contains($str, $offset = 0)
    {
        return strpos($this, $str, $offset) !== false;
    }

    /**
     * @param string|array $search
     * @param string|array $replace
     * @param int $count
     * @return string|array
     */
    public function replace($search, $replace, &$count)
    {
        return str_replace($search, $replace, $this, $count);
    }

    /**
     * @return string
     */
    public function reverse()
    {
        return strrev($this);
    }

    /**
     * @param string $chars
     * @return string
     */
    public function trim($chars = null)
    {
        if ($chars === null) {
            return trim($this);
        } else {
            return trim($this, $chars);
        }
    }

    /**
     * @param string $chars
     * @return string
     */
    public function trimLeft($chars = null)
    {
        if ($chars === null) {
            return ltrim($this);
        } else {
            return ltrim($this, $chars);
        }
    }

    /**
     * @param string $chars
     * @return string
     */
    public function trimRight($chars = null)
    {
        if ($chars === null) {
            return rtrim($this);
        } else {
            return rtrim($this, $chars);
        }
    }

    /**
     * @return string
     */
    public function lowerCaseFirst()
    {
        return lcfirst($this);
    }

    /**
     * @return string
     */
    public function upperCaseFirst()
    {
        return ucfirst($this);
    }

    /**
     * @return string
     */
    public function upperCaseWords()
    {
        return ucwords($this);
    }

    /**
     * @param string $delimiter
     * @param int $limit
     * @return array
     */
    public function split($delimiter = null, $limit = null)
    {
        if ($delimiter === null) {
            return [$this];
        }

        if ($delimiter === '') {
            $chunks = str_split($this);
            if ($limit !== null) {
                return array_slice($chunks, 0, $limit);
            }

            return $chunks;
        }

        if ($limit === null) {
            $chunks = explode($delimiter, $this);
        } else {
            $chunks = explode($delimiter, $this, $limit);
        }

        if ($chunks === false) {
            return [$this];
        }

        return $chunks;
    }

    /**
     * @param string $algorithm
     * @param bool $raw
     * @return string
     */
    public function hash($algorithm, $raw = false)
    {
        return hash($algorithm, $this, $raw);
    }
}