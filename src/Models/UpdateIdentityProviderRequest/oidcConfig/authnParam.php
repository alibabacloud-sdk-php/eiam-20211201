<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eiam\V20211201\Models\UpdateIdentityProviderRequest\oidcConfig;

use AlibabaCloud\Tea\Model;

class authnParam extends Model
{
    /**
     * @description OIDC/oAuth2 认证方法。
     *
     * @example client_secret_post
     *
     * @var string
     */
    public $authnMethod;

    /**
     * @description OIDC/oAuth2 客户端密钥。
     *
     * @example CSEHDddddddxxxxuxkJEHPveWRXBGqVqRsxxxx
     *
     * @var string
     */
    public $clientSecret;
    protected $_name = [
        'authnMethod'  => 'AuthnMethod',
        'clientSecret' => 'ClientSecret',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->authnMethod) {
            $res['AuthnMethod'] = $this->authnMethod;
        }
        if (null !== $this->clientSecret) {
            $res['ClientSecret'] = $this->clientSecret;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return authnParam
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AuthnMethod'])) {
            $model->authnMethod = $map['AuthnMethod'];
        }
        if (isset($map['ClientSecret'])) {
            $model->clientSecret = $map['ClientSecret'];
        }

        return $model;
    }
}