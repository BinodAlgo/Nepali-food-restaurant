// Filter Menu Items 

function filterMenu(category) {
  let menuItems = document.getElementsByClassName('menu-item');
  for (let i = 0; i < menuItems.length; i++) {
    if (category === 'all' || menuItems[i].classList.contains(category)) {
      menuItems[i].style.display = 'block';
    } else {
      menuItems[i].style.display = 'none';
    }
  }

  let btns = document.getElementsByClassName('category-btn');
  for (let i = 0; i < btns.length; i++) {
    if (btns[i].innerHTML.toLowerCase() === category) {
      btns[i].classList.add('active');

    } else {
      btns[i].classList.remove('active');
    }
  }
}

// Process orders
$(document).ready(function () {
  $('#order-form').on('submit', function (e) {
    e.preventDefault();

    $.ajax({
      url: 'take_orders.php',
      type: 'post',
      data: $(this).serialize(),
      success: function (response) {
        alert(response)
      },
      error: function (jqXHR, textStatus, errorThrown) {
        console.log(textStatus, errorThrown);
      }
    });
  });
});



// Check Availability of Delivery
$(document).ready(function () {
  $('#check-availability-form').on('submit', function (e) {
    e.preventDefault();

    $.ajax({
      url: 'check_delivery_availability.php',
      type: 'post',
      data: $(this).serialize(),
      success: function (response) {
        alert(response);
      },
      error: function (jqXHR, textStatus, errorThrown) {
        alert('An error occurred: ' + textStatus);
      }
    });
  });
});


$('#contact-form').on('submit', function (e) {
  e.preventDefault();

  $.ajax({
    url: 'submit_contact.php',
    type: 'post',
    data: $(this).serialize(),
    success: function (response) {
      alert(response);
    },
    error: function (jqXHR, textStatus, errorThrown) {
      alert('An error occurred: ' + textStatus);
    }
  });
});


// Reservation From 
function goToStep(step) {
  // Hide all steps
  $('#step-1, #step-2, #step-3').hide();

  // Show the desired step
  $('#step-' + step).show();
}

$(document).ready(function () {
  // Initially go to step 1
  goToStep(1);

  $('#reservation-form').on('submit', function (e) {
    e.preventDefault();

    $.ajax({
      url: 'make_reservation.php',  
      type: 'post',
      data: $(this).serialize(),
      success: function (response) {
        alert(response); 
      },
      error: function (jqXHR, textStatus, errorThrown) {
        alert('An error occurred: ' + textStatus);  
      }
    });
  });
});