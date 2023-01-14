<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;
use Illuminate\Support\Str;
use App\Models\Post;
class PostTest extends TestCase
{
    use RefreshDatabase;

    public function testSavePost()
    {
        $post=new Post();
        $post->title='new title';
        $post->content='new content';
        $post->slug=Str::slug($post->title,'-');
        $post->active=false;
        $post->save();
        $this->assertDatabaseMissing('post',[
            'title'=>'new title',
        ]);

    }
}
