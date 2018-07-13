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
        $memberRole->name = "member";
        $memberRole->display_name = "Member";
        $memberRole->save();

        // Membuat sample admin
        $admin = new User();
        $admin->name = 'Admin';
        $admin->email = 'admin@gmail.com';
        $admin->password = bcrypt('rahasia');
        $admin->status = "aktif";
        $admin->gender = "admin";
        $admin->address = "Jalan Ngaliyan Raya No.43 Semarang";
        $admin->save();
        $admin->attachRole($adminRole);

        // Membuat sample member
        $member = new User();
        $member->name = "Member";
        $member->email = 'member@gmail.com';
        $member->password = bcrypt('rahasia');
        $admin->gender = "member";
        $admin->address = "Jalan Kedungpane Raya 2 No.43 Semarang";
        $member->status = "aktif";
        $member->save();
        $member->attachRole($memberRole);
    }
}
