// WORLD BRAIN TECHNOLOGY
//
// This program was directly written by WORLD BRAIN TECHNOLOGY
// CEO - Godson Pius
// Program Director - Godson Pius
// Department - PHP Department
///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

let orders = {};
(function () {
    orders.ordersAvailable = "";

    orders.getAllOrders = function () {
        fetch(`polling/php/all_orders`).then(all_orders => all_orders).then(all_orders => all_orders.text()).then(all_orders => {
            if (orders.ordersAvailable !== all_orders) {
                document.getElementById("all_orders").innerHTML = all_orders;
                orders.ordersAvailable = all_orders;
                // window.scrollTo(0, document.body.scrollHeight);
            }
            setTimeout(orders.getAllOrders, 2000);
        }).catch((e) => {
            setTimeout(orders.getAllOrders, 2000);
        });
    }

    window.addEventListener("load", orders.getAllOrders, !false);

})();

const delete_order = element => {
    let confirm_delete = confirm("Do you really delete this order?");

    if (confirm_delete) {
        toastr.info("Please Wait!", "Processing");
        let orderId = element.dataset.id;
        fetch(`polling/php/delete?order_id=${orderId}`).then(d => d).then(d => d.text()).then(d => {
            if (d === "true") {
                toastr.success("Order have been deleted successfully!", "Order Deleted");
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