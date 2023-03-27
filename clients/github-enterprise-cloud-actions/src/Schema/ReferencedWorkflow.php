<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHubEnterpriseCloud\Schema;

use ApiClients\Client\GitHubEnterpriseCloud\Error as ErrorSchemas;
use ApiClients\Client\GitHubEnterpriseCloud\Hydrator;
use ApiClients\Client\GitHubEnterpriseCloud\Operation;
use ApiClients\Client\GitHubEnterpriseCloud\Schema;
use ApiClients\Client\GitHubEnterpriseCloud\WebHook;
final readonly class ReferencedWorkflow
{
    public const SCHEMA_JSON = '{"title":"Referenced workflow","required":["path","sha"],"type":"object","properties":{"path":{"type":"string"},"sha":{"type":"string"},"ref":{"type":"string"}},"description":"A workflow referenced\\/reused by the initial caller workflow"}';
    public const SCHEMA_TITLE = 'Referenced workflow';
    public const SCHEMA_DESCRIPTION = 'A workflow referenced/reused by the initial caller workflow';
    public const SCHEMA_EXAMPLE_DATA = '{"path":"generated_path_null","sha":"generated_sha_null","ref":"generated_ref_null"}';
    public function __construct(public string $path, public string $sha, public ?string $ref)
    {
    }
}
