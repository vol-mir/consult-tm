<?php

declare(strict_types=1);

namespace App\Filament\Resources;

use App\Filament\Resources\ServiceResource\Pages;
use App\Filament\Resources\ServiceResource\Widgets\ServiceStats;
use App\Models\Service;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Filters\QueryBuilder;
use Filament\Tables\Filters\QueryBuilder\Constraints\BooleanConstraint;
use Filament\Tables\Filters\QueryBuilder\Constraints\DateConstraint;
use Filament\Tables\Filters\QueryBuilder\Constraints\TextConstraint;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Support\Str;

class ServiceResource extends Resource
{
    protected static ?string $model = Service::class;

    protected static ?string $recordTitleAttribute = 'name';

    protected static ?string $navigationIcon = 'heroicon-o-squares-2x2';

    protected static ?int $navigationSort = 2;

    public static function getNavigationGroup(): string
    {
        return __('navigation.company');
    }

    public static function getPluralModelLabel(): string
    {
        return __('models.services');
    }

    public static function getModelLabel(): string
    {
        return __('models.service');
    }

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Group::make()
                    ->schema([
                        Forms\Components\Section::make()
                            ->schema([
                                Forms\Components\TextInput::make('name')
                                    ->columnSpan('full')
                                    ->required()
                                    ->live(onBlur: true)
                                    ->maxLength(255)
                                    ->afterStateUpdated(fn(string $operation, $state, Forms\Set $set) => in_array($operation, ['create', 'edit']) ? $set('slug', Str::slug($state)) : null)
                                    ->label(__('fields.name')),
                                Forms\Components\TextInput::make('slug')
                                    ->dehydrated()
                                    ->required()
                                    ->maxLength(255)
                                    ->unique(Service::class, 'name', ignoreRecord: true)
                                    ->label(__('fields.slug')),
                                Forms\Components\TextInput::make('rating')
                                    ->integer()
                                    ->minValue(1)
                                    ->maxValue(5)
                                    ->default(5)
                                    ->label(__('fields.rating')),
                                Forms\Components\TextInput::make('price')
                                    ->label(__('fields.price')),
                                Forms\Components\Select::make('category_id')
                                    ->relationship('category', 'name')
                                    ->searchable()
                                    ->preload()
                                    ->createOptionForm([
                                        Forms\Components\TextInput::make('name')
                                            ->required()
                                            ->maxLength(255)
                                            ->label(__('fields.name')),
                                    ])
                                    ->label(__('fields.category')),
                                Forms\Components\Textarea::make('description')
                                    ->maxLength(65535)
                                    ->columnSpan('full')
                                    ->label(__('fields.description')),
                                Forms\Components\RichEditor::make('presentation')
                                    ->columnSpan('full')
                                    ->fileAttachmentsDisk('public')
                                    ->fileAttachmentsDirectory('images/presentation-shops')
                                    ->label(__('fields.presentation')),
                            ])
                            ->columns(),
                        Forms\Components\Section::make(__('fields.inventory'))
                            ->schema([
                                Forms\Components\TextInput::make('sku')
                                    ->live(onBlur: true)
                                    ->maxLength(255)
                                    ->afterStateUpdated(fn(string $operation, $state, Forms\Set $set) => $operation === 'create' ? $set('slug', Str::slug($state)) : null)
                                    ->label(__('fields.sku')),
                            ])
                            ->columns(),
                    ])
                    ->columnSpan(['lg' => 2]),
                Forms\Components\Group::make()
                    ->schema([
                        Forms\Components\Section::make(__('fields.status'))
                            ->schema([
                                Forms\Components\Toggle::make('is_visible')
                                    ->label(__('fields.is_visible')),
                                Forms\Components\Toggle::make('is_popular')
                                    ->label(__('fields.is_popular')),
                                Forms\Components\DatePicker::make('published_at')
                                    ->label(__('fields.published_at')),
                            ])
                            ->columns(1),
                    ])
                    ->columnSpan(['lg' => 1]),
            ])
            ->columns(3);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('name')
                    ->searchable()
                    ->sortable()
                    ->label(__('fields.name')),
                Tables\Columns\TextColumn::make('price')
                    ->searchable()
                    ->sortable()
                    ->label(__('fields.price')),
                Tables\Columns\TextColumn::make('category.name')
                    ->searchable()
                    ->sortable()
                    ->label(__('fields.category')),
                Tables\Columns\TextColumn::make('slug')
                    ->searchable()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true)
                    ->label(__('fields.slug')),
                Tables\Columns\IconColumn::make('is_visible')
                    ->boolean()
                    ->label(__('fields.is_visible')),
                Tables\Columns\TextColumn::make('sku')
                    ->searchable()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true)
                    ->label(__('fields.sku')),
                Tables\Columns\TextColumn::make('published_at')
                    ->searchable()
                    ->sortable()
                    ->date('d.m.Y')
                    ->toggleable(isToggledHiddenByDefault: true)
                    ->label(__('fields.published_at')),
                Tables\Columns\IconColumn::make('is_popular')
                    ->boolean()
                    ->toggleable(isToggledHiddenByDefault: true)
                    ->label(__('fields.is_popular')),
            ])
            ->filters([
                QueryBuilder::make()
                    ->constraints([
                        TextConstraint::make('name')
                            ->label(__('fields.name')),
                        TextConstraint::make('slug')
                            ->label(__('fields.slug')),
                        TextConstraint::make('sku')
                            ->label(__('fields.sku')),
                        TextConstraint::make('description')
                            ->label(__('fields.description')),
                        BooleanConstraint::make('is_visible')
                            ->label(__('fields.is_visible')),
                        DateConstraint::make('published_at')
                            ->label(__('fields.published_at')),
                        BooleanConstraint::make('is_popular')
                            ->label(__('fields.is_popular')),
                    ])
                    ->constraintPickerColumns(),
            ], layout: Tables\Enums\FiltersLayout::AboveContentCollapsible)
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
            'index' => Pages\ListServices::route('/'),
            'create' => Pages\CreateService::route('/create'),
            'edit' => Pages\EditService::route('/{record}/edit'),
        ];
    }

    /** @return Builder<Service> */
    public static function getGlobalSearchEloquentQuery(): Builder
    {
        return parent::getGlobalSearchEloquentQuery();
    }

    public static function getGloballySearchableAttributes(): array
    {
        return ['name', 'slug', 'description', 'sku'];
    }

    public static function getWidgets(): array
    {
        return [
            ServiceStats::class,
        ];
    }
}
