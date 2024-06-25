<?php

declare(strict_types=1);

namespace App\Console\Commands;

use App\Models\Category;
use App\Models\Service;
use Illuminate\Console\Command;
use Spatie\Sitemap\Sitemap;

class GenerateSitemap extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:generate-sitemap';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Generate sitemap';

    /**
     * Execute the console command.
     */
    public function handle(): void
    {
        // Manually create sitemap
        $sitemap = Sitemap::create();

        // Static pages
        $sitemap->add('/');
        $sitemap->add('/faq');
        $sitemap->add('/policy-personal-data');
        $sitemap->add('/about');
        $sitemap->add('/bank-details');
        $sitemap->add('/policy-cookies');
        $sitemap->add('/contacts');

        // Dynamic pages
        $services = Service::all();
        foreach ($services as $service) {
            $sitemap->add("/service/$service->slug");
        }

        $categories = Category::all();
        foreach ($categories as $category) {
            $sitemap->add("/category/$category->slug");
        }

        $sitemap->writeToFile(public_path('sitemap.xml'));
    }
}
