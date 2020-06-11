# Guide for Dev
## Database 
- Table : Các bảng
~~~~
pham: Phẩm
        - id: định danh
        - name: tên không dấu có gạch ngang
        - content: nội dung có dấu
        - created_at: ngày giờ tạo
        - updated_at: ngày giờ cập nhật
baike: Bài Kệ 
        - id: định danh
        - number: thứ tự câu 
        - content: nội dung bài kệ
        - pham: thuộc về phẩm
        - img_url: đường dẫn hình ảnh
        - created_at: ngày giờ tạo
        - updated_at: ngày giờ cập nhật
~~~~
### Database migration
- Tạo file migrate trong database/migrations
~~~~
php artisan make:migration create_pham_table --create=pham
php artisan make:migration create_baike_table --create=baike
~~~~
- Tạo bảng trong database lần đầu (Xóa các bảng nếu tồn tại)
~~~~
php artisan migrate:fresh
~~~~
### Database seeding
- Tạo Seeder
~~~~
php artisan make:seeder PhamSeeder
php artisan make:seeder BaiKeSeeder
~~~~
- Thêm dữ liệu vào database từ file Seeder
~~~~
php artisan db:seed --class=PhamSeeder
php artisan db:seed --class=BaiKeSeeder
~~~~
### Create Models from database
- Install package Krlove

> composer require krlove/eloquent-model-generator --dev

Using : 
~~~~
php artisan krlove:generate:model Users --table-name=users
or
php artisan krlove:generate:model Users --output-path=Model --table-name=users
~~~~