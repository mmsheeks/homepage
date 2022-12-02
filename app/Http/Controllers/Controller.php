<?php

namespace App\Http\Controllers;

use App\Models\Spotlight;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function home()
    {
        $spotlights = $this->spotlights();
        $year = now()->format('Y');
        return view('home', ['spotlights' => $spotlights, 'year' => $year]);
    }

    private function spotlights(): array
    {
        $items = collect();

        $biw = new Spotlight();
        $biw->title('PHP Developer')
            ->subtitle('BI WORLDWIDE | 2022 - present')
            ->image('images/projects/biw.png')
            ->detail('Currently I work for BIW in their Technology Service Group as a PHP Developer. Our team works on custom solutions for employee rewards and incentive programs.')
            ->skills([
                'PHP 7.4|8+',
                'Laravel',
                'Yii (legacy code)',
                'Gitlab'
            ])
            ->link('https://biworldwide.com', 'BI WORLDWIDE');
        $items->add($biw);

        $cc = new Spotlight();
        $cc->title('Server Co-Owner')
            ->subtitle('Clovercraft SMP | 2020 - present')
            ->image('images/projects/clovercraft.png')
            ->detail('As the co-owner and technical lead for the Clovercraft SMP, I work with a team of volunteer staff to help manage and promote an online gaming community that\'s welcoming to all.')
            ->skills([
                'DevOps',
                'Community development & management',
                'Java',
                'Minecraft',
                'GitHub'
            ])
            ->link('https://clovercraft.gg', 'Clovercraft');
        $items->add($cc);

        $photog = new Spotlight();
        $photog->title('Photographer')
            ->subtitle('Self employeed')
            ->image('images/projects/photog.jpg')
            ->detail('As both a profession and a hobby, I have a passion for capturing moments and sights that would otherwise be lost to time. My photography work focuses mainly on protest movements and personal portraiture.')
            ->skills([
                'Photography',
                'Lightroom',
                'Photoshop',
                'Client management'
            ])
            ->link('https://martinsheeks.myportfolio.com/work', 'Photo Gallery');
        $items->add($photog);

        $bytes = new Spotlight();
        $bytes->title('Full-Stack Developer')
            ->subtitle('bytes.co | 2020 - 2021')
            ->image('images/projects/bytes.png')
            ->detail('At Bytes Co. I worked with a small team of developers to build websites for our clients that focused on accessibility and responsive design.')
            ->skills([
                'PHP 7.4|8+',
                'Wordpress',
                'WCAG Accessibility',
                'CSS / SASS',
                'GitHub'
            ]);
        $items->add($bytes);

        $moco = new Spotlight();
        $moco->title('Web Developer')
            ->subtitle('MoCo, Inc. | 2014 - 2019')
            ->image('images/projects/moco.png')
            ->detail('MoCo focused on creating custom web solutions for clients that featured their products and services. We also developed and maintained several custom service applications.')
            ->skills([
                'PHP 7.4',
                'DevOps',
                'Javascript (jQuery)',
                'Wordpress',
                'Laravel',
                'Symfony',
                'Git'
            ]);
        $items->add($moco);

        return $items->toArray();
    }
}
