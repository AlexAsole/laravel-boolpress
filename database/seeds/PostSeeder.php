<?php

use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use App\Author;
use App\AuthorDetail;
use App\Post;
use App\Comment;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i = 0; $i < 20; $i++) {
            $author = new Author();
            $author->name = $faker->firstname();
            $author->surname = $faker->lastname();
            $author->mail = $faker->email();
            $author->save();

            $authorDetail = new AuthorDetail();
            $authorDetail->bio = $faker->text();
            $authorDetail->website = $faker->url();
            $authorDetail->image = 'https://picsum.photos/seed/' . rand(1, 1000) . '/200/300';
            $author->detail()->save($authorDetail);

            for ($x = 0; $x < rand(1, 4); $x++) {
                $post = new Post();
                $post->title = $faker->text(rand(8, 24));
                $post->body = $faker->text(1000);
                $author->posts()->save($post);

                for ($y = 0; $y < rand(1, 3); $y++) {
                    $comment = new Comment();
                    $comment->content = $faker->text(rand(24, 144));
                    $post->comments()->save($comment);
                }
            }
        }
    }
}
