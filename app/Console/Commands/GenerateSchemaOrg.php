<?php

declare(strict_types=1);

namespace App\Console\Commands;

use App\Models\Contact;
use App\Models\Page;
use App\Models\Setting;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\File;
use Spatie\SchemaOrg\Organization;

class GenerateSchemaOrg extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:generate-schema-org';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Generate Schema Org';

    /**
     * Execute the console command.
     */
    public function handle(): void
    {
        $setting = Setting::query()
            ->where('slug', 'main')
            ->first();

        $pageHome = Page::query()
            ->where('name', 'home')
            ->first();

        $mainPhone = null;
        $mainEmail = null;

        $contacts = Contact::query()
            ->get();

        foreach ($contacts as $contact) {
            if ($contact->contactType?->slug === 'phone' && $contact->is_main) {
                $mainPhone = $contact->value;
            }

            if ($contact->contactType?->slug === 'email' && $contact->is_main) {
                $mainEmail = $contact->value;
            }
        }

        $schema = new Organization();
        $schema->name(config('app.name'));
        $schema->logo('https://consult-tm.by/resources/img/logo/nav-log.webp');
        if ($setting?->full_name) {
            $schema->alternateName($setting->full_name);
        }
        if ($pageHome?->keywords) {
            $schema->keywords($pageHome->keywords);
        }
        if ($pageHome?->description) {
            $schema->description($pageHome->description);
        }
        $schema->url(config('app.url'));
        if ($setting?->address) {
            $schema->address($setting->address);
        }
        if ($mainEmail) {
            $schema->email($mainEmail);
        }
        if ($mainPhone) {
            $schema->telephone($mainPhone);
        }

        $path = resource_path('views/schemas/schema-org.blade.php');

        if (!File::isDirectory(public_path('js'))) {
            File::makeDirectory(public_path('js'), 0755, true);
        }

        File::put($path, $schema->toScript());

        $this->info('Schema Org file has been generated successfully at ' . $path);
    }
}
