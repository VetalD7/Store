<?php

use App\Models\Article;
use App\Models\ArticleTranslation;
use Illuminate\Database\Seeder;

class ArticleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = json_decode(File::get('database/data/articles_test_date.json'),true);

        foreach ($data as $item)
        {
            $article  = Article::create([
                'link'     => $item['link'],
                'status'    => $item['status'],
                'date_publish' => $item['date_publish'],
            ]);

            foreach ($item['string'] as $key => $value)
            {
                ArticleTranslation::create([
                    'article_id'     => $article->id,
                    'lang'           => $key,
                    'title'         => $value['title'],
                    'description'   => $value['description'],
                    'content'        => $value['content'],
                ]);
            }


        }

    }
}
