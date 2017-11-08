<?php 
namespace App\Modules\Blog\Models;
use Illuminate\Database\Eloquent\Model;
use DB;
class BlogModel extends Model
{
    /**
     * Added just to demonstrate that models work
     * @return String
     */
    protected $table = 'blog';
        protected $primaryKey = 'blog_id';
        protected $fillable   = ['blog_id','blog_name', 'blog_url','blog_desc'];
        protected $blog_id = 0;
        protected $blog_name = '';
        protected $blog_url = '';
        protected $blog_desc = '';
        public $timestamps = false; // for false updated_at and created_at
}