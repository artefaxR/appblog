<?php

use Orm\Post;

class Article extends MY_controller {

    public function form() {
        $notif  = '';

        if ($this->input->post()) {
            $title = $this->input->post('title');
            $article = $this->input->post('article');

            $post = new Post();
            $post->title = $title;
            $post->article = $article;
            $post->save();

            $notif = 'Data berhasil ditambahkan';
        }

        view('backend/Article/form', ['notif' => $notif]);
    }

    public function list() {
        $post_list = Post::all();

        view('backend/Article/list', ['post_list' => $post_list]);
    }
}