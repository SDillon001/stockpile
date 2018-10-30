// Javascript that takes JSON data from products.php and appends information to inventory.html
/*
 * notice how we access the JSON data: "data.Products[row].Product.id"
 * "data" - The name of the variable we defined in line 12 of this file
 * "Products" - This is the name we set in our JSON file (defined on line 24 of products.php)
 * "row" - The name of the variable for which row we are looping through (defined on line 14 of this file)
 * "Product" - This is the name we set in our JSON file (defined on line 18 of products.php)
 * "id" - This is the individual property we want to access. You'll see this in the JSON file, but it also matches the name of the column in your database.
 */

//gets the JSON from our products.php
	$.getJSON("products.php", function (data) {
	    //loop through each product in the JSON file and append a <div> with the product information
	    $.each(data.Products, function (row) {
	        $("#prod_table").append(
            '<div class="product"><a href="product.php?id=' + data.Products[row].Product.id + '"><img src="images/' + data.Products[row].Product.imageName + '" alt="' + data.Products[row].Product.imageName + '"><p>' + data.Products[row].Product.name + '</p><p>$' + data.Products[row].Product.price + '</p></a></div>');
	    });
	});