<?php

declare(strict_types=1);

namespace App\Filament\Resources\SettingResource\Pages;

use App\Filament\Resources\SettingResource;
use App\Models\Setting;
use Filament\Actions;
use Filament\Forms;
use Filament\Forms\Concerns\InteractsWithForms;
use Filament\Forms\Contracts\HasForms;
use Filament\Forms\Form;
use Filament\Notifications\Notification;
use Filament\Resources\Pages\Page;

class Settings extends Page implements HasForms
{
    use InteractsWithForms;

    protected static string $resource = SettingResource::class;

    protected static string $view = 'filament.resources.setting-resource.pages.settings';

    /**
     * @var array<string, mixed>|null
     */
    public ?array $data = [];

    public function getTitle(): string
    {
        return __('navigation.settings');
    }

    public function getBreadcrumb(): string
    {
        return __('navigation.settings');
    }

    public function getHeading(): string
    {
        return __('navigation.settings');
    }

    public function mount(): void
    {
        $setting = Setting::query()->where('slug', 'main')->firstOrFail();

        /** @phpstan-ignore-next-line */
        $this->form->fill($setting->toArray());
    }

    public function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Group::make()
                    ->schema([
                        Forms\Components\Section::make()
                            ->schema([
                                Forms\Components\TextInput::make('registration_number')
                                    ->maxLength(255)
                                    ->label(__('fields.registration_number')),
                                Forms\Components\TextInput::make('address')
                                    ->maxLength(500)
                                    ->columnSpan('full')
                                    ->label(__('fields.address')),
                                Forms\Components\TextInput::make('map')
                                    ->columnSpan('full')
                                    ->label(__('fields.map')),
                                Forms\Components\Textarea::make('description')
                                    ->maxLength(65535)
                                    ->columnSpan('full')
                                    ->label(__('fields.description')),
                                Forms\Components\RichEditor::make('bank_details')
                                    ->columnSpan('full')
                                    ->fileAttachmentsDisk('public')
                                    ->fileAttachmentsDirectory('images/settings')
                                    ->label(__('fields.bank_details')),
                            ])
                    ])
            ])
            ->statePath('data');
    }

    protected function getFormActions(): array
    {
        return [
            Actions\Action::make('EditSetting')
                ->submit('EditSetting')
                ->label(__('filament-actions::edit.single.label')),
        ];
    }

    public function editSetting(): void
    {
        $setting = Setting::query()->where('slug', 'main')->firstOrFail();

        /** @phpstan-ignore-next-line */
        $setting->update($this->form->getState());

        Notification::make()
            ->title(__('filament-actions::edit.single.notifications.saved.title'))
            ->success()
            ->send();
    }
}
