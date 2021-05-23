<?php

namespace App\Service;

use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\Mime\Address;
use Symfony\Component\Mime\Email;

class MailerService
{

    protected $mailer;

    public function __construct(MailerInterface $mailer)
    {
        $this->mailer = $mailer;

    }

    public function sendEmail($from, $firstName, $lastName, $description)
    {
        $name = $firstName . ' ' . $lastName;

        $email = new Email();
        $email->from(new Address($from, $name ))
            ->to('info@bferdinand.be')
            ->text($description)
            ->subject("Contact");

        $this->mailer->send($email);
    }
}