<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eiam\V20211201\Models\GetIdentityProviderResponseBody\identityProviderDetail;

use AlibabaCloud\Tea\Model;

class larkConfig extends Model
{
    /**
     * @description IDaaS EIAM 飞书自建应用的corpId
     *
     * @example cli_a7a99f53a317100c
     *
     * @var string
     */
    public $appId;

    /**
     * @description IDaaS EIAM 飞书自建应用的AppSecret
     *
     * @example ***
     *
     * @var string
     */
    public $appSecret;

    /**
     * @description IDaaS EIAM 飞书企业编码
     *
     * @example FX1231xxxx
     *
     * @var string
     */
    public $enterpriseNumber;
    protected $_name = [
        'appId'            => 'AppId',
        'appSecret'        => 'AppSecret',
        'enterpriseNumber' => 'EnterpriseNumber',
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
        if (null !== $this->enterpriseNumber) {
            $res['EnterpriseNumber'] = $this->enterpriseNumber;
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
        if (isset($map['EnterpriseNumber'])) {
            $model->enterpriseNumber = $map['EnterpriseNumber'];
        }

        return $model;
    }
}