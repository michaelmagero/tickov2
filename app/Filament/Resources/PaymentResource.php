<?php

namespace App\Filament\Resources;

use App\Filament\Resources\PaymentResource\Pages;
use App\Filament\Resources\PaymentResource\RelationManagers;
use App\Models\Payment;
use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class PaymentResource extends Resource
{
    protected static ?string $model = Payment::class;

    protected static ?string $navigationIcon = 'heroicon-o-credit-card';

    protected static ?int $navigationSort = 7;

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('status')->searchable(),
                Tables\Columns\TextColumn::make('txncd')->searchable(),
                Tables\Columns\TextColumn::make('msisdn_id')->searchable(),
                Tables\Columns\TextColumn::make('msisdn_idnum')->searchable(),
                Tables\Columns\TextColumn::make('p1')->searchable(),
                Tables\Columns\TextColumn::make('p2')->searchable(),
                Tables\Columns\TextColumn::make('p3')->searchable(),
                Tables\Columns\TextColumn::make('p4')->searchable(),
                Tables\Columns\TextColumn::make('uyt')->searchable(),
                Tables\Columns\TextColumn::make('agt')->searchable(),
                Tables\Columns\TextColumn::make('qwh')->searchable(),
                Tables\Columns\TextColumn::make('ifd')->searchable(),
                Tables\Columns\TextColumn::make('afd')->searchable(),
                Tables\Columns\TextColumn::make('poi')->searchable(),
                Tables\Columns\TextColumn::make('ivm')->searchable(),
                Tables\Columns\TextColumn::make('mc')->searchable(),
                Tables\Columns\TextColumn::make('channel')->searchable(),

            ])
            ->filters([
                //
            ])
            ->actions([
            ])
            ->bulkActions([
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
            'index' => Pages\ListPayments::route('/'),
        ];
    }
}
