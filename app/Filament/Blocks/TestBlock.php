<?php

namespace App\Filament\Blocks;

use Filament\Forms\Components\TextInput;
use Haringsrob\FilamentPageBuilder\Blocks\BlockEditorBlock;
use Illuminate\Contracts\View\View;

class TestBlock extends BlockEditorBlock {
    public function form(): array
    {
        return [
            TextInput::make('title')->email(),
        ];
    }

    public function renderDisplay(array $state): string|View
    {
        return view('filament.blocks.test-block', $state);
    }
}
