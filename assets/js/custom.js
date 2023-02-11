
const addToCartBtn = document.querySelectorAll('.add-to-cart');

addToCartBtn.forEach(item => {
    item.onclick = () => {
        console.log('clicked')
    }
})