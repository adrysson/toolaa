<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Testis Entity
 *
 * @property int $id
 * @property int $lista_id
 * @property string $conteudo
 * @property int $tipo_id
 * @property int $resultado_id
 * @property int $user_id
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $modified
 *
 * @property \App\Model\Entity\TestesLista $testes_lista
 * @property \App\Model\Entity\TestesTipo $testes_tipo
 * @property \App\Model\Entity\TestesResultado $testes_resultado
 * @property \App\Model\Entity\User $user
 */
class Testis extends Entity
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
        'lista_id' => true,
        'conteudo' => true,
        'tipo_id' => true,
        'resultado_id' => true,
        'user_id' => true,
        'created' => true,
        'modified' => true,
        'testes_lista' => true,
        'testes_tipo' => true,
        'testes_resultado' => true,
        'user' => true
    ];
}
