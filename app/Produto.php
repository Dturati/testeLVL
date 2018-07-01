<?php declare(strict_types=1);

namespace estoque;

use Illuminate\Database\Eloquent\Model;

class Produto extends Model
{
    protected $table = 'produtos';

    protected $fillable = [
        'name', 'descricao', 'valor','quantidade'
    ];

}
