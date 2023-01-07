<?php
namespace App\Repository\Post;

interface PostService{

    /**
     * create new post
     * @param array $data
     * @return \App\Models\Post
     */
    public function createPost(array $data);

    /**
     * get all post list
     * @return array
     */
    public function getAllPost();

    /**
     * get post with id
     * @param int $id
     * @return \App\Models\Post
     */
    public function getPost(int $id);

    /**
     * delete post
     * @param mixed $id
     * @return bool
     */
    public function deletePost($id);

     /**
      * toogle post status is -public
      * @param mixed $id
      * @return \App\Models\Post;
      */

    public function togglePostStatus($id);
}
