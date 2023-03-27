<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHubEnterpriseCloud\Schema\WebhookRegistryPackagePublished\RegistryPackage;

use ApiClients\Client\GitHubEnterpriseCloud\Error as ErrorSchemas;
use ApiClients\Client\GitHubEnterpriseCloud\Hydrator;
use ApiClients\Client\GitHubEnterpriseCloud\Operation;
use ApiClients\Client\GitHubEnterpriseCloud\Schema;
use ApiClients\Client\GitHubEnterpriseCloud\WebHook;
final readonly class Registry
{
    public const SCHEMA_JSON = '{"type":["object","null"],"properties":{"about_url":{"type":"string"},"name":{"type":"string"},"type":{"type":"string"},"url":{"type":"string"},"vendor":{"type":"string"}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    public const SCHEMA_EXAMPLE_DATA = '{"about_url":"generated_about_url_null","name":"generated_name_null","type":"generated_type_null","url":"generated_url_null","vendor":"generated_vendor_null"}';
    public function __construct(#[\EventSauce\ObjectHydrator\MapFrom('about_url')] public ?string $aboutUrl, public ?string $name, public ?string $type, public ?string $url, public ?string $vendor)
    {
    }
}
