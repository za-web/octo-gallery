<?php namespace Zaweb\Gallery\Models;

use Model;
use Zaweb\Gallery\Models\Categories;
use Zaweb\Gallery\Models\Attachment;

/**
 * Photos Model
 */
class Photos extends Model
{

    /**
     * @var string The database table used by the model.
     */
    public $table = 'zaweb_gallery_photos';

    /**
     * @var array Guarded fields
     */
    protected $guarded = ['*'];

    /**
     * @var array Fillable fields
     */
    protected $fillable = [];

    /**
     * @var array Relations
     */
    public $hasOne = [];
    public $hasMany = [];
    public $belongsTo = [
        'category' => ['Zaweb\Gallery\Models\Categories'],
        'attachment' => ['Zaweb\Gallery\Models\Attachment']
    ];
    
    public $belongsToMany = [];
    public $morphTo = [];
    public $morphOne = [];
    public $morphMany = [];
    public $attachMany = [];
    
    public $attachOne = [
        'photo' => ['System\Models\File']
    ];

    /**
     * Get categories options
     *
     * @return array
     */
    public function getCategoryIdOptions()
    {
        $model = Categories::lists('title', 'id');
        return $model;
        
    }

    /**
     * Get photos attribute
     *
     * @return html
     */
    public function getImageAttribute()
    {
        $image = Attachment::where('id', $this->attachment_id)->get()->toArray();
        return '<img width="50" src="'.$image[0]['path'].'" />';
    }


}