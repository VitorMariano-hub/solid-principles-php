<?php 

namespace Solid\DIP\Good;

interface NotifierInterface 
{
    public function send(string $message): string;
}