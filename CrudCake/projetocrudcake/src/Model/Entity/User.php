<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * User Entity
 *
 * @property int $id
 * @property string $nome
 * @property string $cpf
 * @property string $data_nascimento
 * @property string $email
 * @property string $telefone
 * @property string $endereco
 * @property string $cidade
 * @property string $estado
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime|null $modified
 */
class User extends Entity
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
        'nome' => true,
        'cpf' => true,
        'data_nascimento' => true,
        'email' => true,
        'telefone' => true,
        'endereco' => true,
        'cidade' => true,
        'estado' => true,
        'created' => true,
        'modified' => true,
    ];
}
