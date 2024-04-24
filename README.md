<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\File;
use Symfony\Component\DomCrawler\Crawler;

class Demo extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:demo';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $filePath = public_path('demo.html');

        $crawler = new Crawler(File::get($filePath));

        $htmlAfter = $crawler->filter('div#list_sp_col_right')->html();

        $newFilePath = public_path('demo-after.html');

        File::put($newFilePath, $htmlAfter);

        $this->info('File has been created');

    }
}

composer require symfony/dom-crawler

{
  "loop_data": {
    "loop": "div.ProductGrid__grid div",
    "database": {
      "table": "hasaki",
      "template_id": "template_file/demo2.json"
    },
    "data": {
      "main_url": {
        "dom": "div a",
        "type": "href",
        "position": 1,
        "replace": {
          "type": "concat",
          "from": "before",
          "to": "https://hasaki.vn/"
        }
      },
      "main_name": {
        "dom": "a.parent_menu",
        "type": "innertext",
        "position": 0
      },
      "sub_url": {
        "dom": "div.conten_hover_submenu div.col_hover_submenu ",
        "type": "innertext",
        "position": 0
      }
    },
    "template_id": {
      "value": "template_file/honda/honda-1.json"
    },
    "project_id": {
      "value": 30
    }
  }
}
