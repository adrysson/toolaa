<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Artigo Entity
 *
 * @property int $id
 * @property string $titulo
 * @property int $categoria_id
 * @property string|null $arquivo
 *
 * @property \App\Model\Entity\ArtigosCategoria $artigos_categoria
 * @property \App\Model\Entity\Teste[] $testes
 */
class Artigo extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array
     */
    protected $_accessible = [
        'titulo' => true,
        'categoria_id' => true,
        'arquivo' => true,
        'artigos_categoria' => true,
        'testes' => true
    ];
}
