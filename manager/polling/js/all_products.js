                                            // WORLD BRAIN TECHNOLOGY
//
// This program was directly written by WORLD BRAIN TECHNOLOGY
// CEO - Godson Pius
// Program Director - Godson Pius
// Department - PHP Department
///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

let products = {};
(function () {
    products.productsAvailable = "";

    products.getAllproducts = function () {
        fetch(`polling/php/all_products`).then(all_products => all_products).then(all_products => all_products.text()).then(all_products => {
           if (products.productsAvailable !== all_products) {
               document.getElementById("all_products").innerHTML = all_products;
               products.productsAvailable = all_products;
               // window.scrollTo(0, document.body.scrollHeight);
           }
           setTimeout(products.getAllproducts, 2000);
        }).catch((e) => {
            setTimeout(products.getAllproducts, 2000);
        });
    }

    window.addEventListener("load", products.getAllproducts, !false);

})();

const delete_product = element => {
    let confirm_delete = confirm("Do you really delete this product?");

    if (confirm_delete) {
        toastr.info("Please Wait!", "Processing");
        let productId = element.dataset.id;
        fetch(`polling/php/delete?product_id=${productId}`).then(d => d).then(d => d.text()).then(d => {
            if (d === "true") {
                toastr.success("Product have been deleted successfully!", "Product Deleted");
            } else if (d === "false") {
                toastr.error("Failed to delete!", "Failed");
            } else {
                toastr.error("Server Error!", "Error");
            }
        }).catch((e) => {
            toastr.error("Please Check your connection and try again!", "Network Error");
        });
    }
};