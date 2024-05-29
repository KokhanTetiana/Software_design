<?php

interface Mediator {
    public function notify($sender, $event);
}

class CommandCentre implements Mediator {
    private $runways = [];
    private $aircrafts = [];

    public function addRunway(Runway $runway) {
        $this->runways[] = $runway;
    }

    public function addAircraft(Aircraft $aircraft) {
        $this->aircrafts[] = $aircraft;
    }

    public function notify($sender, $event) {
        if ($event == 'landing') {
            foreach ($this->runways as $runway) {
                if (!$runway->isBusy()) {
                    $runway->land($sender);
                    return;
                }
            }
            echo "Could not land, all runways are busy.\n";
        } elseif ($event == 'takeoff') {
            foreach ($this->runways as $runway) {
                if ($runway->isBusy() && $runway->getAircraft() === $sender) {
                    $runway->takeOff();
                    return;
                }
            }
            echo "Could not take off, the runway is not assigned to this aircraft.\n";
        }
    }
}

class Aircraft {
    private $name;
    private $mediator;

    public function __construct($name, Mediator $mediator) {
        $this->name = $name;
        $this->mediator = $mediator;
    }

    public function getName() {
        return $this->name;
    }

    public function land() {
        echo "<p>Aircraft {$this->getName()} is landing.</p>\n";
        $this->mediator->notify($this, 'landing');
    }

    public function takeOff() {
        echo "<p>Aircraft {$this->getName()} is taking off.</p>\n";
        $this->mediator->notify($this, 'takeoff');
    }
}

class Runway {
    private $id;
    private $mediator;
    private $busy = false;
    private $aircraft = null;

    public function __construct(Mediator $mediator) {
        $this->id = uniqid();
        $this->mediator = $mediator;
    }

    public function land(Aircraft $aircraft) {
        echo "<p>Runway $this->id: Aircraft {$aircraft->getName()} has landed.</p>\n";
        $this->busy = true;
        $this->aircraft = $aircraft;
    }

    public function takeOff() {
        echo "<p>Runway $this->id: Aircraft {$this->aircraft->getName()} has taken off.</p>\n";
        $this->busy = false;
        $this->aircraft = null;
    }

    public function isBusy() {
        return $this->busy;
    }

    public function getAircraft() {
        return $this->aircraft;
    }
}

$mediator = new CommandCentre();

$runway1 = new Runway($mediator);
$runway2 = new Runway($mediator);

$mediator->addRunway($runway1);
$mediator->addRunway($runway2);

$aircraft1 = new Aircraft("Boeing 747", $mediator);
$aircraft2 = new Aircraft("Airbus A320", $mediator);

$aircraft1->land();
$aircraft2->land();
$aircraft1->takeOff();
