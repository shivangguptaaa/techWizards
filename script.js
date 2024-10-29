document.querySelector('.cta-btn').addEventListener('click', function() {
    alert('Thank you for your interest! We will be in touch shortly.');
  });
  
  
  document.getElementById('newsletter-form').addEventListener('submit', function(event) {
    event.preventDefault();
    const email = event.target.querySelector('input').value;
    console.log(`Newsletter subscribed with email: ${email}`);
    alert("Thank you for subscribing to our newsletter!");
  });
  
  
  document.addEventListener("DOMContentLoaded", function() {
    const stats = document.querySelectorAll(".stat-card h2");
  
    stats.forEach(stat => {
        let endValue = parseInt(stat.textContent.replace('+', '').replace(',', ''));
        let startValue = 0;
        let duration = 2000; // 2 seconds for animation
        let increment = endValue / (duration / 20); // increment every 20ms
  
        let counter = setInterval(() => {
            startValue += increment;
            if (startValue >= endValue) {
                clearInterval(counter);
                stat.textContent = endValue.toLocaleString() + "+"; // format and add +
            } else {
                stat.textContent = Math.floor(startValue).toLocaleString() + "+";
            }
        }, 20);
    });
  });
  