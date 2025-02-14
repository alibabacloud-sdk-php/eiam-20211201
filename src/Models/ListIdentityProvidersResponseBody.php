<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eiam\V20211201\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Eiam\V20211201\Models\ListIdentityProvidersResponseBody\identityProviders;

class ListIdentityProvidersResponseBody extends Model
{
    /**
     * @var identityProviders[]
     */
    public $identityProviders;
    /**
     * @var string
     */
    public $requestId;
    /**
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'identityProviders' => 'IdentityProviders',
        'requestId'         => 'RequestId',
        'totalCount'        => 'TotalCount',
    ];

    public function validate()
    {
        if (\is_array($this->identityProviders)) {
            Model::validateArray($this->identityProviders);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->identityProviders) {
            if (\is_array($this->identityProviders)) {
                $res['IdentityProviders'] = [];
                $n1                       = 0;
                foreach ($this->identityProviders as $item1) {
                    $res['IdentityProviders'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['IdentityProviders'])) {
            if (!empty($map['IdentityProviders'])) {
                $model->identityProviders = [];
                $n1                       = 0;
                foreach ($map['IdentityProviders'] as $item1) {
                    $model->identityProviders[$n1++] = identityProviders::fromMap($item1);
                }
            }
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }

        return $model;
    }
}
