<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class ProjetoRouanet extends Model
{
    use HasFactory;

    protected $table = 'tb_projeto_rouanet_teste';

    protected $primaryKey = 'id_projeto';

    protected $fillable = [
        'id_projeto', 'pronac', 'ano_projeto', 'nome', 'segmento', 'area', 'uf', 'municipio',
        'data_inicio', 'data_termino', 'situacao', 'mecanismo', 'enquadramento', 'valor_captado',
        'valor_aprovado', 'acessibilidade', 'objetivos', 'justificativa', 'etapa', 'ficha_tecnica',
        'impacto_ambiental', 'especificacao_tecnica', 'providencia', 'democratizacao', 'sinopse',
        'resumo', 'valor_projeto', 'outras_fontes', 'valor_proposta', 'valor_solicitado',
        'objetivo', 'estrategia_execucao', 'link_incentivadores'
    ];

    public function getAttribute($key)
    {
        $key = Str::camel($key);
        return parent::getAttribute($key);
    }

    public function setAttribute($key, $value)
    {
        $key = Str::snake($key);
        return parent::setAttribute($key, $value);
    }

    public function toArray()
    {
        $attributes = parent::toArray();
        $camelCaseAttributes = [];

        foreach ($attributes as $key => $value) {
            $camelCaseKey = Str::camel($key);
            $camelCaseAttributes[$camelCaseKey] = $value;
        }

        return $camelCaseAttributes;
    }

    public $timestamps = true;
}
