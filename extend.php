<?php

use Flarum\Extend;
use s9e\TextFormatter\Configurator;

return [
    (new Extend\Frontend('forum'))
        ->js(__DIR__.'/js/forum.js')
        ->css(__DIR__.'/less/forum.less'),

    (new Extend\Formatter())
        ->configure(function (Configurator $configurator) {
            $configurator->BBCodes->addCustom(
                '[PBAR]{TEXT},{TEXT2},{COLOR},{COLOR2},{COLOR3},{NUMBER},{NUMBER2},{NUMBER3},{NUMBER4}[/PBAR]',
                '<h1>{TEXT}</h1>
                <div class="arrow" style="border: {NUMBER}px solid {COLOR};border-radius:{NUMBER3}px;margin-bottom:{NUMBER4}px">
                 <div class="arrow-status" style="width: {NUMBER2}%; background-color: {COLOR2};border-bottom-left-radius: {NUMBER3}px; border-top-left-radius: {NUMBER3}px;border-right: 0.5em solid {COLOR3}">
                   <span class="arrow-pointer">{TEXT2}</span>
                </div>
                </div>'
            );
        }),
];
