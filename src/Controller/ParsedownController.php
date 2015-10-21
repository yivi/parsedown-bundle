<?php

namespace Demontpx\ParsedownBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

/**
 * Class ParsedownController
 *
 * @author    Bert Hekman <demontpx@gmail.com>
 * @copyright 2015 Bert Hekman
 */
class ParsedownController
{
    /** @var \Parsedown */
    private $parsedown;

    /**
     * @param \Parsedown $parsedown
     */
    public function __construct(\Parsedown $parsedown)
    {
        $this->parsedown = $parsedown;
    }

    /**
     * @param Request $request
     *
     * @return Response
     */
    public function parseAction(Request $request)
    {
        $parsed = $this->parsedown->text($request->getContent());

        return new Response($parsed);
    }
}
