<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Company Entity.
 *
 * @property int $id
 * @property string $name
 * @property string $email
 * @property string $password
 * @property \Cake\I18n\Time $updated_date
 * @property \Cake\I18n\Time $created_date
 * @property \App\Model\Entity\CompanyStatus[] $company_status
 * @property \App\Model\Entity\Request[] $requests
 * @property \App\Model\Entity\UserStatus[] $user_status
 */
class Mimamon extends Entity
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
        'id' => false,
    ];
}
