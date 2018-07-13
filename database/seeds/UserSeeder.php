<?php

use App\Role;
use App\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    public function run()
    {
        // Membuat role admin
        $adminRole = new Role();
        $adminRole->name = "admin";
        $adminRole->display_name = "Admin";
        $adminRole->save();

        // Membuat role member
        $memberRole = new Role();
        $memberRole->name = "auditor";
        $memberRole->display_name = "Auditor";
        $memberRole->save();

        // Membuat sample admin
        $admin = new User();
        $admin->name = 'Admin';
        $admin->email = 'admin@gmail.com';
        $admin->password = bcrypt('rahasia');
        $admin->status = "aktif";
        $admin->username = "admin";
        $admin->gender = "admin";
        $admin->address = "Jalan Ngaliyan Raya No.43 Semarang";
        $admin->save();
        $admin->attachRole($adminRole);

        // Membuat sample member
        $member = new User();
        $member->name = "Auditor";
        $member->email = 'auditor@gmail.com';
        $member->password = bcrypt('rahasia');
        $admin->gender = "auditor";
        $admin->username = "auditor";
        $admin->address = "Jalan Kedungpane Raya 2 No.43 Semarang";
        $member->status = "aktif";
        $member->save();
        $member->attachRole($memberRole);
    }
}
