const quantityInput = document.querySelector('.rapper-quantity input');
const quantityUpButton = document.querySelector('.quantity-up');
const quantityDownButton = document.querySelector('.quantity-down');

let currentQuantity = parseInt(quantityInput.value);

quantityUpButton.addEventListener('click', () => {
  currentQuantity++;
  quantityInput.value = currentQuantity;
});

quantityDownButton.addEventListener('click', () => {
  if (currentQuantity > 1) {
    currentQuantity--;
    quantityInput.value = currentQuantity;
  }
});