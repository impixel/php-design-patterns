<?php
/**
 * Created by PhpStorm.
 * User: hadi
 * Date: 06/10/2017
 * Time: 15:58
 */

namespace Patterns\Structural\Facade;


class SMS
{
    /**
     * @var string
     */
    private $from;

    public function __construct(string $from)
    {
        $this->from = $from;
    }

    public function send(string $to, string $message): bool
    {
        if (empty($to)) {
            return false;
        }
        if (strlen($message) === 0) {
            return false;
        }
        echo $to . " received message: " . $message;
        return true;
    }
}
