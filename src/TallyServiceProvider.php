<?php

namespace Key13\Tally;

use Filament\PluginServiceProvider;
use Illuminate\Support\Facades\Blade;
use Key13\Tally\Components\FeedbackButton;
use Key13\Tally\Components\TallyScript;
use Spatie\LaravelPackageTools\Package;

class TallyServiceProvider extends PluginServiceProvider
{
    public static string $name = 'tally-components';

    protected array $resources = [
        // CustomResource::class,
    ];

    protected array $pages = [
        // CustomPage::class,
    ];

    protected array $widgets = [
        // CustomWidget::class,
    ];

    protected array $styles = [
        'plugin-tally-components' => __DIR__.'/../resources/dist/tally-components.css',
    ];

    protected array $scripts = [
        'plugin-tally-components' => __DIR__.'/../resources/dist/tally-components.js',
    ];

    // protected array $beforeCoreScripts = [
    //     'plugin-tally-components' => __DIR__ . '/../resources/dist/tally-components.js',
    // ];

    public function configurePackage(Package $package): void
    {
        $package
            ->name(static::$name)
            ->hasViews();
    }

    public function registeringPackage()
    {
        Blade::component(TallyScript::class, 'tally-script');
        Blade::component(FeedbackButton::class, 'tally-feedback-button');

        parent::registeringPackage(); // TODO: Change the autogenerated stub
    }
}
