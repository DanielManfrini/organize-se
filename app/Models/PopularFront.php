<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Support\Str;

class PopularFront extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var list<string>
     */

    protected $fillable = [
        'name',
        'slug',
        'acronym',
        'description',
        'area_of_action',
        'scope',
        'country',
        'state',
        'city',
        'email',
        'phone',
        'website',
        'instagram',
        'facebook',
        'is_active',
        'is_verified',
        'founded_at',
        'members_count',
        'created_by',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var list<string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @var list<string>
     */
    protected $casts = [
        'is_active' => 'boolean',
        'is_verified' => 'boolean',
        'founded_at' => 'date',
        'members_count' => 'integer',
    ];

    /**
     * Create slug
     */
    protected static function booted(): void
    {
        static::creating(function ($front) {
            if (empty($front->slug)) {
                $front->slug = Str::slug($front->name);
            }
        });
    }

    /**
     * Scope: Only active
     */
    public function scopeActive($query)
    {
        return $query->where('is_active', true);
    }

    /**
     * Scope: Only verified
     */
    public function scopeVerified($query)
    {
        return $query->where('is_verified', true);
    }
}
