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
 * App\Models\Answer
 *
 * @property int $id
 * @property int $question_id
 * @property string $answer
 * @property int $is_correct
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\Question $question
 * @method static \Illuminate\Database\Eloquent\Builder|Answer newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Answer newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Answer query()
 * @method static \Illuminate\Database\Eloquent\Builder|Answer whereAnswer($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Answer whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Answer whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Answer whereIsCorrect($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Answer whereQuestionId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Answer whereUpdatedAt($value)
 */
	class Answer extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Question
 *
 * @property int $id
 * @property string $question
 * @property int $quiz_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Answer[] $answers
 * @property-read int|null $answers_count
 * @property-read \App\Models\Quiz $quiz
 * @method static \Illuminate\Database\Eloquent\Builder|Question newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Question newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Question query()
 * @method static \Illuminate\Database\Eloquent\Builder|Question whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Question whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Question whereQuestion($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Question whereQuizId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Question whereUpdatedAt($value)
 */
	class Question extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Quiz
 *
 * @property int $id
 * @property string $name
 * @property string $description
 * @property int $minutes
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Question[] $questions
 * @property-read int|null $questions_count
 * @method static \Illuminate\Database\Eloquent\Builder|Quiz newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Quiz newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Quiz query()
 * @method static \Illuminate\Database\Eloquent\Builder|Quiz whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Quiz whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Quiz whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Quiz whereMinutes($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Quiz whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Quiz whereUpdatedAt($value)
 */
	class Quiz extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Result
 *
 * @property int $id
 * @property int $user_id
 * @property int $question_id
 * @property int $quiz_id
 * @property int $answer_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\Answer $answer
 * @property-read \App\Models\Question $question
 * @method static \Illuminate\Database\Eloquent\Builder|Result newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Result newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Result query()
 * @method static \Illuminate\Database\Eloquent\Builder|Result whereAnswerId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Result whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Result whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Result whereQuestionId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Result whereQuizId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Result whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Result whereUserId($value)
 */
	class Result extends \Eloquent {}
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
 * @property string $visible_password
 * @property string|null $occupation
 * @property string|null $address
 * @property string|null $phone
 * @property string|null $bio
 * @property int $is_admin
 * @property string|null $remember_token
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Notifications\DatabaseNotificationCollection|\Illuminate\Notifications\DatabaseNotification[] $notifications
 * @property-read int|null $notifications_count
 * @method static \Illuminate\Database\Eloquent\Builder|User newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|User newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|User query()
 * @method static \Illuminate\Database\Eloquent\Builder|User whereAddress($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereBio($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereEmailVerifiedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereIsAdmin($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereOccupation($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User wherePassword($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User wherePhone($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereRememberToken($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereVisiblePassword($value)
 */
	class User extends \Eloquent {}
}

