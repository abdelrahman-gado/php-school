<?php

class NewReq implements Stringable
{
    public function __construct(private array $req)
    {

    }

    public function __toString(): string
    {
        if ($this->req['success']) {
            return '';
        }

        return "Status: {$this->req['status']}\nError: {$this->req['error']}\n";
    }
}


$request = json_decode(file_get_contents('php://input'), true);
$newReq = new NewReq($request);
log_failure($newReq);