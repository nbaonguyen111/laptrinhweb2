Bước 1: Tạo Database Trong migration
php artisan make:migration create_user_role_table
php artisan make:migration create_user_table
php artisan make:migration create_roles_table
php artisan make:migration create_orders_table
Bước 2: Tạo seeders
php artisan make:seeder UserSeeder
php artisan make:seeder RoleSeeder
php artisan make:seeder UserRoleSeeder
php artisan make:seeder OrdersSeeder
Bước 2.1 Tạo Data trong seeder
ví dụ: trong file OrderSeeder ( dùng vòng lặp để tạo 10 dữ liệu mẫu)
 public function run(): void
    {
        for ($i = 1; $i <= 10; $i++) {
            DB::table('orders')->insert([
                [
                    'user_id' => rand(1, 10),
                    'name' => "Order {$i}",
                    'created_at' => now(),
                    'updated_at' => now(),
                ]
            ]);
        }
    }
Bước 2.2 Chạy seeder
php artisan db:seed --class=UserSeeder
php artisan db:seed --class=RoleSeeder
php artisan db:seed --class=UserRoleSeeder
php artisan db:seed --class=OrdersSeeder
nếu làm biếng có thể dùng php artisan db:all để chạy tất cả