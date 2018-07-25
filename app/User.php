<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\Mail;
use Laratrust\Traits\LaratrustUserTrait;

class User extends Authenticatable {
	use LaratrustUserTrait;

	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = [
		'name', 'email', 'password',
	];

	/**
	 * The attributes that should be hidden for arrays.
	 *
	 * @var array
	 */
	protected $hidden = [
		'password', 'remember_token',
	];

	protected $casts = [
		'is_verified' => 'boolean',
	];

	public function generateVerificationToken() {
		$token = $this->verification_token;
		if (!$token) {
			$token = str_random(40);
			$this->verification_token = $token;
			$this->save();
		}
		return $token;
	}

	public function sendVerification() {
		$token = $this->generateVerificationToken();
		$user = $this;
		Mail::send('auth.emails.verification', compact('user', 'token'), function ($m) use ($user) {
			$m->to($user->email, $user->name)->subject('Verifikasi Akun Cosetos');
		});
	}

	public function verify() {
		$this->is_verified = 1;
		$this->verification_token = null;
		$this->save();
	}
}
