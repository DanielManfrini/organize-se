<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Support\Str;

/**
 * @property int $id
 * @property string $name
 * @property string|null $acronym
 * @property string|null $description
 * @property string|null $website
 * @property string|null $email
 * @property string|null $phone
 * @property string|null $logo_path
 * @property string|null $country
 * @property string|null $city
 * @property string|null $state
 * @property bool $is_active
 * @property bool $is_verified
 */
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
     * Custom attributes.
     *
     * @var list<string>
     */
    protected $appends = [
        'display_name',
        'display_website',
        'display_email',
        'display_phone',
        'display_place',
        'logo_url',
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

    protected function displayName(): Attribute
    {
        return Attribute::make(
            get: fn() =>
            $this->acronym
            ? "{$this->acronym} - {$this->name}"
            : $this->name
        );
    }

    protected function displayWebsite(): Attribute
    {
        return Attribute::make(
            get: fn() => $this->website ?: 'Não possui Web Site'
        );
    }

    protected function displayEmail(): Attribute
    {
        return Attribute::make(
            get: fn() => $this->email ?: 'Não possui E-mail'
        );
    }

    protected function displayPhone(): Attribute
    {
        return Attribute::make(
            get: fn() => $this->phone ?: 'Não possui Telefone'
        );
    }

    protected function displayPlace(): Attribute
    {
        return Attribute::make(
            get: fn() =>
            collect([$this->city, $this->state])
                ->filter()
                ->implode(' - ') ?: $this->country ?: 'Local não informado'
        );
    }

    protected function logoUrl(): Attribute
    {
        return Attribute::make(
            get: fn() =>
            $this->logo_path
            ? asset("storage/{$this->logo_path}")
            : asset('images/default-logo.svg')
        );
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
