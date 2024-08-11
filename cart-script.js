window.onload = function() {
    const cartItems = document.getElementById('cart-items');

    // Retrieve cart from localStorage
    let cart = JSON.parse(localStorage.getItem('cart')) || [];

    // Function to render cart items
    function renderCart() {
        cartItems.innerHTML = ''; // Clear current cart display

        cart.forEach((product, index) => {
            // Create a new list item for each cart item
            const listItem = document.createElement('li');

            // Create and append the image
            const img = document.createElement('img');
            img.src = product.image;
            img.alt = product.name;

            // Create and append the text
            const text = document.createElement('span');
            text.textContent = `${product.name} - ₹${product.price.toFixed(2)}`;

            // Create and append the remove button
            const removeBtn = document.createElement('button');
            removeBtn.textContent = 'Remove';
            removeBtn.className = 'remove-btn';
            removeBtn.onclick = () => {
                removeFromCart(index);
            };

            // Append image, text, and button to the list item
            listItem.appendChild(img);
            listItem.appendChild(text);
            listItem.appendChild(removeBtn);

            // Append the list item to the cart
            cartItems.appendChild(listItem);
        });
    }

    // Function to remove an item from the cart
    function removeFromCart(index) {
        cart.splice(index, 1); // Remove item at index
        localStorage.setItem('cart', JSON.stringify(cart)); // Update localStorage
        renderCart(); // Re-render cart
    }

    renderCart(); // Initial render of cart
}
