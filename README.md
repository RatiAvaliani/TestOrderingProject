Register
	http://127.0.0.1:8000/api/users/register?name=Rati&email=rati_avaliani@yahoo.com&password=123456789


Reset Password
	http://127.0.0.1:8000/api/password/email?email=ratijugeli@gmail.com

Login Password
	http://127.0.0.1:8000/api/login?email=ratijugeli@gmail.com&password=123456789

Category List
	http://127.0.0.1:8000/api/category/index

Category Create
	http://127.0.0.1:8000/api/category/create?name=text

Category Modify
	http://127.0.0.1:8000/api/category/modify?name=text&id=1&parent_id=2
Or
	http://127.0.0.1:8000/api/category/modify?name=text&id=1
Or
    http://127.0.0.1:8000/api/category/modify?parent_id=&id=1

Cart Items List
	http://127.0.0.1:8000/api/cart/index

Cart Create
	http://127.0.0.1:8000/api/cart/create?product_id=1

Cart Order (buy items ....)
	http://127.0.0.1:8000/api/cart/order

Cart itemRemove (buy items ....)
	http://127.0.0.1:8000/api/cart/remove?product_id=1

Cart item Add Quantity
	http://127.0.0.1:8000/api/cart/add_quantity?product_id=1

Cart item Subtract Quantity 
	http://127.0.0.1:8000/api/cart/subtract_quantity?product_id=1

Ordered Item List My User_id
	http://127.0.0.1:8000/api/order/index?user_id=1

Remove Ordered (By order id)
	http://127.0.0.1:8000/api//order/remove?id=1

Product List 
	http://127.0.0.1:8000/api/product/index

Create Product
	http://127.0.0.1:8000/api/product/create?name=test

Update Product
	http://127.0.0.1:8000/api/product/modify?name=testq213123123&id=1

Rmove Product 
	http://127.0.0.1:8000/api/product/remove?id=1

Add Category To Product
	http://127.0.0.1:8000/api/product/add_category?product_id=1&category_id=3

Remove Category From Product
	http://127.0.0.1:8000/api/product/remove_category?product_id=1&category_id=3



