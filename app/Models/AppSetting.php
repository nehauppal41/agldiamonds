
<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AppSetting extends Model
{
    protected $fillable = [
        'setting_key',
        'setting_value',
    ];

    public static function getValue(string $key, ?string $default = null): ?string
    {
        $setting = static::where('setting_key', $key)->first();

        return $setting?->setting_value ?? $default;
    }

    public static function setValue(string $key, ?string $value): void
    {
        static::updateOrCreate(
            ['setting_key' => $key],
            ['setting_value' => $value]
        );
    }
}
