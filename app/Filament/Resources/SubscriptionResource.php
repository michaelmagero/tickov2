<?php

namespace App\Filament\Resources;

use App\Filament\Resources\SubscriptionResource\Pages;
use App\Filament\Resources\SubscriptionResource\RelationManagers;
use App\Models\Package;
use App\Models\Subscription;
use App\Models\User;
use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class SubscriptionResource extends Resource
{
    protected static ?string $model = Subscription::class;

    protected static ?string $navigationIcon = 'heroicon-o-user-circle';

    protected static ?int $navigationSort = 6;

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Select::make('user_id')
                    ->label('Company')
                    ->options(User::all()->pluck('company', 'id'))
                    ->disablePlaceholderSelection(),
                Forms\Components\Select::make('package_id')
                    ->required()
                    ->label('Package')
                    ->options(Package::all()->pluck('name', 'id'))
                    ->disablePlaceholderSelection(),
                Forms\Components\Select::make('status')
                    ->required()
                    ->options([0 => 'In-Active', 1 => 'Active']),
                Forms\Components\DatePicker::make('trial_end_date')
                    ->required(),
                Forms\Components\DatePicker::make('subscription_end_date')
                    ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('user.company')->searchable()->label('Company'),
                Tables\Columns\TextColumn::make('package.name')->searchable(),
                Tables\Columns\BooleanColumn::make('status')->searchable(),
                Tables\Columns\TextColumn::make('trial_end_date')
                    ->dateTime('Y M d')->sortable(),
                Tables\Columns\TextColumn::make('subscription_end_date')
                    ->dateTime('Y M d')->sortable(),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make()->color('success'),
                Tables\Actions\DeleteAction::make()->icon('heroicon-s-trash'),
            ])
            ->bulkActions([
                Tables\Actions\DeleteBulkAction::make(),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListSubscriptions::route('/'),
            'create' => Pages\CreateSubscription::route('/create'),
            'edit' => Pages\EditSubscription::route('/{record}/edit'),
        ];
    }
}
