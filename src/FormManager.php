<?php

namespace Gephart\Form;

use Gephart\EventManager\EventManager;
use Gephart\Sessions\Sessions;


final class FormManager
{

    /**
     * @var Sessions
     */
    private $sessions;

    /**
     * @var EventManager
     */
    private $event_manager;

    public function __construct(Sessions $sessions, EventManager $event_manager)
    {
        $this->sessions = $sessions;
        $this->event_manager = $event_manager;
    }

    public function createForm(): Form
    {
        $form = new Form();
        return $form;
    }

}