<?php

namespace App\Traits;

use Illuminate\Support\Str;

trait WithIcons
{

    public $iconSearch = '';

    public $libraries = [
        // A
        // 'codeat3/blade-academicons' => ['component' => 'academicon', 'title' => 'Academicons', 'url' => 'http://jpswalsh.github.io/academicons/'],
        'codeat3/blade-akar-icons' => ['component' => 'akar', 'title' => 'Akar Icons', 'url' => 'https://akaricons.com/'],
        // 'codeat3/blade-ant-design-icons' => ['component' => 'antdesign', 'title' => 'Ant Design Icons', 'url' => 'https://ant.design/components/icon/'],
        // B
        // 'davidhsianturi/blade-bootstrap-icons' => ['component' => 'bi', 'title' => 'Bootstrap', 'url' => 'https://icons.getbootstrap.com/'],
        // 'mallardduck/blade-boxicons' => ['component' => 'bx', 'title' => 'Boxicons', 'url' => 'https://boxicons.com/'],
        'codeat3/blade-bytesize-icons' => ['component' => 'bytesize', 'title' => 'Bytesize', 'url' => 'https://danklammer.com/bytesize-icons/'],
        // C
        // 'codeat3/blade-carbon-icons' => ['component' => 'carbon', 'title' => 'Carbon Sigma'],
        // 'codeat3/blade-clarity-icons' => ['component' => 'clarity', 'title' => 'Clarity Design System', 'url' => 'https://clarity.design/foundation/icons/shapes/'],
        // 'codeat3/blade-coolicons' => ['component' => 'coolicons', 'title' => 'Coolicons', 'url' => 'https://coolicons.cool/'],
        // 'ublabs/blade-coreui-icons' => ['component' => 'cui', 'title' => 'CoreUI Icons', 'url' => 'https://icons.coreui.io/icons/'],
        // 'stijnvanouplines/blade-country-flags' => ['component' => 'flag', 'title' => 'Flag Icon CSS', 'url' => 'https://github.com/lipis/flag-icons'],
        // 'codeat3/blade-cryptocurrency-icons' => ['component' => 'cri', 'title' => 'Cryptocurrency Icons', 'url' => 'http://cryptoicons.co/'],
        // 'khatabwedaa/blade-css-icons' => ['component' => 'css', 'title' => 'CSS Icons', 'url' => 'https://css.gg/'],
        // D
        // 'codeat3/blade-devicons' => ['component' => 'devicon', 'title' => 'DevIcons', 'url' => 'https://devicon.dev/'],
        // E
        // 'codeat3/blade-elusive-icons' => ['component' => 'elusive', 'title' => 'Elusive Icons', 'url' => 'http://elusiveicons.com/'],
        // 'codeat3/blade-emblemicons' => ['component' => 'emblem', 'title' => 'Emblemicons', 'url' => 'https://emblemicons.in/'],
        // 'owenvoke/blade-entypo' => ['component' => 'entypo', 'title' => 'Entypo', 'url' => 'http://entypo.com/'],
        // 'codeat3/blade-eos-icons' => ['component' => 'eos', 'title' => 'EOS Icons', 'url' => 'https://icons.eosdesignsystem.com/'],
        // 'hasnayeen/blade-eva-icons' => ['component' => 'eva', 'title' => 'Eva Icons', 'url' => 'https://akveo.github.io/eva-icons/#/'],
        // 'codeat3/blade-evil-icons' => ['component' => 'ei', 'title' => 'Evil Icons', 'url' => 'https://evil-icons.io/'],
        // F
        // 'brunocfalcao/blade-feather-icons' => ['component' => 'feathericon', 'title' => 'Feather Icons', 'url' => 'https://feathericons.com/'],
        // 'codeat3/blade-file-icons' => ['component' => 'fileicon', 'title' => 'File Icons', 'url' => 'https://github.com/file-icons/icons'],
        // 'codeat3/blade-fluentui-system-icons' => ['component' => 'fluentui', 'title' => 'FluentUi System Icons', 'url' => 'https://github.com/microsoft/fluentui-system-icons'],
        // 'codeat3/blade-fontaudio' => ['component' => 'fontaudio', 'title' => 'Font Audio Icons', 'url' => 'https://github.com/fefanto/fontaudio'],
        // 'owenvoke/blade-fontawesome' => ['component' => 'fas', 'title' => 'Font Awesome', 'url' => 'https://fontawesome.com/'],
        // 'codeat3/blade-fontisto-icons' => ['component' => 'fontisto', 'title' => 'Fontisto', 'url' => 'https://fontisto.com/icons'],
        // 'codeat3/blade-forkawesome' => ['component' => 'forkawesome', 'title' => 'Fork Awesome', 'url' => 'https://forkaweso.me/Fork-Awesome/'],
        // G
        // 'actb/blade-github-octicons' => ['component' => 'go', 'title' => 'Github Octicons', 'url' => 'https://primer.style/octicons/'],
        // 'codeat3/blade-google-material-design-icons' => ['component' => 'gmdi', 'title' => 'Google Material Design Icons', 'url' => 'https://fonts.google.com/icons'],
        // 'codeat3/blade-govicons' => ['component' => 'govicon', 'title' => 'Gov Icons', 'url' => 'http://govicons.io/'],
        // 'codeat3/blade-grommet-icons' => ['component' => 'grommet', 'title' => 'Grommet', 'url' => 'https://icons.grommet.io/'],
        // H
        // 'troccoli/blade-health-icons' => ['component' => 'healthicons', 'title' => 'Health Icons', 'url' => 'https://healthicons.org/'],
        'blade-ui-kit/blade-heroicons' => ['component' => 'heroicon', 'title' => 'Heroicons', 'url' => 'https://heroicons.com/'],
        // I
        // 'nerdroid23/blade-icomoon' => ['component' => 'icomoon', 'title' => 'IcoMoon', 'url' => 'https://icomoon.io/'],
        // 'codeat3/blade-iconpark' => ['component' => 'iconpark', 'title' => 'Icon Park', 'url' => 'https://github.com/bytedance/IconPark'],
        // 'itsmalikjones/blade-iconic' => ['component' => 'iconic', 'title' => 'Iconic', 'url' => 'https://iconic.app/'],
        // 'andreiio/blade-iconoir' => ['component' => 'iconoir', 'title' => 'Iconoir', 'url' => 'https://iconoir.com/'],
        // 'codeat3/blade-ikonate' => ['component' => 'ik', 'title' => 'Ikonate', 'url' => 'https://ikonate.com/'],
        // 'faisal50x/blade-ionicons' => ['component' => 'ionicon', 'title' => 'Ionicons', 'url' => 'https://ionicframework.com/'],
        // J
        // 'codeat3/blade-jam-icons' => ['component' => 'jam', 'title' => 'Jam Icons', 'url' => 'https://jam-icons.com/'],
        // L
        // 'codeat3/blade-line-awesome-icons' => ['component' => 'lineawesome', 'title' => 'Line Awesome Icons', 'url' => 'https://icons8.com/line-awesome'],
        // 'mallardduck/blade-lucide-icons' => ['component' => 'lucide', 'title' => 'Lucide Icons', 'url' => 'https://lucide.dev/'],
        // M
        // 'codeat3/blade-majestic-icons' => ['component' => 'majestic', 'title' => 'Majestic Icons', 'url' => 'https://majesticons.netlify.app/'],
        // 'codeat3/blade-maki-icons' => ['component' => 'maki', 'title' => 'Maki Icons', 'url' => 'https://labs.mapbox.com/maki-icons/'],
        // 'codeat3/blade-microns' => ['component' => 'microns', 'title' => 'Microns', 'url' => 'https://www.s-ings.com/projects/microns-icon-font/'],
        // 'codeat3/blade-mono-icons' => ['component' => 'monoicon', 'title' => 'Mono Icons', 'url' => 'https://icons.mono.company/'],
        // P
        // 'codeat3/blade-pepicons' => ['component' => 'pepicon', 'title' => 'Pepicons', 'url' => 'https://pepicons.com/'],
        // 'codeat3/blade-phosphor-icons' => ['component' => 'phosphor', 'title' => 'Phosphor Icons', 'url' => 'https://phosphoricons.com/'],
        // 'codeat3/blade-pixelarticons' => ['component' => 'pixelarticons', 'title' => 'Pixelarticons', 'url' => 'https://pixelarticons.com/'],
        // 'codeat3/blade-prime-icons' => ['component' => 'prime', 'title' => 'Prime Icons', 'url' => 'https://www.primefaces.org/primeng/showcase/#/icons'],
        // R
        // 'codeat3/blade-radix-icons' => ['component' => 'radix', 'title' => 'Radix Icons', 'url' => 'https://icons.modulz.app/'],
        // 'andreiio/blade-remix-icon' => ['component' => 'ri', 'title' => 'Remix Icons', 'url' => 'https://remixicon.com/'],
        // 'codeat3/blade-rpg-awesome-icons' => ['component' => 'rpg', 'title' => 'RPG Awesome Icons', 'url' => 'https://nagoshiashumari.github.io/Rpg-Awesome/'],
        // S
        // 'ublabs/blade-simple-icons' => ['component' => 'simpleicon', 'title' => 'Simple Icons', 'url' => 'https://simpleicons.org/'],
        // 'codeat3/blade-simple-line-icons' => ['component' => 'simpleline', 'title' => 'Simple Line Icons', 'url' => 'https://thesabbir.github.io/simple-line-icons/'],
        // 'codeat3/blade-system-uicons' => ['component' => 'sui', 'title' => 'System Uicons', 'url' => 'https://systemuicons.com/'],
        // T
        // 'ryangjchandler/blade-tabler-icons' => ['component' => 'tabler', 'title' => 'Tabler Icons', 'url' => 'https://preview.tabler.io/icons.html'],
        // 'codeat3/blade-teeny-icons' => ['component' => 'tni', 'title' => 'Teeny Icons', 'url' => 'https://teenyicons.com/'],
        // 'codeat3/blade-typicons' => ['component' => 'typ', 'title' => 'Typicons', 'url' => 'https://www.s-ings.com/typicons/'],
        // U
        // 'codeat3/blade-uiw-icons' => ['component' => 'uiw', 'title' => 'Uiw Icons', 'url' => 'https://uiwjs.github.io/icons/'],
        // 'codeat3/blade-unicons' => ['component' => 'uni', 'title' => 'Unicons', 'url' => 'https://iconscout.com/unicons'],
        // V
        // 'codeat3/blade-vaadin-icons' => ['component' => 'vaadin', 'title' => 'Vaadin Icons', 'url' => 'https://vaadin.com/components/vaadin-icons'],
        // 'codeat3/blade-codicons' => ['component' => 'codicon', 'title' => 'VSCode Codicons', 'url' => 'https://github.com/microsoft/vscode-codicons'],
        // W
        'codeat3/blade-weather-icons' => ['component' => 'wi', 'title' => 'Weather Icons', 'url' => 'https://erikflowers.github.io/weather-icons/'],
        // Z
        'blade-ui-kit/blade-zondicons' => ['component' => 'zondicon', 'title' => 'Zondicons', 'url' => 'http://www.zondicons.com/'],
    ];

    public function getIconsProperty()
    {
        return collect($this->libraries)->mapWithKeys(function ($lib, $key) {
            $icons = collect(app('files')->files(base_path("/vendor/$key/resources/svg")))
                ->when($this->iconSearch !== '', function ($collection) {
                    return $collection->filter(fn ($icon) => Str::contains($icon->getFilename(), $this->iconSearch));
                })
                ->map(fn ($icon) => [
                    'name' => $icon->getFilename(),
                    'component' => $lib['component'] . '-' . $icon->getBasename('.svg'),
                ]);

            return [$lib['title'] => $icons];
        });
    }
}
