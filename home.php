<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <title>SECURE-G | Security Guard Management</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link href="https://unpkg.com/aos@2.3.4/dist/aos.css" rel="stylesheet" />
 <style>
  .parallax-hero {
    background-image: url('img/istockphoto-531756573-612x612 (1).jpg');
    background-attachment: fixed;
    background-position: center;
    background-size: cover;
    background-repeat: no-repeat;
  }
</style>

</head>
<body class="bg-gray-50 text-gray-800">

  <!-- Navbar -->
  <header class="bg-white shadow-md sticky top-0 z-50">
    <div class="container mx-auto flex justify-between items-center p-4">
      <h1 class="text-3xl font-bold text-blue-600">SECURE-G</h1>
      <nav class="space-x-6 text-blue-700 font-medium">
        <a href="home.php" class="hover:text-blue-500">Home</a>
        <a href="index.php" class="hover:text-blue-500">Hiring Form</a>
        <a href="search-request.php" class="hover:text-blue-500">Request Status</a>
        <a href="admin/login.php" class="hover:text-blue-500">Admin</a>
        <a href="client/login.php" class="hover:text-blue-500">Client</a>
      </nav>
    </div>
  </header>

  <!-- Parallax Hero Section -->
  <section class="parallax-hero h-[90vh] flex flex-col justify-center items-center text-white text-center px-4">
    <div data-aos="fade-up">
      <h2 class="text-5xl font-bold mb-4 drop-shadow-lg">Protecting What Matters Most</h2>
      <p class="text-lg max-w-2xl mx-auto mb-6 drop-shadow-md">
        India's trusted security guard solution for businesses and individuals. Reliable. Professional. Always alert.
      </p>
      <a href="index.php" class="bg-white text-blue-600 px-6 py-3 rounded-md font-semibold hover:bg-gray-200 transition">
        Hire a Guard
      </a>
    </div>
  </section>

  <!-- Features Section -->
  <section class="py-16 px-6 bg-white">
    <div class="max-w-6xl mx-auto">
      <h2 class="text-3xl font-bold text-center mb-10" data-aos="fade-down">Why Choose SECURE-G?</h2>
      <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
        <div class="p-6 bg-gray-100 rounded-lg shadow hover:shadow-md" data-aos="fade-up">
          <h3 class="font-bold text-lg text-blue-600 mb-2">Quality Assurance</h3>
          <p>Vetted and professionally trained security personnel that meet top industry standards.</p>
        </div>
        <div class="p-6 bg-gray-100 rounded-lg shadow hover:shadow-md" data-aos="fade-up" data-aos-delay="100">
          <h3 class="font-bold text-lg text-blue-600 mb-2">Streamlined Hiring</h3>
          <p>Our intuitive platform helps you find and hire guards quickly without hassle.</p>
        </div>
        <div class="p-6 bg-gray-100 rounded-lg shadow hover:shadow-md" data-aos="fade-up" data-aos-delay="200">
          <h3 class="font-bold text-lg text-blue-600 mb-2">Dedicated Support</h3>
          <p>Enjoy a single point of contact for all needs—faster communication and personalized service.</p>
        </div>
        <div class="p-6 bg-gray-100 rounded-lg shadow hover:shadow-md" data-aos="fade-up" data-aos-delay="300">
          <h3 class="font-bold text-lg text-blue-600 mb-2">Emergency Response</h3>
          <p>We act swiftly in emergencies and offer rapid deployment and crisis management support.</p>
        </div>
        <div class="p-6 bg-gray-100 rounded-lg shadow hover:shadow-md" data-aos="fade-up" data-aos-delay="400">
          <h3 class="font-bold text-lg text-blue-600 mb-2">Trust & Transparency</h3>
          <p>We keep communication clear and our service guarantees upfront. No surprises.</p>
        </div>
        <div class="p-6 bg-gray-100 rounded-lg shadow hover:shadow-md" data-aos="fade-up" data-aos-delay="500">
          <h3 class="font-bold text-lg text-blue-600 mb-2">Client Satisfaction</h3>
          <p>We build long-term relationships through consistent and reliable service delivery.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- About Section -->
  <section class="py-20 px-6 bg-gray-50">
    <div class="max-w-5xl mx-auto text-center" data-aos="fade-up">
      <h2 class="text-3xl font-bold mb-6">About Us</h2>
      <p class="text-lg mb-4 text-justify">At SECURE-G, we ensure safety and peace of mind by connecting you with trained and trusted security personnel. Whether you’re safeguarding your business or home, we bring efficiency, professionalism, and care to every detail.</p>
      <p class="text-lg mb-6 text-justify">Our platform provides streamlined hiring, emergency support, and a unique approach of giving each client a dedicated point of contact. This leads to faster communication, better problem resolution, and long-term client satisfaction.</p>
      <a href="about.php" class="text-blue-600 font-semibold hover:underline">Read more about our mission →</a>
    </div>
  </section>

  <!-- CTA Contact Section -->
  <section class="py-16 bg-blue-600 text-white text-center" data-aos="zoom-in">
    <h2 class="text-3xl font-bold mb-4">Need Assistance?</h2>
    <p class="mb-6">Contact us for inquiries, partnership opportunities, or custom security plans.</p>
    <a href="contact.php" class="bg-white text-blue-600 px-6 py-3 rounded-md font-semibold hover:bg-gray-100 transition">Contact Us</a>
  </section>

  <!-- Footer -->
  <footer class="bg-gray-900 text-gray-400 py-6 text-center">
    <p>&copy; 2024 SECURE-G | All rights reserved.</p>
  </footer>

  <!-- JS Scripts -->
  <script src="https://unpkg.com/aos@2.3.4/dist/aos.js"></script>
  <script>
    AOS.init({
      duration: 1000,
      once: true
    });
  </script>
</body>
</html>
