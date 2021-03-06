<?php

namespace App\Interfaces;

use Carbon\Carbon;
use Traversable;

interface Profile extends Banner
{
    public function getEmail(): string;
    public function getBirthday(): Carbon;
    public function getName(): string;
    public function getPhoneNumber(): string;
    public function getStatusLabel(): string;
    public function getClans(): Traversable;
    public function getGames(): Traversable;
}
