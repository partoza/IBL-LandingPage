<section id="contact" class="text-center">
  <!-- START OF THE REQUESTED DIV CONTENT -->
  <div id="contact" class="w-full subtle-bg text-gray-900 pb-24 pt-12 px-4 sm:px-6 lg:px-8">
    <div class="max-w-7xl mx-auto space-y-12">

      <!-- Header -->
      <div class="text-center">
        <h2 class="text-4xl md:text-5xl font-extrabold text-red-800 tracking-wider uppercase animate-delay-1 scroll-animate">
          Contact Us
        </h2>
        <p class="mt-4 text-lg text-gray-600 max-w-2xl mx-auto animate-delay-1 scroll-animate">
          Let’s collaborate, discuss your project, or answer any of your inquiries.
          We’re here to provide solutions tailored for your needs.
        </p>
      </div>

      <!-- Content Grid -->
      <div class="grid grid-cols-1 lg:grid-cols-2 gap-12">

        <!-- Contact Form - Uses modern-card class -->
        <div class="bg-white p-8 sm:p-10 rounded-2xl border border-gray-100 text-left modern-card animate-delay-2 scroll-animate">

          <h3 class="text-2xl font-bold text-red-800 border-b border-gray-200 pb-4 mb-8 text-center">
            Send Us a Message
          </h3>

          <!-- The form action is conceptual as email sending requires a server -->
          <form id="contactForm" onsubmit="handleFormSubmission(event)">
            <!-- Name Field -->
            <div class="mb-5">
              <label for="name" class="block text-sm font-medium text-gray-700 mb-2">Your Name*</label>
              <input type="text" id="name" name="name" required
                class="input-field w-full px-4 py-3 border border-gray-300 rounded-lg shadow-sm focus:outline-none"
                placeholder="John Doe">
            </div>

            <!-- Email Field -->
            <div class="mb-5">
              <label for="email" class="block text-sm font-medium text-gray-700 mb-2">Email Address*</label>
              <input type="email" id="email" name="email" required
                class="input-field w-full px-4 py-3 border border-gray-300 rounded-lg shadow-sm focus:outline-none"
                placeholder="you@example.com">
            </div>

            <!-- Mobile Number Field (Optional) -->
            <div class="mb-5">
              <label for="phone" class="block text-sm font-medium text-gray-700 mb-2">Mobile Number (Optional)</label>
              <input type="tel" id="phone" name="phone"
                class="input-field w-full px-4 py-3 border border-gray-300 rounded-lg shadow-sm focus:outline-none"
                placeholder="+63 9xx xxxxxxx">
            </div>

            <!-- Subject/How can we help? Field -->
            <div class="mb-5">
              <label for="subject" class="block text-sm font-medium text-gray-700 mb-2">Subject</label>
              <input type="text" id="subject" name="subject"
                class="input-field w-full px-4 py-3 border border-gray-300 rounded-lg shadow-sm focus:outline-none"
                placeholder="Inquiry about new project">
            </div>

            <!-- Message Field -->
            <div class="mb-8">
              <label for="message" class="block text-sm font-medium text-gray-700 mb-2">How can we help?*</label>
              <textarea id="message" name="message" rows="4" required
                class="input-field w-full px-4 py-3 border border-gray-300 rounded-lg shadow-sm focus:outline-none resize-y"
                placeholder="Your detailed message..."></textarea>
            </div>

            <!-- Error/Success Message Box -->
            <div id="submissionMessage" class="p-4 rounded-lg hidden text-sm mb-4 transition duration-300" role="alert">
              <!-- Validation errors or success message will be inserted here -->
            </div>

            <!-- Submit Button - Uses rounded-xl -->
            <button type="submit"
              class="submit-btn w-full bg-red-800 text-white font-semibold py-3 shadow-lg hover:bg-red-700 focus:outline-none focus:ring-4 focus:ring-red-300 transition duration-150 ease-in-out">
              Inquire Now
            </button>
          </form>
        </div>


        <!-- Google Map - Uses modern-card class for consistency -->
        <div class="rounded-2xl overflow-hidden border border-gray-100 modern-card animate-delay-2 scroll-animate">
          <iframe class="w-full h-full min-h-[400px] lg:min-h-[600px]"
              src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3713.04488470428!2d120.9887664!3d14.42822!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3397d1af45de74d5%3A0x445b1e23389a2843!2sIdeas%20Beyond%20Limits%20Enterprises%20Inc!5e1!3m2!1sen!2sph!4v1760237822563!5m2!1sen!2sph" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></src=>           
          </iframe>
        </div>
      </div>
    </div>
  </div>

  <style>
    /* Modern Card Styling for Form and Map Containers */
    .modern-card {
      /* Base shadow for initial depth */
      box-shadow: 0 10px 15px -3px rgba(0, 0, 0, 0.1), 0 4px 6px -2px rgba(0, 0, 0, 0.05);
      /* Smoother, custom transition */
      transition: transform 0.4s cubic-bezier(0.25, 0.8, 0.25, 1), box-shadow 0.4s cubic-bezier(0.25, 0.8, 0.25, 1);
    }

    .modern-card:hover {
      /* Bolder shadow and lift on hover for dynamic feel */
      box-shadow: 0 25px 50px -12px rgba(0, 0, 0, 0.25), 0 10px 10px -5px rgba(0, 0, 0, 0.04);
      transform: translateY(-5px);
    }

    /* Input Fields - Added inner shadow for an engraved, modern look */
    .input-field {
      box-shadow: inset 0 2px 4px 0 rgba(0, 0, 0, 0.06);
    }

    .input-field:focus {
      /* Enhanced focus ring for better feedback */
      outline: 2px solid transparent;
      outline-offset: 2px;
      --tw-ring-color: #fca5a5;
      /* Red-400 */
      box-shadow: 0 20px 25px -5px rgba(0, 0, 0, 0.1), 0 10px 10px -5px rgba(0, 0, 0, 0.04);
      border-color: #b91c1c;
      /* Red-800 */
    }

    /* Submit Button */
    .submit-btn {
      transition: all 0.3s;
      border-radius: 0.75rem;
      /* rounded-xl */
    }

    .submit-btn:hover {
      /* Custom hover shadow for the red button */
      box-shadow: 0 15px 30px -5px rgba(185, 28, 28, 0.4), 0 8px 10px -5px rgba(185, 28, 28, 0.1);
      transform: translateY(-4px);
      /* Pronounced lift */
    }

    /* Subtle Background Pattern - Simplified to a neutral base */
    .subtle-bg {
      background-color: #f3f4f6;
      /* Lighter background for better contrast with the white cards */
    }

    /* Modal Styling - kept for safety, although modals are removed from HTML */
    .modal-overlay {
      z-index: 1000;
      background-color: rgba(0, 0, 0, 0.6);
      backdrop-filter: blur(4px);
    }
  </style>


  <script>
    const form = document.getElementById('contactForm');
    const submissionMessageBox = document.getElementById('submissionMessage');
    const submitButton = form.querySelector('button[type="submit"]');

    function resetMessageBox() {
      submissionMessageBox.classList.add('hidden');
      submissionMessageBox.classList.remove('bg-red-100', 'text-red-800', 'bg-green-100', 'text-green-800');
      submissionMessageBox.textContent = '';
    }

    function showMessage(type, message) {
      resetMessageBox();
      submissionMessageBox.textContent = message;
      submissionMessageBox.classList.remove('hidden');

      if (type === 'error') {
        submissionMessageBox.classList.add('bg-red-100', 'text-red-800');
      } else if (type === 'success') {
        submissionMessageBox.classList.add('bg-green-100', 'text-green-800');
      }
    }

    function handleFormSubmission(event) {
      event.preventDefault();
      resetMessageBox();

      // 1. Client-side Validation Check
      if (!form.checkValidity()) {
        showMessage('error', 'Please fill out all required fields marked with an asterisk (*).');
        return;
      }

      const name = document.getElementById('name').value;

      submitButton.disabled = true;
      submitButton.textContent = 'Sending...';

      // --- CONCEPTUAL SERVER CALL START ---
      // Simulate server response delay and success
      setTimeout(() => {
        submitButton.disabled = false;
        submitButton.textContent = 'Inquire Now';

        const successMessage = `Thank you, ${name}! Your inquiry has been received. We will respond within one business day.`;
        showMessage('success', successMessage);

        form.reset(); // Reset the form after successful submission

        // Optionally hide the success message after a few seconds
        setTimeout(() => {
          resetMessageBox();
        }, 8000);

      }, 1500); // 1.5 second delay
    }
  </script>
</section>