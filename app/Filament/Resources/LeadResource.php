<?php

declare(strict_types=1);

namespace App\Filament\Resources;

use App\Filament\Resources\LeadResource\Pages;
use App\Models\Brand;
use App\Models\Lead;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Filters\SelectFilter;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;

class LeadResource extends Resource
{
    protected static ?string $model = Lead::class;

    protected static ?string $recordTitleAttribute = 'id';

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-group';

    protected static ?int $navigationSort = 4;

    public static function getNavigationBadge(): ?string
    {
        $leads = Lead::query()
            ->where('is_processed', false)
            ->orWhereNull('is_processed')
            ->get();

        return (string)$leads->count();
    }

    public static function getNavigationGroup(): string
    {
        return __('navigation.company');
    }

    public static function getPluralModelLabel(): string
    {
        return __('models.leads');
    }

    public static function getModelLabel(): string
    {
        return __('models.lead');
    }

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('email')
                    ->maxLength(255)
                    ->label(__('fields.email')),
                Forms\Components\TextInput::make('phone')
                    ->maxLength(255)
                    ->label(__('fields.phone')),
                Forms\Components\TextInput::make('first_name')
                    ->maxLength(255)
                    ->label(__('fields.first_name')),
                Forms\Components\TextInput::make('last_name')
                    ->maxLength(255)
                    ->label(__('fields.last_name')),
                Forms\Components\Select::make('lead_type_id')
                    ->relationship('leadType', 'name')
                    ->searchable()
                    ->preload()
                    ->columnSpan('full')
                    ->createOptionForm([
                        Forms\Components\TextInput::make('name')
                            ->required()
                            ->maxLength(255)
                            ->label(__('fields.name')),
                    ])
                    ->label(__('fields.lead_type')),
                Forms\Components\Toggle::make('is_processed')
                    ->label(__('fields.is_processed'))
                    ->default(false),
                Forms\Components\Toggle::make('is_message_sent')
                    ->label(__('fields.is_message_sent'))
                    ->default(false),
                Forms\Components\Textarea::make('message')
                    ->maxLength(65535)
                    ->columnSpan('full')
                    ->label(__('fields.message')),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('id')
                    ->searchable()
                    ->sortable()
                    ->label(__('fields.id')),
                Tables\Columns\TextColumn::make('leadType.name')
                    ->searchable()
                    ->sortable()
                    ->label(__('fields.lead_type')),
                Tables\Columns\TextColumn::make('email')
                    ->searchable()
                    ->sortable()
                    ->label(__('fields.email')),
                Tables\Columns\TextColumn::make('phone')
                    ->searchable()
                    ->sortable()
                    ->label(__('fields.phone')),
                Tables\Columns\IconColumn::make('is_processed')
                    ->boolean()
                    ->label(__('fields.is_processed')),
                Tables\Columns\IconColumn::make('is_message_sent')
                    ->toggleable(isToggledHiddenByDefault: true)
                    ->boolean()
                    ->label(__('fields.is_message_sent')),
                Tables\Columns\TextColumn::make('first_name')
                    ->searchable()
                    ->toggleable(isToggledHiddenByDefault: true)
                    ->sortable()
                    ->label(__('fields.first_name')),
                Tables\Columns\TextColumn::make('last_name')
                    ->searchable()
                    ->toggleable(isToggledHiddenByDefault: true)
                    ->sortable()
                    ->label(__('fields.last_name')),
            ])
            ->filters([
                SelectFilter::make('leadType')
                    ->relationship('leadType', 'name')
                    ->searchable()
                    ->preload()
                    ->label(__('fields.lead_type')),
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
            ->modelLabel(__('models.lead'))
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
            'index' => Pages\ListLeads::route('/'),
            'create' => Pages\CreateLead::route('/create'),
            'edit' => Pages\EditLead::route('/{record}/edit'),
        ];
    }

    /** @return Builder<Brand> */
    public static function getGlobalSearchEloquentQuery(): Builder
    {
        return parent::getGlobalSearchEloquentQuery();
    }

    public static function getGloballySearchableAttributes(): array
    {
        return ['email'];
    }
}
