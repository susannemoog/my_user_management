<?php

namespace KoninklijkeCollective\MyUserManagement\Domain\DataTransferObject;

use TYPO3\CMS\Backend\Utility\BackendUtility;

/**
 * DTO: Permission access Backend User Groups
 */
class BackendUserGroupPermission extends AbstractPermission
{

    /**
     * @var string
     */
    public const KEY = 'my_user_management_group_permissions';

    /**
     * @return void
     */
    protected function populateData()
    {
        $this->data = [
            'header' => 'LLL:EXT:my_user_management/Resources/Private/Language/locallang.xlf:backend_access_group_permissions',
            'items' => [],
        ];
        $groups = BackendUtility::getRecordsByField('be_groups', 'hide_in_lists', 0);
        foreach ((array)$groups as $group) {
            $this->data['items'][$group['uid']] = [
                $group['title'],
                'EXT:my_user_management/Resources/Public/Icons/table-user-group-backend.svg',
                $group['description'],
            ];
        }
    }
}
