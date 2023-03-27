<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHubEnterpriseCloud\Schema\HookDelivery;

use ApiClients\Client\GitHubEnterpriseCloud\Error as ErrorSchemas;
use ApiClients\Client\GitHubEnterpriseCloud\Hydrator;
use ApiClients\Client\GitHubEnterpriseCloud\Operation;
use ApiClients\Client\GitHubEnterpriseCloud\Schema;
use ApiClients\Client\GitHubEnterpriseCloud\WebHook;
final readonly class Request
{
    public const SCHEMA_JSON = '{"required":["headers","payload"],"type":"object","properties":{"headers":{"type":["object","null"],"description":"The request headers sent with the webhook delivery.","additionalProperties":true},"payload":{"type":["object","null"],"description":"The webhook payload.","additionalProperties":true}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    public const SCHEMA_EXAMPLE_DATA = '{"headers":null,"payload":null}';
    /**
     * headers: The request headers sent with the webhook delivery.
     * payload: The webhook payload.
     */
    public function __construct(public mixed $headers, public mixed $payload)
    {
    }
}
