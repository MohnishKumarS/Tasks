(function () {
  // when scroll the page  navbar fixed at top
  window.addEventListener('scroll', function () {
    var navbar = document.getElementById('navbar');
    // console.log(navbar);
    if (window.scrollY > 400) {
      navbar.classList.add('fixed');
    } else {
      navbar.classList.remove('fixed');
    }
  });

  // <!-- faQ accordion  -->
  const accordian = document.querySelectorAll('.faQ__accordion-item');
  accordian.forEach(function (accord) {
    accord.addEventListener('click', function (item) {
      this.classList.toggle('active')
      const content = accord.querySelector('.faQ__accordion-content');

      if (content.style.maxHeight) {
        content.style.maxHeight = null;
      } else {
        content.style.maxHeight = content.scrollHeight + 'px';
      }

    })
  })

  // Calculate and update the width of the line on scroll
  document.addEventListener("DOMContentLoaded", function () {
    const scrollingLine = document.querySelector(".navbar .scrolling-line");
    // console.log(scrollingLine);

    document.addEventListener("scroll", function () {
      const scrollPercentage = (window.scrollY / (document.body.scrollHeight - window.innerHeight)) * 100;
      const lineWidth = (scrollPercentage / 100) * window.innerWidth;
      scrollingLine.style.width = `${lineWidth}px`;
    });

    // country flag and form submission
    const mobileNoInputs = document.querySelectorAll('.mobile-no');
    mobileNoInputs.forEach((mobileNoInput) => {
      window.intlTelInput(mobileNoInput, {
        // Add your configuration options here
      });
    });
  });


  // contact form
  const contactForm = document.getElementById('contact-info');
  if(contactForm){
    contactForm.addEventListener('submit', function (e) {
      e.preventDefault();
      let userCountry = this.querySelector('.iti__selected-flag').getAttribute('title');
      const formData = new FormData(contactForm);
      formData.append('userCountry', userCountry);
  
      fetch('http://localhost/project/code/css/homepage2.php', {
          method: 'POST',
          body: formData
        })
        .then(res => res.json())
        .then(data => {
          if (data.status == 'success') {
            Swal.fire({
              title: "Success..",
              text: data.message,
              icon: "success"
            });
            contactForm.reset();
          } else {
            Swal.fire({
              title: "Oops!",
              text: "Invalid email address or something went wrong",
              icon: "error"
            });
          }
        })
        .catch(err => console.log(err))
    })
  }

  // enquiry form - PRODUCT PLAN
  const enquiryForm = document.getElementById('enquiry-info');
  enquiryForm.addEventListener('submit', function (e) {
    e.preventDefault();
    let userCountry = this.querySelector('.iti__selected-flag').getAttribute('title');
    const formData = new FormData(enquiryForm);
    formData.append('userCountry', userCountry);

    fetch('http://localhost/project/code/css/homepage2.php', {
        method: 'POST',
        body: formData
      })
      .then(res => res.json())
      .then(data => {

        if (data.status == 'success') {
          enquiryForm.reset();
          document.querySelector('.btn-close').click();
          Swal.fire({
            title: "Thank You..",
            text: data.message,
            icon: "success"
          });

        } else {
          Swal.fire({
            title: "Oops!",
            text: "Invalid email address or something went wrong",
            icon: "error"
          });
        }
      })
      .catch(err => console.log(err))
  })
})()