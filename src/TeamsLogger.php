<?php

namespace CMDISP\MonologMicrosoftTeams;

use Monolog\Logger;

class TeamsLogger extends Logger
{
    /**
     * @param $app
     * @param $url
     * @param int $level
     * @param bool $bubble
     */
    public function __construct($app, $url, $level = Logger::DEBUG, $bubble = true)
    {
        parent::__construct('teams-logger');

        $this->pushHandler(new TeamsLogHandler($app, $url, $level, $bubble));
    }
}