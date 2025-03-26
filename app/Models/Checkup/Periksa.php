<?php

namespace App\Models\Checkup;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Periksa extends Model
{
    protected $fillable = [
        'id_pasien',
        'id_dokter',
        'tgl_periksa',
        'catatan',
        'biaya_periksa',
    ];

    /**
     * Get the user that owns the Periksa
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function pasien(): BelongsTo
    {
        return $this->belongsTo(User::class, 'id_pasien', 'id');
    }
    
    /**
     * Get the user that owns the Periksa
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function dokter(): BelongsTo
    {
        return $this->belongsTo(User::class, 'id_dokter', 'id');
    }

    /**
     * Get all of the comments for the Periksa
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function comments(): HasMany
    {
        return $this->hasMany(DetailPeriksa::class, 'id_periksa', 'id');
    }
}
