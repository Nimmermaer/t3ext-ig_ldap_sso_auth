<?php

declare(strict_types=1);

use FriendsOfTYPO3\FontawesomeProvider\Imaging\IconProvider\FontawesomeIconProvider;
use TYPO3\CMS\Core\Imaging\IconProvider\SvgIconProvider;

return [
    'ig_ldap_sso_auth_module' => [
        'provider' => \TYPO3\CMS\Core\Imaging\IconProvider\BitmapIconProvider::class,
        'source' => 'EXT:ig_ldap_sso_auth/Resources/Public/Icons/module-ldap.png'
    ],
    'extensions-ig_ldap_sso_auth-overlay-ldap-record' => [
        'provider' => \TYPO3\CMS\Core\Imaging\IconProvider\BitmapIconProvider::class,
        'source' => 'EXT:ig_ldap_sso_auth/Resources/Public/Icons/overlay-ldap-record.png'
    ],
];
