function openTab(tabId) {
    const tabContents = document.querySelectorAll('.tab-content');

    tabContents.forEach(tabContent => {
      tabContent.classList.remove('active');
    });

    const selectedTab = document.getElementById(tabId);
    selectedTab.classList.add('active');
}

function tabList(tabId) {
  const tabList = document.querySelectorAll('.openTab');

  tabList.forEach(tabContent => {
    tabContent.classList.remove('active');
  });

  const selectedTab = document.getElementById(tabId);
  selectedTab.classList.add('active');
}

// -------------------------------------------------------------------


function numberWithCommas(number) {
  return number.toString().replace(/\B(?=(\d{3})+(?!\d))/g, '.');
}

// document.addEventListener('DOMContentLoaded', function() {
//   const decreaseButton = document.getElementById('decrease');
//   const increaseButton = document.getElementById('increase');
//   const quantityInput = document.getElementById('quantity');
//   const totalPriceElement = document.getElementById('total-price');
//   const pricePerItem  = parseInt(document.getElementById('price').value);


  
//   decreaseButton.addEventListener('click', function() {
//       updateQuantityAndPrice(-1);
//   });
  
//   increaseButton.addEventListener('click', function() {
//       updateQuantityAndPrice(1);
//   });
  
//   quantityInput.addEventListener('input', function() {
//       updatePrice(parseInt(quantityInput.value));
//   });
  
//   function updateQuantityAndPrice(change) {
//       let currentQuantity = parseInt(quantityInput.value);
      
//       if (currentQuantity > 1 || change > 0) {
//           currentQuantity += change;
//           quantityInput.value = currentQuantity;
//           updatePrice(currentQuantity);
//       }
//   }
  
//   function updatePrice(quantity) {
//       const totalPrice = quantity * parseInt(pricePerItem);
//       totalPriceElement.setAttribute('value',numberWithCommas(totalPrice));
//   }
// });




