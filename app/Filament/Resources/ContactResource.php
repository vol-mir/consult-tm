<?php

declare(strict_types=1);

namespace App\Filament\Resources;

use App\Filament\Resources\ContactResource\Pages;
use App\Models\Contact;
use Exception;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Filters\SelectFilter;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;

class ContactResource extends Resource
{
    protected static ?string $model = Contact::class;

    protected static ?string $recordTitleAttribute = 'name';

    protected static ?string $navigationIcon = 'heroicon-m-flag';

    protected static ?int $navigationSort = 0;

    public static function getNavigationGroup(): string
    {
        return __('navigation.settings');
    }

    public static function getPluralModelLabel(): string
    {
        return __('models.contacts');
    }

    public static function getModelLabel(): string
    {
        return __('models.contact');
    }

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('name')
                    ->required()
                    ->maxLength(255)
                    ->label(__('fields.name')),
                Forms\Components\TextInput::make('value')
                    ->required()
                    ->maxLength(255)
                    ->label(__('fields.value')),
                Forms\Components\Select::make('contact_type_id')
                    ->relationship('contactType', 'name')
                    ->searchable()
                    ->preload()
                    ->createOptionForm([
                        Forms\Components\TextInput::make('name')
                            ->required()
                            ->maxLength(255)
                            ->label(__('fields.name')),
                    ])
                    ->label(__('fields.contact_type')),
                Forms\Components\Toggle::make('is_main')
                    ->label(__('fields.is_main'))
                    ->default(false),
                Forms\Components\Textarea::make('description')
                    ->maxLength(255)
                    ->columnSpan('full')
                    ->label(__('fields.description')),
            ]);
    }

    /**
     * @throws Exception
     */
    public static function table(Table $table): Table
    {
        return $table
            ->recordTitleAttribute('name')
            ->columns([
                Tables\Columns\TextColumn::make('name')
                    ->searchable()
                    ->sortable()
                    ->label(__('fields.name')),
                Tables\Columns\TextColumn::make('value')
                    ->searchable()
                    ->sortable()
                    ->label(__('fields.value')),
                Tables\Columns\TextColumn::make('contactType.name')
                    ->searchable()
                    ->sortable()
                    ->label(__('fields.contact_type')),
                Tables\Columns\IconColumn::make('is_main')
                    ->boolean()
                    ->label(__('fields.is_main')),
                Tables\Columns\TextColumn::make('shop.name')
                    ->searchable()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true)
                    ->label(__('fields.shop')),
            ])
            ->filters([
                SelectFilter::make('contactType')
                    ->relationship('contactType', 'name')
                    ->searchable()
                    ->preload()
                    ->label(__('fields.contact_type')),
            ])
            ->actions([
                Tables\Actions\ViewAction::make(),
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ])
            ->emptyStateHeading(__('models.empty_items'));
    }

    public static function getRelations(): array
    {
        return [
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListContacts::route('/'),
            'create' => Pages\CreateContact::route('/create'),
            'edit' => Pages\EditContact::route('/{record}/edit'),
        ];
    }

    /** @return Builder<Contact> */
    public static function getGlobalSearchEloquentQuery(): Builder
    {
        return parent::getGlobalSearchEloquentQuery();
    }

    public static function getGloballySearchableAttributes(): array
    {
        return ['name', 'slug'];
    }
}
