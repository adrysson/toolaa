<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Testis Entity
 *
 * @property int $id
 * @property int $artigo_id
 * @property int $ferramenta_id
 * @property int $usuario_id
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $modified
 *
 * @property \App\Model\Entity\Artigo $artigo
 * @property \App\Model\Entity\Ferramenta $ferramenta
 * @property \App\Model\Entity\Usuario $usuario
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
        'artigo_id' => true,
        'ferramenta_id' => true,
        'usuario_id' => true,
        'created' => true,
        'modified' => true,
        'artigo' => true,
        'ferramenta' => true,
        'usuario' => true
    ];
}
