<?php

require_once __DIR__ . '/../vendor/autoload.php';

class FormManagerTest extends \PHPUnit\Framework\TestCase
{

    private $form_manager;

    public function setUp()
    {
        $event_manager = new Gephart\EventManager\EventManager();
        $sessions = new Gephart\Sessions\Sessions();

        $this->form_manager = new \Gephart\Form\FormManager($sessions, $event_manager);
    }

    public function testCreateForm()
    {
        $form = $this->form_manager->createForm();
        $this->assertEquals(get_class($form), \Gephart\Form\Form::class);
    }

    public function testCreateFormFields()
    {
        $form = $this->form_manager->createForm();
        $form->add(new \Gephart\Form\Field\TextField("title"));
        $form->add(new \Gephart\Form\Field\TextareaField("text"));
        $form->add(
            (new \Gephart\Form\Field\RadioField("text"))
                ->setOptions([
                    "man" => "Muž",
                    "woman" => "Žena"
                ])
        );
        $this->assertEquals(get_class($form), \Gephart\Form\Form::class);
    }
}
