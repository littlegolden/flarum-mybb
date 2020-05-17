<?php

namespace Golden\MyBBCode;

use Flarum\Extend;
use s9e\TextFormatter\Configurator;

return [
    (new Extend\Frontend('forum'))
        ->css(__DIR__ . '/resources/less/extension.less'),
    (new Extend\Formatter)
        ->configure(function (Configurator $config) {
            $config->BBcodes->addCustom(
                '[steam]{TEXT}[/steam]',
                '<span class="steam_spoiler"><span>{TEXT}</span></span>'
            );
            $config->BBcodes->addCustom(
                '[outurl]',
                '<span class="outurl"><svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true" x="0px" y="0px" viewBox="0 0 100 100" width="15" height="15" class="icon outbound"><path fill="currentColor" d="M18.8,85.1h56l0,0c2.2,0,4-1.8,4-4v-32h-8v28h-48v-48h28v-8h-32l0,0c-2.2,0-4,1.8-4,4v56C14.8,83.3,16.6,85.1,18.8,85.1z"></path> <polygon fill="currentColor" points="45.7,48.7 51.3,54.3 77.2,28.5 77.2,37.2 85.2,37.2 85.2,14.9 62.8,14.9 62.8,22.9 71.5,22.9"></polygon></svg></span>'
            );
            $config->BBcodes->addCustom(
                '[ext]',
                '<span class="outurl"><svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true" x="0px" y="0px" viewBox="0 0 100 100" width="15" height="15" class="icon outbound"><path fill="currentColor" d="M18.8,85.1h56l0,0c2.2,0,4-1.8,4-4v-32h-8v28h-48v-48h28v-8h-32l0,0c-2.2,0-4,1.8-4,4v56C14.8,83.3,16.6,85.1,18.8,85.1z"></path> <polygon fill="currentColor" points="45.7,48.7 51.3,54.3 77.2,28.5 77.2,37.2 85.2,37.2 85.2,14.9 62.8,14.9 62.8,22.9 71.5,22.9"></polygon></svg></span>'
            );
            $config->BBcodes->addCustom(
                '[o]{TEXT1}[/o]',
                '<span><input type="checkbox" style="margin-right: 10px" disabled>{TEXT1}</span>'
            );
            $config->BBcodes->addCustom(
                '[x]{TEXT2}[/x]',
                '<span><input type="checkbox" style="margin-right: 10px" checked disabled><del>{TEXT2}</del></span>'
            );
            $config->BBCodes->addCustom(
                '[brown]{TEXT3}[/brown]',
                '<span class="bbbrown">{TEXT3}</span>'
            );
            $config->BBCodes->addCustom(
                '[aquote]{TEXT}[/aquote]',
                '<div id="aaalertbody"><div class="aaalert aaquote"><p class="aainner">{TEXT}</p></div></div>'
            );
        })
];
