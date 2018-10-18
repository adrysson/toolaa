<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Subtestis Entity
 *
 * @property int $id
 * @property int $tipo_id
 * @property int $teste_id
 * @property int $resultado_id
 * @property string $conteudo
 *
 * @property \App\Model\Entity\SubtestesTipo $subtestes_tipo
 * @property \App\Model\Entity\Teste $testis
 * @property \App\Model\Entity\SubtestesResultado $subtestes_resultado
 */
class Subteste extends Entity
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
        '*' => true,
    ];

    protected $_hidden = [
        'tipo_id' => true,
        'teste_id' => true,
        'resultado_id' => true,
    ];
}
