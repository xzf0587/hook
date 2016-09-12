<?php

    namespace App;

    use Illuminate\Database\Eloquent\Model;

    class Profile extends Model
    {
        //
        const FIELD_NAME     = 'name';
        const FIELD_NICKNAME = 'nickname';
        const FIELD_BIRTHDAY = 'birthday';
        const FIELD_GENDER   = 'gender';
        const FIELD_STATUS   = 'status';
        const FIELD_ID_USER  = 'user_id';

        public function user()
        {
            return $this->belongsTo('user',Profile::FIELD_ID_USER);
        }

    }
