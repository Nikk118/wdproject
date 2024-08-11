// document.addEventListener('DOMContentLoaded', function() {
//     const openModalBtns = document.getElementsByClassName('openModalBtn');
//     const modal = document.getElementById('sizeModal');
//     const closeModal = document.querySelector('.close');
//     const goBackBtn = document.getElementById('goBackBtn');
//     const sizeButtons = document.querySelectorAll('.size-btn');
//     const selectedSizeElement = document.getElementById('selectedSize');
//     const addToCartBtn = document.getElementById('addToCartBtn');

//     // Open the modal
//     Array.from(openModalBtns).forEach(btn => {
//         btn.addEventListener('click', function() {
//             modal.style.display = 'block';
//         });
//     });

//     // Close the modal
//     closeModal.addEventListener('click', function() {
//         modal.style.display = 'none';
//     });

//     // Close the modal if the user clicks outside of it
//     window.addEventListener('click', function(event) {
//         if (event.target === modal) {
//             modal.style.display = 'none';
//         }
//     });

//     // Size button click handler
//     sizeButtons.forEach(button => {
//         button.addEventListener('click', function() {
//             sizeButtons.forEach(btn => btn.classList.remove('active')); // Remove active class from all buttons
//             this.classList.add('active'); // Add active class to the clicked button

//             const selectedSize = this.getAttribute('data-size');
//             selectedSizeElement.textContent = `Selected Size: ${selectedSize}`;
//             addToCartBtn.disabled = false; // Enable the 'Add to Cart' button
//         });
//     });

//     // Add to cart button click handler
//     addToCartBtn.addEventListener('click', function() {
//         const selectedSize = document.querySelector('.size-btn.active')?.getAttribute('data-size');
//         if (selectedSize) {
//             // alert(`Added size ${selectedSize} to the cart.`);
//             modal.style.display = 'none'; // Close the modal after adding to cart
//         }
//     });

//     // Go back button click handler
//     goBackBtn.addEventListener('click', function() {
//         // Optional: add functionality to go back to a previous view or reset selection
//         modal.style.display = 'none'; // Simply close the modal for now
//     });
// });
document.getElementById('viewAllBtn').addEventListener('click', function() {
    var hiddenContent = document.getElementById('hiddenContent');
    if (hiddenContent.style.display === 'none') {
        hiddenContent.style.display = 'flex';
        this.textContent = 'Hide'; // Optionally change the button text
    } else {
        hiddenContent.style.display = 'none';
        this.textContent = 'View More'; // Optionally change the button text back
    }
});
function addToCart(productName, productPrice, productImage) {
    // var inc=document.getElementsByClassName('.inc');
    // Create an object to store product details
    const product = {
        name: productName,
        price: productPrice,
        image: productImage
    };

    // Retrieve existing cart from localStorage or create a new one
    let cart = JSON.parse(localStorage.getItem('cart')) || [];
    cart.push(product);

    // Save updated cart back to localStorage
    localStorage.setItem('cart', JSON.stringify(cart));
    alert("added to cart")
    // inc.textContent=inc.textContent+1;
}

