<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * CompanyStatus Entity.
 *
 * @property int $id
 * @property int $user_id
 * @property \App\Model\Entity\User $user
 * @property int $company_id
 * @property \App\Model\Entity\Company $company
 * @property int $usertag_id
 * @property \App\Model\Entity\Usertag $usertag
 * @property bool $checked
 * @property \Cake\I18n\Time $updated_date
 * @property \Cake\I18n\Time $created_date
 */
class CompanyStatus extends Entity
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
        'updated_date' => false,
        'created_date' => false
    ];
}
