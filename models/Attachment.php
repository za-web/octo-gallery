<?php namespace Zaweb\Gallery\Models;

use Model;

/**
 * Attachment Model
 */
class Attachment extends Model
{

    /**
     * @var string The database table used by the model.
     */
    public $table = 'zaweb_gallery_attachments';

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
    public $belongsTo = [];
    public $belongsToMany = [];
    public $morphTo = [];
    public $morphOne = [];
    public $morphMany = [];
    public $attachOne = [
        'photo' => ['System\Models\File']
    ];
    public $attachMany = [];

}