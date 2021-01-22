<?php
namespace Antavo\LoyaltyApps\Helper\Environments;

/**
 *
 */
class SalesDemo extends AbstractEnvironment
{
    /**
     * @inheritdoc
     */
    protected $_clientId = '2546875357658765';

    /**
     * @inheritdoc
     */
    protected $_clientSecret = '749184fbfa63c0edef9876a69939aa981f8e181a';

    /**
     * @inheritdoc
     */
    protected $_apiUrl = 'https://api.salesdemo.antavo.com';

    /**
     * @inheritdoc
     */
    protected $_sdkUrl = 'https://api.salesdemo.antavo.com/sdk/latest-salesdemo';
}
