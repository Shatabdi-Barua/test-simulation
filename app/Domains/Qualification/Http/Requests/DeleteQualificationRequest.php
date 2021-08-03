<?php

namespace App\Domains\Qualification\Http\Requests;

use Illuminate\Auth\Access\AuthorizationException;
use Illuminate\Foundation\Http\FormRequest;

/**
 * Class EditUserRequest.
 */
class DeleteQualificationRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        // return ! ($this->user->isMasterAdmin() && ! $this->user()->isMasterAdmin());
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            //
        ];
    }

    /**
     * Handle a failed authorization attempt.
     *
     * @return void
     *
     * @throws \Illuminate\Auth\Access\AuthorizationException
     */
    // protected function failedAuthorization()
    // {
    //     throw new AuthorizationException(__('Only the administrator can update this user.'));
    // }
}