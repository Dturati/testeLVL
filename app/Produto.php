<?php declare(strict_types=1);

namespace estoque;

use Illuminate\Database\Eloquent\Model;
use PhpParser\Node\Expr\Cast\Object_;

class Produto extends Model
{
    protected $table = 'produtos';

    protected $fillable = [
        'name', 'descricao', 'valor','quantidade'
    ];

    public function exportar(Object_$dados) : ?string
    {
        $ar = [];

        foreach ($dados as $dado) {
            $ar [] = $dado->name;
        }

        $callbackFilter = function ($indice) {
            return $indice != 'martelo';
        };
        $arFilter = array_filter($ar,$callbackFilter);

        $callBackReduce = function ($anterior, $proximo){
            return $anterior. ' ; ' . $proximo;
        };

        $res = array_reduce($arFilter,$callBackReduce);

        return $res;
    }

}
