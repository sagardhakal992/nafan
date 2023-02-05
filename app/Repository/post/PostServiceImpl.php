<?php
namespace App\Repository\Post;

use App\Helper\TryCatchHelper;
use App\Models\Post;
use Exception;
use Illuminate\Support\ItemNotFoundException;

class PostServiceImpl implements PostService
{

	/**
	 * create new post
	 *
	 * @param array $data
	 * @return \App\Models\Post
	 */
	public function createPost(array $data) {
        return TryCatchHelper::tryCatchThrow(function () use ($data) {
            $post = Post::create([
                "title"=>$data["title"],
                'description'=>$data['description'],
                'short_description'=>$data['short_description'],
                'is_public'=>$data['is_public'],
                'fk_member_id'=>$data['fk_member_id'],
            ]);
            return $post;
        });
	}

	/**
	 * get all post list
	 * @return array
	 */
	public function getAllPost() {
        return TryCatchHelper::tryCatchThrow(function () {
            $posts = Post::all()->sortByDesc("created_at");
            return $posts;
        });
	}

	/**
	 * get post with id
	 *
	 * @param int $id
	 * @return \App\Models\Post
	 */
	public function getPost(int $id) {
        return TryCatchHelper::tryCatchThrow(function ()use($id) {
            $post = Post::find($id);
            if(!$post){
                throw new ItemNotFoundException("no post found with given id");
            }
            return $post;
        });
	}

	/**
	 * delete post
	 *
	 * @param mixed $id
	 * @return bool
	 */
	public function deletePost($id) {

        return TryCatchHelper::tryCatchThrow(function ()use($id) {
            $posts = Post::paginate(20);
            if(!$posts){
                throw new ItemNotFoundException("no post found with given id");
            }
            return $posts;
        });
	}

	/**
	 * toogle post status is -public
	 *
	 * @param mixed $id
	 * @return mixed \App\Models\Post;
	 */
	public function togglePostStatus($id) {
	}
}
