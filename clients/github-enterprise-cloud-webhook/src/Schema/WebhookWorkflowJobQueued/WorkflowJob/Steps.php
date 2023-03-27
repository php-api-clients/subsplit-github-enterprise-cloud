<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHubEnterpriseCloud\Schema\WebhookWorkflowJobQueued\WorkflowJob;

use ApiClients\Client\GitHubEnterpriseCloud\Error as ErrorSchemas;
use ApiClients\Client\GitHubEnterpriseCloud\Hydrator;
use ApiClients\Client\GitHubEnterpriseCloud\Operation;
use ApiClients\Client\GitHubEnterpriseCloud\Schema;
use ApiClients\Client\GitHubEnterpriseCloud\WebHook;
final readonly class Steps
{
    public const SCHEMA_JSON = '{"title":"Workflow Step","required":["name","status","conclusion","number","started_at","completed_at"],"type":"object","properties":{"completed_at":{"type":["string","null"]},"conclusion":{"enum":["failure","skipped","success","cancelled",null],"type":["string","null"]},"name":{"type":"string"},"number":{"type":"integer"},"started_at":{"type":["string","null"]},"status":{"enum":["completed","in_progress","queued","pending"],"type":"string"}}}';
    public const SCHEMA_TITLE = 'Workflow Step';
    public const SCHEMA_DESCRIPTION = '';
    public const SCHEMA_EXAMPLE_DATA = '{"completed_at":"generated_completed_at_null","conclusion":"failure","name":"generated_name_null","number":13,"started_at":"generated_started_at_null","status":"completed"}';
    public function __construct(#[\EventSauce\ObjectHydrator\MapFrom('completed_at')] public ?string $completedAt, public ?string $conclusion, public string $name, public int $number, #[\EventSauce\ObjectHydrator\MapFrom('started_at')] public ?string $startedAt, public string $status)
    {
    }
}
