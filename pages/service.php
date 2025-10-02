<section id="service" class="text-center">
  <div class="w-full bg-white py-20 px-6">
    <div class="max-w-6xl mx-auto p-8">
      <!-- Title -->
      <h2 class="text-3xl md:text-4xl font-bold mb-10 text-center uppercase">Our Services</h2>

      <!-- Grid -->
      <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">

        <!-- Fabrication -->
        <div
          class="group relative flex items-center justify-center bg-red-800 text-white font-semibold text-lg py-12 rounded-lg shadow-md transition-all duration-300 cursor-pointer overflow-hidden">
          <span class="group-hover:hidden">FABRICATION</span>
          <div
            class="absolute inset-0 flex flex-col items-center justify-center text-center px-6 opacity-0 group-hover:opacity-100 transition-opacity duration-300">
            <p class="mb-4 text-sm md:text-base">
              Custom-built structures, displays, and setups tailored to bring your ideas to life.
            </p>
            <a href="#fabrication"
              class="bg-black text-white px-4 py-2 text-sm font-semibold rounded hover:bg-gray-900 transition scroll-link">
              See Our Works →
            </a>
          </div>
        </div>

        <!-- Event Management -->
        <div
          class="group relative flex items-center justify-center bg-gray-100 text-black font-semibold text-lg py-12 rounded-lg shadow-md transition-all duration-300 cursor-pointer overflow-hidden">
          <span class="group-hover:hidden">EVENT MANAGEMENT</span>
          <div
            class="absolute inset-0 flex flex-col items-center justify-center text-center px-6 opacity-0 group-hover:opacity-100 transition-opacity duration-300">
            <p class="mb-4 text-sm md:text-base">
              End-to-end planning and execution of seamless, memorable events.
            </p>
            <a href="#event-management"
              class="bg-black text-white px-4 py-2 text-sm font-semibold rounded hover:bg-gray-900 transition scroll-link">
              See Our Works →
            </a>
          </div>
        </div>

        <!-- Social Media Management -->
        <div
          class="group relative flex items-center justify-center bg-gray-100 text-black font-semibold text-lg py-12 rounded-lg shadow-md transition-all duration-300 cursor-pointer overflow-hidden">
          <span class="group-hover:hidden">SOCIAL MEDIA MANAGEMENT</span>
          <div
            class="absolute inset-0 flex flex-col items-center justify-center text-center px-6 opacity-0 group-hover:opacity-100 transition-opacity duration-300">
            <p class="mb-4 text-sm md:text-base">
              Engaging content creation and strategy to grow your online presence.
            </p>
            <a href="#socmedmanagement"
              class="bg-black text-white px-4 py-2 text-sm font-semibold rounded hover:bg-gray-900 transition scroll-link">
              See Our Works →
            </a>
          </div>
        </div>

        <!-- Printing -->
        <div
          class="group relative flex items-center justify-center bg-red-800 text-white font-semibold text-lg py-12 rounded-lg shadow-md transition-all duration-300 cursor-pointer overflow-hidden">
          <span class="group-hover:hidden">PRINTING</span>
          <div
            class="absolute inset-0 flex flex-col items-center justify-center text-center px-6 opacity-0 group-hover:opacity-100 transition-opacity duration-300">
            <p class="mb-4 text-sm md:text-base">
              Accurate and high-quality prints for your branding, marketing, and promotional needs.
            </p>
            <a href="#printing"
              class="bg-black text-white px-4 py-2 text-sm font-semibold rounded hover:bg-gray-900 transition scroll-link">
              See Our Works →
            </a>
          </div>
        </div>

      </div>
    </div>
  </div>

  <!-- FABRICATION SECTION -->
  <div id="fabrication" class="w-full bg-red-800 text-white pt-16 px-6">
    <div class="max-w-6xl mx-auto text-center">
      <h2 class="text-3xl font-bold mb-4 pt-10">FABRICATION</h2>
      <p class="mb-2">
        With over 20 years of collective experience in the industry, our skilled team specializes in designing
        and building custom booths and structures tailored to your brand’s vision.
      </p>
      <p class="mb-12">
        We use only high-quality materials to ensure every build is both visually striking and built to last.
      </p>

      <!-- Grid of Works -->
      <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6">
        <?php
        // Define fabrication works array (JPG format)
        $fabricationWorks = [
          ["src" => "./assets/fabrication/fabricationImg1.jpg", "label" => "REX Education Booth at Manila International Book Fair 2024"],
          ["src" => "./assets/fabrication/fabricationImg2.jpg", "label" => "REX Education Booth at Manila International Book Fair 2025"],
          ["src" => "./assets/fabrication/fabricationImg3.jpg", "label" => "Hotel and Spa Essentials Booth at Hotel & Foodservice Suppliers Show"],
          ["src" => "./assets/fabrication/fabricationImg4.jpg", "label" => "Watsons HWB Awards 2025 Booth"],
          ["src" => "./assets/fabrication/fabricationImg5.jpg", "label" => "Watsons HWB Awards 2024 Booth"],
          ["src" => "./assets/fabrication/fabricationImg6.jpg", "label" => "Dazzle Me Ambassador Launch at Robinsons Antipolo"],
          ["src" => "./assets/fabrication/fabricationImg7.jpg", "label" => "GAC Motor Outdoor Booth at Autofocus Test Drive Festival"],
          ["src" => "./assets/fabrication/fabricationImg8.jpg", "label" => "Watsons Skin Solutions Booth"],
          ["src" => "./assets/fabrication/fabricationImg9.jpg", "label" => "Nustar Resort & Casino Booth in Cebu"],
          ["src" => "./assets/fabrication/fabricationImg10.jpg", "label" => "Nutrafinity Booth at MAFBEX 2024"],
          ["src" => "./assets/fabrication/fabricationImg11.jpg", "label" => "Abi Marquez Booth at Philippine Food Expo 2025"],
          ["src" => "./assets/fabrication/fabricationImg12.jpg", "label" => "Watsons Get That K-Glow Campaign Booth"],
          ["src" => "./assets/fabrication/fabricationImg13.jpg", "label" => "AXA Nationwide Booths"],
          ["src" => "./assets/fabrication/fabricationImg14.jpg", "label" => "SM Cinema Murals"],
          ["src" => "./assets/fabrication/fabricationImg15.jpg", "label" => "BBC Virtual Golf Signage Booth"],
        ];

        // Loop through and display
        foreach ($fabricationWorks as $work) {
          echo '
            <div class="bg-white rounded-lg shadow-md overflow-hidden">
              <img src="' . $work["src"] . '" alt="' . $work["label"] . '" class="w-full h-48 object-cover">
              <div class="p-4 text-black text-sm font-medium">
                ' . $work["label"] . '
              </div>
            </div>
          ';
        }
        ?>
      </div>
    </div>
  </div>

  <!-- EVENT MANAGEMENT SECTION -->
  <div id="event-management" class="w-full bg-red-800 text-white py-16 px-6">
    <div class="max-w-6xl mx-auto text-center">
      <h2 class="text-3xl font-bold mb-4 pt-10">EVENT MANAGEMENT</h2>
      <p class="mb-2">
        From ideation to execution and everything in between, we take care of every detail to ensure your event is
        seamless and unforgettable.
      </p>
      <p class="mb-12">
        Whether it’s planning, organizing, or post-event wrap-up, we are your trusted partner in bringing extraordinary
        experiences to life.
      </p>

      <!-- Grid of Works -->
      <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6">
        <?php
        // Define event works array (JPG format)
        $eventWorks = [
          ["src" => "./assets/event/eventImg1.jpg", "label" => "Jetour Dealer Exclusive Preview 2023 at Okada Manila"],
          ["src" => "./assets/event/eventImg2.jpg", "label" => "AC Motors Centrale in BGC Inauguration"],
          ["src" => "./assets/event/eventImg3.jpg", "label" => "BYD Manila Bay Grand Opening at Aseana City"],
          ["src" => "./assets/event/eventImg4.jpg", "label" => "KIA at Manila International Auto Show 2019"],
          ["src" => "./assets/event/eventImg5.jpg", "label" => "Maxus T60 Launch at Arcovia"],
          ["src" => "./assets/event/eventImg6.jpg", "label" => "Success Academy"],
          ["src" => "./assets/event/eventImg7.jpg", "label" => "Jetour Dashing Media Launch"],
          ["src" => "./assets/event/eventImg8.jpg", "label" => "BJ Mercantile Inc. 50th Anniversary"],
          ["src" => "./assets/event/eventImg9.jpg", "label" => "Bayer 2024 Sales Excellence Awards"],
          ["src" => "./assets/event/eventImg10.jpg", "label" => "Isuzu and Volkswagen at Philippine International Motor Show 2018"],
          ["src" => "./assets/event/eventImg11.jpg", "label" => "Menarini Philippines 2025 National Sales Conference"],
          ["src" => "./assets/event/eventImg12.jpg", "label" => "KIA National Skills Cup 2022"],
        ];

        // Loop through and display
        foreach ($eventWorks as $work) {
          echo '
          <div class="bg-white rounded-lg shadow-md overflow-hidden">
            <img src="' . $work["src"] . '" alt="' . $work["label"] . '" class="w-full h-48 object-cover">
            <div class="p-4 text-black text-sm font-medium">
              ' . $work["label"] . '
            </div>
          </div>
        ';
        }
        ?>
      </div>
    </div>
  </div>

  <!-- PRINTING SECTION -->
  <div id="printing" class="w-full bg-red-800 text-white py-16 px-6">
    <div class="max-w-6xl mx-auto text-center">
      <h2 class="text-3xl font-bold mb-4 pt-10">PRINTING</h2>
      <p class="mb-2">
        We deliver high-quality, multi-color offset printing to meet all your marketing needs.
      </p>
      <p class="mb-12">
        Using quality machines and carefully sourced materials, we make sure every print is sharp, precise, and built to
        last.
      </p>

      <!-- Grid of Works -->
      <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6">
        <?php
        // Define printing works array (JPG format)
        $printingWorks = [
          ["src" => "./assets/printing/printingImg1.jpg", "label" => "Wall Mural Sticker at a Medical Clinic"],
          ["src" => "./assets/printing/printingImg2.jpg", "label" => "Drop Down Banners at Market! Market!"],
          ["src" => "./assets/printing/printingImg3.jpg", "label" => "Wall Tarp Printing & Installation for a Fitness Gym"],
          ["src" => "./assets/printing/printingImg4.jpg", "label" => "Sticker Printing & Installation for SM Beauty at SM North Edsa"],
          ["src" => "./assets/printing/printingImg5.jpg", "label" => "Skechers Drop Down Banners at Market! Market!"],
          ["src" => "./assets/printing/printingImg6.jpg", "label" => "Vehicle Sticker Printing and Installation"],
          ["src" => "./assets/printing/printingImg7.jpg", "label" => "Large Format Prints"],
          ["src" => "./assets/printing/printingImg8.jpg", "label" => "Pull Up Banners for GX International Pharma"],
        ];

        // Loop through and display
        foreach ($printingWorks as $work) {
          echo '
          <div class="bg-white rounded-lg shadow-md overflow-hidden">
            <img src="' . $work["src"] . '" alt="' . $work["label"] . '" class="w-full h-48 object-cover">
            <div class="p-4 text-black text-sm font-medium">
              ' . $work["label"] . '
            </div>
          </div>
        ';
        }
        ?>
      </div>
    </div>
  </div>

  <!-- SOCIAL MEDIA STRATEGY & MANAGEMENT -->
  <div id="socmedmanagement" class="w-full bg-white text-black pt-16 pb-5 px-6">
    <div class="max-w-6xl mx-auto text-center">
      <h2 class="text-3xl font-bold mb-4 pt-10">SOCIAL MEDIA STRATEGY & MANAGEMENT</h2>
      <p class="mb-4">
        We strategize, create, and implement content that grows your audience and builds lasting engagement
        across all your social media platforms.
      </p>
      <p>
        Guided by research, driven by strategy, and refined through analytics, we ensure your campaigns reach the
        right market and deliver measurable results.
      </p>
    </div>
  </div>
  
  <div class="bg-white w-full">
    <!-- Row 1 -->
    <div class="max-w-6xl mx-auto bg-white text-black grid grid-cols-1 md:grid-cols-2 gap-8 items-center p-6">
      <div>
        <img src="./assets/socmed/socmedImg1.jpg" alt="Social Media Scan & Strategy"
          class="rounded-lg shadow-md w-full h-64 object-cover">
      </div>
      <div>
        <h3 class="font-bold text-xl mb-3">SOCIAL MEDIA SCAN & STRATEGY</h3>
        <p class="leading-relaxed text-sm">
          We analyze your social media platforms to assess their current performance and uncover growth
          opportunities. Then, we craft a comprehensive strategy tailored to your business goals—optimizing each
          platform to strengthen your presence, engage your audience, and ultimately drive conversions.
        </p>
      </div>
    </div>

    <!-- Row 2 -->
    <div class="max-w-6xl mx-auto bg-white text-black grid grid-cols-1 md:grid-cols-2 gap-8 mt-12 items-center p-6">
      <div class="order-2 md:order-1">
        <h3 class="font-bold text-xl mb-3">LAYOUT & DESIGN</h3>
        <p class="leading-relaxed text-sm">
          Our creative team, composed of dynamic and innovative designers and copywriters, brings your brand to
          life through striking visuals and compelling content. Whether following your creative direction or taking
          the lead ourselves, we’ll develop key visuals and copy for each asset—always ensuring everything is
          polished and approved before launch.
        </p>
      </div>
      <div class="order-1 md:order-2">
        <img src="./assets/socmed/socmedImg2.jpg" alt="Layout & Design"
          class="rounded-lg shadow-md w-full h-64 object-cover">
      </div>
    </div>

    <!-- Row 3 -->
    <div class="max-w-6xl mx-auto bg-white text-black-md grid grid-cols-1 md:grid-cols-2 gap-8 mt-12 items-center p-6">
      <div>
        <img src="./assets/socmed/socmedImg3.jpg" alt="Social Media Management"
          class="rounded-lg shadow-md w-full h-64 object-cover">
      </div>
      <div>
        <h3 class="font-bold text-xl mb-3">SOCIAL MEDIA MANAGEMENT</h3>
        <p class="leading-relaxed text-sm">
          Once your strategy and assets are in place, we take care of everything—from crafting engaging captions
          and posting content to managing your community. After each campaign, we provide a comprehensive
          performance report with insights on effectiveness and recommendations for improvement, ensuring every
          campaign delivers stronger results.
        </p>
      </div>
    </div>
  </div>

  <!-- CLIENT SECTION -->
  <div class="w-full bg-white text-black py-16 px-6">
    <div class="max-w-6xl mx-auto text-center">
      <h2 class="text-3xl font-bold pb-6">OUR CLIENTS</h2>

      <!-- Responsive Grid of Works -->
      <div class="grid grid-cols-2 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-8 gap-6">
        <?php
        // Define event works array (41 images, JPG format)
        $eventWorks = [];
        for ($i = 1; $i <= 41; $i++) {
          $eventWorks[] = ["src" => "./assets/client/clientImg{$i}.png"];
        }

        // Loop through and display
        foreach ($eventWorks as $work) {
          echo '
        <div class="bg-white rounded-lg shadow-md overflow-hidden flex items-center justify-center">
          <img src="' . $work["src"] . '" class="w-full h-20 object-contain">
        </div>
        ';
        }
        ?>
      </div>
    </div>
  </div>

  <!-- MEET OUR TEAM -->
  <div class="w-full bg-red-800 text-white py-6 px-6">
    <div class="text-center">
      <h2 class="text-3xl font-bold pb-6">MEET THE TEAM</h2>
      <p class="pb-6 text-center">
        Their dedication transforms your ideas into reality. <br> At the heart of Ideas Beyond Limits is a team
        that brings our purpose, mission, and vision to life.
      </p>
      <!-- Carousel Wrapper -->
      <div class="overflow-hidden relative w-full">
        <div class="flex animate-marquee space-x-6">
          <?php
          // Define event works array
          $eventWorks = [
            ["src" => "./assets/team/team1.jpg"],
            ["src" => "./assets/team/team2.jpg"],
            ["src" => "./assets/team/team3.jpg"],
            ["src" => "./assets/team/team4.jpg"],
            ["src" => "./assets/team/team5.jpg"],
            ["src" => "./assets/team/team6.jpg"],
            ["src" => "./assets/team/team7.jpg"],
          ];

          // Repeat items multiple times for continuous effect
          for ($i = 0; $i < 4; $i++) {  // instead of 2, use 4+
            echo '<div class="flex flex-col space-y-6">';

            // Row 1 → 4 images
            echo '<div class="grid grid-cols-4 gap-4">';
            foreach (array_slice($eventWorks, 0, 4) as $work) {
              echo '
              <div>
                <img src="' . $work["src"] . '" class="w-full h-32 object-cover rounded-lg">
              </div>
            ';
            }
            echo '</div>';

            // Row 2 → 3 images
            echo '<div class="grid grid-cols-3 gap-4">';
            foreach (array_slice($eventWorks, 4, 3) as $work) {
              echo '
              <div>
                <img src="' . $work["src"] . '" class="w-full h-32 object-cover rounded-lg">
              </div>
            ';
            }
            echo '</div>';

            echo '</div>';
          }
          ?>
        </div>
      </div>
    </div>
  </div>

  <!-- OUR LEADERSHIP TEAM -->
  <div class="w-full bg-red-800 text-white py-6 pb-12 px-6">
    <div class="max-w-6xl mx-auto text-center">
      <!-- Heading -->
      <p class="text-lg">
        We bring a wealth of skills and experience from a wide range of backgrounds.
      </p>
      <p class="mb-12 text-lg">
        Meet the people who’ve grown with us, stood by us through the years, and continue to shape the future of Ideas
        Beyond Limits.
      </p>

      <!-- Team Grid -->
      <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-8">
        <!-- Card 1 -->
        <div class="bg-white text-black rounded-lg shadow-md p-6 flex flex-col items-center">
          <div class="w-24 h-24 bg-red-800 rounded-full mb-4"></div>
          <h3 class="font-bold">Joseph Dexter Ocampo</h3>
          <p class="text-sm tracking-wide">President</p>
        </div>

        <!-- Card 2 -->
        <div class="bg-white text-black rounded-lg shadow-md p-6 flex flex-col items-center">
          <div class="w-24 h-24 bg-red-800 rounded-full mb-4"></div>
          <h3 class="font-bold">Ma Dexter Ocampo</h3>
          <p class="text-sm tracking-wide">Founder</p>
        </div>

        <!-- Card 3 -->
        <div class="bg-white text-black rounded-lg shadow-md p-6 flex flex-col items-center">
          <div class="w-24 h-24 bg-red-800 rounded-full mb-4"></div>
          <h3 class="font-bold">Stephen Dwaine Ocampo</h3>
          <p class="text-sm tracking-wide text-center">Head of Business Partnerships</p>
        </div>

        <!-- Card 4 -->
        <div class="bg-white text-black rounded-lg shadow-md p-6 flex flex-col items-center">
          <div class="w-24 h-24 bg-red-800 rounded-full mb-4"></div>
          <h3 class="font-bold">Stephanie Dawne Ocampo</h3>
          <p class="text-sm tracking-wide">Head of Operations</p>
        </div>

        <!-- Card 5 -->
        <div class="bg-white text-black rounded-lg shadow-md p-6 flex flex-col items-center">
          <div class="w-24 h-24 bg-red-800 rounded-full mb-4"></div>
          <h3 class="font-bold">Jeffrey Manhilot</h3>
          <p class="text-sms tracking-wide">Staff</p>
        </div>
      </div>
    </div>
  </div>


  <!-- CSS for marquee animation -->
  <style>
    @keyframes marquee {
      0% {
        transform: translateX(0%);
      }

      100% {
        transform: translateX(-50%);
      }

      /* slides smoothly */
    }

    .animate-marquee {
      display: flex;
      width: max-content;
      animation: marquee 25s linear infinite;
      /* longer = smoother */
    }
  </style>

  <script>
  document.querySelectorAll('a.scroll-link').forEach(link => {
    link.addEventListener('click', function (e) {
      e.preventDefault(); // stop the URL from changing
      const targetId = this.getAttribute('href').substring(1);
      const target = document.getElementById(targetId);

      if (target) {
        target.scrollIntoView({
          behavior: 'smooth',
          block: 'start'
        });
      }
    });
  });
</script>

</section>