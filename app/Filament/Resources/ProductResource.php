<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ProductResource\Pages;
use App\Filament\Resources\ProductResource\RelationManagers;
use App\Models\Brand;
use App\Models\Category;
use App\Models\Product;
use Filament\Forms;
use Filament\Forms\Components\Builder;
use Filament\Forms\Form;
use Filament\Forms\Set;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Support\Str;

class ProductResource extends Resource
{
    protected static ?string $model = Product::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';
    protected static ?string $recordTitleAttribute = 'name';
    protected static ?int $navigationSort = 6;
    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Section::make()
                    ->schema([
                        Forms\Components\Select::make('category_id')
                            ->label('Category')
                            ->options(Category::all()->pluck('name', 'id'))
                            ->required(),
                        Forms\Components\Select::make('brand_id')
                            ->label('Brand')
                            ->options(Brand::all()->pluck('name', 'id'))
                            ->required(),
                    ])
                    ->columns(2),

                Forms\Components\Section::make()
                    ->schema([
                        Forms\Components\TextInput::make('name')
                            ->required()
                            ->maxLength(255)
                            ->live(onBlur: true)
                            ->afterStateUpdated(
                                fn (string $operation, $state, Set $set) =>
                                $operation === 'create' ? $set('slug', Str::slug($state)) : null,
                            ),
                        Forms\Components\TextInput::make('slug')
                            ->maxLength(255)
                            ->disabled()
                            ->required()
                            ->dehydrated()
                            ->unique(Category::class, 'slug', ignoreRecord: true),
                    ])
                    ->columns(1),

                Forms\Components\Section::make()
                    ->schema([
                        Forms\Components\FileUpload::make('images')
                            ->image()
                            ->multiple()
                            ->directory('product-images'),
                        Forms\Components\RichEditor::make('description')
                            ->required(),
                        Forms\Components\TextInput::make('price')
                            ->required()
                            ->numeric()
                            ->minValue(0)
                            ->step(0.01),
                    ])
                    ->columns(1),

                Forms\Components\Section::make()
                    ->schema([
                        Forms\Components\Toggle::make('is_active')
                            ->required(),
                        Forms\Components\Toggle::make('is_featured'),
                        Forms\Components\Toggle::make('in_stock'),
                        Forms\Components\Toggle::make('on_sale'),
                    ])
                    ->columns(2),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('name')
                    ->searchable()
                    ->sortable()
                    ->label('Name'),

                Tables\Columns\TextColumn::make('category.name')
                    ->searchable()
                    ->sortable()
                    ->label('Category'),

                Tables\Columns\TextColumn::make('brand.name')
                    ->searchable()
                    ->sortable()
                    ->label('Brand'),

                Tables\Columns\TextColumn::make('price')
                    ->searchable()
                    ->sortable()
                    ->money('USD', true) // Hiển thị tiền tệ nếu cần
                    ->label('Price'),

                Tables\Columns\IconColumn::make('is_active')
                    ->boolean()
                    ->searchable()
                    ->sortable()
                    ->label('Active'),

                Tables\Columns\IconColumn::make('is_featured')
                    ->boolean()
                    ->label('Featured')
                    ->toggleable(isToggledHiddenByDefault: true), // Ẩn cột khi bắt đầu

                Tables\Columns\IconColumn::make('in_stock')
                    ->boolean()
                    ->label('In Stock')
                    ->toggleable(isToggledHiddenByDefault: true), // Ẩn cột khi bắt đầu

                Tables\Columns\IconColumn::make('on_sale')
                    ->boolean()
                    ->label('On Sale')
                    ->toggleable(isToggledHiddenByDefault: true), // Ẩn cột khi bắt đầu
            ])
            ->filters([
                Tables\Filters\SelectFilter::make('brand_id')
                    ->options(Brand::all()->pluck('name', 'id'))
                    ->label('Brand'),

                Tables\Filters\SelectFilter::make('category_id')
                    ->options(Category::all()->pluck('name', 'id'))
                    ->label('Category'),
            ])
            ->actions([
                // Thêm hành động "View"
                Tables\Actions\ViewAction::make(),
                // Thêm hành động "Edit"
                Tables\Actions\EditAction::make(),
                // Thêm hành động "Delete"
                Tables\Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }


    public static function getRelations(): array
    {
        return [
            //
        ];
    }
    public static function getNavigationBadge(): ?string
    {
        return static::getModel()::count();
    }
    public static function getPages(): array
    {
        return [
            'index' => Pages\ListProducts::route('/'),
            'create' => Pages\CreateProduct::route('/create'),
            'edit' => Pages\EditProduct::route('/{record}/edit'),
        ];
    }
}
