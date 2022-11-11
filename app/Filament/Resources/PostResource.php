<?php

namespace App\Filament\Resources;

use App\Filament\Resources\PostResource\Pages;
use App\Filament\Resources\PostResource\RelationManagers;
use App\Models\Post;
use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Livewire\Component;

class PostResource extends Resource
{
    protected static ?string $model = Post::class;

    protected static ?string $navigationIcon = 'heroicon-o-pencil';

    protected static ?int $navigationSort = 3;

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('user_id')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('category_id')
                    ->maxLength(255),
                Forms\Components\TextInput::make('post_id')
                    ->maxLength(255),
                Forms\Components\TextInput::make('title')
                    ->maxLength(255),
                Forms\Components\TextInput::make('poster')
                    ->maxLength(255),
                Forms\Components\TextInput::make('description')
                    ->maxLength(255),
                Forms\Components\TextInput::make('location')
                    ->maxLength(255),
                Forms\Components\TextInput::make('date')
                    ->maxLength(255),
                Forms\Components\Select::make('status')
                    ->options([0 => 'Inactive', 1 => 'Active'])
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('title')->searchable()->label('Event'),
                Tables\Columns\TextColumn::make('user_id')->searchable()->label('Organizer'),
                Tables\Columns\TextColumn::make('category_id')->searchable()->label('Category'),
                Tables\Columns\TextColumn::make('location')->searchable(),
                Tables\Columns\TextColumn::make('date')->searchable(),
                Tables\Columns\BooleanColumn::make('status')->sortable(),

            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\ViewAction::make(),
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
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
            'index' => Pages\ListPosts::route('/'),
            'create' => Pages\CreatePost::route('/create'),
            'edit' => Pages\EditPost::route('/{record}/edit'),
        ];
    }
}
