<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eiam\V20211201\Models\UpdateIdentityProviderRequest;

use AlibabaCloud\Tea\Model;

class larkConfig extends Model
{
    /**
     * @example cli_xxxx
     *
     * @var string
     */
    public $appId;

    /**
     * @example KiiLzh5Dueh4wbLxxxx
     *
     * @var string
     */
    public $appSecret;
    protected $_name = [
        'appId'     => 'AppId',
        'appSecret' => 'AppSecret',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->appId) {
            $res['AppId'] = $this->appId;
        }
        if (null !== $this->appSecret) {
            $res['AppSecret'] = $this->appSecret;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return larkConfig
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AppId'])) {
            $model->appId = $map['AppId'];
        }
        if (isset($map['AppSecret'])) {
            $model->appSecret = $map['AppSecret'];
        }

        return $model;
    }
}
