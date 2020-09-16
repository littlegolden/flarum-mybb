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
                '<i class="outurl"><svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true" x="0px" y="0px" viewBox="0 0 100 100" width="15" height="15" class="icon outbound"><path fill="currentColor" d="M18.8,85.1h56l0,0c2.2,0,4-1.8,4-4v-32h-8v28h-48v-48h28v-8h-32l0,0c-2.2,0-4,1.8-4,4v56C14.8,83.3,16.6,85.1,18.8,85.1z"></path> <polygon fill="currentColor" points="45.7,48.7 51.3,54.3 77.2,28.5 77.2,37.2 85.2,37.2 85.2,14.9 62.8,14.9 62.8,22.9 71.5,22.9"></polygon></svg></i>'
            );
            $config->BBcodes->addCustom(
                '[prem]',
                '<i title="付费" alt="付费"><svg xmlns="http://www.w3.org/2000/svg" width="72" height="72" viewBox="0 0 20 20" style="width: 1.5em; height: 1.5em; margin:0 .1em; vertical-align: -0.3em;"><path d="M20 10c0-1.4-.9-2.7-2.2-3.2.8-1.7 0-3.8-1.7-4.6-.9-.4-1.9-.4-2.8 0-.7-1.8-2.7-2.7-4.4-2-.9.3-1.7 1.1-2 2C5 1.4 3 2.2 2.2 3.9c-.4.9-.4 1.9 0 2.8-1.8.7-2.7 2.7-2 4.4.3.9 1.1 1.7 2 2-.8 1.7 0 3.8 1.7 4.6.9.4 1.9.4 2.8 0 .7 1.8 2.7 2.7 4.4 2 .9-.3 1.7-1.1 2-2 1.7.8 3.8 0 4.6-1.7.4-.9.4-1.9 0-2.8 1.4-.5 2.3-1.7 2.3-3.2zm-9.1 3.7v.7c0 .3-.3.6-.6.6h-.6c-.4 0-.7-.3-.7-.6v-.7c-.4-.1-.9-.2-1.2-.4-.2-.2-.3-.5-.1-.7l.7-.7c.1-.1.4-.2.6-.1.1.1.3.1.4.1h1.3c.2 0 .3-.1.3-.3 0-.1-.1-.3-.2-.3l-2-.6c-.9-.3-1.6-1-1.7-1.9C7 7.6 7.8 6.5 9 6.3v-.7c0-.3.3-.6.7-.6h.6c.3 0 .6.3.6.6v.7c.4.1.9.2 1.2.4.2.2.3.5.1.7l-.7.7c-.1.1-.4.2-.6.1-.1-.1-.3-.1-.4-.1H9.3c-.2.1-.3.2-.3.4 0 .1.1.3.2.3l2 .6c.9.3 1.6 1 1.7 1.9.1 1.1-.7 2.3-2 2.4z" fill="#8b3d9b"/><path d="M280-141.6v17.6c0 8.8-7.2 16-16 16h-16c-8.8 0-16-7.2-16-16v-17.7c-11.3-1.3-22.2-5.2-31.8-11.5-6.2-4.1-6.8-13.1-1.6-18.4l17.5-17.5c3.7-3.7 9.3-4.2 14.1-2 3.2 1.5 6.7 2.2 10.3 2.2h32.8c4.7 0 8.4-3.8 8.4-8.4 0-3.8-2.5-7-6.1-8.1l-50.1-14.3c-22.3-6.4-40-24.7-42.9-47.7-3.9-30.8 17.9-59 48.7-62.9.2 0 .4-.1.6-.1V-348c0-8.8 7.2-16 16-16h16c8.8 0 16 7.2 16 16v17.7c11.3 1.3 22.2 5.2 31.8 11.5 6.2 4.1 6.8 13.1 1.5 18.4l-17.5 17.5c-3.7 3.7-9.3 4.2-14.1 2-3.2-1.5-6.7-2.2-10.3-2.2h-32.8c-4.7 0-8.4 3.8-8.4 8.4 0 3.8 2.5 7 6.1 8.1l50.1 14.3c22.3 6.4 40 24.7 42.9 47.7 3.9 30.8-17.9 59-48.7 62.9-.1 0-.3 0-.5.1z" fill="#fff"/></svg></i>'
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
