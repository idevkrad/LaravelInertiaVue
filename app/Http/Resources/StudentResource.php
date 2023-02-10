<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class StudentResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'username' => $this->username,
            'email' => $this->email,
            'avatar' => $this->avatar,
            'is_active' => $this->is_active,
            'profile_id' => $this->profile->id,
            'name' => $this->profile->lastname.', '.$this->profile->firstname.' '.$this->profile->middlename.'.',
            'firstname' => $this->profile->firstname,
            'lastname' => $this->profile->lastname,
            'middlename' => $this->profile->middlename,
            'gender' => $this->profile->gender,
            'mobile' => $this->profile->mobile,
            'course' => $this->student->course,
            'year' => $this->student->year,
            'status' => $this->student->status,
            'g' =>($this->profile->gender == 'M') ? 'info' : 'warning',
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at
        ];
    }
}
