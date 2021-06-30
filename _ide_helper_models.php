<?php

// @formatter:off
/**
 * A helper file for your Eloquent Models
 * Copy the phpDocs from this file to the correct Model,
 * And remove them from this file, to prevent double declarations.
 *
 * @author Barry vd. Heuvel <barryvdh@gmail.com>
 */


namespace App\Models{
/**
 * App\Models\BotSetting
 *
 * @property int $id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property string $bot
 * @property string $name
 * @property string|null $description
 * @property mixed|null $settings
 * @property int $user_id
 * @method static \Illuminate\Database\Eloquent\Builder|BotSetting newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|BotSetting newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|BotSetting query()
 * @method static \Illuminate\Database\Eloquent\Builder|BotSetting whereBot($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BotSetting whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BotSetting whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BotSetting whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BotSetting whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BotSetting whereSettings($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BotSetting whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BotSetting whereUserId($value)
 * @mixin \Eloquent
 */
	class BotSetting extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Currency
 *
 * @property int $id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property string $name
 * @property string|null $slug
 * @property string|null $logo
 * @property string|null $description
 * @property bool $status
 * @property-read mixed $logo_url
 * @property-read mixed $status_text
 * @method static \Illuminate\Database\Eloquent\Builder|Currency findSimilarSlugs(string $attribute, array $config, string $slug)
 * @method static \Illuminate\Database\Eloquent\Builder|Currency newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Currency newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Currency query()
 * @method static \Illuminate\Database\Eloquent\Builder|Currency whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Currency whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Currency whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Currency whereLogo($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Currency whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Currency whereSlug($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Currency whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Currency whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Currency withUniqueSlugConstraints(\Illuminate\Database\Eloquent\Model $model, string $attribute, array $config, string $slug)
 * @mixin \Eloquent
 */
	class Currency extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Exchange
 *
 * @property int $id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property string $name
 * @property string|null $logo
 * @property bool $status
 * @property string|null $description
 * @property string|null $slug
 * @property-read mixed $credentials
 * @property-read mixed $logo_url
 * @property-read mixed $status_text
 * @method static \Illuminate\Database\Eloquent\Builder|Exchange newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Exchange newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Exchange query()
 * @method static \Illuminate\Database\Eloquent\Builder|Exchange whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Exchange whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Exchange whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Exchange whereLogo($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Exchange whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Exchange whereSlug($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Exchange whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Exchange whereUpdatedAt($value)
 * @mixin \Eloquent
 * @property-read bool $connected
 */
	class Exchange extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Faq
 *
 * @property int $id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property string $question
 * @property string $answer
 * @property int $faq_category_id
 * @property-read \App\Models\FaqCategory $category
 * @method static \Illuminate\Database\Eloquent\Builder|Faq newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Faq newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Faq query()
 * @method static \Illuminate\Database\Eloquent\Builder|Faq whereAnswer($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Faq whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Faq whereFaqCategoryId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Faq whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Faq whereQuestion($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Faq whereUpdatedAt($value)
 * @mixin \Eloquent
 * @property-read array $translations
 */
	class Faq extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\FaqCategory
 *
 * @property int $id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property string $title
 * @method static \Illuminate\Database\Eloquent\Builder|FaqCategory newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|FaqCategory newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|FaqCategory query()
 * @method static \Illuminate\Database\Eloquent\Builder|FaqCategory whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FaqCategory whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FaqCategory whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FaqCategory whereUpdatedAt($value)
 * @mixin \Eloquent
 */
	class FaqCategory extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Message
 *
 * @property int $id
 * @property int $user_id
 * @property string $message
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\User $user
 * @method static \Illuminate\Database\Eloquent\Builder|Message newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Message newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Message query()
 * @method static \Illuminate\Database\Eloquent\Builder|Message whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Message whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Message whereMessage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Message whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Message whereUserId($value)
 * @mixin \Eloquent
 */
	class Message extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\News
 *
 * @property int $id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property string $title
 * @property string|null $content
 * @property int|null $category_id
 * @method static \Illuminate\Database\Eloquent\Builder|News newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|News newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|News query()
 * @method static \Illuminate\Database\Eloquent\Builder|News whereCategoryId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|News whereContent($value)
 * @method static \Illuminate\Database\Eloquent\Builder|News whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|News whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|News whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|News whereUpdatedAt($value)
 * @mixin \Eloquent
 * @property string|null $thumbnail
 * @property-read \App\Models\NewsCategory|null $category
 * @property-read mixed $thumbnail_url
 * @method static \Illuminate\Database\Eloquent\Builder|News whereThumbnail($value)
 */
	class News extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\NewsCategory
 *
 * @property int $id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property string $title
 * @property string $slug
 * @property string $description
 * @method static \Illuminate\Database\Eloquent\Builder|NewsCategory newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|NewsCategory newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|NewsCategory query()
 * @method static \Illuminate\Database\Eloquent\Builder|NewsCategory whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|NewsCategory whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|NewsCategory whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|NewsCategory whereSlug($value)
 * @method static \Illuminate\Database\Eloquent\Builder|NewsCategory whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|NewsCategory whereUpdatedAt($value)
 * @mixin \Eloquent
 * @method static \Illuminate\Database\Eloquent\Builder|NewsCategory findSimilarSlugs(string $attribute, array $config, string $slug)
 * @method static \Illuminate\Database\Eloquent\Builder|NewsCategory withUniqueSlugConstraints(\Illuminate\Database\Eloquent\Model $model, string $attribute, array $config, string $slug)
 */
	class NewsCategory extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Ticket
 *
 * @property int $id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property string $subject
 * @property string $message
 * @property int|null $user_id
 * @property int|null $category_id
 * @property string|null $email
 * @method static \Illuminate\Database\Eloquent\Builder|Ticket newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Ticket newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Ticket query()
 * @method static \Illuminate\Database\Eloquent\Builder|Ticket whereCategoryId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Ticket whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Ticket whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Ticket whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Ticket whereMessage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Ticket whereSubject($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Ticket whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Ticket whereUserId($value)
 * @mixin \Eloquent
 */
	class Ticket extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\User
 *
 * @property int $id
 * @property string $name
 * @property string $email
 * @property \Illuminate\Support\Carbon|null $email_verified_at
 * @property string $password
 * @property string|null $remember_token
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property string|null $avatar
 * @property string|null $country
 * @property string|null $city
 * @property string|null $address
 * @property string|null $ip
 * @property string|null $phone
 * @property string|null $last_login_date
 * @property string|null $last_location
 * @property string|null $terminal_theme
 * @property string|null $terminal_currency
 * @property string|null $google2fa_secret
 * @property bool $google2fa_status
 * @property-read mixed $avatar_url
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Message[] $messages
 * @property-read int|null $messages_count
 * @property-read \Illuminate\Notifications\DatabaseNotificationCollection|\Illuminate\Notifications\DatabaseNotification[] $notifications
 * @property-read int|null $notifications_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\Spatie\Permission\Models\Permission[] $permissions
 * @property-read int|null $permissions_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\Spatie\Permission\Models\Role[] $roles
 * @property-read int|null $roles_count
 * @method static \Database\Factories\UserFactory factory(...$parameters)
 * @method static \Illuminate\Database\Eloquent\Builder|User newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|User newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|User permission($permissions)
 * @method static \Illuminate\Database\Eloquent\Builder|User query()
 * @method static \Illuminate\Database\Eloquent\Builder|User role($roles, $guard = null)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereAddress($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereAvatar($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereCity($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereCountry($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereEmailVerifiedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereGoogle2faSecret($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereGoogle2faStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereIp($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereLastLocation($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereLastLoginDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User wherePassword($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User wherePhone($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereRememberToken($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereTerminalCurrency($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereTerminalTheme($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereUpdatedAt($value)
 * @mixin \Eloquent
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\UserExchange[] $exchanges
 * @property-read int|null $exchanges_count
 * @property-read mixed $chat_color
 */
	class User extends \Eloquent implements \Illuminate\Contracts\Auth\MustVerifyEmail {}
}

namespace App\Models{
/**
 * App\Models\UserActivity
 *
 * @property int $id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property string $name
 * @property string|null $description
 * @property string|null $ip
 * @property mixed|null $location
 * @method static \Illuminate\Database\Eloquent\Builder|UserActivity newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|UserActivity newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|UserActivity query()
 * @method static \Illuminate\Database\Eloquent\Builder|UserActivity whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserActivity whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserActivity whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserActivity whereIp($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserActivity whereLocation($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserActivity whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserActivity whereUpdatedAt($value)
 * @mixin \Eloquent
 * @property int $user_id
 * @method static \Illuminate\Database\Eloquent\Builder|UserActivity whereUserId($value)
 * @property string|null $data
 * @method static \Illuminate\Database\Eloquent\Builder|UserActivity whereData($value)
 */
	class UserActivity extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\UserExchange
 *
 * @property int $id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property int $user_id
 * @property int $exchange_id
 * @property array $credentials
 * @method static \Illuminate\Database\Eloquent\Builder|UserExchange newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|UserExchange newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|UserExchange query()
 * @method static \Illuminate\Database\Eloquent\Builder|UserExchange whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserExchange whereCredentials($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserExchange whereExchangeId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserExchange whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserExchange whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserExchange whereUserId($value)
 * @mixin \Eloquent
 * @property string $title
 * @property bool|null $active
 * @property-read \App\Models\Exchange $exchange
 * @method static \Illuminate\Database\Eloquent\Builder|UserExchange whereActive($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserExchange whereTitle($value)
 */
	class UserExchange extends \Eloquent {}
}

