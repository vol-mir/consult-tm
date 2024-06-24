<?php

declare(strict_types=1);

namespace App\Filament\Resources;

use App\Filament\Resources\LeadTypeResource\Pages;
use App\Models\LeadType;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Support\Str;

class LeadTypeResource extends Resource
{
    protected static ?string $model = LeadType::class;

    protected static ?string $recordTitleAttribute = 'name';

    protected static ?string $navigationIcon = 'heroicon-o-bookmark';

    protected static ?int $navigationSort = 1;

    public static function getNavigationGroup(): string
    {
        return __('navigation.directories');
    }

    public static function getPluralLabel(): string
    {
        return __('models.lead_types');
    }

    public static function getModelLabel(): string
    {
        return __('models.lead_type');
    }

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('name')
                    ->required()
                    ->live(onBlur: true)
                    ->maxLength(255)
                    ->afterStateUpdated(fn(string $operation, $state, Forms\Set $set) => in_array($operation, ['create', 'edit']) ? $set('slug', Str::slug($state)) : null)
                    ->label(__('fields.name')),
                Forms\Components\TextInput::make('slug')
                    ->dehydrated()
                    ->required()
                    ->maxLength(255)
                    ->unique(LeadType::class, 'slug', ignoreRecord: true)
                    ->label(__('fields.slug')),
                Forms\Components\Toggle::make('is_message_send')
                    ->label(__('fields.is_message_send'))
                    ->default(true),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('name')
                    ->searchable()
                    ->sortable()
                    ->label(__('fields.name')),
                Tables\Columns\TextColumn::make('slug')
                    ->searchable()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true)
                    ->label(__('fields.slug')),
                Tables\Columns\IconColumn::make('is_message_send')
                    ->boolean()
                    ->label(__('fields.is_message_send')),
            ])
            ->filters([
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
            'index' => Pages\ListLeadTypes::route('/'),
            'create' => Pages\CreateLeadType::route('/create'),
            'edit' => Pages\EditLeadType::route('/{record}/edit'),
        ];
    }

    /** @return Builder<LeadType> */
    public static function getGlobalSearchEloquentQuery(): Builder
    {
        return parent::getGlobalSearchEloquentQuery();
    }

    public static function getGloballySearchableAttributes(): array
    {
        return ['name'];
    }
}
