<?php

namespace Tychovbh\LaravelRevisions\TestsApp\App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Tychovbh\LaravelRevisions\HasRevisions;

class Page extends Model
{
    use HasFactory, HasRevisions;

    protected array $fillable = ['title', 'url'];
}
