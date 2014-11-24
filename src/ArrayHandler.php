<?php

namespace Nkt;

/**
 * @author Nikita Gusakov <dev@nkt.me>
 */
class ArrayHandler
{
    /**
     * @return int
     */
    public function count()
    {
        return count($this);
    }

    /**
     * @return int
     */
    public function join($glue = '')
    {
        return join($glue, $this);
    }
}