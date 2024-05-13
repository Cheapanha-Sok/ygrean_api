<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class ExamDate extends Model
{
   /** The table associated with the model.
     *
     * @var string
     */
    protected $table = 'exam_dates';

    protected $hidden = [
        'created_at',
        'updated_at',
    ];
    public function pdfs():HasMany{
        return $this->hasMany(Pdf::class);
    }
}
