<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
		DB::table('user')->insert([
			['user_cd' => 'DATINS0001', 'user_nm' => 'Dân Trí', 'user_ab' => 'dantri', 'user_kn' => 'tri', 'password' => '123456', 'user_ard' => 'da nang', 'birth_day' => '01/03/1994', 'gender' => 'Male', 'avatar' => '', 'note' => '', 'created_by' => 'dat', 'update_by' => 'dat', 'deleted_flag' => 0],

			['user_cd' => 'DATINS0002', 'user_nm' => 'Thanh Duy', 'user_ab' => 'thanhduy', 'user_kn' => 'duy', 'password' => '123456', 'user_ard' => 'da nang', 'birth_day' => '01/06/1994', 'gender' => 'Male', 'avatar' => '', 'note' => '', 'created_by' => 'dat', 'update_by' => 'dat', 'deleted_flag' => 0],

			['user_cd' => 'DATINS0003', 'user_nm' => 'Thanh Kieu', 'user_ab' => 'thanhkieu', 'user_kn' => 'kieu', 'password' => '123456', 'user_ard' => 'da nang', 'birth_day' => '01/06/1993', 'gender' => 'Female', 'avatar' => '', 'note' => '', 'created_by' => 'dat', 'update_by' => 'dat', 'deleted_flag' => 0],

			['user_cd' => 'DATINS0004', 'user_nm' => 'Huu Dung', 'user_ab' => 'huudung', 'user_kn' => 'dung', 'password' => '123456', 'user_ard' => 'da nang', 'birth_day' => '10/03/1994', 'gender' => 'Male', 'avatar' => '', 'note' => '', 'created_by' => 'dat', 'update_by' => 'dat', 'deleted_flag' => 0],

			['user_cd' => 'DATINS0005', 'user_nm' => 'Vo Muu', 'user_ab' => 'vomuu', 'user_kn' => 'muu', 'password' => '123456', 'user_ard' => 'da nang', 'birth_day' => '14/03/1994', 'gender' => 'Female', 'avatar' => '', 'note' => '', 'created_by' => 'dat', 'update_by' => 'dat', 'deleted_flag' => 0],

			['user_cd' => 'DATINS0006', 'user_nm' => 'Van Han', 'user_ab' => 'vanhan', 'user_kn' => 'han', 'password' => '123456', 'user_ard' => 'da nang', 'birth_day' => '01/08/1994', 'gender' => 'Male', 'avatar' => '', 'note' => '', 'created_by' => 'dat', 'update_by' => 'dat', 'deleted_flag' => 0],
		]);
    }
}
