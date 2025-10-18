<section id="contact" class="text-center">
  <!-- START OF THE REQUESTED DIV CONTENT -->
  <div id="contact" class="w-full subtle-bg text-gray-900 pb-24 pt-12 px-4 sm:px-6 lg:px-8">
    <div class="max-w-7xl mx-auto space-y-12">

      <!-- Header -->
      <div class="text-center">
        <h2
          class="text-4xl md:text-5xl font-extrabold text-red-800 tracking-wider uppercase animate-delay-1 scroll-animate">
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
        <div
          class="bg-white p-8 sm:p-10 rounded-2xl border border-gray-100 text-left modern-card animate-delay-2 scroll-animate">

          <h3 class="text-2xl font-bold text-red-800 border-b border-gray-200 pb-4 mb-8 text-center">
            Send Us a Message
          </h3>

          <!-- Simplified form as requested by user -->
          <form action="mail.php" method="post">
            <div class="input-box mb-4">
              <input type="text" name="name" placeholder="Your name" class="w-full px-4 py-3 border rounded-lg" required>
            </div>
            <div class="input-box mb-4">
              <input type="email" name="email" placeholder="Email Address" class="w-full px-4 py-3 border rounded-lg" required>
            </div>
            <div class="input-box mb-4">
              <textarea name="message" cols="25" rows="7" placeholder="Type your message" class="w-full px-4 py-3 border rounded-lg" required></textarea>
            </div>

            <!-- Hidden / collapsible message box used to show server-side status -->
            <div id="submissionMessage" class="p-4 rounded-lg hidden text-sm mb-4 transition duration-300" role="alert" aria-live="polite">
              <!-- Server-side success or error messages will be injected here -->
            </div>

            <div class="submit-btn">
              <input type="submit" name="send" value="Send Message" class="w-full bg-red-800 text-white font-semibold py-3 rounded-xl hover:bg-red-700 cursor-pointer">
            </div>
          </form>
        </div>


        <!-- Google Map - Uses modern-card class for consistency -->
        <div class="rounded-2xl overflow-hidden border border-gray-100 modern-card animate-delay-2 scroll-animate">
          <iframe class="w-full h-full min-h-[400px] lg:min-h-[600px]"
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3713.04488470428!2d120.9887664!3d14.42822!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3397d1af45de74d5%3A0x445b1e23389a2843!2sIdeas%20Beyond%20Limits%20Enterprises%20Inc!5e1!3m2!1sen!2sph!4v1760237822563!5m2!1sen!2sph"
            loading="lazy" referrerpolicy="no-referrer-when-downgrade"></src=>
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
    (function () {
      const form = document.getElementById('contactForm');
      const box = document.getElementById('submissionMessage');

      function showMessage(type, text) {
        box.textContent = text;
        box.classList.remove('hidden', 'bg-red-100', 'text-red-800', 'bg-green-100', 'text-green-800');
        if (type === 'success') box.classList.add('bg-green-100', 'text-green-800');
        else box.classList.add('bg-red-100', 'text-red-800');
      }

      if (!form) return;

      form.addEventListener('submit', async function (e) {
        e.preventDefault();

        const fd = new FormData(form);

        // basic client validation
        if (!fd.get('name') || !fd.get('email') || !fd.get('message')) {
          showMessage('error', 'Please fill in your name, email, and message.');
          return;
        }

        // disable submit
        const submit = form.querySelector('input[type="submit"]');
        if (submit) {
          submit.disabled = true;
          submit.value = 'Sending...';
        }

        try {
          const resp = await fetch(form.action, {
            method: 'POST',
            headers: { 'Accept': 'application/json' },
            body: fd,
          });

          const text = await resp.text();
          let data = null;
          try { data = JSON.parse(text); } catch (e) { /* not JSON */ }

          if (!resp.ok) {
            showMessage('error', (data && data.message) ? data.message : `Server error (${resp.status}): ${text}`);
          } else if (data && data.success) {
            showMessage('success', data.message || 'Message sent successfully.');
            form.reset();
          } else {
            showMessage('error', (data && data.message) ? data.message : 'Unexpected response from server.');
          }
        } catch (err) {
          console.error('Fetch threw:', err);
          showMessage('error', 'Network error. ' + (err.message || ''));
        } finally {
          if (submit) {
            submit.disabled = false;
            submit.value = 'Send Message';
          }
        }
      });
    })();
  </script>
</section>