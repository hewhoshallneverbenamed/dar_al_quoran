<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Revision
 *
 * @property $id
 * @property $session_id
 * @property $date
 * @property $jizie_from
 * @property $jizie_to
 * @property $surah_from
 * @property $surah_to
 * @property $page_from
 * @property $page_to
 * @property $grade
 * @property $notes
 * @property $ayya_from
 * @property $ayya_to
 *
 * @property QuranSession $quranSession
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Revision extends Model
{
    
    static $rules = [
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['session_id','date','jizie_from','jizie_to','surah_from','surah_to','page_from','page_to','grade','notes','ayya_from','ayya_to'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function quranSession()
    {
        return $this->hasOne('App\QuranSession', 'id', 'session_id');
    }
    

}
