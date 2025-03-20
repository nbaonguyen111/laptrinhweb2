-- 1. Liệt kê các hóa đơn của khách hàng, thông tin hiển thị gồm: mã user, tên user, mã
-- hóa đơn
select u.user_id, u.user_name, o.order_id from users u, orders o where u.user_id = o.user_id
-- 2. Liệt kê số lượng các hóa đơn của khách hàng: mã user, tên user, số đơn hàng
select u.user_id, u.user_name, count(o.order_id) as sodonhang from users u, orders o where u.user_id = o.user_id
group by u.user_id, u.user_name
-- 3. Liệt kê thông tin hóa đơn: mã đơn hàng, số sản phẩm
select o.order_id, count(p.product_id) as sosanpham from orders o, products p where o.order_id = p.product_id
group by o.order_id
-- 4. Liệt kê thông tin mua hàng của người dùng: mã user, tên user, mã đơn hàng, tên sản phẩm. Lưu ý: gôm nhóm theo đơn hàng, tránh hiển thị xen kẻ các đơn hàng với nhau
select u.user_id, u.user_name, o.order_id, p.product_name from users u, orders o, products p where u.user_id = o.user_id and o.order_id = p.product_id
order by o.order_id;
-- 5. Liệt kê 7 người dùng có số lượng đơn hàng nhiều nhất, thông tin hiển thị gồm: mã user, tên user, số lượng đơn hàng
select u.user_id, u.user_name, count(o.order_id) as sodonhang from users u, orders o where u.user_id = o.user_id
group by u.user_id, u.user_name
order by sodonhang desc
limit 7;
-- 6. Liệt kê 7 người dùng mua sản phẩm có tên: Samsung hoặc Apple trong tên sản phẩm, thông tin hiển thị gồm: mã user, tên user, mã đơn hàng, tên sản phẩm
select distinct u.user_id, u.user_name, o.order_id, p.product_name from users u, orders o, products p
where u.user_id = o.user_id and o.order_id = p.product_id and (p.product_name like '%Samsung%' or p.product_name like '%Apple%')
limit 7;
-- 7. Liệt kê danh sách mua hàng của user bao gồm giá tiền của mỗi đơn hàng, thông tin hiển thị gồm: mã user, tên user, mã đơn hàng, tổng tiền
select u.user_id, u.user_name, o.order_id, sum(p.product_price) as tongtien  from users u, orders o, products p  where u.user_id = o.user_id and o.order_id = p.product_id
   group by u.user_id, u.user_name, o.order_id;
-- 8. Liệt kê danh sách mua hàng của user bao gồm giá tiền của mỗi đơn hàng, thông tin hiển thị gồm: mã user, tên user, mã đơn hàng, tổng tiền. Mỗi user chỉ chọn ra 1 đơn hàng có giá tiền lớn nhất
-- hàng có giá tiền lớn nhất. 

-- 9. Liệt kê danh sách mua hàng của user bao gồm giá tiền của mỗi đơn hàng, thông tin
-- -- hiển thị gồm: mã user, tên user, mã đơn hàng, tổng tiền, số sản phẩm. Mỗi user chỉ
-- -- chọn ra 1 đơn hàng có giá tiền nhỏ nhất. 

-- 10. Liệt kê danh sách mua hàng của user bao gồm giá tiền của mỗi đơn hàng, thông tin
-- -- hiển thị gồm: mã user, tên user, mã đơn hàng, tổng tiền, số sản phẩm. Mỗi user chỉ
-- -- chọn ra 1 đơn hàng có số sản phẩm là nhiều nhất.

