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

        $flashdata = $this->session->flashdata();

        view('backend/Article/list', ['post_list' => $post_list, 'flashdata' => $flashdata]);
    }

    public function hapus($id) {
        $del = Post::find($id);
        $del->delete();

        $this->session->set_flashdata('notif', 'Data berhasil dihapus');

        redirect('backend/Article/list');
    }

    public function edit($id) {
        $edit = Post::find($id);
        $notif = '';

        if ($this->input->post()) {
            $title = $this->input->post('title');
            $article = $this->input->post('article');

            $edit->title = $title;
            $edit->article = $article;
            $edit->save();

            $notif = 'Data berhasil diubah';
        }

        view('backend/article/form', ['edit' => $edit, 'notif' => $notif]);
    }
}