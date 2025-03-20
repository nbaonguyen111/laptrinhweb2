-- 1.Lấy ra danh sách người dùng theo thứ tự tên theo Alphabet (A->Z)
select * from users order by user_name asc;
-- 2. Lấy ra 07 người dùng theo thứ tự tên theo Alphabet (A->Z)
select * from users order by user_name asc limit 7;
-- 3.Lấy ra danh sách người dùng theo thứ tự tên theo Alphabet (A->Z), trong đó tên
-- người dùng có chữ a
select * from users where user_name like '%a%' order by user_name asc;
-- 4.Lấy ra danh sách người dùng trong đó tên người dùng bắt đầu bằng chữ m
select * from users where user_name like 'm%' order by user_name asc;
-- 5.Lấy ra danh sách người dùng trong đó tên người dùng kết thúc bằng chữ i
select * from users where user_name like '%i' order by user_name asc;
-- 6.Lấy ra danh sách người dùng trong đó email người dùng là Gmail (ví dụ:
-- example@gmail.com)
select * from users where user_email like '%@gmail.com';
-- 7.Lấy ra danh sách người dùng trong đó email người dùng là Gmail (ví dụ:
-- example@gmail.com), tên người dùng bắt đầu bằng chữ m
select * from users where user_email like '%@gmail.com' and user_name like 'm%';
-- 8.Lấy ra danh sách người dùng trong đó email người dùng là Gmail (ví dụ:
-- example@gmail.com), tên người dùng có chữ i và tên người dùng có chiều dài lớn
-- hơn 5
select * from users where user_email like '%@gmail.com' and user_name like '%i%' and length(user_name) >5; 
-- 9. Lấy ra danh sách người dùng trong đó tên người dùng có chữ a, chiều dài từ 5 đến 9, email dùng dịch vụ Gmail, trong tên email có chữ I (trong tên, chứ không phải
-- domain exampleitest@yahoo.com)
select * from users where user_name like '%a%' and length(user_name) between 5 and 9 and user_email like '%@gmail.com' and user_email like '%i';
-- 10. Lấy ra danh sách người dùng trong đó tên người dùng có chữ a, chiều dài từ 5
-- đến 9 hoặc tên người dùng có chữ i, chiều dài nhỏ hơn 9 hoặc email dùng dịch vụ
-- Gmail, trong tên email có chữ i
select * from users where (user_name like '%a%' and length(user_name) between 5 and 9) or (user_name like '%i%' and length(user_name) < 9) or (user_email like '%@gmail.com' and user_email like '%i%');
