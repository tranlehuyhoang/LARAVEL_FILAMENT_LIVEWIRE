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

    protected static ?string $navigationIcon = 'heroicon-o-cube';
    protected static ?string $recordTitleAttribute = 'name';
    protected static ?int $navigationSort = 6;
    public static function getPluralModelLabel(): string
    {
        return 'Sản phẩm';
    }
    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Section::make()
                    ->schema([
                        Forms\Components\Select::make('category_id')
                            ->label('Danh mục')
                            ->options(Category::all()->pluck('name', 'id'))
                            ->required(),
                        Forms\Components\Select::make('brand_id')
                            ->label('Thương hiệu')
                            ->options(Brand::all()->pluck('name', 'id'))
                            ->required(),
                    ])
                    ->columns(2),

                Forms\Components\Section::make()
                    ->schema([
                        Forms\Components\TextInput::make('name')
                            ->label('Tên sản phẩm')
                            ->required()
                            ->maxLength(255)
                            ->live(onBlur: true)
                            ->afterStateUpdated(
                                fn (string $operation, $state, Set $set) =>
                                $operation === 'create' ? $set('slug', Str::slug($state)) : null,
                            ),
                        Forms\Components\TextInput::make('slug')
                            ->label('Slug')
                            ->maxLength(255)
                            ->disabled()
                            ->required()
                            ->dehydrated()
                            ->unique(Product::class, 'slug', ignoreRecord: true),
                    ])
                    ->columns(1),

                Forms\Components\Section::make()
                    ->schema([
                        Forms\Components\FileUpload::make('images')
                            ->label('Hình ảnh')
                            ->image()
                            ->multiple()
                            ->directory('product-images'),
                        Forms\Components\RichEditor::make('description')
                            ->label('Mô tả')
                            ->required(),
                        Forms\Components\TextInput::make('price')
                            ->label('Giá')
                            ->required()
                            ->numeric()
                            ->minValue(0)
                            ->step(0.01),
                    ])
                    ->columns(1),

                Forms\Components\Section::make()
                    ->schema([
                        Forms\Components\Toggle::make('is_active')
                            ->label('Kích hoạt')
                            ->required(),
                        Forms\Components\Toggle::make('is_featured')
                            ->label('Nổi bật'),
                        Forms\Components\Toggle::make('in_stock')
                            ->label('Còn hàng'),
                        Forms\Components\Toggle::make('on_sale')
                            ->label('Khuyến mãi'),
                    ])
                    ->columns(2),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('name')
                    ->label('Tên sản phẩm')
                    ->searchable()
                    ->sortable(),

                Tables\Columns\TextColumn::make('category.name')
                    ->label('Danh mục')
                    ->searchable()
                    ->sortable(),

                Tables\Columns\TextColumn::make('brand.name')
                    ->label('Thương hiệu')
                    ->searchable()
                    ->sortable(),

                Tables\Columns\TextColumn::make('price')
                    ->label('Giá')
                    ->searchable()
                    ->sortable()
                    ->money('VND', true), // Hiển thị tiền tệ nếu cần

                Tables\Columns\IconColumn::make('is_active')
                    ->label('Kích hoạt')
                    ->boolean()
                    ->searchable()
                    ->sortable(),

                Tables\Columns\IconColumn::make('is_featured')
                    ->label('Nổi bật')
                    ->boolean()
                    ->toggleable(isToggledHiddenByDefault: true), // Ẩn cột khi bắt đầu

                Tables\Columns\IconColumn::make('in_stock')
                    ->label('Còn hàng')
                    ->boolean()
                    ->toggleable(isToggledHiddenByDefault: true), // Ẩn cột khi bắt đầu

                Tables\Columns\IconColumn::make('on_sale')
                    ->label('Khuyến mãi')
                    ->boolean()
                    ->toggleable(isToggledHiddenByDefault: true), // Ẩn cột khi bắt đầu
            ])
            ->filters([
                Tables\Filters\SelectFilter::make('brand_id')
                    ->options(Brand::all()->pluck('name', 'id'))
                    ->label('Thương hiệu'),

                Tables\Filters\SelectFilter::make('category_id')
                    ->options(Category::all()->pluck('name', 'id'))
                    ->label('Danh mục'),
            ])
            ->actions([
                Tables\Actions\ViewAction::make()
                    ->label('Xem'),
                Tables\Actions\EditAction::make()
                    ->label('Chỉnh sửa'),
                Tables\Actions\DeleteAction::make()
                    ->label('Xóa'),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make()
                        ->label('Xóa'),
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