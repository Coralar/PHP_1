<?php
//Результат выполнения не похож на тот что в видео в решении, половина переменная подсвечена ide как Property
// is only written but never read.
class Task
{
    private User $user;
    private int $priority;
    private string $description;
    private string $dateCreated;
    private string $dateUpdated;
    private string $dateDone;
    private bool $isDone = false;

    function __construct(User $user, int $priority, string $description)
    {
        $this->user = $user;
        $this->priority = $priority;
        $this->description = $description;
        $this->dateCreated = $this->dateUpdated = date('Y-m-d H:i:s');
    }

    public function setDescription(string $description): void
    {
        $this->description = $description;
        $this->dateUpdated = date('Y-m-d H:i:s');
    }

    public function getDescription(): string
    {
        return $this->description;
    }

    public function markAsDone(): void
    {
        $this->dateDone = $this->dateUpdated = date('Y:m:d H:i:s');
        $this->isDone = true;
    }

}

class User
{
    private string $username;
    private string $email;

    function __construct(string $username, string $email)
    {
        $this->username = $username;
        $this->email = $email;
    }
}

$user = new User('Dmitry', 'Dmitri@mail.ru');
$task = new Task($user, 1, 'Tittle');
$task->setDescription('New description');
$task->markAsDone();
var_dump($task);